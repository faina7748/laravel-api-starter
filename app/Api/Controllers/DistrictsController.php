<?php

namespace Api\Controllers;

use App\Districts;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\DistrictsRequest;
use Api\Transformers\DistrictsTransformer;

/**
 * @Resource('Districts', uri='/districts')
 */
class DistrictsController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all districts
     *
     * Get a JSON representation of all the district
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Districts::all(), new DistrictsTransformer);
    }

    /**
     * Store a new districts in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistrictsRequest $request)
    {
        return Districts::create($request->only(['district_name', 'state_id']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Districts::findOrFail($id), new DistrictsTransformer);
    }

    /**
     * Update the district in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DistrictsRequest $request, $id)
    {
        $districts = Districts::findOrFail($id);
        $districts->update($request->only(['district_name', 'state_id']));
        return $districts;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Districts::destroy($id);
    }
}
