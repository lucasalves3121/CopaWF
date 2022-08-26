<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePlayer;
use App\Http\Requests\StoreUpdateTeam;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(8);
        $players = Player::all();

        return view('admin/cadmodal', compact('teams', 'players'));
    }

    public function store(StoreUpdateTeam $request)
    {
        $data = $request->all();

        $team = Team::create($data);

        $team->players()->attach($data['players']);

        return redirect()->route('cadmodal')->with([
            'success' => 'Time cadastrado com sucesso!'
        ]);
    }

    public function find($team)
    {
        $team = Team::with('players')->find($team);
        return response()->json($team);
    }

    public function update(Team $team, StoreUpdateTeam $request)
    {
        $data = $request->validated();

        $team->update($data);
        $team->players()->sync($data['players']);

        return redirect()->route('cadmodal')->with([
            'success' => 'Time editado com sucesso!'
        ]);;
    }

    public function tapPlayer(Request $request)
    {
        $team = Team::find($request->team_id);
        $linkedPlayer = $team->players()
                        ->where('player_id', $request->id)
                        ->first();

        if (empty($linkedPlayer)){
            $team->players()->attach($request->user_id);

            return response()->json(['linked']);
        }

        $team->players()->detach($request->user_id);

        return response()->json(['unlinked']);
    }

    public function delete($team)
    {
        Team::find($team)->delete();

        return redirect()->route('cadmodal')->with([
            'success' => 'Time deletado com sucesso!'
        ]);
    }
}
