<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\yearly;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YearlyController extends Controller
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
        $yearly = yearly::all();
        return view('admin.yearly.show', compact('yearly'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.yearly.yearly');
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
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // $request->image->getClientOriginalName();
            $imageName = $request->image->store('public/yearly');
        }

        $yearly = new yearly;
        $yearly->image = $imageName;
        $yearly->title = $request->title;
        $yearly->status = $request->status;
        $yearly->save();
        return redirect(route('yearly.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yearly = yearly::where('id', $id)->first();
        return view('admin.yearly.edit', compact('yearly'));
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
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // $request->image->getClientOriginalName();
            $imageName = $request->image->store('public/yearly');
        }

        $yearly = yearly::find($id);
        $yearly->image = $imageName;
        $yearly->title = $request->title;
        $yearly->status = $request->status;

        $yearly->save();

        return redirect(route('yearly.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        yearly::where('id', $id)->delete();
        return redirect()->back();
    }
}
