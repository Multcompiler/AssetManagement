<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="asset/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="../../../../themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="../../../../themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>ASMS @yield("title")</title>

    <?php
    header("Access-Control-Allow-Origin: *");
    ?>
    <!-- vendor css -->
    {{Html::style("css/font-awesome-4.7.0/css/font-awesome.min.css")}}
    {{Html::style("css/font-awesome-4.7.0/css/font-awesome-animated.min.css")}}
    {{Html::style("lib/Ionicons/css/ionicons.css")}}
    {{Html::style("lib/perfect-scrollbar/css/perfect-scrollbar.css")}}
    {{Html::style("lib/jquery-switchbutton/jquery.switchButton.css")}}
    {{Html::style("lib/rickshaw/rickshaw.min.css")}}
    {{Html::style("lib/datatables/jquery.dataTables.css")}}
    {{Html::style("lib/select2/css/select2.min.css")}}


    <!-- Bracket CSS -->
    {{Html::style("css/bracket.css")}}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
        });
    </script>

    <style type="text/css">
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url({{asset("images/Preloader_2.gif")}}) center no-repeat #fff;
        }


        #loading-image,#loading-image-description,#loading-image-sub-description {
            display: none;
            position: absolute;
            top: 5%;
            left: 35%;
            z-index: 100;
        }
        #loading-spinner-save {
            display: none;
            position: absolute;
            top: 50%;
            left: 45%;
            z-index: 100;
        }

        .lds-dual-ring {
            display: inline-block;
            width: 64px;
            height: 64px;
        }
        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 30px;
            height: 30px;
            margin: 40px;
            border-radius: 50%;
            border: 5px solid #fff;
            border-color: #b9a3ff transparent #b9a3ff transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

    </style>

</head>

<body>

<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>
<!-- Ends -->
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="/"><span>[</span>ASMS <i>System</i><span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>

    @include("partials.side_navigation")

</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="fa fa-bars"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="fa fa-bars"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">

        </div><!-- input-group -->
    </div>
    <div class="br-header-right">

            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">Katherine</span>
                    <img src="{{asset("img/user.png")}}" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href="#"><img src="../img/img1.jpg" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname">Katherine P. Lumaad</h6>
                        <p>youremail@domain.com</p>
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
                        <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>
                        <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>
                        <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>
                        <li><a href="#"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->



<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">

        @yield("link-description")

    <div class="br-pagebody" style="margin-top: 0;">

        @yield("main-content")

    </div><!-- br-pagebody -->
    <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2018. All Rights Reserved.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fa fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
    </footer>
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

{{Html::script("lib/jquery/jquery.js")}}
{{Html::script("lib/popper.js/popper.js")}}
{{Html::script("lib/bootstrap/js/bootstrap.js")}}
{{Html::script("lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js")}}
{{Html::script("lib/moment/moment.js")}}
{{Html::script("lib/jquery-ui/jquery-ui.js")}}
{{Html::script("lib/jquery-switchbutton/jquery.switchButton.js")}}
{{Html::script("lib/peity/jquery.peity.js")}}
{{Html::script("lib/d3/d3.js")}}
{{Html::script("lib/rickshaw/rickshaw.min.js")}}
{{Html::script("lib/select2/js/select2.full.min.js")}}
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCuWEQWfVkWfcUoSIZeGw5JioT9LVCwYkE"></script>
{{Html::script("lib/gmaps/gmaps.js")}}
{{Html::script("js/bracket.js")}}
{{Html::script("js/map.shiftworker.js")}}
{{Html::script("js/ResizeSensor.js")}}
{{Html::script("js/dashboard.js")}}

{{Html::script("lib/datatables/jquery.dataTables.js")}}
{{Html::script("lib/datatables-responsive/dataTables.responsive.js")}}
{{Html::script("lib/select2/js/select2.min.js")}}

@yield("page-script")

<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>

<!-- Hotjar Tracking Code for themepixels.me -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:821333,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</body>


</html>
