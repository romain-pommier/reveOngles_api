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
        // $category = new Category;
        // var_dump($category);
        // return $category->show(1);
        // return Category::all();
        
        // -----------------------------------------------------------------------------------
        // ---------------------management complet schema services here-----------------------
        // -----------------------------------------------------------------------------------

        $category = Category::all();
        $service = Service::all();
        $subCategoryService = SubCategoryService::all();
        $test = [
            'services'=> $service,
            'categorys' => $category,
            'subCategorys'=> $subCategoryService,
        ];
            
        $test = json_encode($test);
        $newSchemaService = $category;
        foreach($category as $item_category){
            foreach($subCategoryService as $item_subCategoryService){
                if($item_subCategoryService->category_id == $item_category->id){ 
                    
                    $newSchemaService->subCategory = $item_subCategoryService;
                }
               
                foreach($service as $item_service){
                    if($item_service->sub_category_services_id == $item_subCategoryService->id){
                        $newSchemaService->subCategory->service = $item_service;
                    }
                }
            }
            
        };
        
        // var_dump($category[8]->id, 'sdfghjkl');
        return $category;
        
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
