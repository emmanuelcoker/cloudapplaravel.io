<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="Expires" content="0">

    <meta name="description" content="">
    <meta http-equiv="pageid" content="<? echo rand(); ?>">

    <title>Published Copy</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link rel="stylesheet" type="text/css" href="css/custom2.css" />

    <link rel="stylesheet" type="text/css" href="css/style1.css" />

    <link href="sliderengine/slick/slick.css" rel="stylesheet" type="text/css" media="all" />

    <link href="sliderengine/slick/slick-theme.css" rel="stylesheet" type="text/css" media="all" />
    <script src="sliderengine/jquery.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/moment-timezone-with-data.min.js"></script>
    <script type="text/javascript" src="sliderengine/html5gallery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style type="text/css">
        /*Clock Style*/
        #info-box {
            width: 100%;
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
            width: 20px;
            border-radius: 8px;
            border-color: #3d3b3bb0;
            letter-spacing: 5px;
            box-shadow: 2px 2px 4px #2726266e;
            font-family: 'Lato', sans-serif;
            font-weight: lighter;
            font-size: 17px;
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
            font-size: 10px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding-top: 5px;
            margin-left: 30px;
            /*color: white;*/
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


<body style="background-color:{{$settings->tv_background}}" style="width: 100vw !important; height:100vh !important" changePageID="<? echo rand(); ?>">
<input type="hidden" name="cur_update_key" value="<?php echo rand(99999999999999, 300000000000000) . 'update' . rand(99999999999999, 700000000000000) ?>">
    <div id="loaderBody">
        <div class="loader">
            <img src="time/loader.gif" alt="" width="350">
        </div>
    </div>


    <div  style="display:none;margin:0  auto;"  class="html5gallery" data-bgcolor="transparent"  data-autoslide="true" data-thumbheight="100" data-titleautohide="false" data-showtitle="false"  data-thumbwidth="360" data-autoplayvideo="true" data-skin="vertical" data-width="600" data-height="360" data-resizemode="fill" data-carouselbgcolorstart="#000" data-responsive="true" data-showimagetoolbox="always" data-thumbmargin="12"  data-thumbgap="6">
        @foreach($medias as $media)
                    @if($media->content_type == 'schedule')
                        @if($media->type == 'video')
                        <a href="videobank/item{{$media->file}}.mp4"><img src="logo/logo01.png" alt="{{$media->title}}"></a>
                        @else
                        <a href="videobank/item{{$media->file}}.png"><img src="logo/logo01.png" alt="{{$media->title}}"></a>
                        @endif
                    @endif
                    @if($media->content_type == 'master')
                        @if($media->type == 'video')
                        <a href="video/item{{$media->file}}.mp4"><img src="logo/logo01.png" alt="{{$media->title}}"></a>
                        @else
                        <a href="video/item{{$media->file}}.png"><img src="logo/logo01.png" alt="{{$media->title}}"></a>
                        @endif
                    @endif
                @endforeach
     </div>


    <div class="container-fluid" style="margin-top:-265px">


        <div class="row" >

            <div class="videoSection col-md-12 col-lg-12 col-sm-12 padOff">
               
                <div class="row underVideo">

                    <div class="col-md-2 padRightOff" style="margin-top: -4.6px;">

                        <div class="row">

                            <div class="col-md-12">
                                <div>
                                    <h4 class="myHeader1" style="line-height: 30px;">&nbsp;&nbsp;&nbsp; {{$tab->news_title}} </h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a data-target=".check-networ" id="template_logo" data-toggle="modal" id="check-network" type="button">

                                    <div class="slide1" style="width:100%">
                                        @foreach($logos as $logo)
                                        <div><img src="logo/logo{{$logo->image.'.'.$logo->extension}}" style="height: 145px !important" alt="" title="" /></div>
                                        @endforeach
                                    </div>

                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-10 ">

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
                        <div class="row">
                            <div class="col-md-8 padLeftOff">
                                <div class="slide2" style="width:98%">
                                    @foreach($banners as $banner)
                                    <div><img src="banner/banner{{$banner->file}}.{{$banner->extension}}" style="height: 145px !important" alt="" title="" /></div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 padLeftOff">
                            @if($tv->clockLayout == 5)
                                @if($tv->show_date_image == 1)
                                <div class="tm" style="margin-top: 0%;  margin-left:-51px; background-image: url('time/{{$tv->clockImage}}'); background-size: 100% 100%;">
                                    @endif

                                    @if($tv->show_date_image == 0)
                                    <div class="tm" style="margin-top: 0%;  margin-left:-51px; background:{{$tv->clock_background_color}}; padding-bottom: 10px;">
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
                                                <div id="calendar" style="margin-top: 5px;margin-bottom:10px;margin-left: 0px;font-size: 20px"></div>
                                                @endif



                                                <div class="row naviMenu" style="margin-left: -40px">
                                                    <!-- <p id="hour"></p>

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
                                </div>
                            </div>
                            @else
                                <iframe  src="{{$app_url}}{{Variables::tvPath('clock/'.$tv->clockLayout.'/index.html')}}" scrolling="no" style=" width: 112%; height: 100%; border: none; margin:0px 0px 0px -50px; padding: 0; overflow:hidden;  "></iframe>
                                @endif
                        </div>
                    </div>

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

        <a href="{{$app_url}}{{Variables::tvPath('train/item01.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('index.html')}}?nocache=<?php echo rand(100, 998000); ?>"></a>
        <a href="{{$app_url}}{{Variables::tvPath('announce.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('morning.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('afternoon.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('evening.html')}}"></a>

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


                            <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/background.jpg')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/bar.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/barbottom.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/bartop.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/html5boxplayer_fullscreen.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/html5boxplayer_hd.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/html5boxplayer_playpause.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/html5boxplayer_playvideo.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/html5boxplayer_volume.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/lightbox.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/lightbox_close.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/lightbox_next.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/lightbox_pause.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/lightbox_play.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/lightbox_prev.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/loading.gif')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/slidertop.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/sliderbottom.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/slider.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/side_prev.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/side_play.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/side_pause.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/side_next.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/side_lightbox.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/prev.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/playvideo_64.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/playvideo.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/play.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/loading_center.gif')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/pause.png')}}"></a>                                
                        <a href="{{$app_url}}{{Variables::tvPath('sliderengine/skins/vertical/next.png')}}"></a>  


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
                this.getTime;
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
                    var update_url = '{{$app_url}}/api/run-schedule';
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
                    var update_url = '{{$app_url}}/api/run-schedule';
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