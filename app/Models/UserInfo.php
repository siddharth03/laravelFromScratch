<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
	protected $table = 'users_info';
	
    protected $fillable=['name', 'address', 'email', 'contact_number', 'gender', 'salary'];

}
