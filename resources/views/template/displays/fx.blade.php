<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="pageid" content="<? echo rand(); ?>">

    <meta name="description" content="">

    <title>Published Copy</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link rel="stylesheet" type="text/css" href="css/custom2.css" />

    <link rel="stylesheet" type="text/css" href="css/style1.css" />

    <link href="sliderengine/slick/slick.css" rel="stylesheet" type="text/css" media="all" />

    <link href="sliderengine/slick/slick-theme.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/javascript" src="js/jquery.js"> </script>
    <script src="sliderengine/html5gallery.js"></script>

    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/moment-timezone-with-data.min.js"></script>

    <!-- <link rel="stylesheet" href="slider/style.css" />
    <script src="slider/script.js"></script> -->

    <style type="text/css">
        /*Clock Style*/
        #info-box {
            width: 400px;
            margin: auto;
            border: solid 0px;
        }

        /*ul li{
list-style-type: none;
}*/
        .dot {
            /*margin: auto;*/
            /*top: 0; left: 0; bottom: 0; right: 0;*/
            margin-top: -10px;
            /*font-family: 'Source Sans Pro', sans-serif;*/
            font-family: 'Lato', sans-serif;
            text-align: ;
            color: white;
            font-size: 30px;
            margin-left: -5px;
            margin-right: -5px;
        }

        .time_look {
            /*background-color: #3d3b3be3;*/
            background-color: #2c2929;
            padding: 6px;
            width: 90px;
            border-radius: 8px;
            border-color: #3d3b3bb0;
            letter-spacing: 5px;
            box-shadow: 2px 2px 4px #2726266e;
            font-family: 'Lato', sans-serif;
            font-weight: lighter;
            font-size: 30px;
            text-align: center;
        }


        #date {
            /*background-color: #2c2929;*/
            padding-top: 40px;
            font-family: 'Lato', sans-serif;
            text-align: center;
            margin-top: 20px;
            text-align: center;
            color: white;
            font-size: 22px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding-top: 5px;
            margin-left: 30px;
            /*color: white;*/
            @if($tv['show_date_image']==1) text-shadow: 2px 0 0 black, -2px 0 0 black, 0 2px 0 black, 0 -2px 0 black, 1px 1px black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
            @endif
        }


        #day {
            padding-top: 0px;
            font-family: courier, monospace;
            text-align: center;
            margin: auto;
            text-align: center;
            color: white;
            font-size: 30px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding-top: 0px;
        }

        .naviMenu ul li {
            list-style-type: none;
            display: inline;
            margin-top: 10px;
            margin-bottom: 50px;
            /*text-align:center;*/
            margin-right: 10px;
        }

        .fx_currency {
            font-size: 17px;
        }

        .fx_currency_div {
            display: inherit;
        }

        .modal-dialog {
            width: 1340px;
            margin: 30px auto;
        }

        .modal-body {
            position: relative;
            padding: 21px 50px;
            color: black;
        }

        .mydate {
            font-size: 18px;
        }

        .option1 {
            background: url("flag/USD.png") center / contain no-repeat;
        }

        .option2 {
            background: url("flag/EUR.png") center / contain no-repeat;
        }

        .option3 {
            background: url("flag/GBP.png") center / contain no-repeat;
        }

        .floatImage {
            display: block;
            float: right;
            margin-top: -37px;
        }

        .style:focus {
            background-color: #036603;
            border: 1px solid #036603;
        }




        .vl {
            display: inline-block;
            border-left: 1px solid red;
            height: 60px;
            margin-bottom: -30px;
            margin-top: -30px;
        }
    </style>
    <script>
        function setbackground() {
            window.setTimeout("setbackground()", 1800000); // 5000 milliseconds delay
            var index = Math.round(Math.random() * 3);
            var ColorValue = "#180b50"; // default color - blue (index = 0)
            var headingColor = "#11147f";

            if (index == 1) {
                ColorValue = "rgb(51, 51, 51)"; //grey
                headingColor = "rgb(85, 85, 85)"
            }

            if (index == 2) {
                ColorValue = "#A22005"; //red
                headingColor = "rgb(215, 35, 35)"
            }

            document.body.style.backgroundColor = ColorValue;
            let heading = document.getElementsByClassName("myHeader");
            let heading4 = document.getElementsByClassName("myHeader1");

            heading[0].style.backgroundColor = headingColor;
            heading[1].style.backgroundColor = headingColor;
            heading[2].style.backgroundColor = headingColor;
            heading4[0].style.backgroundColor = headingColor;
        }
    </script>
    <style>
        #loaderBody {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: fixed;
            background: black;
            color: white;
            z-index: 999000000000000;
        }
    </style>
    <script>
        setTimeout(function() {
            document.getElementById('loaderBody').style.display = 'none';
        }, 5000);
    </script>

</head>


<body id="myHeader" changePageID="<? echo rand(); ?>">

    <input type="hidden" name="cur_update_key" value="<?php echo rand(99999999999999, 300000000000000) . 'update' . rand(99999999999999, 700000000000000) ?>">
    <div id="loaderBody">
        <div class="loader">
            <img src="time/loader.gif" alt="" width="350">
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="videoSection col-md-8 col-lg-8 col-sm-8 padOff">
            <div style="display:none; border:0px; margin:0 auto;" data-padding="10" data-bgimage="null" class="html5gallery" data-html5player="true" data-width="480" data-height="295" data-resizemode="fill"  data-skin="none" data-autoslide="true" data-autoplayvideo="true" data-effect="crossfade" data-showcarousel="false" data-showtitle="false" data-bgcolor="#000" data-slideshadow="false" data-galleryshadow="false">
                            @foreach($medias as $media)
                            @if($media->content_type == 'schedule')
                            @if($media->type == 'video')
                            <a href="videobank/item{{$media->file}}.mp4"><img src="logo/logo01.png" alt="item{{$media->file}}"></a>
                            @endif
                            @if($media->type == 'image')
                            <a href="videobank/item{{$media->file}}.png"><img src="logo/logo01.png" alt="item{{$media->file}}"></a>
                            @endif
                            @endif

                            @if($media->content_type == 'master')
                            @if($media->type == 'video')
                            <a href="video/item{{$media->file}}.mp4"><img src="logo/logo01.png" alt="item{{$media->file}}"></a>
                            @endif
                            @if($media->type == 'image')
                            <a href="video/item{{$media->file}}.png"><img src="logo/logo01.png" alt="item{{$media->file}}"></a>
                            @endif
                            @endif
                            @endforeach
                </div>

                <div class="row underVideo" style="margin-top:-10px">

                    <div class="col-md-3 padRightOff" style="margin-top: -4.6px;">

                        <div class="row">

                            <div class="col-md-12">
                                <div>
                                    <h4 class="myHeader1" style="line-height: 30px;">&nbsp;&nbsp;&nbsp; {{$tab->news_title}} </h4>
                                </div>
                                <a data-target=".check-networ" id="template_logo" data-toggle="modal" id="check-network" type="button">

                                    <div class="slide1">

                                        @foreach($logos as $logo)
                                        <div><img src="logo/logo{{$logo->image.'.'.$logo->extension}}" alt="" title="" /></div>
                                        @endforeach

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-9 padLeftOff">

                        <span class="myScroll" style="height: 62px">

                            <marquee id="mymarquee" style="margin-top: 0px">
                                @foreach($custom_news as $news)
                                @if($news->is_active)
                                <img src="rss/images/{{$news->image}}" style=" border-radius:38%; width:40px; height:40px"></img> {{$news->name}}
                                <div class='vl'></div>
                                &nbsp;{{$news->content}} &nbsp;
                                <div class='vl'></div>
                                @endif
                                @endforeach

                                @foreach($rss_news as $news)
                                @if($news->is_active)
                                <img src="rss/images/{{$news->image}}" style=" border-radius:38%; width:40px; height:40px"></img> {{$news->name}}
                                <div class='vl'></div>
                                &nbsp;{{Rss::output_rss_feed($news->link, $news->count)}} &nbsp;
                                <div class='vl'></div>
                                @endif
                                @endforeach
                            </marquee>

                        </span>
                        <div class="slide2">
                            @foreach($banners as $banner)
                            <div><img src="banner/banner{{$banner->file}}.{{$banner->extension}}" alt="" title="" /></div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4 col-lg-4 col-sm-4 padOff">
            @if($tv->clockLayout == 5)
                @if($tv->show_date_image == 1)
                <div class="tm" style="margin-top: -5%; margin-bottom: 40px; background-image: url('time/{{$tv->clockImage}}'); background-size: 100% 100%;">
                    @endif

                    @if($tv->show_date_image == 0)
                    <div class="tm" style="margin-top: -5%; margin-bottom: 0px; background: {{$tv->clock_background_color}}; height: 100%; padding-bottom:44px">
                        @endif
                        <!-- <div style="background-color: black"> -->
                        <!-- <iframe src="clock.html" height="50" width="350" style="border-style: none;"></iframe> -->

                        <div id="info-box">
                            <div class="responses" style="text-align: center;">
                                <!-- <div id="day"></div> -->
                                @if($tv->show_time == 0)
                                <div id="calendar" style="margin-top: 48px;margin-bottom:43px;margin-left: 60px;font-size: 20px"></div>
                                @endif
                                @if($tv->show_time == 1)
                                <div id="calendar" style="margin-top: 25px;margin-bottom:10px;margin-left: 0px;font-size: 20px"></div>
                                @endif



                                <div class="row naviMenu" style="margin-left: -40px">
                                    <!-- <p id="hour"></p>
