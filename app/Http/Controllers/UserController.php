<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $rq, User $u)
    {

        return view('users.index', ['students' => Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'firstname' => ["required", "max:255", "min:3"],
            'lastname' => ["required", "max:255", "min:3"],
            'username' => ["required", "max:255", "min:3"],
            'email' => ["required", "email", "max:255", "min:3"],
            'password' => ["required", "max:255", "min:8", "confirmed"],
        ]);
        Student::create(array_merge(
            $request->only(
                ['firstname', 'lastname', 'username', 'email', 'password']
            ),
            ['average_mark' => 85.67]
        ));
        $request->session()->flash('success','Successfully Saved');

        return redirect(route('user.index'));

        // return "Saved Succefully";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //GET "user/{id}"
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET "user/{id}/edit"
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
        // POST "/user/{id}"
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE "user/{id}"
    }
}
