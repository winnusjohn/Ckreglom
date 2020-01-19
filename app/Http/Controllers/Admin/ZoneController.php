<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\zone;
use App\Model\user\category;
use Illuminate\Http\Request;

class ZoneController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = zone::all();
        return view('admin.zone.show', compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = zone::all();
        $categories = category::all();
        return view('admin.zone.zone', compact('categories', 'zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'host_name' => 'required',
            'host_number' => 'required',
            // 'zone_category' => 'required',
            'zonal_address' => 'required',
            'zonal_pastor' => 'required',
            'zonal_pastor_number' => 'required',
        ]);

        // $category = new category;
        // $category->name = $request->name;
        $zone = new zone;
        $zone->host_name = $request->host_name;
        $zone->host_number = $request->host_number;
        $zone->zone_category = $request->zone_category;
        $zone->zonal_address = $request->zonal_address;
        $zone->zonal_pastor = $request->zonal_pastor;
        $zone->zonal_pastor_number = $request->zonal_pastor_number;
        $zone->status = $request->status;
        $zone->save();
        $zone->categories()->sync($request->categories);

        return redirect(route('zone.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(zone $zone)
    {
        // $categories = category::all();
        // return view('zone.show', compact('categories'));

        // views($zone)->record();

        return view('zone.show', compact('zone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $zone = zone::with('categories')->where('id', $id)->first();
        $categories = category::all();
        $zone = zone::with('categories')->where('id', $id)->first();
        return view('admin.zone.edit', compact('zone', 'categories'));
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

        // return $request->all();
        $this->validate($request, [
            'host_name' => 'required',
            'host_number' => 'required',
            // 'zone_category' => 'required',
            'zonal_address' => 'required',
            'zonal_pastor' => 'required',
            'zonal_pastor_number' => 'required',
        ]);

        // $category = category::find($id);
        // $category->name = $request->name;

        $zone = zone::find($id);
        $zone->host_name = $request->host_name;
        $zone->host_number = $request->host_number;
        $zone->zone_category = $request->zone_category;
        $zone->zonal_address = $request->zonal_address;
        $zone->zonal_pastor = $request->zonal_pastor;
        $zone->zonal_pastor_number = $request->zonal_pastor_number;
        $zone->status = $request->status;
        $zone->categories()->sync($request->categories);
        $zone->save();

        return redirect(route('zone.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        zone::where('id', $id)->delete();
        return redirect()->back();
    }
}
