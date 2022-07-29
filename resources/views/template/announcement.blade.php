<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Announcement</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script type="text/javascript" src="js/jquery.1.10.1.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <!--<link href="css/universal_video_player_train.css" rel="stylesheet" type="text/css">-->

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        .myVideo_full {
            position: fixed;
            right: 0 !important;
            bottom: 0 !important;

            min-width: 100% !important;
            min-height: 100% !important;
        }

        .myVideo_small {
            position: fixed;
            top: 0;
            left: 20% !important;
            min-width: 80% !important;
            min-height: 90vh !important;
        }

        .content {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            min-width: 100%;

            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
        }

        .sidemenu {
            position: fixed;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;

            min-width: 20% !important;

            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            display: none !important;
        }

        .amazingslider-video-wrapper-2 {
            position: fixed;
            top: 0;
            left: 20% !important;
            min-width: 80% !important;
            min-height: 90vh !important;
        }

        .amazingslider-video-wrapper-1 {
            position: fixed;
            top: 0;
            left: 0% !important;
            min-width: 80% !important;
            min-height: 90vh !important;
        }

        .showme {
            display: block !important;
            z-index: 9999999999999;
        }
    </style>
</head>

<body>
    <div class="sidemenu" style="
                height: 90vh;
                width: 20%;
                margin-right: -10px !important;
                background-color: #c04848 !important;
            ">
        <div class="col-md-12 col-lg-12" style=""></div>
    </div>

    <div class="myVideo_full">
        <script src="sliderengine/jquery.js"></script>
        <script src="sliderengine/amazingslider.js"></script>
        <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css" />
        <script src="sliderengine/initslider-1.js"></script>
        <div id="amazingslider-wrapper-1">
            <div id="amazingslider-1">
                <ul class="amazingslider-slides" style="display: none">
                    <li>
                        <video preload="none" src="announce/ann01.mp4"></video>
                    </li>
                    <li>
                        <video preload="none" src="announce/ann02.mp4"></video>
                    </li>
                </ul>
                <!--
                                <ul class="amazingslider-slides" style="display:none;">

                                    <li><video autoplay preload="none" src="announce/ann01.mp4"></video></li>
									
									<li><video preload="none" src="announce/ann02.mp4"></video></li>

                                </ul>-->
            </div>
        </div>
    </div>
    <!--
							<video autoplay loop class="myVideo_full">
  <source src="video/item01.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
 -->
    <div class="content" style="
                height: 10vh;
                width: 100%;
                margin-right: -10px !important;
                z-index: 999999;
                background-color: #c04848 !important;
            ">
        <div class="col-md-12 col-lg-12" style="">
            <!--<div class="col-md-3" style="padding:10px;"><span style="color:transparent;">.</span><a class="btn btn-default" href="javascript:void(0)" id="mymenu" style="background-color:#c04848;color:white;outline:2px solid white;margin-top:8px">Menu</a></div>-->
            <div class="col-md-3" style="padding: 10px">
                <span href="index.html" style="font-size: 3rem; color: white">Announcement TV</span>
            </div>
            <div class="col-md-6" style="padding: 10px">
                <span style="color: transparent; padding-right: 12rem">.</span>
            </div>
            <div class="col-md-3" style="padding: 10px">
                &nbsp;&nbsp;&nbsp;<span style="color: transparent; padding-right: 12rem">.</span><a class="btn btn-default" href="index.html" style="
                            background-color: #c04848;
                            color: white;
                            outline: 2px solid white;
                            margin-top: 8px;
                        ">Back To TV Display</a>
            </div>
        </div>
    </div>
</body>

</html>