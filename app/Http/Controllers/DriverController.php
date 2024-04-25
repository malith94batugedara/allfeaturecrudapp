<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers=Driver::all();
        return view('driver.index',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $driver = new Driver;

        $driver->name = $request->driname;
        $driver->address = $request->driaddress;
        $driver->regnumber = $request->drireg;

        $driver->save();

        return redirect(route('driver.index'))->with('status','Driver Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($driver_id)
    {
        $driver=Driver::find($driver_id);
        return view('driver.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $driver_id)
    {
        $driver = Driver::find($driver_id);

        $driver->name = $request->driname;
        $driver->address = $request->driaddress;
        $driver->regnumber = $request->drireg;

        $driver->update();

        return redirect(route('driver.index'))->with('status','Driver Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($driver_id)
    {
        $driver=Driver::find($driver_id);
        $driver->delete();
        return redirect(route('driver.index'))->with('status','Driver Deleted Successfully!');
    }
}
