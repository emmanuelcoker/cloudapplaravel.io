<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Clock</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Share+Tech+Mono'>
<style>
  html, body {
  height: 100%;
}

body {
  background: radial-gradient(ellipse at center, #0a2e38 0%, #000000 70%);
  background-size: 100%;
}

p {
  margin: 0;
  padding: 0;
}

#clock {
  font-family: 'Share Tech Mono', monospace;
  color: #ffffff;
  text-align: center;
 
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  color: #daf6ff;
  text-shadow: 0 0 20px #0aafe6, 0 0 20px rgba(10, 175, 230, 0);
}

@if($tv->template == 4)
#clock {
  left: 55%;
}
@endif


@if($tv->template == 2 || $tv->template == 1)
#clock {
  top: 50%;
}
@endif

@if($tv->template == 4 || $tv->template == 6)
#clock {
  top: 60%;
}
@endif


#clock .time {
  letter-spacing: 0.05em;
 
  padding: 5px 0;
}




#clock .date {
  letter-spacing: 0.1em;
}


@if($tv->template == 2 || $tv->template == 1)
#clock .time {
  font-size: 15vw;
}

#clock .date {
  font-size: 7vw;
}
@endif


@if($tv->template == 4)
#clock .time {
  font-size: 12vw;
}

#clock .date {
  font-size: 6vw;
}
@endif

@if( $tv->template == 6)
#clock .time {
  font-size: 13vw;
}

#clock .date {
  font-size: 6vw;
}
@endif

#clock .text {
  letter-spacing: 0.1em;

  font-size: 3vw;
  padding: 20px 0 0;
}
</style>
</head>


<body   
    @if($tv->show_date_image == 1)
        style="width:100%; height:100%; background-image: url('../../time/{{$tv->clockImage}}'); background-position: center; background-size: cover; background-repeat: no-repeat;"
    @else 
        style="background: {{$tv->clock_background_color}};" 
    @endif
>
<!-- partial:index.partial.html -->
<div id="clock">
    @if($tv->show_time == 0 || $tv->show_time == 1)
    <p class="date">@{{ date }}</p>
    @endif
    @if($tv->show_time == 1 || $tv->show_time == 2)
    <p class="time">@{{ time }}</p>
    @endif
  </div>





<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
  <script>
      var clock = new Vue({
    el: '#clock',
    data: {
        time: '',
        date: ''
    }
});


var week = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
var timerID = setInterval(updateTime, 1000);
updateTime();
function updateTime() {
    var cd = new Date();
    clock.time = zeroPadding(cd.getHours() % 12, 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
    clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
};

function zeroPadding(num, digit) {
    var zero = '';
    for(var i = 0; i < digit; i++) {
        zero += '0';
    }
    return (zero + num).slice(-digit);
}
  </script>

</body>
</html>


<!-- <iframe  src="http://cloudapp.test/clock/2/index.html" style=" width: 100%; height: 100%; border: none; margin-top:-30px; padding: 0;  "></iframe> -->
