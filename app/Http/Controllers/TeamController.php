<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePlayer;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(8);

        return view('admin/cadmodal', compact('teams'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Team::create($data);

        return redirect()->route('cadmodal')->with([
            'success' => 'Time cadastrado com sucesso!'
        ]);
    }
}
