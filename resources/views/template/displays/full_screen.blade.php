<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Published Copy</title>
    
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/html5gallery.js"></script>
    <meta http-equiv="pageid" content="<? echo rand(); ?>">

    <!-- End of head section HTML codes -->
    
    <style type="text/css">
        body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
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


<body style="background-color:{{$settings->tv_background}}" changePageID="<? echo rand(); ?>">

    
<div id="loaderBody">
        <div class="loader">
            <img src="time/loader.gif" alt="" width="350">
        </div>
    </div>
    



    <div style="display:none;margin:0 auto;" class="html5gallery" data-html5player="true" data-width="900" data-height="498" data-resizemode="fill" data-showsocialmedia="false" data-skin="none" data-autoslide="true" data-autoplayvideo="true" data-effect="crossfade" data-showcarousel="false" data-showtitle="false"  data-bgcolor="#000" data-slideshadow="false" data-galleryshadow="false">
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


        <a href="{{$app_url}}{{Variables::tvPath('index.html')}}?nocache=<?php echo rand(100, 998000); ?>"></a>
        <a href="{{$app_url}}{{Variables::tvPath('announce.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('morning.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('afternoon.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('evening.html')}}"></a>

        @foreach($tv['trainingVideos'] as $video)
        <a href="{{$app_url}}{{Variables::tvPath('train/item'.$video->video.'.mp4')}}"></a>
        @endforeach
        <a href="{{$app_url}}{{Variables::tvPath('train/item01.png')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('announce/announce.png')}}"></a>


        <a href="{{$app_url}}{{Variables::tvPath('scheduledplaylist/scheduleplaylist.xlsx')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('multimedia/index.html')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('templates/templatestyle.xlsx')}}"></a>

        <a href="{{$app_url}}{{Variables::tvPath('clock/1/index.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('clock/2/index.html')}}"></a>
        <a href="{{$app_url}}{{Variables::tvPath('clock/3/index.html')}}"></a>

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