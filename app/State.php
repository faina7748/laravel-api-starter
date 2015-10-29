<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	//protected $table = 'custom_tablename'; //kalau nama table tu lain atau panjang
	//const CREATED_AT = 'custom_created_at';//kalau field tak sama dengan standard name in laravel
	//const UPDATED_AT = 'custom_updated_at';//kalau field tak sama dengan standard name in laravel

	//public $timestamps = false; //set nothing to date
	protected $primaryKey = 'state_id'; //  or null; //utk id
	//public $incrementing = false;

    protected $fillable = [ 'desc_state', 'state_id' ];

    public function district(){

    	return $this->hasMany('App\District','state_id','state_id');//(model/foreign key/primary key)
    }
}
