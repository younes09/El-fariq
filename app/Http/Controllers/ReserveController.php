<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reserve.index');
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
        // Test if Reserve Players photos are uploaded
        if($request->hasFile('photo_r1')){
            $photo_r1_FilePath = $request->file('photo_r1')->store('','save');   
        }else{
            $photo_r1_FilePath = "";
        }

        if($request->hasFile('photo_r2')){
            $photo_r2_FilePath = $request->file('photo_r2')->store('','save');   
        }else{
            $photo_r2_FilePath = "";
        }

        if($request->hasFile('photo_r3')){
            $photo_r3_FilePath = $request->file('photo_r3')->store('','save');   
        }else{
            $photo_r3_FilePath = "";
        }

        if($request->hasFile('photo_r4')){
            $photo_r4_FilePath = $request->file('photo_r4')->store('','save');   
        }else{
            $photo_r4_FilePath = "";
        }

        $reserve = Reserve::create([
            'reserve_1_name' => $request->reserve_1_name, 'reserve_1_familyname' => $request->reserve_1_familyname, 'photo_r1' => $photo_r1_FilePath,
            'reserve_2_name' => $request->reserve_2_name, 'reserve_2_familyname' => $request->reserve_2_familyname, 'photo_r2' => $photo_r2_FilePath,
            'reserve_3_name' => $request->reserve_3_name, 'reserve_3_familyname' => $request->reserve_3_familyname, 'photo_r3' => $photo_r3_FilePath,
            'reserve_4_name' => $request->reserve_4_name, 'reserve_4_familyname' => $request->reserve_4_familyname, 'photo_r4' => $photo_r4_FilePath,
            'team_id' => team_id(),
        ]);

        return redirect('/home')->with('status','تم إضافة معلومات اللاعبين الإحتياطيين بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserve = Reserve::find(reserve_id());
        return view('reserve.edit',compact('reserve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reserve_id)
    {
        Reserve::where('id', $reserve_id)
            ->update([
                'reserve_1_name' => $request->reserve_1_name, 'reserve_1_familyname' => $request->reserve_1_familyname, 
                'reserve_2_name' => $request->reserve_1_name, 'reserve_2_familyname' => $request->reserve_2_familyname, 
                'reserve_3_name' => $request->reserve_1_name, 'reserve_3_familyname' => $request->reserve_3_familyname, 
                'reserve_4_name' => $request->reserve_1_name, 'reserve_4_familyname' => $request->reserve_4_familyname, 
            ]);

        // Test if players photos is uploaded
        $reserve = Reserve::find(player_id());

        if($request->hasFile('photo_r1')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$reserve->photo_r1)) && $reserve->photo_r1 != null) {
                unlink('images/'.$reserve->photo_r1);
            }
            // upload the new photo 
            $photo_r1_FilePath = $request->file('photo_r1')->store('','save');   
            Reserve::where('id', $reserve_id)
            ->update([
                'photo_r1' => $photo_r1_FilePath,
            ]);
        }

        if($request->hasFile('photo_r2')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$reserve->photo_r2)) && $reserve->photo_r2 != null) {
                unlink('images/'.$reserve->photo_r2);
            }
            // upload the new photo 
            $photo_r2_FilePath = $request->file('photo_r2')->store('','save');   
            Reserve::where('id', $reserve_id)
            ->update([
                'photo_r2' => $photo_r2_FilePath,
            ]);
        }

        if($request->hasFile('photo_r3')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$reserve->photo_r3)) && $reserve->photo_r3 != null) {
                unlink('images/'.$reserve->photo_r3);
            }
            // upload the new photo 
            $photo_r3_FilePath = $request->file('photo_r3')->store('','save');   
            Reserve::where('id', $reserve_id)
            ->update([
                'photo_r3' => $photo_r3_FilePath,
            ]);
        }

        if($request->hasFile('photo_r4')){
            // check if player photo is uloaded if true then delet it
            if(file_exists(public_path('images/'.$reserve->photo_r1)) && $reserve->photo_r1 != null) {
                unlink('images/'.$reserve->photo_r1);
            }
            // upload the new photo 
            $photo_r4_FilePath = $request->file('photo_r4')->store('','save');   
            Reserve::where('id', $reserve_id)
            ->update([
                'photo_r4' => $photo_r4_FilePath,
            ]);
        }

        return redirect('/home')->with('status','تم تحديث معلومات اللاعبين الإحتياطيين بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserve $reserve)
    {
        //
    }
}
