<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    public function home()
    {
        $data = Player::all();
        return view('home', compact('data'));
    }

    public function add()
    {
        return view('add');
    }

    public function addplayer(Request $request)
    {
        DB::table('players')->insert([
            'name' => $request->name,
            'team' => $request->team,
            'position' => $request->position,
        ]);

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $data = Player::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Player::find($id);
        $validasiData = $request->all();
        $data->update($validasiData);
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $data = Player::find($id);
        $data->delete();
        return redirect()->route('home');
    }
}
