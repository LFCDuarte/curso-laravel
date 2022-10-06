<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSchoolClassFormRequest;
use App\Models\SchoolClass;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateSchoolClassFormRequest $request)
    {
        $data = $request->validated();

        SchoolClass::create($data);

        return redirect()->route('school_class.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateSchoolClassFormRequest $request, $id)
    {
        if(!$schoolClass = SchoolClass::find($id)){
            return redirect()->route('school_class.index');
        }
        $data = $request->validated();

        $schoolClass->update($data);
        
        return redirect()->route('school_class.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolClass  $schoolClass
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if (!$schoolClass = SchoolClass::find($id)){
            return redirect()-> route('school_class.index');
        }

        $schoolClass ->delete();

        return redirect()-> route('school_class.index');
    }
}
