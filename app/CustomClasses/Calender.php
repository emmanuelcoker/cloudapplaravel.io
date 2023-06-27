<?php

namespace App\CustomClasses;

use App\Models\GlobalSetting;
use App\Models\Media;
use App\Models\Tab;
use App\Models\Training;
use App\Models\Tv;

class Calender
{


    //publish events to event,json for calender consumption
    public static function events()
    {
        $event = [];
        $tv_id = session()->get('tv')['id'];
        $tv = Tv::find($tv_id);
        $tabName = Tab::first()['training'];
        $settings = GlobalSetting::first();
        $x = 1;


        //general varianle for training
        $morning = Training::where('tv_id', $tv_id)->where('name', 'Morning')->first();
        $afternoon = Training::where('tv_id', $tv_id)->where('name', 'Afternoon')->first();
        $evening = Training::where('tv_id', $tv_id)->where('name', 'Evening')->first();
        $weeks = 30;


        //morning
        if ($settings->morning) {

            $morningHour = date('H', strtotime($morning->start));
            $morningMin = date('i', strtotime($morning->start));
            //for morning section
            $mondays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first monday of next month" . "-28 days"));
            $tuesdays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first tuesday of next month" . "-28 days"));
            $wednesdays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first wednesday of next month" . "-28 days"));
            $thursdays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first thursday of next month" . "-28 days"));
            $fridays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first friday of next month" . "-28 days"));
            $saturdays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first saturday of next month" . "-28 days"));
            $sundays = date("Y-m-d " . $morningHour . ":" . $morningMin . ":s", strtotime("first sunday of next month" . "-28 days"));

            //monday 
            if ($morning->mon) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($mondays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $mondays = $newDate;
                }
            }


            //tuesday 
            if ($morning->tue) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($tuesdays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $tuesdays = $newDate;
                }
            }


