<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Clock 4</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300'>
    <link rel="stylesheet" href="./style.css">
    <style>
        .verticalPta {
            border-left: 2px solid white;
            height: 60px;
            position: absolute;
            left: 76%;
            top: 52%;
        }
        
        @if($tv->template == 2)
        .verticalPta {
            left: 70%;
        }
        @endif
        
        @if($tv->template == 1)
        .verticalPta {
            left: 73%;
        }
        @endif
        
        @if($tv->template == 6)
        .verticalPta {
            left: 66%;
        }
        @endif
    </style>
    <style>
        @-webkit-keyframes ten1 {
            10% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }
        }

        @keyframes ten1 {
            10% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }
        }

        @-webkit-keyframes ten2 {
            10% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            20% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
            }
        }

        @keyframes ten2 {
            10% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            20% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
            }
        }

        @-webkit-keyframes ten3 {
            10% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            30% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
            }
        }

        @keyframes ten3 {
            10% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            30% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
            }
        }

        @-webkit-keyframes ten4 {
            10% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            40% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
            }
        }

        @keyframes ten4 {
            10% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            40% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
            }
        }

        @-webkit-keyframes ten5 {
            10% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            50% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
            }
        }

        @keyframes ten5 {
            10% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            50% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
            }
        }

        @-webkit-keyframes ten6 {
            10% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            60% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
            }
        }

        @keyframes ten6 {
            10% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            60% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
            }
        }

        @-webkit-keyframes ten7 {
            10% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            70% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
            }
        }

        @keyframes ten7 {
            10% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            70% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
            }
        }

        @-webkit-keyframes ten8 {
            10% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            80% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
            }
        }

        @keyframes ten8 {
            10% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            80% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
            }
        }

        @-webkit-keyframes ten9 {
            10% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            90% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
            }
        }

        @keyframes ten9 {
            10% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            90% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
            }
        }

        @-webkit-keyframes ten10 {
            10% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            0%,
            100% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
            }
        }

        @keyframes ten10 {
            10% {
                top: 71px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            20% {
                top: 71px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            30% {
                top: 44px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            40% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -45px;
                -webkit-transform: rotateX(144deg);
                transform: rotateX(144deg);
                color: rgba(255, 255, 255, 0.2);
            }

            60% {
                top: -72px;
                -webkit-transform: rotateX(108deg);
                transform: rotateX(108deg);
                color: rgba(255, 255, 255, 0.2);
            }

            70% {
                top: -72px;
                -webkit-transform: rotateX(72deg);
                transform: rotateX(72deg);
                color: rgba(255, 255, 255, 0.2);
            }

            80% {
                top: -45px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
                color: rgba(255, 255, 255, 0.2);
            }

            90% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            0%,
            100% {
                top: 44px;
                -webkit-transform: rotateX(36deg);
                transform: rotateX(36deg);
            }
        }

        @-webkit-keyframes six1 {
            16.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }
        }

        @keyframes six1 {
            16.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }
        }

        @-webkit-keyframes six2 {
            16.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            33.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
            }
        }

        @keyframes six2 {
            16.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            33.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
            }
        }

        @-webkit-keyframes six3 {
            16.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            50% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @keyframes six3 {
            16.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            50% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @-webkit-keyframes six4 {
            16.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            66.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
            }
        }

        @keyframes six4 {
            16.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            66.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
            }
        }

        @-webkit-keyframes six5 {
            16.6666666667% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            83.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @keyframes six5 {
            16.6666666667% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            83.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @-webkit-keyframes six6 {
            16.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            0%,
            100% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
            }
        }

        @keyframes six6 {
            16.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            33.3333333333% {
                top: -1px;
                -webkit-transform: rotateX(180deg);
                transform: rotateX(180deg);
                color: rgba(255, 255, 255, 0.2);
            }

            50% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
                color: rgba(255, 255, 255, 0.2);
            }

            83.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            0%,
            100% {
                top: 65px;
                -webkit-transform: rotateX(60deg);
                transform: rotateX(60deg);
            }
        }

        @-webkit-keyframes three1 {
            33.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }
        }

        @keyframes three1 {
            33.3333333333% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }
        }

        @-webkit-keyframes three2 {
            33.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            66.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @keyframes three2 {
            33.3333333333% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            66.6666666667% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            0%,
            100% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @-webkit-keyframes three3 {
            33.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            0%,
            100% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        @keyframes three3 {
            33.3333333333% {
                top: -65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
                color: rgba(255, 255, 255, 0.2);
            }

            66.6666666667% {
                top: 0px;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                color: #FFF;
            }

            0%,
            100% {
                top: 65px;
                -webkit-transform: rotateX(120deg);
                transform: rotateX(120deg);
            }
        }

        .hourTens li:nth-child(2) {
            -webkit-animation: three1 108000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: three1 108000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -8067s;
            animation-delay: -8067s;
        }

        .hourTens li:nth-child(3) {
            -webkit-animation: three2 108000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: three2 108000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -8067s;
            animation-delay: -8067s;
        }

        .hourTens li:nth-child(1) {
            -webkit-animation: three3 108000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: three3 108000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -8067s;
            animation-delay: -8067s;
        }

        .hourOnes li:nth-child(3) {
            -webkit-animation: ten1 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten1 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(4) {
            -webkit-animation: ten2 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten2 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(5) {
            -webkit-animation: ten3 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten3 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(6) {
            -webkit-animation: ten4 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten4 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(7) {
            -webkit-animation: ten5 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten5 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(8) {
            -webkit-animation: ten6 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten6 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(9) {
            -webkit-animation: ten7 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten7 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(10) {
            -webkit-animation: ten8 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten8 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(1) {
            -webkit-animation: ten9 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten9 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .hourOnes li:nth-child(2) {
            -webkit-animation: ten10 36000s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten10 36000s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -867s;
            animation-delay: -867s;
        }

        .minuteTens li:nth-child(2) {
            -webkit-animation: six1 3600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six1 3600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -267s;
            animation-delay: -267s;
        }

        .minuteTens li:nth-child(3) {
            -webkit-animation: six2 3600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six2 3600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -267s;
            animation-delay: -267s;
        }

        .minuteTens li:nth-child(4) {
            -webkit-animation: six3 3600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six3 3600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -267s;
            animation-delay: -267s;
        }

        .minuteTens li:nth-child(5) {
            -webkit-animation: six4 3600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six4 3600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -267s;
            animation-delay: -267s;
        }

        .minuteTens li:nth-child(6) {
            -webkit-animation: six5 3600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six5 3600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -267s;
            animation-delay: -267s;
        }

        .minuteTens li:nth-child(1) {
            -webkit-animation: six6 3600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six6 3600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -267s;
            animation-delay: -267s;
        }

        .minuteOnes li:nth-child(5) {
            -webkit-animation: ten1 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten1 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(6) {
            -webkit-animation: ten2 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten2 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(7) {
            -webkit-animation: ten3 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten3 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(8) {
            -webkit-animation: ten4 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten4 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(9) {
            -webkit-animation: ten5 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten5 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(10) {
            -webkit-animation: ten6 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten6 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(1) {
            -webkit-animation: ten7 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten7 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(2) {
            -webkit-animation: ten8 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten8 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(3) {
            -webkit-animation: ten9 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten9 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .minuteOnes li:nth-child(4) {
            -webkit-animation: ten10 600s cubic-bezier(1, 0, 1, 0) infinite;
            animation: ten10 600s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -27s;
            animation-delay: -27s;
        }

        .secondTens li:nth-child(3) {
            -webkit-animation: six1 60s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six1 60s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -7s;
            animation-delay: -7s;
        }

        .secondTens li:nth-child(4) {
            -webkit-animation: six2 60s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six2 60s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -7s;
            animation-delay: -7s;
        }

        .secondTens li:nth-child(5) {
            -webkit-animation: six3 60s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six3 60s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -7s;
            animation-delay: -7s;
        }

        .secondTens li:nth-child(6) {
            -webkit-animation: six4 60s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six4 60s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -7s;
            animation-delay: -7s;
        }

        .secondTens li:nth-child(1) {
            -webkit-animation: six5 60s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six5 60s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -7s;
            animation-delay: -7s;
        }

        .secondTens li:nth-child(2) {
            -webkit-animation: six6 60s cubic-bezier(1, 0, 1, 0) infinite;
            animation: six6 60s cubic-bezier(1, 0, 1, 0) infinite;
            -webkit-animation-delay: -7s;
            animation-delay: -7s;
        }

        .secondOnes li:nth-child(8) {
            -webkit-animation: ten1 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten1 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(9) {
            -webkit-animation: ten2 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten2 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(10) {
            -webkit-animation: ten3 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten3 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(1) {
            -webkit-animation: ten4 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten4 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(2) {
            -webkit-animation: ten5 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten5 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(3) {
            -webkit-animation: ten6 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten6 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(4) {
            -webkit-animation: ten7 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten7 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(5) {
            -webkit-animation: ten8 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten8 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(6) {
            -webkit-animation: ten9 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten9 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        .secondOnes li:nth-child(7) {
            -webkit-animation: ten10 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
            animation: ten10 10s cubic-bezier(0.9, 0, 0.9, 0) infinite;
        }

        html {
            height: 100%;
            width: 100%;
        }

        body {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: 'Lato', sans-serif;
        }

        div {
            position: relative;
            top: 40%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }



        @if($tv->template == 1 || $tv->template == 2 || $tv->template == 6)
        div {
            left: 57%;
        }
        @endif
       
        @if($tv->template == 4)
        div {
            left: 50%;
        }
        @endif
        
        @if($tv->template == 6)
        div {
            top: 40%;
        }
        @endif

        ul {
            position: relative;
            width: 30px;
            height: 35px;
            margin: 0;
            padding: 0;
            float: left;
            list-style-type: none;
            font-size: 7vw;
            font-weight: bold;
        }

        ul:nth-of-type(even) {
            margin-right: 15px;
            padding-right: 15px;
        }

        ul:nth-of-type(even)::after {
            content: ":";
            position: absolute;
            right: 0;
            color: #FFF;
            line-height: 1;
        }

        ul:last-of-type::after {
            display: none;
        }

        ul li {
            position: absolute;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            color: rgba(255, 255, 255, 0.2);
            font-size: 7vw;
            line-height: 1;
        }
    </style>
</head>

<body @if($tv->show_date_image == 1)
        style="width:100%; height:100%; background-image: url('../../time/{{$tv->clockImage}}'); background-position: center; background-size: cover; background-repeat: no-repeat;"
    @else 
        style="background: {{$tv->clock_background_color}};" 
    @endif>

    @if($tv->show_time == 1 || $tv->show_time == 2)
    <!-- partial:index.partial.html -->
    <div  @if($tv->template == 1 || $tv->template == 2) style="margin-left:0px" @endif   @if($tv->template == 4)@if($tv->show_time == 1) style="margin-left:50px" @else style="margin-left:80px" @endif @endif>
        <ul class="hourTens">
            <li>0</li>
            <li>1</li>
            <li>2</li>
        </ul>
        <ul class="hourOnes">
            <li>0</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
        </ul>

        <ul class="minuteTens">
            <li>0</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
        <ul class="minuteOnes">
            <li>0</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
        </ul>

        <ul class="secondTens">
            <li>0</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
        <ul class="secondOnes">
            <li>0</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
        </ul>

    </div>
    @endif

    @if($tv->show_time == 1)
    <div class="verticalPta"></div>
    <div style="position:relative; top:50%; left:56%; color:white">
        <span id="dayD"></span><br>
        <span id="dateD"></span>
    </div>
    @endif

    @if($tv->show_time == 0)
        <div
            style="
                text-align: center;
                font-size: 20px;
                color: white;
                position: fixed;
                top: 50%;
                left: 110px;
                margin: auto;
            "
        >
            <span id="calendar"></span>
        </div>
        @endif

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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
        var s_month = s_months[currentDate.getMonth()];
        if (date < 10) {
            date = "0" + date;
        }

        document.getElementById("dayD").innerHTML = date;
        document.getElementById("dateD").innerHTML = s_month + ", " + year;
        document.getElementById("calendar").innerHTML =
                date + " - " + day_in_full + " - " + month + " - " + year;
    </script>
</body>

</html>