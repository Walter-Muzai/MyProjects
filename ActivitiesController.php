<?php

namespace App\Http\Controllers;

use App\MuzaiEducation;

use App\User;

use Spatie\Activitylog\Models\Activity;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, MuzaiEducation $muzaiEducation)
    {
        $activities = Activity::orderBy('id', 'desc') -> paginate(4);

        return view('profile.activities', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return \Illuminate\Http\Response
     */
    public function show(MuzaiEducation $muzaiEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(MuzaiEducation $muzaiEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MuzaiEducation $muzaiEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MuzaiEducation $muzaiEducation)
    {
        //
    }
}
