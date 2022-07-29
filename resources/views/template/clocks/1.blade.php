<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>CodePen - Flip Clock {{ $tv->template }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald" />
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <style>
        html {
            height: 100%;
        }

        body {
            height: 100%;
            ;
        }

        .digit {
            position: relative;
            float: left;
            width: 10vw;
            height: 12vw;
            background-color: #fff;
            border-radius: 1vw;
            text-align: center;
            font-family: Oswald, sans-serif;
            font-size: 11vw;
        }

        .base {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #333;
        }

        .flap {
            display: none;
            position: absolute;
            width: 100%;
            height: 50%;
            background-color: #fff;
            left: 0;
            top: 0;
            border-radius: 1vw 1vw 0 0;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            overflow: hidden;
        }

        .flap::before {
            content: attr(data-content);
            position: absolute;
            left: 50%;
        }

        .flap.front::before,
        .flap.under::before {
            top: 100%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .flap.back {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .flap.back::before {
            top: 100%;
            -webkit-transform: translate(-50%, -50%) rotateZ(180deg);
            transform: translate(-50%, -50%) rotateZ(180deg);
        }

        .flap.over {
            z-index: 2;
        }

        .flap.under {
            z-index: 1;
        }

        .flap.front {
            -webkit-animation: flip-down-front 300ms ease-in both;
            animation: flip-down-front 300ms ease-in both;
        }

        .flap.back {
            -webkit-animation: flip-down-back 300ms ease-in both;
            animation: flip-down-back 300ms ease-in both;
        }

        .flap.under {
            -webkit-animation: fade-under 300ms ease-in both;
            animation: fade-under 300ms ease-in both;
        }

        @-webkit-keyframes flip-down-front {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                background-color: #fff;
                color: #333;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                background-color: #a6a6a6;
                color: black;
            }
        }

        @keyframes flip-down-front {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                background-color: #fff;
                color: #333;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                background-color: #a6a6a6;
                color: black;
            }
        }

        @-webkit-keyframes flip-down-back {
            0% {
                -webkit-transform: rotateY(180deg) rotateX(0deg);
                transform: rotateY(180deg) rotateX(0deg);
                background-color: #a6a6a6;
                color: black;
            }

            100% {
                -webkit-transform: rotateY(180deg) rotateX(180deg);
                transform: rotateY(180deg) rotateX(180deg);
                background-color: #fff;
                color: #333;
            }
        }

        @keyframes flip-down-back {
            0% {
                -webkit-transform: rotateY(180deg) rotateX(0deg);
                transform: rotateY(180deg) rotateX(0deg);
                background-color: #a6a6a6;
                color: black;
            }

            100% {
                -webkit-transform: rotateY(180deg) rotateX(180deg);
                transform: rotateY(180deg) rotateX(180deg);
                background-color: #fff;
                color: #333;
            }
        }

        @-webkit-keyframes fade-under {
            0% {
                background-color: #a6a6a6;
                color: black;
            }

            100% {
                background-color: #fff;
                color: #333;
            }
        }

        @keyframes fade-under {
            0% {
                background-color: #a6a6a6;
                color: black;
            }

            100% {
                background-color: #fff;
                color: #333;
            }
        }

        @if ($tv->template == 2 || $tv->template == 1 || $tv->template == 6).clock {
            position: absolute;
            width: 70vw;
            top: 50%;
            left: 0px;
            right: 0px;
            margin: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-perspective: 100vw;
            perspective: 100vw;
            -webkit-perspective-origin: 50% 50%;
            perspective-origin: 50% 50%;
        }

        @endif@if ($tv->template == 4).clock {
            position: absolute;
            width: 70vw;
            top: 50%;
            left: 15vw;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-perspective: 100vw;
            perspective: 100vw;
            -webkit-perspective-origin: 50% 50%;
            perspective-origin: 50% 50%;
        }

        @endif@if ($tv->template == 6).clock {
            top: 70%;
        }

        @endif.clock .digit {
            margin-right: 1vw;
        }

        .clock .digit:nth-child(2n+2) {
            margin-right: 3.5vw;
        }

        .clock .digit:last-child {
            margin-right: 0;
        }
    </style>
</head>

<body
    @if ($tv->show_date_image == 1) style="width:100%; height:100%; background-image: url('../../time/{{ $tv->clockImage }}'); background-position: center; background-size: cover; background-repeat: no-repeat;"
    @else 
        style="background: {{ $tv->clock_background_color }};" @endif>
    <!-- partial:index.partial.html -->

    @if ($tv->show_time == 0)
        <div @if ($tv->template == 2 || $tv->template == 1 || $tv->template == 6) style="
                text-align: center;
                font-size: 20px;
                color: white;
                position: fixed;
                top: 50%;
                left: 0px;
                right: 0px;
                top:15px;
                margin: auto;
            " @endif
            @if ($tv->template == 4) style="
                text-align: center;
                font-size: 20px;
                color: white;
                position: fixed;
                top: 50%;
                left: 110px;
                margin: auto;
            " @endif>
            <span id="calendar"></span>
        </div>
    @endif

    @if ($tv->show_time == 1)
        <div @if ($tv->template == 2 || $tv->template == 1) style="
                text-align: center;
                font-size: 20px;
                color: white;
                position: fixed;
                left: 0px;
                right: 0px;
                top:15px;
                margin: auto;
            " @endif
            @if ($tv->template == 6) style="
                text-align: center;
                font-size: 20px;
                color: white;
                position: fixed;
                left: 0px;
                right: 0px;
                top:40px;
                margin: auto;
            " @endif
            @if ($tv->template == 4) style="
                text-align: center;
                font-size: 20px;
                color: white;
                position: fixed;
                top: 28px;
                left: 110px;
                margin: auto;
            " @endif>
            <span id="calendar"></span>
        </div>
    @endif

    @if ($tv->show_time == 1 || $tv->show_time == 2)
        <div class="clock"
            @if ($tv->template == 4) @if ($tv->show_time == 1) style="margin-left: 20px; margin-top: 20px" @else style="margin-left: 20px;" @endif
            @endif
            >
            <div class="digit tenhour">
                <span class="base"></span>
                <div class="flap over front"></div>
                <div class="flap over back"></div>
                <div class="flap under"></div>
            </div>

            <div class="digit hour">
                <span class="base"></span>
                <div class="flap over front"></div>
                <div class="flap over back"></div>
                <div class="flap under"></div>
            </div>

            <div class="digit tenmin">
                <span class="base"></span>
                <div class="flap over front"></div>
                <div class="flap over back"></div>
                <div class="flap under"></div>
            </div>

            <div class="digit min">
                <span class="base"></span>
                <div class="flap over front"></div>
                <div class="flap over back"></div>
                <div class="flap under"></div>
            </div>

            <div class="digit tensec">
                <span class="base"></span>
                <div class="flap over front"></div>
                <div class="flap over back"></div>
                <div class="flap under"></div>
            </div>

            <div class="digit sec">
                <span class="base"></span>
                <div class="flap over front"></div>
                <div class="flap over back"></div>
                <div class="flap under"></div>
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
            date + " - " + day_in_full + " - " + month + " - " + year;
    </script>

    <script>
        function flipTo(digit, n) {
            var current = digit.attr('data-num');
            digit.attr('data-num', n);
            digit.find('.front').attr('data-content', current);
            digit.find('.back, .under').attr('data-content', n);
            digit.find('.flap').css('display', 'block');
            setTimeout(function() {
                digit.find('.base').text(n);
                digit.find('.flap').css('display', 'none');
            }, 350);
        }

        function jumpTo(digit, n) {
            digit.attr('data-num', n);
            digit.find('.base').text(n);
        }

        function updateGroup(group, n, flip) {
            var digit1 = $('.ten' + group);
            var digit2 = $('.' + group);
            n = String(n);
            if (n.length == 1) n = '0' + n;
            var num1 = n.substr(0, 1);
            var num2 = n.substr(1, 1);
            if (digit1.attr('data-num') != num1) {
                if (flip) flipTo(digit1, num1);
                else jumpTo(digit1, num1);
            }
            if (digit2.attr('data-num') != num2) {
                if (flip) flipTo(digit2, num2);
                else jumpTo(digit2, num2);
            }
        }

        function setTime(flip) {
            var t = new Date();
            updateGroup('hour', t.getHours() % 12, flip);
            updateGroup('min', t.getMinutes(), flip);
            updateGroup('sec', t.getSeconds(), flip);
        }

        $(document).ready(function() {

            setTime(false);
            setInterval(function() {
                setTime(true);
            }, 1000);

        });
    </script>
</body>

</html>
