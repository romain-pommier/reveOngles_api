<?php

namespace App\Http\Controllers;

use App\Service;
use App\Category;
use App\SubCategoryService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $service = Service::all();
        $subCategory = SubCategoryService::all();
        
        $newSchemaService = [];
        foreach($category as $item_category){
            $newItem_category = $item_category;
            $newSubCategory = [];
            foreach($subCategory as $item_subCategory){
                if($item_subCategory->category_id == $item_category->id ){
                    $newServices= [];
                    foreach($service as $item_service){
                        if($item_service->sub_category_services_id == $item_subCategory->id){
                            array_push($newServices, $item_service);
                        }
                    }
                    $item_subCategory->services = $newServices;
                    array_push($newSubCategory,  $item_subCategory);
                }
            }
            $item_category->subCategory = $newSubCategory;
            array_push($newSchemaService, $item_category);
        };
        return $newSchemaService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return  $service;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
