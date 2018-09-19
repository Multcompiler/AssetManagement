@extends("main")

@section("title","|Add Base Details")

@section("link-description")
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="/">Home</a>
            <span class="breadcrumb-item active">Add Base Info</span>
        </nav>
    </div>
    @endsection
@section("main-content")
    <div class="row row-sm mg-t-20">
        <div class="col-md-12">
            <div class="card shadow-base bd-0 pd-25 mg-t-20">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Field Categories</h5>
                <div class="d-md-flex justify-content-between align-items-center">
                    <table class="table table-bordered tx-13 tx-gray-700 bd">
                        <thead>
                        <tr class="bg-gray-100 tx-11 tx-uppercase tx-gray-800">
                            <th class="wd-40p">Selection</th>
                            <th class="wd-60p">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <button class="btn btn-outline-primary btn-block mg-b-10" onclick="mainCategory()">Main Category</button>
                                <button class="btn btn-outline-primary btn-block mg-b-10" onclick="categoryDescription()">Category Description</button>
                                <button class="btn btn-outline-primary btn-block mg-b-10" onclick="subCategoryDescription()">Sub Category Description</button>
                            </td>
                            <td>
                                <div class="row mg-b-25">
                                    <div class="col-md-12" id="main-category" style="display: none;">
                                        <div id="loading">
                                            <img id="loading-image" src="{{asset("img/spinners.gif")}}" alt="Loading..." width="100px"/>
                                        </div>
                                        <div id="success_category" class="alert alert-bordered alert-success" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force"> Well done!</strong> New Category successfully Added.
                                        </div>
                                        <div id="fail_category" class="alert alert-bordered alert-danger" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force"> Error!</strong> <span id="category_error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" id="category"  placeholder="Enter Category">
                                        </div>
                                        <div class="form-layout-footer">
                                            <button onclick="saveCategory()" class="btn btn-info btn-block" id="category_btn">Submit Form</button>
                                        </div><!-- form-layout-footer -->
                                    </div><!-- col-4 -->
                                    <div class="col-md-12" id="category-description" style="display: none;">
                                        <div id="loading">
                                            <img id="loading-image-description" src="{{asset("img/spinners.gif")}}" alt="Loading..." width="100px"/>
                                        </div>
                                        <div id="success_category_description" class="alert alert-bordered alert-success" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force"> Well done!</strong> New Category Description successfully Added.
                                        </div>
                                        <div id="fail_category_description" class="alert alert-bordered alert-danger" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force"> Error!</strong> <span id="category_description_error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Choose Category: <span class="tx-danger">*</span></label>
                                            <select id="categ" class="form-control">
                                                <option value=""> -- Default -- </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Category Description: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" id="category_description"  placeholder="Enter Category Description">
                                        </div>
                                        <div class="form-layout-footer">
                                            <button onclick="saveDescription()" class="btn btn-info btn-block" id="description_btn">Submit Form</button>
                                        </div><!-- form-layout-footer -->
                                    </div><!-- col-4 -->
                                    <div class="col-md-12" id="sub-category-description" style="display: none;">
                                        <div id="loading">
                                            <img id="loading-image-sub-description" src="{{asset("img/spinners.gif")}}" alt="Loading..." width="100px"/>
                                        </div>
                                        <div id="success_sub_category_description" class="alert alert-bordered alert-success" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force"> Well done!</strong> New Sub Category Description successfully Added.
                                        </div>
                                        <div id="fail_sub_category_description" class="alert alert-bordered alert-danger" role="alert" style="display: none;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force"> Error!</strong> <span id="sub_category_description_error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Choose Category Description: <span class="tx-danger">*</span></label>
                                            <select id="categ_descrption" class="form-control">
                                                <option value=""> -- Default -- </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Sub Category Description: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" id="sub_category_description"  placeholder="Enter Sub Category Description">
                                        </div>
                                        <div class="form-layout-footer">
                                            <button onclick="saveSubDescription()" class="btn btn-info btn-block sub_description_btn">Submit Form</button>
                                        </div><!-- form-layout-footer -->
                                    </div><!-- col-4 -->



                                </div><!-- row -->


                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div><!-- d-flex -->

            </div><!-- card -->

        </div><!-- col-8 -->
    </div>

@endsection

