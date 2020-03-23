<?php

namespace App\Http\Controllers;

use App\MuzaiEducation;

use App\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function logs(User $user){

        $muzai_education = MuzaiEducation::all();

        return view('profile.logs', compact('muzai_education'));

    }

    public function __construct(){

        return $this -> middleware('auth') -> except(['index', 'show', 'logs']);
    }

    public function index(User $user)
    {

        $muzai_education = MuzaiEducation::all();

        return view('profile.index', compact('muzai_education'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         return view('profile.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $attributes = request() -> validate([

            'education_level' => 'required|min:3',

            'institution_name' => 'required|min:3',

            'year_of_completion' => 'required|digits:4', 

            'county' => 'required|min:3', 

            'town' => 'required|min:3',
            
        ]);

        $attributes['user_id'] = auth() -> id();

        MuzaiEducation::create($attributes);

        return redirect('/profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return \Illuminate\Http\Response
     */
    public function show(MuzaiEducation $muzaiEducation)
    {
        $muzai_education = MuzaiEducation::all();

        return view('profile.logs', compact('muzai_education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(MuzaiEducation $muzaiEducation)
    {

        //abort_if($muzaiEducation -> user_id != auth() -> id(), 403);

        /*
        if ($muzaiEducation -> user_id != auth() -> id()) {

            abort(403, 'You do not have the permission to edit this!');
            
        }
        */

        $this -> authorize('update', $muzaiEducation);

        return view('profile.edit', compact('muzaiEducation'));


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

         $attributes = request() -> validate([

            'education_level' => 'required|min:3',

            'institution_name' => 'required|min:3',

            'year_of_completion' => 'required|digits:4', 

            'county' => 'required|min:3', 

            'town' => 'required|min:3',
            
        ]);

        $attributes['user_id'] = auth() -> id();

        $muzaiEducation -> update($attributes);

        return redirect('/profile');
    }

    public function destroy(MuzaiEducation $muzaiEducation)
    {

        //abort_unless(auth() -> user() -> owns($muzaiEducation), 403);

        /*
        abort_if($muzaiEducation -> user_id != auth() -> id(), 403, 'Sorry, this can only be deleted by the owner');
        */

        $this -> authorize('update', $muzaiEducation);
        
        $muzaiEducation -> delete();

        return redirect('/profile');
    }
}
