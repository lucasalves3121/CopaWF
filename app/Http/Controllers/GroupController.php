<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('teams')->where('modality_id', Auth::user()->modality_id)->get();

        return view('admin.grupos', compact('groups'));
    }

    public function draw(Request $request)
    {
        $groupsNumber = $request->groups_number ?? 2;
        $modalityId = Auth::user()->modality_id;
        $randomTeams = Team::where('modality_id', Auth::user()->modality_id)->get()->shuffle();
        $teamsCount = $randomTeams->count();

        $index = 0;
        $groupIndex = 0;
        $lasCreatedGroup = null;

        $groupExist = Group::where('modality_id', $modalityId);

        DB::transaction(function() use($groupExist, $teamsCount, $groupsNumber, $modalityId, $randomTeams, $index, $groupIndex, $lasCreatedGroup){
            if (!empty($groupExist->get()))
                $groupExist->delete();

            while ($index < $teamsCount){
                if ($index >= ($teamsCount/$groupsNumber) * $groupIndex && $groupIndex < $groupsNumber){
                    $lasCreatedGroup = Group::create([
                        'modality_id' => $modalityId,
                        'group_letter' => $groupIndex
                    ]);

                    $groupIndex++;
                }


                $lasCreatedGroup->teams()->attach($randomTeams->get($index)->id);
                $index++;
            }
        });

        return redirect()->route('modality.groups', encrypt($modalityId))->with(['success' => 'Grupos gerados com sucesso!']);
    }

    public function drawGames(Group $group)
    {
        $teams = $group->teams;

        $allGames = collect();

        $roundCount = 0;

        foreach ($teams as $teamOne){
            foreach ($teams as $teamTwo){
                if ($teamOne != $teamTwo && $allGames->where('first_team', $teamTwo->id)->where('second_team', $teamOne->id)->isEmpty()){
                    $allGames->push([
                        'first_team' => $teamOne->id,
                        'second_team' => $teamTwo->id,
                        'group_id' => $group->id,
                    ]);
                }
            }
        }

        /* condições para trocar a rodada
         * 1 -> um time não pode duas vezes na mesma rodada
         * 2 -> no máximo 1 time poderá ficar de fora da rodada
         * 3 -> um time só pode ficar fora uma vez
         * */


        dd($allGames->shuffle());
    }
}
