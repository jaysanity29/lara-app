<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'expertises', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function showStudents()
    {
        $users = DB::table('users')->where('type', '2')->get();
        return ['users' => $users];
    }
    public function showRP()
    {
        $users = DB::table('users')->where('type', '3')->get();
        return ['users' => $users];
    }
    public function getId()
    {
        return $this->id;
    }
}
