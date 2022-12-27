<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leader.index');
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
        // Test if Leaders photo is uploaded
        if($request->hasFile('leader_photo')){
            $leader_photo_FilePath = $request->file('leader_photo')->store('','save');   
        }else{
            $leader_photo_FilePath = "";
        }

        $leader = Leader::create([
            'leader_name' => $request->leader_name,
            'leader_famely_name' => $request->leader_famely_name,
            'leader_birth_day' => $request->leader_birth_day,
            'leader_phone' => $request->leader_phone,
            'leader_mail' => $request->leader_mail,
            'leader_addres' => $request->leader_addres,
            'leader_photo' => $leader_photo_FilePath,
            'team_id' => team_id(),
        ]);
        return redirect('/home')->with('status','تم إدراج معلومات قائد الفريق بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leader = Leader::find(leader_id());
        return view('leader.edit',compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $leader_id)
    {
        Leader::where('id', $leader_id)
            ->update([
                'leader_name' => $request->leader_name,
                'leader_famely_name' => $request->leader_famely_name,
                'leader_birth_day' => $request->leader_birth_day,
                'leader_phone' => $request->leader_phone,
                'leader_mail' => $request->leader_mail,
                'leader_addres' => $request->leader_addres,
            ]);

        // Test if leader photo is uploaded
        if($request->hasFile('leader_photo')){
            $leader = Leader::find(leader_id());
            // check if leader photo is uloaded if true the delet it
            if(file_exists(public_path('images/'.$leader->leader_photo)) && $leader->leader_photo != null) {
                unlink('images/'.$leader->leader_photo);
            }
            // upload the new photo 
            $leader_photo_FilePath = $request->file('leader_photo')->store('','save'); 
            //save new photo to database  
            Leader::where('id', $leader_id)
            ->update([
                'leader_photo' => $leader_photo_FilePath,
            ]);
        }

        return redirect('/home')->with('status','تم تحديث قائد الفريق بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        //
    }
}
