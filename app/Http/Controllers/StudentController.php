<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use App\UserGroup;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createGroup(Request $request)
    {
        $user        = $request->user()->id;
        $access_code = $this->generateKey(10);

        $this->validate($request, [
            'group_name'  => 'required|string|max:191|unique:groups',
            'group_title' => 'required|string|max:191|unique:groups',
        ]);

        $groups = Group::create([
            'group_name'   => $request['group_name'],
            'group_title'  => $request['group_title'],
            'group_course' => $request['group_course'],
            'acces_code'   => $access_code,
        ]);

        if ($groups) {
            $userGroup = UserGroup::create([
                'group_id' => $groups->id,
                'user_id'  => $user,
            ]);

            if ($userGroup) {
                $user        = User::findOrFail($user);
                $user->group = $groups->group_name;
                $user->update();
            }
        }

        return redirect('/student/dashboard');
    }

    public function joinGroup(Request $request)
    {
        $msg  = '';
        $user = $request->user()->id;
        $this->validate($request, [
            'access_code' => 'required|string|max:191',
        ]);
        $count = Group::where('acces_code', $request->access_code)->count();
        $groups = Group::where('acces_code', $request->access_code)->firstOrFail();

        if ($count > 0) {
            $user        = User::findOrFail($user);
            $user->group = $groups->group_name;
            $user->update();
            $msg = 'It works';

        } else {
            $msg = 'No its not.';
        }
        return ['message' => $msg, 'count' => $count];
    }
    public function generateKey($length)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