<p id="minute"></p> -->
                                    @if($tv->show_time == 1)
                                    <ul style="">
                                        <li class="time_look" id="hour"></li>
                                        <li class="dot">:</li>
                                        <li class="time_look" id="minute"></li>
                                        <li class="dot">:</li>
                                        <li class="time_look" id="second"></li>
                                        <!-- <li style="margin-left: 10px"></li> -->
                                        <li class="dot">:</li>
                                        <li class="time_look" id="meridiem"></li>
                                    </ul>
                                    @endif
                                </div>

                                <div class="row naviMenu">
                                    <!-- <p id="hour"></p>
<p id="minute"></p> -->
                                    @if($tv->show_time == 2)
                                    <ul style="margin-top: 48px;margin-bottom:30px;">
                                        <li class="time_look" id="hour"></li>
                                        <li class="dot">:</li>
                                        <li class="time_look" id="minute"></li>
                                        <li class="dot">:</li>
                                        <li class="time_look" id="second"></li>
                                        <!-- <li style="margin-left: 10px"></li> -->
                                        <li class="dot">:</li>
                                        <li class="time_look" id="meridiem"></li>
                                    </ul>
                                    @endif
                                </div>


                            </div>
                            <div id="storage_calendar" class="response" style="margin-top: 48px;margin-bottom:85px;margin-left: 60px;font-size: 20px;display:none;"></div>
                            <!-- <h4 id="meridiem"></div> -->
                            <!-- <div id="day"></div> -->
                        </div>
                        <!-- </div> -->
                    </div>

                    @else
                                <iframe  src="{{$app_url}}{{Variables::tvPath('clock/'.$tv->clockLayout.'/index.html')}}"  scrolling="no" style=" width: 100%; height: 40%; border: none; margin:-10px 0px 25px 0px; padding: 0; overflow:hidden;  "></iframe>
                                @endif
                    <!-- <iframe src = "clock/1/index.html"  scrolling="no" width = "100%" height = "170px">

                    Sorry your browser does not support inline frames.

                </iframe> -->

                    <table class="table table-responsive firstTable" style="margin-top: -30px">

                        <thead>

                            <tr>

                                <th colspan="3" class="myHeader" style="border-bottom: 0px !important;border-top: 0px !important">{{$tab->tab1}}</th>

                            </tr>

                            <tr class="rowBorder" style="border-bottom: 0px !important;border-top: 0px !important">

                                <th class="myTd1" style="text-align: center;">{{$tab->tab4}}</th>

                                <th class="myTd1" style="text-align: center;">{{$tab->tab5}}</th>

                                <th class="myTd1" style="text-align: center;">{{$tab->tab6}}</th>

                            </tr>

                        </thead>
                        <tbody id="dynamic_exchange_body_mobile">
                        </tbody>
                    </table>

                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="3" class="myHeader">{{$tab->tab2}}</th>
                            </tr>
                        </thead>
                        <tbody id="pta_body_mobile">
                        </tbody>
                    </table>

                    @if($tv->interest_rate_type == 1)
                    <table class="table table-responsive lastTable" style="margin-top: 1px">

                        <thead>

                            <tr>

                                <th colspan="3" class="myHeader block">{{$tab->tab3}}</th>

                            </tr>

                            <tr class="" width="100%">

                                <th cla style="text-align: left;line-height:1.0em;color: #94a8f1;" width="30%">Deposit <span style="font-size: 15px; font-weight: bold;">Band(₦)</span></th>

                                <th width="20%" style="text-align: center;line-height:1.0em;">Call <span style="font-size: 15px; font-weight: bold;">Deposit</span></th>

                                <th width="20%" class="" style="text-align: center;line-height:1.0em;">30 <span style="font-size: 15px; font-weight: bold;">Days</span></th>

                                <th width="20%" style="text-align: center;line-height:1.0em;">60 <span style="font-size: 15px; font-weight: bold;">Days</span></th>

                                <th width="20%" style="text-align: center;line-height:1.0em;">90 <span style="font-size: 15px; font-weight: bold;">Days</span></th>
                                <th></th>



                            </tr>

                        </thead>

                        <tbody class="interest_slider" id="dynamic_interest_body">


                        </tbody>

                    </table>
                    @endif
                    @if($tv->interest_rate_type == 0)

                    <table class="table table-responsive lastTable" style="margin-top: 1px !important">

                        <thead>

                            <tr>

                                <th colspan="3" class="myHeader block">{{$tab->tab3}}</th>

                            </tr>

                            <tr class="" style="padding-left: 0%;text-align: center !important;margin-right: 20px;" id="dynamic_interest_update_th_mobile">


                            </tr>

                        </thead>

                        <tbody class="interest_slider">
                            <tr class="" id="dynamic_interest_update_body_mobile" style="padding-left: 0%;text-align: center !important;margin-right: 18px" width='100%'>

                            </tr>
                        </tbody>

                    </table>
                    @endif

                </div>

            </div>

        </div>


        <div class="modal fade card-signin" id="exampleModal0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 10000;vertical-align: middle;">
            <div class="modal-dialog modal-dialog-centered" role="document" style="width: 80%;height: 90vh">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                            <div class="col-md-4" style="text-align: center">
                                <div class="form-label-group">
                                    <p class="mydate">Date and Time (Compulsory)</p>
                                    <input class="form-control" type="datetime-local" id="update_date">
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: center">
                                <p class="mydate">Last Update On : <span id="fx_date"></span> </p>
                                <button data-dismiss="modal" aria-label="Close" class="btn btn-lg btn-danger btn-block text-uppercase"> Bact To Display</button>
                            </div>

                            <div class="col-md-4" style="text-align: center">
                                <p class="mydate">Click to update</p>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="submit" onclick="submit()">UPDATE</button>
                            </div>
                        </div>

                    </div>
                    <div class="modal-body mysettings form-signin">

                        <div class="row">

                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="align-items:center">

                                <li class="nav-item">
                                    <a class="nav-link active" id="hide" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">FX RATE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hide1" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Network Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hide2" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">{{$tab->announcement}} & {{$tab->training}}</a>
                                </li>
                                <p id="demo" style="float: right;"></p>
                                <!-- <p id="demo"></p> -->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="row" style="height: 20vh" id="fol">

                                    <!-- <div><p id="demo" style="float: right;"></p></div> -->
                                    <div style="font-size:20px;font-weight: bolder; margin-top: 30px;margin-left: 90px">
                                        <img src="logo/{{$tv->localUpdateLogo}}" alt="" title="" style="width: 92%;
