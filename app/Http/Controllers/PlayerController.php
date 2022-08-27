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

    public function find(Player $player)
    {
        return response()->json($player);
    }

    public function update (Player $player, StoreUpdatePlayer $request)
    {
        $data = $request->validated();

        $player->update($data);

        return redirect()->route('cadjog')->with([
            'success' => 'Jogador editado com sucesso!'
        ]);
    }

    public function store(StoreUpdatePlayer $request)
    {
        $data = $request->validated();

        Player::create($data);

        return redirect()->route('cadjog')->with([
            'success' => 'Jogador cadastrado com sucesso!'
        ]);
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('cadjog')->with([
            'success' => 'Jogador deletado com sucesso!'
        ]);
    }
}
