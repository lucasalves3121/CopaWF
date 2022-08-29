<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function draw()
    {
        $groupsNumber = 2;
        $randomTeams = Team::where('modality', Auth::user()->modality_id)->get()->shuffle();
        $teamsCount = $randomTeams->count();
        $modalityId = Auth::user()->modality_id;

        $teamsGroupped = [];
        $index = 0;
        $groupIndex = 1;

        while ($index < ($teamsCount/$groupsNumber) * $groupIndex){
            $teamsGroupped[$index]['team_id'] = $randomTeams->get($index)->id;
            $teamsGroupped[$index]['modality_id'] = $modalityId;
            $teamsGroupped[$index]['group_number'] = $groupIndex;

            $index++;

            if ($index >= ($teamsCount/$groupsNumber) * $groupIndex && $groupIndex < $groupsNumber)
                    $groupIndex++;
        }

        dd($teamsGroupped);
    }
}
