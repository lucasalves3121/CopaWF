<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function draw()
    {
        $groupsNumber = 2;
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

        dd($teamsGrouped);
    }
}
