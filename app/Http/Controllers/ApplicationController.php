<?php

namespace App\Http\Controllers;

use App\Application;
use App\Student;
use App\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Session;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $std=Student::find(Auth::guard('student')->id());
        $subj=Subject::all();

        if (Auth::guard('student')->check()){//must be logged in user
        return view('applyform',compact ('std','subj'));
        }

        else{
            return view('failuser');
        }
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
        $app = new \App\Application;

        $app->student_id=$request->get('studentid');
        $app->choice= $request->get('choice');
        $app->subject_id=$request->get('subjectid');
        $app->reason= $request->get('reason');
        $app->solution= $request->get('solution');
        $app->save();

        return view('/confirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
