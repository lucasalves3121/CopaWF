<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function draw(Request $request)
    {
        $groupsNumber = $request->groups_number;
        $modalityId = Auth::user()->modality_id;
        $randomTeams = Team::where('modality', Auth::user()->modality_id)->get()->shuffle();
        $teamsCount = $randomTeams->count();

        $teamsGrouped = [];
        $index = 0;
        $groupIndex = 1;

        while ($index < ($teamsCount/$groupsNumber) * $groupIndex){
            $teamsGrouped[$index] = [
                'team_id' => $randomTeams->get($index)->id,
                'modality_id' => $modalityId,
                'group_number' => $groupIndex,
            ];

            $index++;
            if ($index >= ($teamsCount/$groupsNumber) * $groupIndex && $groupIndex < $groupsNumber)
                    $groupIndex++;
        }

        $groupExist = Group::where('modality_id', $modalityId);

        if (!empty($groupExist->get()))
            $groupExist->delete();

        Group::insert($teamsGrouped);

        return redirect()->route('modality.groups', encrypt($modalityId))->with(['success' => 'Grupos gerados com sucesso!']);
    }
}
