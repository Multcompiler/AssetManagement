@extends("main")

@section("title","| Add Field Description")

@section("main-content")
    <div class="row row-sm mg-t-20">
        <div class="col-md-12">
            <div class="card shadow-base bd-0 pd-25 mg-t-20">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Field Categories</h5>
                <div class="d-md-flex justify-content-between align-items-center">

                    <div class="form-layout form-layout-1" style="width: 100%;">
                        <div class="alert alert-bordered alert-info success_message" role="alert" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong class="d-block d-sm-inline-block-force"><i class="fa fa-check"></i> Success!</strong> Information Successfully Saved.
                        </div>
                        <div class="alert alert-bordered alert-danger fail_message" role="alert" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong class="d-block d-sm-inline-block-force"><i class="fa fa-times"></i> Error!</strong> <span id="message_fail"></span>
                        </div>
                        <div class="row mg-b-25 field">
                            <div id="loading">
                                <img id="loading-spinner-save" src="{{asset("img/military.gif")}}" alt="Loading..." width="100px"/>
                            </div>
                            <div class="col-md-6" id="main-category">
                                <div class="form-group">
                                    <label class="form-control-label">Choose Category: <span class="tx-danger">*</span>
                                        <i class="fa fa-spinner faa-spin animated" style="display: none;float: right;" id="load-cat"></i>
                                    </label>
                                    <select class="form-control" onchange="selectCategory()" id="category">
                                        <option value=""> -- Default -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6" id="main-description">
                                <div class="form-group">
                                    <label class="form-control-label">Choose Category Description: <span class="tx-danger">*</span>
                                        <i class="fa fa-spinner faa-spin animated" style="display: none;float: right;" id="load-desc"></i>
                                    </label>
                                    <select class="form-control" onchange="selectDescription()" id="description">
                                        <option value=""> -- Default -- </option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-9" id="sub_description" style="display: none;">
                                <div class="form-group">
                                    <label class="form-control-label">Choose Sub Category Description: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="sub_description_list">
                                        <option value=""> -- Default -- </option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-3" id="form-sub" style="display: none;">
                                <div class="form-group">
                                    <label class="form-control-label">Select Form: <span class="tx-danger">*</span></label>
                                    <select class="form-control sub_description_choice" id="sub_selection">
                                        <option value=""> -- Default -- </option>
                                        <option value="choice-1"> Choice 1 (Armament) </option>
                                        <option value="choice-2"> Choice 2 (Explosives)</option>
                                        <option value="choice-3"> Choice 3 (Communication)</option>
                                        <option value="choice-4"> Choice 4 (Vehicles)</option>
                                        <option value="choice-5"> Choice 5 (Aircraft)</option>
                                        <option value="choice-6"> Choice 6 (Engineering)</option>
                                        <option value="choice-7"> Choice 7 (Plants)</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12" id="form-full" style="display: none;">
                                <div class="form-group">
                                    <label class="form-control-label">Select Form: <span class="tx-danger">*</span></label>
                                    <select class="form-control sub_description_choice" id="full_selection">
                                        <option value=""> -- Default -- </option>
                                        <option value="choice-1"> Choice 1 (Armament) </option>
                                        <option value="choice-2"> Choice 2 (Explosives)</option>
                                        <option value="choice-3"> Choice 3 (Communication)</option>
                                        <option value="choice-4"> Choice 4 (Vehicles)</option>
                                        <option value="choice-5"> Choice 5 (Aircraft)</option>
                                        <option value="choice-6"> Choice 6 (Engineering)</option>
                                        <option value="choice-7"> Choice 7 (Plants)</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <!-- Start Choice 1 -->
                            <div class="col-md-4 choice_1">
                                <div class="form-group">
                                    <label class="form-control-label">Registration No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="reg_no_choice_1" placeholder="Enter Registration No">
                                </div>
                            </div>
                            <div class="col-md-4 choice_1">
                                <div class="form-group">
                                    <label class="form-control-label">Stock No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="stock_no_choice_1" placeholder="Enter Stock No">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4 choice_1">
                                <div class="form-group">
                                    <label class="form-control-label">Asset Type <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="asset_choice_1" placeholder="Enter Asset Type">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4 choice_1">
                                <div class="form-group">
                                    <label class="form-control-label">Caliber <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="caliber_choice_1" placeholder="Enter Caliber">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-8 choice_1">
                                <div class="form-group">
                                    <label class="form-control-label">Unit/Location <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="location_choice_1" placeholder="Enter Location">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4 choice_1">
                                <div class="form-group">
                                    <label class="form-control-label">Country Code <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="country_code_choice_1" placeholder="Code">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4 col-lg-4 mg-t-10 mg-lg-t-0 choice_1">
                                <div class="form-group mg-b-0">
                                    <label>Date into service <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control form-control-datepicker tx-14 date_service date_service_choice_1" data-language="en" placeholder="Date">
                                </div><!-- form-group -->
                            </div><!-- col-2 -->
                            <div class="col-md-4 choice_1">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Operational Status: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="oparation_choice_1">
                                        <option value=""> -- Default -- </option>
                                        <option value="SVC">Serviceable (SVC)</option>
                                        <option value="UNSVC">Unserviceable (UNSVC)</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 mg-t-20 mg-lg-t-0 choice_1">
                                <div class="form-group">
                                    <label>Maximum Range <span class="tx-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="range_choice_1" placeholder="Range Distance">
                                        <select class="input-group-addon tx-size-sm lh-2" id="range_measure_choice_1">
                                            <option value="metre"> metre </option>
                                            <option value="kilometer"> kilometer </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mg-t-20 mg-lg-t-0 choice_1">
                                <div class="form-group">
                                    <label>Effective Range <span class="tx-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="effective_choice_1" placeholder="Range Effective">
                                        <select class="input-group-addon tx-size-sm lh-2" id="effective_measure_choice_1">
                                            <option value="metre"> metre </option>
                                            <option value="kilometer"> kilometer </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Choice 1 -->

                            <!-- Start Choice 2 -->
                            <div class="col-md-3 choice_2">
                                <div class="form-group">
                                    <label class="form-control-label">Stock No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="stock_no_choice_2" placeholder="Enter Stock No">
                                </div>
                            </div>
                            <div class="col-md-3 choice_2">
                                <div class="form-group">
                                    <label class="form-control-label">Type: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="type_choice_2" placeholder="Type">
                                </div>
                            </div>
                            <div class="col-md-3 choice_2">
                                <div class="form-group">
                                    <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="unit_choice_2" placeholder="Unit">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 mg-t-10 mg-lg-t-0 choice_2">
                                <div class="form-group mg-b-0">
                                    <label>Date into service <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control form-control-datepicker tx-14 date_service date_service_choice_2" data-language="en" placeholder="Date">
                                </div><!-- form-group -->
                            </div>

                            <!-- End Choice 2 -->

                            <!-- Start Choice 3 -->
                            <div class="col-md-8 choice_3">
                                <div class="form-group">
                                    <label class="form-control-label">Type of radio/equipment: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="type_radio_choice_3" placeholder="Enter Type">
                                </div>
                            </div>
                            <div class="col-md-4 choice_3">
                                <div class="form-group">
                                    <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="unit_choice_3" placeholder="Unit">
                                </div>
                            </div>

                            <div class="col-md-6 choice_3">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="status_choice_3">
                                        <option value=""> -- Default -- </option>
                                        <option value="function"> Function </option>
                                        <option value="non_function"> Non Function </option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 col-lg-6 mg-t-10 mg-lg-t-0 choice_3">
                                <div class="form-group mg-b-0">
                                    <label>Date into service <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control form-control-datepicker tx-14 date_service date_service_choice_3" data-language="en" placeholder="Date">
                                </div><!-- form-group -->
                            </div>

                            <!-- End Choice 3 -->

                            <!-- Start Choice 4 -->
                            <div class="col-md-3 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Registration No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="reg_no_choice_4" placeholder="Enter Registration No">
                                </div>
                            </div>
                            <div class="col-md-3 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Make: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="make_choice_4" placeholder="Make">
                                </div>
                            </div>
                            <div class="col-md-3 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Model/Description: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="model_choice_4" placeholder="Enter Model">
                                </div>
                            </div>
                            <div class="col-md-3 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Tonnage: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="tonnage_choice_4" placeholder="Enter Tonnage">
                                </div>
                            </div>
                            <div class="col-md-4 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Unit/Location: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="location_choice_4" placeholder="Enter Location">
                                </div>
                            </div>
                            <div class="col-md-3 choice_4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Status Operation 1: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="status_one_choice_4">
                                        <option value=""> -- Default -- </option>
                                        <option value="function"> Running  </option>
                                        <option value="non_function"> Not running </option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-3 choice_4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Status Operation 2: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="status_two_choice_4">
                                        <option value=""> -- Default -- </option>
                                        <option value="function"> Serviceable </option>
                                        <option value="non_function"> Not serviceable </option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-2 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Fuel capacity: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="fuel_capacity_choice_4" placeholder="Fuel Capacity">
                                </div>
                            </div>
                            <div class="col-md-4 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Type of fuel: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="fuel_type_choice_4" placeholder="Fuel type">
                                </div>
                            </div>
                            <div class="col-md-8 choice_4">
                                <div class="form-group">
                                    <label class="form-control-label">Remarks: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="remark_choice_4" placeholder="Vehicle Remark">
                                </div>
                            </div>

                            <!-- End Choice 4 -->

                            <!-- Start Choice 5 -->
                            <div class="col-md-3 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Type of Aircraft/Helicopter: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="type_aircraft_choice_5" placeholder="Type Aircraft">
                                </div>
                            </div>
                            <div class="col-md-3 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Make/Manufacture: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="manufacture_choice_5" placeholder="Manufacture">
                                </div>
                            </div>
                            <div class="col-md-3 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Aircraft serial number: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="model_choice_5" placeholder="Serial number">
                                </div>
                            </div>
                            <div class="col-md-3 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Registration No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="reg_no_choice_5" placeholder="Registration No">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 mg-t-10 mg-lg-t-0 choice_5">
                                <div class="form-group mg-b-0">
                                    <label>Date Revive <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control form-control-datepicker tx-14 date_service date_service_choice_5" data-language="en" placeholder="Date of Service">
                                </div><!-- form-group -->
                            </div>
                            <div class="col-md-3 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="unit_choice_5" placeholder="Unit">
                                </div>
                            </div>
                            <div class="col-md-3 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Location: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="location_choice_5" placeholder="Current Location">
                                </div>
                            </div>
                            <div class="col-md-3 choice_5">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Aircraft Serviceability Status  1: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="status_one_choice_5">
                                        <option value=""> -- Default -- </option>
                                        <option value="function"> Operative  </option>
                                        <option value="non_function"> Non operative </option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4 choice_5">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Aircraft Serviceability Status 2: <span class="tx-danger">*</span></label>
                                    <select class="form-control" id="status_two_choice_5">
                                        <option value=""> -- Default -- </option>
                                        <option value="function"> Serviceable </option>
                                        <option value="non_function"> Unserviceable </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 choice_5">
                                <div class="form-group">
                                    <label class="form-control-label">Remarks: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="remark_choice_5" placeholder="Aircraft Remark">
                                </div>
                            </div>

                            <!-- End Choice 5 -->

                            <!-- Start Choice 6 -->
                            <div class="col-md-3 choice_6">
                                <div class="form-group">
                                    <label class="form-control-label">Stock No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="stock_no_choice_6" placeholder="Enter Stock no">
                                </div>
                            </div>
                            <div class="col-md-3 choice_6">
                                <div class="form-group">
                                    <label class="form-control-label">Type of equipment: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="equipment_type_choice_6" placeholder="Type of Equipment">
                                </div>
                            </div>
                            <div class="col-md-3 choice_6">
                                <div class="form-group">
                                    <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="unit_choice_6" placeholder="Unit">
                                </div>
                            </div>
                            <div class="col-md-3 choice_6">
                                <div class="form-group">
                                    <label class="form-control-label">Status/Condition: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="condition_choice_6" placeholder="Status">
                                </div>
                            </div>

                            <!-- End Choice 6 -->

                            <!-- Start Choice 7 -->
                            <div class="col-md-3 choice_7">
                                <div class="form-group">
                                    <label class="form-control-label">Stock No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="stock_no_choice_7" placeholder="Enter Stock no">
                                </div>
                            </div>
                            <div class="col-md-3 choice_7">
                                <div class="form-group">
                                    <label class="form-control-label">Type of plant: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="plant_type_choice_7" placeholder="Type of Plant">
                                </div>
                            </div>
                            <div class="col-md-3 choice_7">
                                <div class="form-group">
                                    <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="unit_choice_7" placeholder="Unit">
                                </div>
                            </div>
                            <div class="col-md-3 choice_7">
                                <div class="form-group">
                                    <label class="form-control-label">Condition: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="condition_choice_7" placeholder="Condition">
                                </div>
                            </div>

                            <!-- End Choice 7 -->




                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button id="field_btn" class="btn btn-info" onclick="saveFields()">Submit Form</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div><!-- form-layout-footer -->
                    </div>
                </div><!-- d-flex -->

            </div><!-- card -->

        </div><!-- col-8 -->
    </div>

