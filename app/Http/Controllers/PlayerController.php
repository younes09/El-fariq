<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Player;
use App\Models\Team;
use Dotenv\Parser\Lexer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leader = Leader::find(leader_id());
        return view('player.index',compact('leader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Test if Players photos are uploaded
        if($request->hasFile('photo_p2')){
            $photo_p2_FilePath = $request->file('photo_p2')->store('','save');   
        }else{
            $photo_p2_FilePath = "";
        }

        if($request->hasFile('photo_p3')){
            $photo_p3_FilePath = $request->file('photo_p3')->store('','save');   
        }else{
            $photo_p3_FilePath = "";
        }

        if($request->hasFile('photo_p4')){
            $photo_p4_FilePath = $request->file('photo_p4')->store('','save');   
        }else{
            $photo_p4_FilePath = "";
        }

        if($request->hasFile('photo_p5')){
            $photo_p5_FilePath = $request->file('photo_p5')->store('','save');   
        }else{
            $photo_p5_FilePath = "";
        }

        if($request->hasFile('photo_p6')){
            $photo_p6_FilePath = $request->file('photo_p6')->store('','save');   
        }else{
            $photo_p6_FilePath = "";
        }

        if($request->hasFile('photo_p7')){
            $photo_p7_FilePath = $request->file('photo_p7')->store('','save');   
        }else{
            $photo_p7_FilePath = "";
        }

        if($request->hasFile('photo_p8')){
            $photo_p8_FilePath = $request->file('photo_p8')->store('','save');   
        }else{
            $photo_p8_FilePath = "";
        }

        Player::create([
            'player_2_name' => $request->player_2_name, 'player_2_familyname' => $request->player_2_familyname, 'photo_p2' => $photo_p2_FilePath,
            'player_3_name' => $request->player_3_name, 'player_3_familyname' => $request->player_3_familyname, 'photo_p3' => $photo_p3_FilePath,
            'player_4_name' => $request->player_4_name, 'player_4_familyname' => $request->player_4_familyname, 'photo_p4' => $photo_p4_FilePath,
            'player_5_name' => $request->player_5_name, 'player_5_familyname' => $request->player_5_familyname, 'photo_p5' => $photo_p5_FilePath,
            'player_6_name' => $request->player_6_name, 'player_6_familyname' => $request->player_6_familyname, 'photo_p6' => $photo_p6_FilePath,
            'player_7_name' => $request->player_7_name, 'player_7_familyname' => $request->player_7_familyname, 'photo_p7' => $photo_p7_FilePath,
            'player_8_name' => $request->player_8_name, 'player_8_familyname' => $request->player_8_familyname, 'photo_p8' => $photo_p8_FilePath,
            'team_id' => team_id(),
        ]);
        return redirect('/home')->with('status','تم إدرج معلومات اللاعبين الأساسيين بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $players = Player::find(player_id());
        $leader = Leader::find(leader_id());
        return view('player.edit',compact('players','leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $players_id)
    {
        Player::where('id', $players_id)
            ->update([
                'player_2_name' => $request->player_2_name, 'player_2_familyname' => $request->player_2_familyname, 
                'player_3_name' => $request->player_3_name, 'player_3_familyname' => $request->player_3_familyname, 
                'player_4_name' => $request->player_4_name, 'player_4_familyname' => $request->player_4_familyname, 
                'player_5_name' => $request->player_5_name, 'player_5_familyname' => $request->player_5_familyname, 
                'player_6_name' => $request->player_6_name, 'player_6_familyname' => $request->player_6_familyname, 
                'player_7_name' => $request->player_7_name, 'player_7_familyname' => $request->player_7_familyname, 
                'player_8_name' => $request->player_8_name, 'player_8_familyname' => $request->player_8_familyname
            ]);

        // Test if players photos is uploaded
        // Get player
        $player = Player::find(player_id());

        if($request->hasFile('photo_p2')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p2)) && $player->photo_p2 != null) {
                unlink('images/'.$player->photo_p2);
            }
            // upload the new photo 
            $photo_p2_FilePath = $request->file('photo_p2')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p2' => $photo_p2_FilePath,
            ]);
        }

        if($request->hasFile('photo_p3')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p3)) && $player->photo_p3 != null) {
                unlink('images/'.$player->photo_p3);
            }
            // upload the new photo 
            $photo_p3_FilePath = $request->file('photo_p3')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p3' => $photo_p3_FilePath,
            ]);
        }

        if($request->hasFile('photo_p4')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p4)) && $player->photo_p4 != null) {
                unlink('images/'.$player->photo_p4);
            }
            // upload the new photo 
            $photo_p4_FilePath = $request->file('photo_p4')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p4' => $photo_p4_FilePath,
            ]);
        }

        if($request->hasFile('photo_p5')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p5)) && $player->photo_p5 != null) {
                unlink('images/'.$player->photo_p5);
            }
            // upload the new photo 
            $photo_p5_FilePath = $request->file('photo_p5')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p5' => $photo_p5_FilePath,
            ]);
        }

        if($request->hasFile('photo_p6')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p6)) && $player->photo_p6 != null) {
                unlink('images/'.$player->photo_p6);
            }
            // upload the new photo 
            $photo_p6_FilePath = $request->file('photo_p6')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p6' => $photo_p6_FilePath,
            ]);
        }

        if($request->hasFile('photo_p7')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p7)) && $player->photo_p7 != null) {
                unlink('images/'.$player->photo_p7);
            }
            // upload the new photo 
            $photo_p7_FilePath = $request->file('photo_p7')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p7' => $photo_p7_FilePath,
            ]);
        }

        if($request->hasFile('photo_p8')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$player->photo_p8)) && $player->photo_p8 != null) {
                unlink('images/'.$player->photo_p8);
            }
            // upload the new photo 
            $photo_p8_FilePath = $request->file('photo_p8')->store('','save');   
            Player::where('id', $players_id)
            ->update([
                'photo_p8' => $photo_p8_FilePath,
            ]);
        }

        return redirect('/home')->with('status','تم تحديث معلومات اللاعبين الأساسيين بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