height: 400px;object-fit: cover;" />
                                    </div>
                                </div>
                                <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    @if($tv->interest_rate_type == 0)
                                    <div class="col-md-4">
                                        <h5 class="card-title text-center" style="margin-bottom: 30px"> Rate Guide</h5>
                                        <div id="dynamic_exchange_body1"></div>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="card-title text-center" style="margin-bottom: 40px"> PTA Rate</h5>
                                        <div id="dynamic_pta_body1"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title text-center" style="margin-bottom: 20px"> Interest Rate</h5>
                                        <div class="row">
                                            <div class="col" id="dynamic_interest_body2"></div>
                                        </div>
                                    </div>
                                    @endif

                                    @if($tv->interest_rate_type == 1)
                                    <div class="col-md-3">
                                        <h5 class="card-title text-center" style="margin-bottom: 30px"> Rate Guide</h5>
                                        <div id="dynamic_exchange_body1"></div>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="card-title text-center" style="margin-bottom: 40px"> PTA RATE</h5>
                                        <div id="dynamic_pta_body1"></div>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="card-title text-center" style="margin-bottom: 20px"> Interest Rate</h5>
                                        <div class="row">
                                            <!-- <div class="col" id="deposit_band"></div> -->
                                            <div class="col" id="dynamic_interest_body1"></div>
                                        </div>


                                        @endif



                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-7" style="height: 50vh">

                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <button id="online" class="btn btn-lg btn-success btn-block text-uppercase style" style="position: absolute;right: 0;margin-top: 10px; font-size: 15px">Online Connection</button>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <button id="offline" class="btn btn-lg btn-success btn-block text-uppercase style" style="position: absolute;right: 0;margin-top: 10px; font-size: 15px">Server Connection</button>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 70px;height: 35vh" id="ubaiframeHolder"></div>


                                                <!-- <iframe id="http://bing.com" style="margin-top: 10px" src="https://www.bing.com/search?igu=1" width = "100%" height="100%">
        Sorry your browser does not support inline frames.
    </iframe> -->
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4" style="height: 50vh">
                                                <button id="fast" class="btn btn-lg btn-success btn-block text-uppercase style" style="position: absolute;right: 0;margin-top: 10px;font-size: 15px">Speed Test</button>
                                                <div style="margin-top: 70px;height: 35vh" id="iframeHolder"></div>
                                            </div>
                                        </div>
                                        <!-- <iframe id="check-network2" style="margin-top: 10px" src="check-network.html"  scrolling="no" width = "100%" height="100%">
