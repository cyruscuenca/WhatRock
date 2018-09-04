<?php

namespace App;
use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'slug', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Check if the user has a Role.
     * 
     * @param  string  $role
     * @return boolean
     * 
     */
    public function hasRole($role)
    {
        return strtolower($this->role->name) === strtolower($role);
    }

    /**
     * Returns true if user is verified.
     * 
     * @return bool
     * 
     */

    public function verified()
    {
        return $this->token === null;
    }

    /**
     * Send verification email.
     * 
     * @return void
     * 
     */

    public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($this));
    }
}
