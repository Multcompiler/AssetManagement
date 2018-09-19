@extends("main")

@section("title","| View Fields Details")

@section("link-description")
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="/">Home</a>
            <span class="breadcrumb-item active">View Fields Info</span>
        </nav>
    </div>
@endsection
@section("main-content")
    <div class="row row-sm mg-t-20">
        <div class="col-md-12">

            <div class="ht-md-60 wd-200 wd-md-auto bg-gray-200 pd-y-20 pd-md-y-0 d-md-flex align-items-center justify-content-center" style="margin-bottom: 20px;">
                <ul class="nav nav-effect nav-effect-7 tx-uppercase tx-bold tx-spacing-2 flex-column flex-md-row" role="tablist">
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Armament</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Communication</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Vehicles</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Aircrafts</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Equipments</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Plants</a></li>
                </ul>
            </div>

            <div class="card shadow-base bd-0 pd-25 mg-t-20">
                <h5 class="br-section-label" style="margin: 10px 0 20px 0;text-align: center;">Base Item List</h5>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">First name</th>
                            <th class="wd-15p">Last name</th>
                            <th class="wd-20p">Position</th>
                            <th class="wd-15p">Start date</th>
                            <th class="wd-10p">Salary</th>
                            <th class="wd-25p">E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger</td>
                            <td>Nixon</td>
                            <td>System Architect</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>t.nixon@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Garrett</td>
                            <td>Winters</td>
                            <td>Accountant</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>g.winters@datatables.net</td>
                        </tr>

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

    <script>
        $('#datatable1').DataTable({
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