Sorry your browser does not support inline frames.
</iframe> -->

                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="row" style="margin-top: 3px;background-color: #180b50;height: 40vh">
                                            <div class="row" style="margin-top: 2px;">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4" style="margin-top: 6%">
                                                    <a href="./announce.html" style="color: white;font-size: 30px" target="_blank">
                                                        <button class="btn btn-lg btn-primary btn-block text-uppercase">{{$tab->announcement}}</button></a>
                                                </div>
                                                <div class="col-md-4"></div>

                                            </div>
                                            <div class="row" style="margin-top: 3px;">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4" style="margin-top: 2%">
                                                    <a href="./morning.html" style="color: white;font-size: 30px" target="_blank">
                                                        <button class="btn btn-lg btn-primary btn-block text-uppercase">Morning {{$tab->training}}</button></a>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                            <div class="row" style="margin-top: 3px;">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4" style="margin-top: 2%">
                                                    <a href="./afternoon.html" style="color: white;font-size: 30px" target="_blank">
                                                        <button class="btn btn-lg btn-primary btn-block text-uppercase">Afternoon {{$tab->training}}</button></a>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                            <div class="row" style="margin-top: 3px;">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4" style="margin-top: 2%">
                                                    <a href="./evening.html" style="color: white;font-size: 30px" target="_blank">
                                                        <button class="btn btn-lg btn-primary btn-block text-uppercase">Evening {{$tab->training}}</button></a>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function handleClick(e) {

                let element = $('#check-network2').attr('src', 'check-network.html');

            }
        </script>

        <script src="sliderengine/slick/slick.min.js"></script>

        <script src="sliderengine/slick/utility.js"></script>


        <a href="{{$app_url}}{{Variables::tvPath('flag/GBP.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/EUR.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/USD.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/CNY.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/CDF.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('flag/GHS.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/GNF.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/KES.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('flag/LRD.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/MZN.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/SLL.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('flag/TZS.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/UGX.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XAF.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('flag/XAF2.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XAF3.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('flag/XAF4.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XOF1.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XOF2.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XOF.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XOF3.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/XOF4.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('flag/ZMW.png')}}"></a>


        <a href="{{$app_url}}{{Variables::tvPath('index.html')}}?nocache=<?php echo rand(100, 998000); ?>"></a>
        <a href="{{$app_url}}{{Variables::tvPath('announce.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('morning.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('afternoon.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('evening.html')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('train/item01.png')}}"></a>
        @foreach($tv['trainingVideos'] as $video)
        <a href="{{$app_url}}{{Variables::tvPath('train/item'.$video->video.'.mp4')}}"></a>
        @endforeach

        <a href="{{$app_url}}{{Variables::tvPath('announce/announce.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('scheduledplaylist/scheduleplaylist.xlsx')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('multimedia/index.html')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('templates/templatestyle.xlsx')}}"></a>

        @if($tv->clockLayout != 1)
            <a href="{{$app_url}}{{Variables::tvPath('clock/1/index.html')}}"></a>
        @endif
        @if($tv->clockLayout != 2)
            <a href="{{$app_url}}{{Variables::tvPath('clock/2/index.html')}}"></a>
        @endif
        @if($tv->clockLayout != 3)
            <a href="{{$app_url}}{{Variables::tvPath('clock/3/index.html')}}"></a>
        @endif
        @if($tv->clockLayout != 4)
            <a href="{{$app_url}}{{Variables::tvPath('clock/4/index.html')}}"></a>
        @endif

        <a href="{{$app_url}}{{Variables::tvPath('webview2/index.html')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('rss/news.xlsx')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('time/time.png')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('videobank')}}"></a>



        @foreach($waitingMediaItems as $item)
                @if($item->type == 'video')
                <a href="{{$app_url}}{{Variables::tvPath('videobank/item'.$item->file.'.mp4')}}"></a>
                @endif
                @if($item->type == 'image')
                <a href="{{$app_url}}{{Variables::tvPath('videobank/item'.$item->file.'.png')}}"></a>
                @endif
        @endforeach
        @foreach($medias as $media)
                            @if($media->content_type == 'schedule')
                            @if($media->type == 'video')
                            <a href="{{$app_url}}{{Variables::tvPath('videobank/item'.$media->file.'.mp4')}}"></a>
                            @endif
                            @if($media->type == 'image')
                            <a href="{{$app_url}}{{Variables::tvPath('videobank/item'.$media->file.'.png')}}"></a>
                            @endif
                            @endif

                            @if($media->content_type == 'master')
                            @if($media->type == 'video')
                            <a href="{{$app_url}}{{Variables::tvPath('video/item'.$media->file.'.mp4')}}"></a>
                            @endif
                            @if($media->type == 'image')
                            <a href="{{$app_url}}{{Variables::tvPath('video/item'.$media->file.'.png')}}"></a>
                            @endif
                            @endif
                            @endforeach



        <script>
            $(function() {
                $('#fast').click(function() {
                    // if(!$('#iframe').length) {
                    $('#iframeHolder').html('<iframe id="https://fast.com/" src="https://fast.com/" width="100%" height="100%" scrolling="no" style="-webkit-transform:scale(1.0);-moz-transform-scale(1.0);"></iframe>');
                    // }
                });

                $('#online').click(function() {
                    // if(!$('#iframe').length) {
                    $('#ubaiframeHolder').html('<iframe id="http://192.168.1.43:81/uba/" src="https://www.bing.com/?id=1" width="100%" height="100%" scrolling="yes" style="-webkit-transform:scale(1.0);-moz-transform-scale(1.0);"></iframe>');
                    // }
                });

                $('#offline').click(function() {
                    // if(!$('#iframe').length) {
                    $('#ubaiframeHolder').html('<iframe id=\'{{$app_url}}{{Variables::tvPath("index.html")}}\' src=\'{{$app_url}}{{Variables::tvPath("index.html")}}\' width="100%" height="100%" scrolling="yes" style="-webkit-transform:scale(1.0);-moz-transform-scale(1.0);"></iframe>');
                    // }
                });
            });
            // function hide(){
            //     alert("Hello")
            //     var x = document.getElementById("myDIV");
            //       if (x.style.display === "none") {
            //         x.style.display = "block";
            //       }
            // }
            $(document).ready(function() {
                $("#hide").click(function() {
                    $("#fol").hide();
                });
                $("#hide1").click(function() {
                    $("#fol").hide();
                });
                $("#hide2").click(function() {
                    $("#fol").hide();
                });
            });

            function isOnline() {
                // alert("hello");
                if (navigator.onLine) {
                    document.getElementById(
                        "demo").innerHTML = "<span class='badge badge-success' style='background:green'>You are online</span>";
                } else {
                    document.getElementById(
                        "demo").innerHTML = "<span class='badge badge-success' style='background:red'>You are offline</span>";
                }
            }

            $(document).ready(function(e) {
                $(".wrap").css("background-color", "yellow");

                $('.interest_slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 7000,
                    dots: false,
                    prevArrow: false,
                    nextArrow: false
                });



            });

            $("#template_logo").on("click", function() {
                console.log("logo is double clicked")
                isOnline();
                // window.location.href  = "settings/settings.html"
                $("#exampleModal0").modal('show');
            })
        </script>













        <script type="text/javascript">
            /*I'll be cleaning this code up. There's definitely some redundancy in calling a new Date() object, for example*/

            //create document ready function
            $(document).ready(function() {

                //create function to display the time
                <?php
                if ($settings->time_type == 1) {
                    echo 'function getTime(){
                        //create variable currentTime and have the Date() object store computers time
                            var currentTime = new Date();
                        //create variables for hours, minutes, and seconds
                            var hours = currentTime.getHours();
                            var minutes = currentTime.getMinutes();
                            var seconds = currentTime.getSeconds();
                            

                            var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                            var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

                            var s_month = months[currentTime.getMonth()];
                            var day_in_full = days[currentTime.getDay()];
                            var date = currentTime.getDate();
                            var year = currentTime.getFullYear();
                            var meridiems = " AM";

                            if(hours>11){
                                hours = hours - 12;
                                meridiems = " PM";
                            }
                            if(hours === 0){
                                hours = 12;
                            }
                            if (hours<10){
                                hours = "0" + hours;
                            }
                            if (minutes<10){
                                minutes = "0" + minutes;
                            }
                            if (seconds<10){
                                seconds = "0" + seconds;
                            }
                            $("#hour").text(hours);
                            $("#minute").text(minutes);
                            $("#second").text(seconds);
                            $("#meridiem").text(meridiems);
                            $("#calendar").text(date+" - "+day_in_full+" - "+s_month+" - "+year);
                            //set variable to change clockDiv in HTML
                            //var clockDiv = document.getElementById("clock");

                            //innerText to set text inside an HTML element
                            //clockDiv.innerText = hours + ":" + minutes + ":" + seconds + meridiem;
                        }';
                }
                ?>

                function displayDate() {
                    var currentDate = new Date();
                    var days_in_full = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    var days = ["Sun", "Mon", "Tue", "Wed", "Thurs", "Fri", "Sat"];
                    var day = days[currentDate.getDay()];
                    var day_in_full = days_in_full[currentDate.getDay()];


                    var year = currentDate.getFullYear();
                    var date = currentDate.getDate();
                    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    var s_months = ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];
                    var month = months[currentDate.getMonth()];
                    var s_month = months[currentDate.getMonth()];
                    if (date < 10) {
                        date = "0" + date;
                    }

                    $("#date").text(day + " - " + date + " - " + month + " - " + year);

                    $("#day").text(day_in_full);
                    $("#today").text(date);
                    $("#month").text(s_month);
                    $("#year").text(year);
                    $("#l_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year)
                    $("#sdate").text(date + " - " + s_month + " - " + year);
                }

                <?php
                if ($settings->time_type == 0) {
                    echo 'function getTime(){
                                    var meridiems = " AM";
                                    $.ajax({
                                    url: "' . $api_url . '/api/get_server_time",
                                    data: {

                                    },
                                    success:function(data){
                                        if(data != ""){
                                        let res = JSON.parse(data)
                                        console.log(res.hours)
                                        var hours = res.hours;
                                        var minutes = res.minutes;
                                        var seconds = res.seconds;
                                        var day_in_full = res.date;
                                        var date = res.day;
                                        var s_month = res.month;
                                        var year = res.year;

                                        if(hours>11){
                                            hours = hours - 12;
                                            meridiems = " PM";
                                        }
                                        if(hours === 0){
                                            hours = 12;
                                        }
                                        if (hours<10){
                                            hours = "0" + hours;
                                        }
                                        if (minutes<10){
                                            minutes = "0" + minutes;
                                        }
                                        if (seconds<10){
                                            seconds = "0" + seconds;
                                        }
                                        $("#hour").text(hours);
                                        $("#minute").text(minutes);
                                        $("#second").text(seconds);
                                        $("#meridiem").text(meridiems);
                                        $("#calendar").text(day_in_full+" - "+date+" - "+s_month+" - "+year);
                                        localStorage.setItem("time", JSON.stringify(JSON.parse(data)));
                                        var divs = document.getElementsByTagName("div");
                                        for(var i = divs.length; i-- ;) {
                                            var div = divs[i];
                                            if(div.className === "response") {
                                                div.style.display = "none";
                                                // ul.style.display = "none";
                                            }

                                            if(div.className === "responses") {
                                                div.style.display = "block";
                                                // ul.style.display = "none";
                                            }
                                        }
                                    }else{
                                        res = JSON.parse(localStorage.getItem("time"));
                                        console.log(res);
                                        day_in_full = res.date;
                                        date = res.day;
                                        s_month = res.month;
                                        year = res.year;
                                        console.log("year "+year)
                                        $("#storage_calendar").text(day_in_full+" - "+date+" - "+s_month+" - "+year);
                                        var divs = document.getElementsByTagName("div");
                                        for(var i = divs.length; i-- ;) {
                                            var div = divs[i];
                                            if(div.className === "response") {
                                                div.style.display = "block";
                                                // ul.style.display = "none";
                                            }

                                            if(div.className === "responses") {
                                                div.style.display = "none";
                                                // ul.style.display = "none";
                                            }
                                        }





                                    }
                                    },
                                    error:function(xhr, status, error){
                                        console.log("Error: ", error);
                                        res = JSON.parse(localStorage.getItem("time"));
                                        console.log(res);
                                        day_in_full = res.date;
                                        date = res.day;
                                        s_month = res.month;
                                        year = res.year;
                                        console.log("year "+year)
                                        $("#storage_calendar").text(day_in_full+" - "+date+" - "+s_month+" - "+year);
                                        var divs = document.getElementsByTagName("div");
                                        for(var i = divs.length; i-- ;) {
                                            var div = divs[i];
                                            if(div.className === "response") {
                                                div.style.display = "block";
                                                // ul.style.display = "none";
                                            }

                                            if(div.className === "responses") {
                                                div.style.display = "none";
                                                // ul.style.display = "none";
                                            }
                                        }
                                    }
                                })

                                }


                                ';
                }
                ?>
                // displayTime();
                setInterval(getTime, 1000);
                // displayDay();
                displayDate();

            });


            window.onload = function() {
                console.log("Start up");
                var saved_fx_name = 'fetched_fx_data';
                var local_fx = JSON.parse(localStorage.getItem(saved_fx_name));
                console.log('local = ' + local_fx);
                update_fx_dom(local_fx);
                this.getTime;
                setbackground();
            }
        </script>









        <!-- to get fx rate -->
        <script>
            function update_fx_dom(data) {
                var fx_data = data.fx_data;
                var interest_data = data.interest_rate;
                var interest_rate_update = data.interest_rate_update;
                var pta_data = data.pta_data;
                fx_dom_string = ''
                var fx_dom_string_mobile = '';
                fx_data.forEach(function myFunction(value, index, array) {
                    var currency = value.currency.substr(0, 3)
                    var we_buy = value.we_buy
                    var we_sell = value.we_sell
                    var flag = value.flag


                    fx_dom_string += "<div  class='row exchange_row frate'>\
     <div class='col-sm-4' style=''> <div class='col-xs-8'>\
        <img class='media-object mc' src='flag/images/" + flag + "' alt='...' >\
     </div>\
     <div class='col-xs-4' style='padding: 0px'> <p style='float: left'>" + currency + "</p> </div>\
     </div> <div class='col-sm-4'> <p style='margin-left: 10px;'> " + we_buy + " </p> </div>\
     <div class='col-sm-4'> <p style='margin-left: 10px;'> " + we_sell + " </p> </div> </div>";


                    fx_dom_string_mobile += " <tr ><td><a class='pull-left'  style='padding-right: 10px;'>\
     <img class='media-object mc' src='flag/" + flag + "'  width='24' height='24'> </a>\
     <h4 class='ts ts1' style='color: #fff'>" + currency + "</h4> </td>\
     <td style='text-align: center'><h4 class='ts' style='color: #fff;font-size:20px; font-family:font2 !important;font-weight:normal !important'>" + we_buy + "</h4></td>\
     <td style='text-align: center'><h4 class='ts' style='color: #fff;font-size:20px; font-family:font2 !important;font-weight:normal !important'>" + we_sell + "</h4></td> </tr>";


                })
                $("#dynamic_exchange_body").html(fx_dom_string);
                $("#dynamic_exchange_body_mobile").html(fx_dom_string_mobile);


                // Add PTA rate with FX Rate
                pta_dom_string = "";
                pta_dom_string_mobile = "";
                pta_data.forEach(function myFunction(value, index, array) {
                    var name = value.name;
                    var val = value.value;
                    /* pta_dom_string += "<div  class='row exchange_row'>\
                       <div style='margin-top:70px'>\
                       <div class='col-sm-7' style='margin-left: -20px'>" + name + "</div>\
                       <div class='col-sm-5' style='text-align:right;padding-right: 10px'>" + val + "</div>\
                       </div>\
                     </div>"; */

                    pta_dom_string += "<span class='col-md-4' >" + name + "<span style='margin-left: 5px'>" + val +
                        "</span></span>";

                    pta_dom_string_mobile +=
                        "<td  class='myTd2' >" +
                        name + " " + val + "</td>";
                })
                $("#pta_body").html(pta_dom_string);
                $("#pta_body_mobile").html(pta_dom_string_mobile);


                interest_dom_string = ''
                interest_dom_string_mobile =
                    "<tr class='tp2'> <th class='tp' width='30%'>RATE%</th> <th width='35%' class='tp' style='white-space: nowrap;'>ABOVE 5M</th> <th width='35%'  class='tp' style='white-space: nowrap;'>BELOW 5M</th> </tr>";
                interest_data.forEach(function myFunction(value, index, array) {
                    var category = value.category
                    var above_5m = value.above_5m
                    var below_5m = value.below_5m
                    var above_49 = value.above_49
                    var above_99 = value.above_99
                    //    above_5m = 'Negotiable'
                    //  below_5m = 'Negotiable'


                    interest_dom_string +=
                        "<tr width='100%' style='margin-top: -10px !important;'> <td class='' width='30%' style='font-size:17px; font-family:Lato;'>" + category +
                        "</td> <td class='' width='20%' style='font-size:17px; font-family:Lato;text-align:center'>" + above_5m +
                        "</td> <td class='' width='20%' style='padding-left:2px !important;font-size:17px; font-family:Lato;text-align:center'>" + below_5m +
                        "</td><td class='' width='20%' style='font-size:17px; font-family:Lato;text-align:left'>" + above_49 +
                        "</td><td class='' width='20%' style='padding-left:2px !important;font-size:17px; font-family:Lato'>" + above_99 +
                        "</td><td></td></tr>";

                    interest_dom_string_mobile +=
                        "<tr> <td class='' style='font-size:20px; font-family:Lato'>" + category +
                        "</td> <td class='' style='font-size:20px; font-family:Lato'>" + above_5m +
                        "</td> <td class='' style='font-size:20px; font-family:Lato'>" + below_5m +
                        "</td> <td class='' style='font-size:20px; font-family:Lato'>" + above_49 +
                        "</td><td class='' style='font-size:20px; font-family:Lato'>" + above_99 +
                        "</td></tr>";


                })


                $("#dynamic_interest_body").html(interest_dom_string);
                $("#dynamic_interest_body_mobile").html(interest_dom_string_mobile);



                interest_update_th_dom_string = ""
                interest_update_body_dom_string = ""

                interest_update_dom_string_mobile = "";
                console.log(interest_rate_update)
                interest_rate_update.forEach(function myFunction(value, index, array) {
                    var name = value.name
                    var values = value.value

                    // console.log(name)
                    interest_update_dom_string_mobile += "<th class='tp' style='width:0%;font-size:18px;text-align:center' width=''>" + name + "</th>";

                    interest_update_th_dom_string += "<td class='tp' style='width:0%;font-size:18px;text-align:center' width=''>" + name + "</td>";

                    interest_update_body_dom_string +=
                        "<td class='tp' style='width:2%;margin-right:-40px;font-size:18px;text-align:center'>" + values + "</td>";

                    // interest_update_dom_string_mobile +=
                    //     "<tr> <td class='' style='font-size:20px; font-family:Lato'>" + value +
                    //     "</td></tr>";

                })
                $("#dynamic_interest_update_body").html(interest_update_dom_string_mobile);
                $("#dynamic_interest_update_th_mobile").html(interest_update_th_dom_string);
                $("#dynamic_interest_update_body_mobile").html(interest_update_body_dom_string);


                $('.interest_slider').slick('unslick');
                $('.interest_slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 7000,
                    dots: false,
                    prevArrow: false,
                    nextArrow: false
                });

                var last_update_period = data.last_update_date;
                //console.log(last_update_period)

                var months = ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct",
                    "Nov", "Dec"
                ];

                var dateObj = new Date();
                var month = dateObj.getUTCMonth(); //months from 1-12
                var day = dateObj.getUTCDate();
                var year = dateObj.getUTCFullYear();

                newdate = day + "-" + months[month] + "-" + year;

                $(".fx_date").html(newdate)
            }


            function isJson(data) {
                if (typeof(data) == 'string') {
                    try {
                        JSON.parse(data);
                    } catch (e) {
                        return false;
                    }
                    return true;
                }

                if (typeof(data) == 'object') {
                    return true
                }

            }


            function check_fx_update() {
                //save to local sotrage to use for offline
                //compare with saved data when a new data is fetched
                //save to local  and update dom only when  new data is available
                var saved_fx_name = 'fetched_fx_data';
                var update_url = "{{$api_url}}/api/get-rate-update";

                $.ajax({
                    url: update_url,
                    data: {},
                    error: function(xhr, status, error) {
                        // alert(xhr.status);
                        if (localStorage.getItem(saved_fx_name) !== null) {
                            var local_fx = JSON.parse(localStorage.getItem(saved_fx_name));
                            update_fx_dom(local_fx);
                        }
                        if (localStorage.getItem(saved_fx_name) == 0) {
                            var local_fx = JSON.parse(localStorage.getItem(saved_fx_name));
                            update_fx_dom(local_fx);
                        }

                    },
                    success: function(data) {
                        update_fx_dom(data);
                        localStorage.setItem(saved_fx_name, JSON.stringify(data));

                    },
                    type: 'POST'
                });

            }
            setInterval(check_fx_update, 2 * 1000 * 60);
            check_fx_update()
        </script>





        <script>
            var saved_fx_name = 'fetched_fx_data';

            function isJson(data) {
                if (typeof(data) == 'string') {
                    try {
                        JSON.parse(data);
                    } catch (e) {
                        return false;
                    }
                    return true;
                }

                if (typeof(data) == 'object') {
                    return true
                }

            }

            function update_fx_dom1(data) {
                // console.log(data);
                var fx_data = data.fx_data;
                var pta_data = data.pta_data;
                var interest_data = data.interest_rate;
                var interest_rate_update_data = data.interest_rate_update;
                fx_dom_string = ''
                fx_data.forEach(function myFunction(value, index, array) {
                    var currency = value.currency.replace(/\s/g, "").substr(0, 3);
                    var we_buy = value.we_buy
                    var we_sell = value.we_sell
                    var flag = value.flag


                    fx_dom_string +=
                        "<div class='row'><p class='fx_currency'><div class='col-sm-2 form-label-group fx_currency_div' class=''><img src='flag/" +
                        flag + "' class='fx_currency_flag' width='24' height='24'>" + currency +
                        "</div></p> <div class='col-sm-5 form-label-group'> <input type='text' class='form-control' id='" +
                        currency + "_we_buy' placeholder='We Buy' required value='" + we_buy +
                        "'> <label></label> </div> <div class='col-sm-5 form-label-group'><input type='text' class='form-control'  id='" +
                        currency + "_we_sell' placeholder='We Sell' required value='" + we_sell +
                        "' > <label></label> </div> </div>"


                })
                $("#dynamic_exchange_body1").html(fx_dom_string);



                pta_dom_string = ''
                pta_data.forEach(function myFunction(value, index, array) {
                    var name = value.name;
                    var ptaKey = name.replace(/\s/g, "");
                    var val = value.value


                    pta_dom_string += "<div class='row' style='margin-left:-10px'>\
 <div class='col-sm-2 form-label-group fx_currency_div' class=''>\
    <p class='fx_currency'>" + name + "</p>\
 </div>\
 <div class='col-sm-7 form-label-group'>\
    <input type='text' class='form-control' id='" + ptaKey +
                        "_pta' placeholder='Rate For Today' required value='" + val + "'>\
    <label></label>\
 </div>\
 </div>\
 "


                })
                $("#dynamic_pta_body1").html(pta_dom_string);




                interest_dom_string = "<div class='row'><div class='col-sm-3'>Deposit</div><div class='col-sm-2'>Call</div><div class='col-sm-2'>30 Days</div><div class='col-sm-2'>60 Days</div> <div class='col-sm-2'>90 Days</div></div>"
                interest_data.forEach(function myFunction(value, index, array) {
                    var category = value.id;
                    var band = value.category
                    var above_5m = value.above_5m
                    var below_5m = value.below_5m
                    var above_49 = value.above_49
                    var above_99 = value.above_99



                    interest_dom_string += "<div class='row'> <div class='col-sm-3 form-label-group interest_div' class=''><p class='interest_category'> " +
                        band +
                        "</p> </div><div class='col-sm-2 form-label-group'> <input type='text' class='form-control' id='" + category + "_above5m' placeholder='above 10M' required value='" + above_5m +
                        "'> <label></label> </div> <div class='col-sm-2 form-label-group'><input type='text' class='form-control'  id='" + category + "_below5m' placeholder='Below 10M' required value='" + below_5m +
                        "' > <label></label> </div> <div class='col-sm-2 form-label-group'><input type='text' class='form-control'  id='" + category + "_above49m' placeholder='Above 49M' required value='" + above_49 +
                        "' > <label></label> </div> <div class='col-sm-2 form-label-group'><input type='text' class='form-control'  id='" + category + "_above99m' placeholder='Above 49M' required value='" + above_99 +
                        "' > <label></label> </div> </div>"

                })

                deposit_band = "<div class='row'><div class='col-sm-4'>Deposit</div></div>"

                interest_data.forEach(function myFunction(value, index, array) {
                    var category = value.category.replace(/\s/g, "");
                    deposit_band += "<div class='row'><div class='col-sm-3 form-label-group interest_div' class=''><p class='interest_category'> " +
                        category +
                        "</p> </div></div>"
                })


                interest_rate_update_offline_dom_string = ""
                interest_rate_update_data.forEach(function myFunction(value, index, array) {
                    var name = value.name;
                    var values = value.value
                    var id = value.id
                    interest_rate_update_offline_dom_string += "<div class='row'><div class='col-sm-12'>" + name + "</div></div>"




                    interest_rate_update_offline_dom_string += "<div class='row'> <div class='col-sm-12 form-label-group'> <input type='text' class='form-control' id='" + id + "rate_update' placeholder='" + name + "' required value='" + values +
                        "'> <label></label> </div></div>"
                })


                $("#dynamic_interest_body1").html(interest_dom_string);
                $("#dynamic_interest_body2").html(interest_rate_update_offline_dom_string);

                $("#deposit_band").html(deposit_band);



                var last_update_period = data.last_update_date;
                $("#fx_date").html(last_update_period)

                var update_source = data.update_source;
                $("#update_source").html(update_source)

            }

            var local_fx = JSON.parse(localStorage.getItem(saved_fx_name))
            //console.log(local_fx);
            if (local_fx) {
                update_fx_dom1(local_fx)
            }



            function isEmpty(param) {
                console.log('params ' + param)
                // param = param.replace(/[.*+?^${}()|[\]\\]/g, '');
                var response = param ? false : true;
                // console.log('response ' + response);
                return response
            }

            function verifyDateTime(date) {

                //for future use, the value for datetime if not enterd correctly is "", so isEmpty is already validataing this. We will return true here
                var _date = new Date(date)

                var the_date = _date.toLocaleDateString('en-GB');

                var time = _date.toLocaleTimeString('en-GB'); //24 hours


                return true

            }



            function getValuesForAll() {
                var fx_data = local_fx.fx_data;
                var pta_data = local_fx.pta_data;
                var interest_data = local_fx.interest_rate;
                var interest_rate_update_data = local_fx.interest_rate_update;
                // console.log("interest data "+fx_data)
                var empty_value_exists = false;

                var new_fx_data = []
                fx_data.forEach(function myFunction(value, index, array) {
                    var currency = value.currency.replace(/\s/g, "").substr(0, 3);
                    console.log("currency " + currency);
                    //the dom data for this currency
                    var updated_we_buy = $("#" + currency + "_we_buy").val()
                    var updated_we_sell = $("#" + currency + "_we_sell").val()
                    if (isEmpty(updated_we_buy) || isEmpty(updated_we_sell)) {
                        empty_value_exists = true
                        alert("Empty Fields Not Allowed.Please Update " + currency + " Value")

                        return false
                    }




                    value.we_buy = updated_we_buy
                    value.we_sell = updated_we_sell
                    new_fx_data.push(value)

                })

                var rate_update = []
                interest_rate_update_data.forEach(function myFunction(value, index, array) {
                    var name = value.name;
                    var id = value.id;
                    //the dom data for this currency
                    var values = $("#" + id + "rate_update").val()
                    if (isEmpty(values)) {
                        empty_value_exists = true
                        alert("Empty Fields Not Allowed.Please Update Value")

                        return false
                    }




                    value.name = name
                    value.value = values
                    rate_update.push(value)

                })



                var new_pta_data = []
                pta_data.forEach(function myFunction(value, index, array) {
                    var name = value.name;
                    var ptaKey = name.replace(/\s/g, "");
                    var val = value.value
                    //the dom data for this currency
                    var updated_val = $("#" + ptaKey + "_pta").val()
                    if (isEmpty(updated_val)) {
                        empty_value_exists = true
                        alert("Empty Fields Not Allowed.Please Update " + name + " Value")
                        return false
                    }
                    value.value = updated_val
                    new_pta_data.push(value)
                })



                var new_interest_data = []
                interest_data.forEach(function myFunction(value, index, array) {
                    // console.log("value "+value)
                    var category = value.id;
                    console.log("category " + category)
                    // var above_5m = value.above_5m
                    // var below_5m = value.below_5m
                    // var above_49 = value.above_49
                    // var above_99 = value.above_99

                    var updated_above_5m = $("#" + category + "_above5m").val()
                    var updated_below_5m = $("#" + category + "_below5m").val()
                    var updated_above_49m = $("#" + category + "_above49m").val()
                    var updated_above_99m = $("#" + category + "_above99m").val()

                    // if (isEmpty(updated_above_5m) || isEmpty(updated_below_5m) || isEmpty(updated_above_49m) || isEmpty(updated_above_99m)) {
                    //     empty_value_exists = true
                    //     alert("Empty Fields Not Allowed.Please Update " + category + " Value")

                    //     return false
                    // }
                    console.log("5 Million " + updated_below_5m)



                    value.above_5m = updated_above_5m
                    value.below_5m = updated_below_5m
                    value.above_49 = updated_above_49m
                    value.above_99 = updated_above_99m
                    new_interest_data.push(value)


                })

                //    var update_date1 = $('#update_date').val();

                var date = $('#update_date').val()
                if (isEmpty(date)) {
                    empty_value_exists = true
                    alert("Date Not Entered Accurately.Please Ensure the date and time is set ")
                } else {
                    if (!verifyDateTime(date)) {
                        empty_value_exists = true
                        alert("Empty Fields Not Allowed.Please Update Date And Time Value ")

                    }
                }


                var update_date = new Date(date)
                var year = update_date.getFullYear();
                var month = update_date.toLocaleString('en-us', {
                    month: 'short'
                });
                var _date = update_date.getDate()
                var time = update_date.toLocaleTimeString('en-GB'); //24 hours
                var formatted_date = _date + '-' + month + '-' + year

                var formated_period = _date + '-' + month + '-' + year + ' ' + time


                var data = {
                    fx_data: new_fx_data,
                    pta_data: new_pta_data,
                    interest_rate: new_interest_data,
                    interest_rate_update: rate_update,
                    last_update_date: formatted_date,
                    last_update_period: formated_period,
                    // update_date:formatted_date,
                    update_source: 'local'

                }
                return empty_value_exists ? false : data
            }

            function submit() {

                var data = getValuesForAll()
                console.log(data)
                if (!data) {
                    return false
                }

                localStorage.setItem(saved_fx_name, JSON.stringify(data))

                //   alert("Data Updated")
                var goToIndex = confirm("Data Updated.Go Back To Main Page?")
                if (goToIndex) {
                    window.location.href = "index.html";
                    // location.reload();
                }



            }
        </script>




        @foreach($schedules as $schedule)
        <?php
        //start time
        $mediaStartDate = date('Y-m-d H:i', strtotime($schedule['start'] . "+0 minutes"));
        $mediaStartMonth = date('m', strtotime($mediaStartDate));
        $mediaStartDay = date('d', strtotime($mediaStartDate));
        $mediaStartHour = date('H', strtotime($mediaStartDate));
        $mediaStartMin = date('i', strtotime($mediaStartDate));

        //end time
        $mediaEndDate = date('Y-m-d H:i', strtotime($schedule['end'] . "+0 minutes"));
        $mediaEndMonth = date('m', strtotime($mediaEndDate));
        $mediaEndDay = date('d', strtotime($mediaEndDate));
        $mediaEndHour = date('H', strtotime($mediaEndDate));
        $mediaEndMin = date('i', strtotime($mediaEndDate));
        ?>
        <script>
            window.setInterval(function() {
                var date = new Date();
                var month = date.getMonth();
                var day = date.getDate();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                var second = date.getSeconds();
                if (month == '{{$mediaStartMonth - 1}}' && day == '{{$mediaStartDay}}' && hours == '{{$mediaStartHour}}' && minutes == '{{$mediaStartMin}}' && second == 1) {
                    console.log('run add schedule');
                    var update_url = '{{$api_url}}/api/run-schedule';
                    $.ajax({
                        url: update_url,
                        data: {
                            tv: '{{$tv->id}}',
                            mediaItem: '{{$schedule->id}}',
                            operation: 'add'
                        },
                        error: function(e) {
                            console.log(e);
                        },
                        success: function(data) {
                            console.log(data);
                            console.log('item {{$schedule->id}} addedd');
                            location.reload();
                        },
                        type: 'POST'
                    });
                }
            }, 1000);
        </script>

        <script>
            window.setInterval(function() {
                var date = new Date();
                var month = date.getMonth();
                var day = date.getDate();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                var second = date.getSeconds();
                if (month == '{{$mediaEndMonth - 1}}' && day == '{{$mediaEndDay}}' && hours == '{{$mediaEndHour}}' && minutes == '{{$mediaEndMin}}' && second == 1) {
                    console.log('run remove schedule');
                    var update_url = '{{$api_url}}/api/run-schedule';
                    $.ajax({
                        url: update_url,
                        data: {
                            tv: '{{$tv->id}}',
                            mediaItem: '{{$schedule->id}}',
                            operation: 'remove'
                        },
                        error: function(e) {
                            console.log(e);
                        },
                        success: function(data) {
                            console.log(data);
                            console.log('item {{$schedule->id}} removed');
                            location.reload();
                        },
                        type: 'POST'
                    });
                }
            }, 1000);
        </script>
        @endforeach







        @if($settings->show_announcement == true)
        <!-- iframe for announcement popup -->
        <div id="parent">
            <iframe id="annouceID" src="announce.html" style="
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
                border: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                z-index: 999999;
            ">
                Your browser doesn't support iframes
            </iframe>
        </div>

        <?php
        $announceStartDate = $announce->start;
        $day = date('d', strtotime($announceStartDate));
        $hour = date('H', strtotime($announceStartDate));
        $min = date('i', strtotime($announceStartDate));
        ?>
        <script>
            $('#annouceID').remove();
            //announcement
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDate();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                var second = date.getSeconds();
                if (myday == '{{$day}}' && hours == '{{$hour}}' && minutes == '{{$min}}' && second == 1) {
                    $('#parent').append('<iframe  src="announce.html" style=" position: fixed; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%; border: none; margin: 0; padding: 0; overflow: hidden; z-index: 999999; ">');
                    console.log('done');
                }
            }, 1000);
        </script>

        <?php
        $announceSEndDate = $announce->end;
        $endDay = date('d', strtotime($announceSEndDate));
        $endHour = date('H', strtotime($announceSEndDate));
        $endMin = date('i', strtotime($announceSEndDate));
        ?>
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDate();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == '{{$endDay}}' && hours == '{{$endHour}}' && minutes == '{{$endMin}}') {
                    $('#parent').remove();
                }
            }, 1000);
        </script>
        @endif







        <!-- training -->
        @if($settings->show_training == true)
        <!-- NOTE:
