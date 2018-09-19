@extends("main")

@section("title","| Home")

@section("main-content")
    <div class="row row-sm mg-t-20">
        <div class="col-md-4">
            <div class="card bd-0 shadow-base pd-25 mg-t-20">
                <div class="row mg-t-20">
                    <div class="widget-2" style="margin-bottom: 5px;">
                        <div class="card shadow-base overflow-hidden">
                            <div class="card-header">
                                <h6 class="card-title">Profile Statistics</h6>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#" class="btn active">Today</a>
                                    <a href="#" class="btn">This Week</a>
                                    <a href="#" class="btn">This Month</a>
                                </div>
                            </div><!-- card-header -->
                            <div class="card-body pd-0 bd-color-gray-lighter">
                                <div class="row no-gutters tx-center">
                                    <div class="col-6 col-sm-4 pd-y-20">
                                        <h5 class="tx-inverse tx-lato tx-bold mg-b-5">133</h5>
                                        <p class="tx-12 mg-b-0">Armament</p>
                                    </div><!-- col-2 -->
                                    <div class="col-6 col-sm-4 pd-y-20 bd-l bd-color-gray-lighter">
                                        <h5 class="tx-inverse tx-lato tx-bold mg-b-5">102</h5>
                                        <p class="tx-12 mg-b-0">Communication</p>
                                    </div><!-- col-2 -->
                                    <div class="col-6 col-sm-4 pd-y-20 bd-l bd-color-gray-lighter">
                                        <h5 class="tx-inverse tx-lato tx-bold mg-b-5">343</h5>
                                        <p class="tx-12 mg-b-0">Vehicles</p>
                                    </div><!-- col-2 -->
                                    <div class="col-6 col-sm-4 pd-y-20 bd-l bd-color-gray-lighter">
                                        <h5 class="tx-inverse tx-lato tx-bold mg-b-5">960</h5>
                                        <p class="tx-12 mg-b-0">Aircraft</p>
                                    </div><!-- col-2 -->
                                    <div class="col-6 col-sm-4 pd-y-20 bd-l bd-color-gray-lighter">
                                        <h5 class="tx-inverse tx-lato tx-bold mg-b-5">960</h5>
                                        <p class="tx-12 mg-b-0">Engineering</p>
                                    </div>
                                    <!-- col-2 --><div class="col-6 col-sm-4 pd-y-20 bd-l bd-color-gray-lighter">
                                        <h5 class="tx-inverse tx-lato tx-bold mg-b-5">960</h5>
                                        <p class="tx-12 mg-b-0">Plants</p>
                                    </div><!-- col-2 -->
                                </div><!-- row -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- widget-2 -->
                </div><!-- row -->
            </div><!-- card -->

        </div><!-- col-8 -->
        <div class="col-md-8 mg-t-20 mg-lg-t-0">
            <div class="card bd-0 mg-t-20">
                <div id="carousel12" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel12" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel12" data-slide-to="1"></li>
                        <li data-target="#carousel12" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="bg-br-primary  ht-300 pos-relative d-flex align-items-center rounded">
                                <img src="{{asset("img/slide1.jpeg")}}" alt="..." width="100%">
                                <div class="carousel-caption">
                                    <h5 class="lh-5 mg-b-20">Asset Storage</h5>
                                </div>
                            </div><!-- d-flex -->
                        </div>
                        <div class="carousel-item">
                            <div class="bg-info  ht-300 pos-relative d-flex align-items-center rounded">
                                <img src="{{asset("img/slide2.jpg")}}" alt="..." width="100%">
                                <div class="carousel-caption">
                                    <h5 class="lh-5 mg-b-20">Asset Storage</h5>
                                </div>

                            </div><!-- d-flex -->
                        </div>
                        <div class="carousel-item">
                            <div class="bg-purple  ht-300 d-flex pos-relative align-items-center rounded">
                                <img src="{{asset("img/slide3.jpg")}}" alt="..." width="100%">
                                <div class="carousel-caption">
                                    <h5 class="lh-5 mg-b-20">Asset Storage</h5>
                                </div>

                            </div><!-- d-flex -->
                        </div>
                    </div><!-- carousel-inner -->
                </div><!-- carousel -->
            </div><!-- card -->

        </div><!-- col-4 -->
    </div>
@endsection

@section("page-script")

@endsection