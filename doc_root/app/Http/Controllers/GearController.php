<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gear;
use App\GearCategory;

class GearController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $gears = \DB::table('gears')
                    ->leftjoin('gear_categories', 'gears.gear_category_id', '=' , 'gear_categories.gear_category_id')
                    ->get();
        return view('gears.index', ['gears' => $gears]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gear_categories = GearCategory::all();
        return view('gears.create', ['gear_categories' => $gear_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gear = new Gear;
        $gear->gear_name = $request->gear_name;
        $gear->gear_category_id = $request->gear_category_id;
        $gear->owning_user_id = $request->owning_user_id;
        $gear->repository_id = $request->repository_id;
        $gear->gear_description = $request->gear_description;
        $gear->save();

        return view('gears.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gear = Gear::find($id);
        return view('gears.show', ['gear' => $gear]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
