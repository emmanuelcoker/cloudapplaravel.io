<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Amazing Slider</title>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

    <style type="text/css">
        body,
        html {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body>

    <!-- Insert to your webpage where you want to display the slider -->
    <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto;">
        <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
            @foreach($tv->trainingVideos as $video)
                <li><img src="train/item01.png" alt="{{$video->title}}" title="{{$video->title}}" />
                    <video preload="none" src="train/item{{$video->video}}.mp4"></video>
                </li>
                @endforeach 
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                @foreach($tv->trainingVideos as $video)
                <li><img src="train/item01.png" alt="{{$video->title}}" title="{{$video->title}}" /></li>
                @endforeach
            </ul>

            <!-- <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive Slider jQuery">Responsive Slider jQuery</a></div> -->
        </div>
    </div>



  <!-- this is to redirect to announcement if announcement is avaiable -->
  @if($settings->show_announcement == true)
    <?php
    $announceStartDate = $announce->start;
    $day = date('d', strtotime($announceStartDate));
    $hour = date('H', strtotime($announceStartDate));
    $min = date('i', strtotime($announceStartDate));
    ?>
    <script>
        //announcement
        window.setInterval(function() {
            var date = new Date();
            var myday = date.getDate();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            if (myday == '{{$day}}' && hours == '{{$hour}}' && minutes == '{{$min}}') {
                window.location.href = "announce.html";
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
    @if($morning->mon)
    <!-- monday-->
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    <?php
    $morningTime = $morning->end;
    $hour = date('H', strtotime($morningTime));
    $min = date('i', strtotime($morningTime));
    ?>
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
    @if($afternoon->mon)
    <!-- monday-->
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    <?php
    $afternoonTime = $afternoon->end;
    $hour = date('H', strtotime($afternoonTime));
    $min = date('i', strtotime($afternoonTime));
    ?>
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
    @if($evening->mon)
    <!-- monday-->
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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
    <?php
    $eveningTime = $evening->end;
    $hour = date('H', strtotime($eveningTime));
    $min = date('i', strtotime($eveningTime));
    ?>
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