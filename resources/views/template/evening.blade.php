<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Amazing Slider</title>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script type="text/javascript" src="sliderengine/html5gallery.js"></script>
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



    <div style="display: block; margin: -9px auto 0px auto; position: relative; max-width: 100%; width:100vw; height: 100vh;" class="html5gallery" data-hidetitlewhenvideoisplaying="true" data-bgcolor="#f0f0f0" data-autoslide="true" data-autoplayvideo="true" data-onchange="onSlideChange" data-onthumbclick="onThumbClick" data-skin="gallery" data-autoplayvideo="false" data-responsive="true" data-resizemode="fill" data-html5player="true" data-autoslide="true" data-width="900" data-height="390" data-effect="fadeout"  data-padding="40">

        @foreach($tv->eveningVideos($tv->id)->where('is_active', true) as $video)
        <a href="train/item{{$video->video}}.mp4" style="display: none;">
            <img src="train/item01.png" alt="{{$video->title}}" data-description="{{$video->title}}">
        </a>
        @endforeach

    </div>




    <!-- NOTE:
1 - monday
2 - tuesday
3 - wednesday
4 - thursday
5 - friday
6 - saturday
7 - sunday -->



    <!-- evening section -->
    @if($settings->evening)


    <?php
    $eveningTime = $evening->end;
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
                window.location.href = "index.html";
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
                window.location.href = "index.html";
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
                window.location.href = "index.html";
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
                window.location.href = "index.html";
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
                window.location.href = "index.html";
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
                window.location.href = "index.html";
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
                window.location.href = "index.html";
            }
        }, 1000);
    </script>
    @endif
    @endif
    <!-- end evening section -->






</body>

</html>