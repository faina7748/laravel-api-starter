<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
	//protected $table = 'custom_tablename'; //kalau nama table tu lain atau panjang
	//const CREATED_AT = 'custom_created_at';//kalau field tak sama dengan standard name in laravel
	//const UPDATED_AT = 'custom_updated_at';//kalau field tak sama dengan standard name in laravel

	//public $timestamps = false; //set nothing to date
	//protected $primaryKey = 'custom_id_custom' or null; //utk id

	//public $incrementing = false;
    protected $fillable = [ 'district_name', 'state_id' ];


}
