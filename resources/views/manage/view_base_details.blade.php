@extends("main")

@section("title","| View Base Details")

@section("link-description")
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="/">Home</a>
            <span class="breadcrumb-item active">View Base Info</span>
        </nav>
    </div>
@endsection
@section("main-content")
    <div class="row row-sm mg-t-20">
        <div class="col-md-12">

            <div class="ht-md-60 wd-200 wd-md-auto bg-gray-200 pd-y-20 pd-md-y-0 d-md-flex align-items-center justify-content-center" style="margin-bottom: 20px;">
                <ul class="nav nav-effect nav-effect-7 tx-uppercase tx-bold tx-spacing-2 flex-column flex-md-row" role="tablist">
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" onclick="viewCategory()" role="tab">Category</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" onclick="viewDescription()" role="tab">Description</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" onclick="viewSubDescription()" role="tab">Sub-Description</a></li>
                </ul>
            </div>

            <div class="card shadow-base bd-0 pd-25 mg-t-20" id="startup">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Select The List To View</h5>
            </div>
            <div class="card shadow-base bd-0 pd-25 mg-t-20" id="category" style="display: none;">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Category Items List</h5>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-15p"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon">
                                    <div><i class="fa fa-pencil"></i></div>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon">
                                    <div><i class="fa fa-trash"></i></div>
                                </a>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card shadow-base bd-0 pd-25 mg-t-20" id="description" style="display:none ;">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Description Items List</h5>
                <div class="table-wrapper">
                    <table id="datatable2" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-15p">Description Name</th>
                            <th class="wd-15p"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($description as $desc)
                            <tr>
                                <td>{{\App\MainCategory::where("id",$desc->category_id)->pluck("category_name")->first()}}</td>
                                <td>{{$desc->category_description_name}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon">
                                        <div><i class="fa fa-pencil"></i></div>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon">
                                        <div><i class="fa fa-trash"></i></div>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card shadow-base bd-0 pd-25 mg-t-20" id="sub_description" style="display:none;">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Sub Description Items List</h5>
                <div class="table-wrapper">
                    <table id="datatable3" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="wd-15p">Description Name</th>
                            <th class="wd-15p">Sub Description Name</th>
                            <th class="wd-15p"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sub_description as $sub_desc)
                            <tr>
                                <td>{{\App\CategoryDescription::where("id",$sub_desc->category_description_id)->pluck("category_description_name")->first()}}</td>
                                <td>{{$sub_desc->sub_category_description_name}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon">
                                        <div><i class="fa fa-pencil"></i></div>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon">
                                        <div><i class="fa fa-trash"></i></div>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

                </div><!-- d-flex -->

            </div><!-- card -->

        </div><!-- col-8 -->
    </div>

@endsection

@section("page-script")
<script type="text/javascript">
    function viewCategory() {
        $("#category").css("display","block");
        $("#description,#sub_description,#startup").css("display","none");
    }

    function viewDescription() {
        $("#description").css("display","block");
        $("#category,#sub_description,#startup").css("display","none");
    }
    function viewSubDescription() {
        $("#sub_description").css("display","block");
        $("#category,#description,#startup").css("display","none");
    }
</script>

    <script>
        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('#datatable2').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('#datatable3').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
    </script>
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

@endsection