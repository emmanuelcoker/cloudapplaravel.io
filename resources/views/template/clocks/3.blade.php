<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Clock 3</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<style>
  .clock-day:before {
  content: var(--timer-day);
}
.clock-hours:before {
  content: var(--timer-hours);
}
.clock-minutes:before {
  content: var(--timer-minutes);
}
.clock-seconds:before {
  content: var(--timer-seconds);
}

body {
  font-family: 'Montserrat', 'sans-serif';
  min-height: 100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
}

.clock-container {
  margin-bottom: 30px;
  background-color: rgba(0, 0, 0, 0.705);
  border-radius: 5px;
  padding: 10px 15px;
  box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.15), 0 15px 90px 30px rgba(0, 0, 0, 0.25);
  display: -webkit-box;
  display: flex;
}

@if($tv->template == 6)
.clock-container {
  margin-top: 60px;
  margin-left: -20px;
}
@endif

@if($tv->template == 4)
.clock-container {
  margin-top: 60px;
  margin-left: 55px;
}
@endif

@if($tv->template == 2 || $tv->template == 1)
.clock-container {
  margin-top: 30px;
  margin-left: 0px;
}
@endif

.clock-col {
  text-align: center;
  margin-right: 20px;
  margin-left: 20px;
  width: 35px;
  position: relative;
}
.clock-col:not(:last-child):before, .clock-col:not(:last-child):after {
  content: "";
  background-color: rgba(255, 255, 255, 0.3);
  height: 5px;
  width: 5px;
  border-radius: 50%;
  display: block;
  position: absolute;
  right: -25px;
}
.clock-col:not(:last-child):before {
  top: 35%;
}
.clock-col:not(:last-child):after {
  top: 50%;
}
.clock-timer:before {
  color: #fff;
  font-size: 2.0rem;
  text-transform: uppercase;
}
.clock-label {
  color: rgba(255, 255, 255, 0.35);
  text-transform: uppercase;
  font-size: .6rem;
  margin-top: 10px;
}

#dateNow{
   width: 100%;
   position: absolute;
   color:white;
   text-align:center;
}

@if($tv->template == 1 || $tv->template == 2 )
  @if($tv->show_time == 1)
  #dateNow{
    top:20px;
    right:0px;
    left:0px;
    margin:auto;
  }
  @endif

  @if($tv->show_time == 0)
  #dateNow{
    top:50%;
    right:0px;
    left:0px;
    margin:auto;
    margin:auto;
  }
  @endif
@endif

@if($tv->template == 6)
  @if($tv->show_time == 1)
  #dateNow{
    top:40px;
    right:0px;
    left:0px;
    margin:auto;
  }
  @endif

  @if($tv->show_time == 0)
  #dateNow{
    top:50%;
    right:0px;
    left:0px;
    margin:auto;
    margin:auto;
  }
  @endif
@endif


@if($tv->template == 4)
  @if($tv->show_time == 1)
  #dateNow{
    top:35px;
    left:40px;
  }
  @endif

  @if($tv->show_time == 0)
  #dateNow{
    top:50%;
    left:40px;
  }
  @endif
@endif

@if($tv->show_time == 0)
#dateNow{
  font-size:20px;
}
@endif

</style>
</head>
<body @if($tv->show_date_image == 1)
        style="width:100%; height:100%; background-image: url('../../time/{{$tv->clockImage}}'); background-position: center; background-size: cover; background-repeat: no-repeat;"
    @else 
        style="background: {{$tv->clock_background_color}};" 
    @endif>

    @if($tv->show_time == 1 || $tv->show_time == 0)
    <div id="dateNow">
  <span id="calendar"></span>
</div>
@endif


@if($tv->show_time == 1 || $tv->show_time == 2)
<!-- partial:index.partial.html -->
<div class="clock-container">
  <div class="clock-col">
    <p class="clock-day clock-timer">
    </p>
    <p class="clock-label">
      Day
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-hours clock-timer">
    </p>
    <p class="clock-label">
      Hours
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-minutes clock-timer">
    </p>
    <p class="clock-label">
      Minutes
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-seconds clock-timer">
    </p>
    <p class="clock-label">
      Seconds
    </p>
  </div>
</div>
@endif

<!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="./script.js"></script> -->
    <script>
        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var date = currentDate.getDate();
        var months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        var s_months = [
            "Jan",
            "Feb",
            "March",
            "April",
            "May",
            "June",
            "July",
            "Aug",
            "Sept",
            "Oct",
            "Nov",
            "Dec",
        ];
        var days = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];
        var day_in_full = days[currentDate.getDay()];
        var month = months[currentDate.getMonth()];
        var s_month = months[currentDate.getMonth()];
        if (date < 10) {
            date = "0" + date;
        }
        document.getElementById("calendar").innerHTML =
            date +  " - " + month + " - " + year;
    </script>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', () =>
  requestAnimationFrame(updateTime)
)

function updateTime() {
  document.documentElement.style.setProperty('--timer-day', "'" + moment().format("dd") + "'");
  document.documentElement.style.setProperty('--timer-hours', "'" + moment().format("k") % 12 + "'");
  document.documentElement.style.setProperty('--timer-minutes', "'" + moment().format("mm") + "'");
  document.documentElement.style.setProperty('--timer-seconds', "'" + moment().format("ss") + "'");
  requestAnimationFrame(updateTime);
}
    </script>


</body>

</html>
