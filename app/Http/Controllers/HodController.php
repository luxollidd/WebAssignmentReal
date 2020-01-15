<?php

namespace App\Http\Controllers;

use App\Hod;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app= Application::all();
        $i=0;

        return view('HOD', ['app' => Application::with('student')->get(),'app' => Application::with('subject')->get()], compact ('app','i'));
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
     * @param  \App\Hod  $hod
     * @return \Illuminate\Http\Response
     */
    public function show(Hod $hod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hod  $hod
     * @return \Illuminate\Http\Response
     */
    public function edit(Hod $hod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hod  $hod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hod $hod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hod  $hod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hod $hod)
    {
        //
    }

    public function approve(Request $request, Hod $hod){

        if ($request->input('action') == 'Approve'){

            $ab = Application::find($request->get('appval'));
            $ab->status = "1";
            $ab->save();
    
        }

        else if($request->input('action') == 'Deny'){
        
            $ab = Application::find($request->get('appval'));
            $ab->status = "2";
            $ab->save();
        }
        
        return Redirect::back()->with('message','Operation Successful !');

    }

}
