<?php

namespace App\Http\Controllers;

use App\SubCategoryService;
use Illuminate\Http\Request;

class SubCategoryServiceController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubCategoryService::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategoryService::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategoryService  $subTitleService
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoryService $subCategoryService)
    {
        return  $subCategoryService;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategoryService  $subCategoryService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategoryService $subCategoryService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategoryService  $subTitleService
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategoryService $subCategoryService)
    {
        //
    }
}
