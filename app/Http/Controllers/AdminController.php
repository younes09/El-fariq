<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Player;
use App\Models\Reserve;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //test if ther is team inserted for this user
        $team_count = count(Team::where('user_id',Auth::id())->get());
        if( $team_count != 0) {
            $team_id = Team::where('user_id',Auth::id())->get('id')[0]['id'];
            $team_inserted = 1;
        }
        else $team_inserted = 0;

        if($team_inserted){
            //test if ther is leader inserted for this team
            $Leader_count = count(Leader::where('team_id',$team_id)->get());
            if($Leader_count != 0){
                $leader_id = Leader::where('team_id',$team_id)->get('id')[0]['id'];
                $leader_inserted = 1;
            }
            else $leader_inserted = 0;
    
            //test if ther is players inserted for this team
            $Player_count = count(Player::where('team_id',$team_id)->get());
            if($Player_count != 0){
                $player_id = Player::where('team_id',$team_id)->get('id')[0]['id'];
                $player_inserted = 1;
            }
            else $player_inserted = 0;
    
            //test if ther is reserve inserted for this team
            $Reserve_count = count(Reserve::where('team_id',$team_id)->get());
            if($Reserve_count != 0){
                $reserve_id = Reserve::where('team_id',$team_id)->get('id')[0]['id'];
                $reserve_inserted = 1;
            }
            else $reserve_inserted = 0;
        }
        else{
            $leader_inserted = $player_inserted = $reserve_inserted = 0;
        }
        
        return view('dashboard.index') 
                    ->with('is_team_inserted', $team_inserted)
                    ->with('is_leader_inserted', $leader_inserted)
                    ->with('is_player_inserted', $player_inserted)
                    ->with('is_reserve_inserted', $reserve_inserted);
    }

    public function getView($id){
        if(view()->exists(('all.'.$id))) return view('all.'.$id); else return view('all.404');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams = Team::all();
        return view('admin.show',compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($team_id)
    {
        $leader = Leader::where('team_id',$team_id)->get();
        $player = Player::where('team_id',$team_id)->get();
        $reserve = Reserve::where('team_id',$team_id)->get();

        return view('admin.edit',compact('leader','player','reserve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        // return $request->search;
        $teams = Team::where('team_name','LIKE',"%{$request->search}%")->get();
        return view('admin.show',compact('teams'));
    }
}
