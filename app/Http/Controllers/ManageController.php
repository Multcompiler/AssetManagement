<?php

namespace App\Http\Controllers;

use App\ArmamentStore;
use App\CategoryDescription;
use App\MainCategory;
use App\SubCategoryDescription;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function add_base_details(){
        $categories = MainCategory::all();
        $category_description = CategoryDescription::all();
        return view("manage.add_base_details",compact("categories","category_description"));
    }

    public function add_fields_description(){
        $categories = MainCategory::all();
        return view("manage.add_fields_description",compact("categories"));
    }
    public function store_category(Request $request){

        $this->validate($request, array(
            'category' => 'required',
        ));

        $add_category = new MainCategory();

        $add_category->category_name = $request->category;

        $add_category->save();

        response()->json(array("message" => "data Inserted"));
    }
    public function store_description(Request $request){

        $this->validate($request, array(
            'category' => 'required',
            'description' => 'required',
        ));

        $add_description = new CategoryDescription();

        $add_description->category_id = $request->category;
        $add_description->category_description_name = $request->description;

        $add_description->save();

        response()->json(array("message" => "data Inserted"));
    }
    public function store_sub_description(Request $request){

        $this->validate($request, array(
            'description' => 'required',
            'sub_description' => 'required',
        ));

        $add_sub_description = new SubCategoryDescription();
        $add_sub_description->category_description_id = $request->description;
        $add_sub_description->sub_category_description_name = $request->sub_description;

        $add_sub_description->save();

        response()->json(array("message" => "data Inserted"));
    }
    public function store_fields(Request $request){
        if ($request->selection == "choice-1"){
            $this->validate($request, array(
                'category' => 'required',
                'description' => 'required',
                'reg_no' => 'required',
                'stock' => 'required',
                'asset' => 'required',
                'caliber' => 'required',
                'location' => 'required',
                'country_code' => 'required',
                'date_service' => 'required',
                'operation_status' => 'required',
                'range' => 'required',
                'range_measure' => 'required',
                'effective' => 'required',
                'effective_measure' => 'required',
            ));

            if($request->has("sub_description")){
                $sub_description = $request->sub_description;
            }else{
                $sub_description = "-";
            }

            //Save Dataa
            $data_save = new ArmamentStore();
            $data_save->category_id = $request->category;
            $data_save->description_id = $request->description;
            $data_save->sub_description_id = $sub_description;
            $data_save->registration_no = $request->reg_no;
            $data_save->stock_no = $request->stock;
            $data_save->asset_type = $request->asset;
            $data_save->caliber = $request->caliber;
            $data_save->location = $request->location;
            $data_save->country_code = $request->country_code;
            $data_save->date_of_service = $request->date_service;
            $data_save->maximum_range = $request->range." ".$request->range_measure;
            $data_save->effective_range = $request->effective." ".$request->effective_measure;
            $data_save->oparational_status = $request->operation_status;

            $data_save->save();

            response()->json(array("message" => "data Inserted"));


        }
        elseif ($request->selection == "choice-2"){
            $this->validate($request, array(
                'category' => 'required',
                'description' => 'required',
                'reg_no' => 'required',
                'stock' => 'required',
                'asset' => 'required',
                'caliber' => 'required',
                'location' => 'required',
                'country_code' => 'required',
                'date_service' => 'required',
                'operation_status' => 'required',
                'range' => 'required',
                'range_measure' => 'required',
                'effective' => 'required',
                'effective_measure' => 'required',
            ));

            if($request->has("sub_description")){
                $sub_description = $request->sub_description;
            }else{
                $sub_description = "-";
            }

            //Save Dataa
            $data_save = new ArmamentStore();
            $data_save->category_id = $request->category;
            $data_save->description_id = $request->description;
            $data_save->sub_description_id = $sub_description;
            $data_save->registration_no = $request->reg_no;
            $data_save->stock_no = $request->stock;
            $data_save->asset_type = $request->asset;
            $data_save->caliber = $request->caliber;
            $data_save->location = $request->location;
            $data_save->country_code = $request->country_code;
            $data_save->date_of_service = $request->date_service;
            $data_save->maximum_range = $request->range." ".$request->range_measure;
            $data_save->effective_range = $request->effective." ".$request->effective_measure;
            $data_save->oparational_status = $request->operation_status;

            $data_save->save();

            response()->json(array("message" => "data Inserted"));


        }

    }
    public function get_category(){
        $categories = MainCategory::all();
        return response()->json($categories);
    }
    public function get_sub_category(){
        $categories = CategoryDescription::all();
        return response()->json($categories);
    }
    public function get_sub_category_list($id){
        $categories = CategoryDescription::where("category_id",$id)->get();
        return response()->json($categories);
    }
    public function get_sub_description_list($id){
        $sub_description = SubCategoryDescription::where("category_description_id",$id)->get();
        return response()->json($sub_description);
    }
}