            //wednesday 
            if ($morning->wed) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($wednesdays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $wednesdays = $newDate;
                }
            }


            //thursday 
            if ($morning->thurs) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($thursdays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $thursdays = $newDate;
                }
            }

            //friday 
            if ($morning->fri) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($fridays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $fridays = $newDate;
                }
            }

            //saturday 
            if ($morning->sat) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($saturdays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $saturdays = $newDate;
                }
            }


            //sunday 
            if ($morning->sun) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate = date("Y-m-d H:i:s", strtotime($sundays . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'MDC',
                        'start' => $newDate,
                        'className' => 'bg-success',
                        'description' => 'Today\'s ' . $morning->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($morning->start)) . ' ends: ' . date('h:ia', strtotime($morning->end))
                    ]);
                    $sundays = $newDate;
                }
            }
        }


        //for media
        $medias = Media::where('tv_id', $tv_id)->where('start', '!=', null)->get();
        foreach ($medias as $media) {
            array_push($event, [
                'id' => 'event-' . $x++,
                'title' => 'Media',
                'start' => $media->start,
                'end' => $media->end,
                'className' => 'bg-warning',
                'description' => 'Media ' . (int)$media->file . ' file starts: ' . date('d M, Y', strtotime($media->start)) . ' (Time: ' . date('h:ia', strtotime($media->start)) . ') and ends: ' . date('d M, Y', strtotime($media->end)) . ' (Time: ' . date('h:ia', strtotime($media->end)) . ')'
            ]);
        }



        //afternoon
        if ($settings->afternoon) {

            $afternoonHour = date('H', strtotime($afternoon->start));
            $afternoonMin = date('i', strtotime($afternoon->start));

            $mondays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first monday of next month" . "-28 days"));
            $tuesdays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first tuesday of next month" . "-28 days"));
            $wednesdays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first wednesday of next month" . "-28 days"));
            $thursdays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first thursday of next month" . "-28 days"));
            $fridays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first friday of next month" . "-28 days"));
            $saturdays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first saturday of next month" . "-28 days"));
            $sundays1 = date("Y-m-d " . $afternoonHour . ":" . $afternoonMin . ":s", strtotime("first sunday of next month" . "-28 days"));

            //monday 
            if ($afternoon->mon) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($mondays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $mondays1 = $newDate1;
                }
            }


            //tuesday 
            if ($afternoon->tue) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($tuesdays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $tuesdays1 = $newDate1;
                }
            }


            //wednesday 
            if ($afternoon->wed) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($wednesdays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $wednesdays1 = $newDate1;
                }
            }


            //thursday 
            if ($afternoon->thurs) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($thursdays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $thursdays1 = $newDate1;
                }
            }

            //friday 
            if ($afternoon->fri) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($fridays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $fridays1 = $newDate1;
                }
            }

            //saturday 
            if ($afternoon->sat) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($saturdays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $saturdays1 = $newDate1;
                }
            }


            //sunday 
            if ($afternoon->sun) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate1 = date("Y-m-d H:i:s", strtotime($sundays1 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'ADC',
                        'start' => $newDate1,
                        'className' => 'bg-danger',
                        'description' => 'Today\'s ' . $afternoon->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($afternoon->start)) . ' ends: ' . date('h:ia', strtotime($afternoon->end))
                    ]);
                    $sundays1 = $newDate1;
                }
            }
        }




        //for announcement
        array_push($event, [
            'id' => 'event-' . $x++,
            'title' => 'Announcement',
            'start' => $tv['announcement']['start'],
            'end' => $tv['announcement']['end'],
            'className' => 'bg-default',
            'description' => 'Announcement starts: ' . date('d M, Y', strtotime($tv['announcement']['start'])) . ' (Time: ' . date('h:ia', strtotime($tv['announcement']['start'])) . ') and ends: ' . date('d M, Y', strtotime($tv['announcement']['end'])) . ' (Time: ' . date('h:ia', strtotime($tv['announcement']['end'])) . ')'
        ]);





        //evening
        if ($settings->evening) {

            $eveningHour = date('H', strtotime($evening->start));
            $eveningMin = date('i', strtotime($evening->start));

            $mondays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first monday of next month" . "-28 days"));
            $tuesdays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first tuesday of next month" . "-28 days"));
            $wednesdays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first wednesday of next month" . "-28 days"));
            $thursdays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first thursday of next month" . "-28 days"));
            $fridays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first friday of next month" . "-28 days"));
            $saturdays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first saturday of next month" . "-28 days"));
            $sundays2 = date("Y-m-d " . $eveningHour . ":" . $eveningMin . ":s", strtotime("first sunday of next month" . "-28 days"));

            //monday 
            if ($evening->mon) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($mondays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $mondays2 = $newDate2;
                }
            }


            //tuesday 
            if ($evening->tue) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($tuesdays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $tuesdays2 = $newDate2;
                }
            }


            //wednesday 
            if ($evening->wed) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($wednesdays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $wednesdays2 = $newDate2;
                }
            }


            //thursday 
            if ($evening->thurs) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($thursdays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $thursdays2 = $newDate2;
                }
            }

            //friday 
            if ($evening->fri) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($fridays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $fridays2 = $newDate2;
                }
            }

            //saturday 
            if ($evening->sat) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($saturdays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $saturdays2 = $newDate2;
                }
            }


            //sunday 
            if ($evening->sun) {
                for ($i = 0; $i < $weeks; $i++) {
                    $newDate2 = date("Y-m-d H:i:s", strtotime($sundays2 . '7 days'));
                    array_push($event, [
                        'id' => 'event-' . $x++,
                        'title' => 'EDC',
                        'start' => $newDate2,
                        'className' => 'bg-primary',
                        'description' => 'Today\'s ' . $evening->name .' '. $tabName.' starts: ' . date('h:ia', strtotime($evening->start)) . ' ends: ' . date('h:ia', strtotime($evening->end))
                    ]);
                    $sundays2 = $newDate2;
                }
            }
        }



        //2021-06-21 12:00:00

        // foreach ($sections  as  $section) {
        //     if ($section->is_active) {
        //         array_push($event, [
        //             'id' => 'event-' . $x++,
        //             'title' => $section->name . ' DS',
        //             'start' => date('Y-m-d') . ' ' . $section->start,
        //             'end' => date('Y-m-d') . ' ' . $section->end,
        //             'className' => 'bg-success',
        //             'description' => 'Today\'s ' . $section->name .' '. $tabName.' starts: ' . date('h:i', strtotime($section->start)) . ' ends: ' . date('h:i', strtotime($section->end))
        //         ]);
        //     }
        // }

        $outputPath = Path::serverFullAsset('calender/events.json');
        file_put_contents($outputPath, json_encode($event));
    }
}
