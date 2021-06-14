<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as  AuthenticatableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as  CanResetPasswordContract;
class User extends  Model implements AuthenticatableContract
{

    use Authenticatable;
    use HasFactory;
    protected $table = 'users';
    protected $guarded = [];
}