1 - monday
2 - tuesday
3 - wednesday
4 - thursday
5 - friday
6 - saturday
7 - sunday -->
        <!-- morning section -->
        @if($settings->morning)
        <?php
        $morningTime = $morning->start;
        $hour = date('H', strtotime($morningTime));
        $min = date('i', strtotime($morningTime));
        ?>

        @if($morning->mon)
        <!-- monday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 1 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @if($morning->tue)
        <!-- tuesday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 2 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @if($morning->wed)
        <!-- wednesday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 3 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @if($morning->thurs)
        <!-- thursday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 4 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @if($morning->fri)
        <!-- friday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 5 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @if($morning->sat)
        <!-- saturday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 6 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @if($morning->sun)
        <!-- sunday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 7 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "morning.html";
                }
            }, 1000);
        </script>
        @endif
        @endif
        <!-- end morning section -->










        <!-- afternoon section -->
        @if($settings->afternoon)

        <?php
        $afternoonTime = $afternoon->start;
        $hour = date('H', strtotime($afternoonTime));
        $min = date('i', strtotime($afternoonTime));
        ?>

        @if($afternoon->mon)
        <!-- monday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 1 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @if($afternoon->tue)
        <!-- tuesday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 2 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @if($afternoon->wed)
        <!-- wednesday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 3 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @if($afternoon->thurs)
        <!-- thursday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 4 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @if($afternoon->fri)
        <!-- friday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 5 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @if($afternoon->sat)
        <!-- saturday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 6 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @if($afternoon->sun)
        <!-- sunday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 7 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "afternoon.html";
                }
            }, 1000);
        </script>
        @endif
        @endif
        <!-- end afternoon section -->









        <!-- evening section -->
        @if($settings->evening)

        <?php
        $eveningTime = $evening->start;
        $hour = date('H', strtotime($eveningTime));
        $min = date('i', strtotime($eveningTime));
        ?>

        @if($evening->mon)
        <!-- monday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 1 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @if($evening->tue)
        <!-- tuesday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 2 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @if($evening->wed)
        <!-- wednesday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 3 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @if($evening->thurs)
        <!-- thursday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 4 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @if($evening->fri)
        <!-- friday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 5 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @if($evening->sat)
        <!-- saturday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 6 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @if($evening->sun)
        <!-- sunday-->
        <script>
            window.setInterval(function() {
                var date = new Date();
                var myday = date.getDay();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                if (myday == 7 && hours == '{{$hour}}' && minutes == '{{$min}}') {
                    window.location.href = "evening.html";
                }
            }, 1000);
        </script>
        @endif
        @endif
        <!-- end evening section -->


        @endif
        <!-- end training -->


</body>

</html>