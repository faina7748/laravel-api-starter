<?php

namespace Api\Transformers;

use App\Districts;
use League\Fractal\TransformerAbstract;

class DistrictsTransformer extends TransformerAbstract
{
	public function transform(Districts $districts)
	{
		return [
			'id' 	=> (int) $districts->id,
			'district_name'  => $districts->district_name,
			'state'	=> [
					'state_id' => (int) $districts->state->state_id,
					'desc_state' => $districts->state->desc_state,
					]

		];
	}
}