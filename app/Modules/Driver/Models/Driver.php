<?php

namespace App\Modules\Driver\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /*
	* Table name
	*/
	protected $table = 'driver';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name','email', 'password','phone_no','driver_license','reg_date','last_visit','vendor_id','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
	
}
