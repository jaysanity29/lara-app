<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\UserGroup;
use App\User;
use Illuminate\Support\Facades\Auth;
class GroupController extends Controller
{
    protected $user;

     public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
      
       
        dd($this->user);
        $access_code = $this->generateKey(10);
        $this->validate($request, [
            'group_name' => 'required|string|max:191',
            'group_title' => 'required|string|max:191',
        ]);
        $groups = Group::create([
            'group_name' => $request['group_name'],
            'group_title' => $request['group_title'],
            'group_course' => $request['group_course'],
            'acces_code' => $access_code,
        ]);

        $userGroup = UserGroup::create([
            'group_id' => $groups->id,
            'user_id' => $user,
        ]);    

        return ['message' => 'Group Created'];

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

    public function generateKey($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