@section("page-script")
 <script type="text/javascript">
         function mainCategory() {
             $("#main-category").css("display","block");
             $("#category-description").css("display","none");
             $("#sub-category-description").css("display","none");
         }
         function categoryDescription() {
             $.ajax({
                 url: "/get/category/list",
                 type: 'GET',

                 success: function (response) {
                     if(response.length > 0){
                         var item1 = $("#categ");
                         item1.empty();
                         var html = "";
                         html += "<option value=\"\"> -- Default -- </option>";
                         for (var i = 0; i < response.length; i++) {
                            html += "<option value= \""+response[i]['id'] +"\"> "+response[i]['category_name'] +"</option>";
                         }
                         item1.append(html);
                     }
                    // console.log(response);
                 },

                 error: function (jqXHR) {
                     var response = $.parseJSON(jqXHR.responseText);
                     console.log(response);

                 }
             });

             $("#category-description").css("display","block");
             $("#main-category").css("display","none");
             $("#sub-category-description").css("display","none");
         }
         function subCategoryDescription() {
             $.ajax({
                 url: "/get/sub/category/list",
                 type: 'GET',

                 success: function (response) {

                     if(response.length > 0){
                         var item = $("#categ_descrption");
                         item.empty();
                         var html1 = "";
                         html1 += "<option value=\"\"> -- Default -- </option>";
                         for (var i = 0; i < response.length; i++) {
                             html1 += "<option value= \" "+response[i]['id'] +"\"> "+response[i]['category_description_name'] +"</option>";
                         }
                         item.append(html1);
                     }
                    // console.log(response);
                 },

                 error: function (jqXHR) {
                     var response = $.parseJSON(jqXHR.responseText);
                     console.log(response);

                 }
             });

             $("#category-description").css("display","none");
             $("#main-category").css("display","none");
             $("#sub-category-description").css("display","block");
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
         saveCategory = function () {
             $("#main-category").css("opacity","0.5");
             $("#loading-image").css("display","block");
             $(".category_btn").prop("disabled",true);

             $.ajax({
                 url: "/Manage/Save/Category",
                 type: 'POST',
                 data: {category: $("#category").val()},
                 success: function (response) {
                     //console.log(response);
                     $("#fail_category").css("display","none");
                     $(".category_btn").prop("disabled",false);
                     $("#success_category").css("display","block");
                 },

                 error: function (jqXHR) {
                     var response = $.parseJSON(jqXHR.responseText);
                     //console.log(jqXHR);
                     //console.log(response);
                     if(response) {
                         $("#fail_category").css("display","block");
                         var message = $("#category_error");
                         message.empty();
                         message.append(response['category'].toString());
                         $("#loading-image").css("display", "none");
                         $("#main-category").css("opacity","unset");
                         document.getElementById('category').value = '';
                         $(".category_btn").prop("disabled",false);

                         //hide success alert after 3 seconds
                         setTimeout(function(){
                             $("#success_category").css("display","none");
                         },3000);
                     }
                 }
             }).done (function(data){
                 $("#loading-image").css("display", "none");
                 $("#main-category").css("opacity","unset");
                 document.getElementById('category').value = '';

                 //hide success alert after 3 seconds
                 setTimeout(function(){
                     $("#success_category").css("display","none");
                 },3000);
             });
         }
     </script>

 <script type="text/javascript">
     saveDescription = function () {
         $("#category-description").css("opacity","0.5");
         $("#loading-image-description").css("display","block");
         $(".description_btn").prop("disabled",true);

         $.ajax({
             url: "/Manage/Save/Description",
             type: 'POST',
             data: {category: $("#categ").val(),description: $("#category_description").val()},
             success: function (response) {
                // console.log(response);
                 $("#fail_category_description").css("display","none");
                 $(".description_btn").prop("disabled",false);
                 $("#success_category_description").css("display","block");
             },

             error: function (jqXHR) {
                 var response = $.parseJSON(jqXHR.responseText);
                 //console.log(jqXHR);
                 //console.log(response);
                 if(response) {
                     $("#fail_category_description").css("display","block");
                     var message = $("#category_description_error");
                     message.empty();
                     if(response['category']){
                         message.append("<br/>"+response['category'].toString()+"<br/>");
                     }
                     if(response['description']){
                         message.append("<br/>"+response['description'].toString()+"<br/>");
                     }

                     $("#loading-image-description").css("display", "none");
                     $("#category-description").css("opacity","unset");

                     //hide success alert after 3 seconds
                     setTimeout(function(){
                         $("#success_category_description").css("display","none");
                     },3000);
                 }
             }
         }).done (function(data){
             $("#loading-image-description").css("display", "none");
             $("#category-description").css("opacity","unset");
             $(".description_btn").prop("disabled",false);
             document.getElementById('category_description').value = '';
             $('#categ').prop('selectedIndex',0);
             //hide success alert after 3 seconds
             setTimeout(function(){
                 $("#success_category_description").css("display","none");
             },3000);
         });
     }
 </script>
 <script type="text/javascript">
     saveSubDescription = function () {
         $("#sub-category-description").css("opacity","0.5");
         $("#loading-image-sub-description").css("display","block");
         $(".sub_description_btn").prop("disabled",true);

         $.ajax({
             url: "/Manage/Save/Sub/Description",
             type: 'POST',
             data: {description: $("#categ_descrption").val(),sub_description: $("#sub_category_description").val()},
             success: function (response) {
                 //console.log(response);
                 $("#fail_sub_category_description").css("display","none");
                 $(".sub_description_btn").prop("disabled",false);
                 $("#success_sub_category_description").css("display","block");
             },

             error: function (jqXHR) {
                 var response = $.parseJSON(jqXHR.responseText);
                 //console.log(jqXHR);
                 //console.log(response);
                 if(response) {
                     $("#fail_sub_category_description").css("display","block");
                     var message = $("#sub_category_description_error");
                     message.empty();
                     if(response['description']){
                         message.append("<br/>"+response['description'].toString()+"<br/>");
                     }
                     if(response['sub_description']){
                         message.append("<br/>"+response['sub_description'].toString()+"<br/>");
                     }

                     $("#loading-image-sub-description").css("display", "none");
                     $("#sub-category-description").css("opacity","unset");
                     $(".sub_description_btn").prop("disabled",false);
                     //hide success alert after 3 seconds
                     setTimeout(function(){
                         $("#success_sub_category_description").css("display","none");
                     },3000);
                 }
             }
         }).done (function(data){
             $("#loading-image-sub-description").css("display", "none");
             $("#sub-category-description").css("opacity","unset");
             $(".sub_description_btn").prop("disabled",false);
             document.getElementById('sub_category_description').value = '';
             $('#categ_descrption').prop('selectedIndex',0);
             //hide success alert after 3 seconds
             setTimeout(function(){
                 $("#success_sub_category_description").css("display","none");
             },3000);
         });
     }
 </script>

@endsection