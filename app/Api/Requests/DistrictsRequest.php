<?php

namespace Api\Requests;

use App\Http\Requests\Request;

class DistrictsRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'district_name' => 'required|max:100',
	    	'state_id' => 'required|numeric|between:0,20'
    	];
	}
}