@endsection

@section("page-script")
    <script type="text/javascript">
        $('#full_selection').change(function(){
            choices_full();
        });
        $('#sub_selection').change(function(){
            choices_sub();
        });
    </script>
    <script type="text/javascript">
        function selectCategory() {
            $("#load-cat").css("display","inline-block");
            $.ajax({
                url: "/get/description/list/"+$("#category").val(),
                type: 'GET',

                success: function (response) {
                    $("#sub_description").css("display","none");
                    $("#form-sub").css("display","none");
                    $("#form-full").css("display","none");
                    if(response.length > 0){

                        var item = $("#description");
                        item.empty();
                        var html1 = "";
                        html1 += "<option value=\"\"> -- Default -- </option>";
                        for (var i = 0; i < response.length; i++) {
                            html1 += "<option value= \" "+response[i]['id'] +"\"> "+response[i]['category_description_name'] +"</option>";
                        }
                        item.append(html1);
                    }
                    else {
                        var item = $("#description");
                        item.empty();
                        var html1 = "";
                        html1 += "<option value=\"\"> -- Default -- </option>";
                        item.append(html1);
                    }
                    $("#load-cat").css("display","none");
                    $(".choice_1,.choice_2,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                    // console.log(response);
                },

                error: function (jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    console.log(response);
                    $("#load-cat").css("display","none");

                }
            }).done (function(data){
                $("#load-cat").css("display","none");
            });

        }
    </script>
    <script type="text/javascript">
        function selectDescription() {
            $("#load-desc").css("display","inline-block");
            $.ajax({
                url: "/get/sub/description/list/"+$("#description").val(),
                type: 'GET',

                success: function (response) {
                    console.log(response);
                    if(response.length > 0){
                        $("#sub_description").css("display","block");
                        $("#form-sub").css("display","block");
                        $("#form-full").css("display","none");
                        var item = $("#sub_description_list");
                        item.empty();
                        var html1 = "";
                        html1 += "<option value=\"\"> -- Default -- </option>";
                        for (var i = 0; i < response.length; i++) {
                            html1 += "<option value= \" "+response[i]['id'] +"\"> "+response[i]['category_description_name'] +"</option>";
                        }
                        item.append(html1);
                    }
                    else {
                        $("#sub_description").css("display","none");
                        $("#form-sub").css("display","none");
                        $("#form-full").css("display","block");
                        var item = $("#sub_description_list");
                        item.empty();
                        var html1 = "";
                        html1 += "<option value=\"\"> -- Default -- </option>";
                        item.append(html1);
                    }
                    $("#load-desc").css("display","none");
                    $(".choice_1,.choice_2,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                    // console.log(response);
                },

                error: function (jqXHR) {
                    $("#load-desc").css("display","none");

                }
            }).done (function(data){
                $("#load-desc").css("display","none");
            });

        }
    </script>
    <script type="text/javascript">
        $(".choice_1,.choice_2,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
    </script>
    <script type="text/javascript">
        function choices_sub(){
            if($("#sub_selection").val() == "choice-1"){
                $(".choice_2,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_1").css("display","inline-block");
            }
            else if($("#sub_selection").val() == "choice-2"){
                $(".choice_1,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_2").css("display","inline-block");
            }
            else if($("#sub_selection").val() == "choice-3"){
                $(".choice_1,.choice_2,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_3").css("display","inline-block");
            }
            else if($("#sub_selection").val() == "choice-4"){
                $(".choice_1,.choice_3,.choice_2,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_4").css("display","inline-block");
            }
            else if($("#sub_selection").val() == "choice-5"){
                $(".choice_1,.choice_3,.choice_4,.choice_2,.choice_6,.choice_7").css("display","none");
                $(".choice_5").css("display","inline-block");
            }
            else if($("#sub_selection").val() == "choice-6"){
                $(".choice_1,.choice_3,.choice_4,.choice_5,.choice_2,.choice_7").css("display","none");
                $(".choice_6").css("display","inline-block");
            }
            else if($("#sub_selection").val() == "choice-7"){
                $(".choice_1,.choice_3,.choice_4,.choice_5,.choice_6,.choice_2").css("display","none");
                $(".choice_7").css("display","inline-block");
            }

        }

    </script>
    <script type="text/javascript">
        function choices_full(){
            if($("#full_selection").val() == "choice-1"){
                $(".choice_2,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_1").css("display","inline-block");
            }
            else if($("#full_selection").val() == "choice-2"){
                $(".choice_1,.choice_3,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_2").css("display","inline-block");
            }
            else if($("#full_selection").val() == "choice-3"){
                $(".choice_1,.choice_2,.choice_4,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_3").css("display","inline-block");
            }
            else if($("#full_selection").val() == "choice-4"){
                $(".choice_1,.choice_3,.choice_2,.choice_5,.choice_6,.choice_7").css("display","none");
                $(".choice_4").css("display","inline-block");
            }
            else if($("#full_selection").val() == "choice-5"){
                $(".choice_1,.choice_3,.choice_4,.choice_2,.choice_6,.choice_7").css("display","none");
                $(".choice_5").css("display","inline-block");
            }
            else if($("#full_selection").val() == "choice-6"){
                $(".choice_1,.choice_3,.choice_4,.choice_5,.choice_2,.choice_7").css("display","none");
                $(".choice_6").css("display","inline-block");
            }
            else if($("#full_selection").val() == "choice-7"){
                $(".choice_1,.choice_3,.choice_4,.choice_5,.choice_6,.choice_2").css("display","none");
                $(".choice_7").css("display","inline-block");
            }

        }

    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        saveFields = function () {
            $(".field").css("opacity","0.5");
            $("#loading-spinner-save").css("display","block");
            $(".field_btn").prop("disabled",true);
            if(($("#sub_selection").val() == "choice-1") || ($("#full_selection").val() == "choice-1")){
                var selection = "choice-1";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,selection:selection,reg_no:$("#reg_no_choice_1").val(),stock:$("#stock_no_choice_1").val(),asset:$("#asset_choice_1").val()
                        ,caliber:$("#caliber_choice_1").val(),location:$("#location_choice_1").val(),country_code:$("#country_code_choice_1").val()
                        ,date_service:$(".date_service_choice_1").val(),operation_status:$("#oparation_choice_1").val()
                        ,range:$("#range_choice_1").val(),range_measure:$("#range_measure_choice_1").val(),effective:$("#effective_choice_1").val()
                        ,effective_measure:$("#effective_measure_choice_1").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else if(($("#sub_selection").val() == "choice-2") || ($("#full_selection").val() == "choice-2")){
                var selection = "choice-2";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,stock_no: $("#stock_no_choice_2").val(),type:$("#type_choice_2").val(),unit:$("#unit_choice_2").val()
                        ,selection:selection,date_of_service:$(".date_service_choice_2").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else if(($("#sub_selection").val() == "choice-3") || ($("#full_selection").val() == "choice-3")){
                var selection = "choice-3";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,status: $("#status_choice_3").val(),type_radio:$("#type_radio_choice_3").val(),unit:$("#unit_choice_3").val()
                        ,selection:selection,date_of_service:$(".date_service_choice_3").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else if(($("#sub_selection").val() == "choice-4") || ($("#full_selection").val() == "choice-4")){
                var selection = "choice-4";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,reg_no: $("#reg_no_choice_4").val(),make:$("#make_choice_4").val(),model:$("#model_choice_4").val()
                        ,selection:selection,tonnage:$("#tonnage_choice_4").val(),location:$("#location_choice_4").val()
                        ,status_one:$("#status_one_choice_4").val(),status_two:$("#status_two_choice_4").val(),fuel_type:$("#fuel_type_choice_4").val()
                        ,remark:$("#remark_choice_4").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else if(($("#sub_selection").val() == "choice-5") || ($("#full_selection").val() == "choice-5")){
                var selection = "choice-5";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,type: $("#type_aircraft_choice_5").val(),manufacture:$("#manufacture_choice_5").val(),model:$("#model_choice_5").val()
                        ,selection:selection,reg_no:$("#reg_no_choice_5").val(),date_of_service:$(".date_service_choice_5").val()
                        ,unit:$("#unit_choice_5").val(),location:$("#location_choice_5").val(),status_one:$("#status_one_choice_5").val()
                        ,status_two:$("#status_two_choice_5").val(),remark:$("#remark_choice_5").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else if(($("#sub_selection").val() == "choice-6") || ($("#full_selection").val() == "choice-6")){
                var selection = "choice-6";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,stock_no: $("#stock_no_choice_6").val(),equipment_type:$("#equipment_type_choice_6").val(),unit:$("#unit_choice_6").val()
                        ,selection:selection,condition:$("#condition_choice_6").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else if(($("#sub_selection").val() == "choice-7") || ($("#full_selection").val() == "choice-7")){
                var selection = "choice-7";

                $.ajax({
                    url: "/Manage/Save/Field",
                    type: 'POST',
                    data: {category: $("#category").val(),description:$("#description").val(),sub_description:$("#sub_description_list").val()
                        ,stock_no: $("#stock_no_choice_7").val(),plant_type:$("#plant_type_choice_7").val(),unit:$("#unit_choice_7").val()
                        ,selection:selection,condition:$("#condition_choice_7").val()},
                    success: function (response) {
                        //console.log(response);
                        $(".fail_message").css("display","none");
                        $(".field_btn").prop("disabled",false);
                        $(".success_message").css("display","block");
                        $(".field").css("opacity","unset");
                        $("#loading-spinner-save").css("display","none");
                    },

                    error: function (jqXHR) {
                        // var response = $.parseJSON(jqXHR.responseText);
                        //console.log(jqXHR);
                        //console.log(respose)n;
                        if(jqXHR) {
                            $(".fail_message").css("display","block");
                            var message = $("#message_fail");
                            message.empty();
                            console.log(jqXHR);
                            message.append("Something went wrong");
                            $(".field").css("opacity","unset");
                            $(".field_btn").prop("disabled",false);
                            $("#loading-spinner-save").css("display","none");
                            //hide success alert after 3 seconds
                            setTimeout(function(){
                                $(".success_message").css("display","none");
                            },3000);
                        }
                    }
                }).done (function(data){
                    $("#loading-spinner-save").css("display","none");
                    $(".field").css("opacity","unset");
                    $("input[type=text], textarea").val("");
                    //hide success alert after 3 seconds
                    setTimeout(function(){
                        $(".success_message").css("display","none");
                    },5000);
                });
            }
            else{
                $(".fail_message").css("display","block");
                var message = $("#message_fail");
                message.empty();
                message.append("Something went wrong");
                $(".field").css("opacity","unset");
                $("#loading-spinner-save").css("display","none");
                $(".field_btn").prop("disabled",false);
            }

        }
    </script>

@endsection