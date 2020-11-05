<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $users = DB::table('users')->where('type' , '2')->get();
        return  ['users' => $users];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,id',
            'password' => 'sometimes|min:6'
        ]);
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => $request['role'],
            'password' => Hash::make($request['password'])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());
        return ['message' => 'Updated the user info.'];
    }

    /**
     * Remove the specified resource from storage.
     *  
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return ['message' => 'User Deleted'];
    }

    public function students(Request $request)
    {
         
        return User::latest()->where('type', '2')->get();   
    }

    public function getPersonnels() {
        return User::latest()->where('type', '3')->get();
    }

    public function storePersonnels(Request $request) {

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,id',
            'password' => 'sometimes|min:6'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'expertises' => $request['exp'],
            'type' => $request['role'],
            'password' => Hash::make($request['password'])
        ]);
        return ['message' => 'User Created'];
    }
    public function approveStudent($id)
    {
        $user = User::findOrFail($id);

       $user->status = 'Approved';
       $user->update();
       return ['message' => 'It works.'];
    }
     public function disapproveStudent($id)
    {
        $user = User::findOrFail($id);

       $user->status = 'Disapproved';
       $user->update();
       return ['message' => 'It works.'];
    }

    public function countStudent()
    {
        $users = DB::table('users')->where('type' , '2')->count();
        return  ['users' => $users];
    }
    public function updateRP(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());
        return ['message' => 'Updated the user info.'];
    }
}
