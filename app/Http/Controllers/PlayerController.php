<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePlayer;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::paginate(8);

        return view('admin/cadjog', compact('players'));
    }

    public function store(StoreUpdatePlayer $request)
    {
        $data = $request->validated();

        Player::create($data);

        return redirect()->route('cadjog')->with([
            'success' => 'Jogador cadastrado com sucesso!'
        ]);
    }
}
