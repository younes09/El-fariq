<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Reserve;
use App\Models\Player;
use App\Models\Leader;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: change it to create function and change view name to create
        return view('team.index');
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
        $request->validate([
            'team_name' => 'required|unique:teams|max:255',
        ]);
        // fatch color list from table
        $team_prencipal_color ="";
        foreach($request->team_prencipal_color as $temp) $team_prencipal_color = $team_prencipal_color.'/'.$temp;

        $team_second_color ="";
        foreach($request->team_second_color as $temp) $team_second_color = $team_second_color.'/'.$temp;

        // Test if logo is uploaded
        if($request->hasFile('team_logo')){
            $team_logo_FilePath = $request->file('team_logo')->store('','save');   
        }else{
            $team_logo_FilePath = null;
        }

        // TEST BEFOR DELET FILE
        // if(file_exists(public_path($team_logo_FilePath))) {
        //     unlink($team_logo_FilePath);
        // }
        //insert team to databese
        $team = Team::create([
            'team_name' => $request->team_name,
            'team_prencipal_color' => $team_prencipal_color,
            'team_second_color' => $team_second_color,
            'team_logo' => $team_logo_FilePath,
            'user_id' => Auth::id(),
        ]);
     
        // return redirect('/home');
        return redirect('/home')->with('status','تم إدراج الفريق بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $team = Team::find(team_id());
        return view('team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // fatch color list from table
        $team_prencipal_color ="";
        foreach($request->team_prencipal_color as $temp) $team_prencipal_color = $team_prencipal_color.'/'.$temp;

        $team_second_color ="";
        foreach($request->team_second_color as $temp) $team_second_color = $team_second_color.'/'.$temp;

        // Test if logo is uploaded
        if($request->hasFile('team_logo')){
            $team = Team::find(team_id());
            // check the file if he is uploaded if true delet it
            if(file_exists(public_path('images/'.$team->team_logo)) && $team->team_logo != null) {
                unlink('images/'.$team->team_logo);
            }
            // store the new file
            $team_logo_FilePath = $request->file('team_logo')->store('','save'); 
            //add new flz to database
            Team::where('id', $id)
            ->update([
                'team_logo' => $team_logo_FilePath,
            ]);
        }
        //update the team info
        Team::where('id', $id)
            ->update([
                'team_name' => $request->team_name,
                'team_prencipal_color' => $team_prencipal_color,
                'team_second_color' => $team_second_color,
            ]);
     
        return redirect('/home')->with('status','تم تحديث الفريق بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
