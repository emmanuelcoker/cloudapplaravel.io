# Time Configuration

### Settings for time and date

By default we have two date and time configurations, **Server Time** & **Device Time**

-   [Server Time](#section-1)
-   [Device Time](#section-2)

<a name="section-1"></a>

## Server Time

This time configuration is set to make TV Displays always get its time and date from the server via an API which its route is defined in the `api.php` in the route folder

We have two server times


* Server Time modified with client specified time zone

```php
Route::get('/get_server_time', [App\Http\Controllers\Api\TimeController::class, 'index']);
```

##

* Server Time without any modification

```php
Route::get('/get_raw_server_time', [App\Http\Controllers\Api\TimeController::class, 'raw_time']); //the time is not modified in any way 
```
##

The following code snippet gets the server time in the TV display index.html

```php
            function check_fx_update() {
                //save to local sotrage to use for offline
                //compare with saved data when a new data is fetched
                //save to local  and update dom only when  new data is available
                var saved_fx_name = 'fetched_fx_data';
                var update_url = "API_URL";

                $.ajax({
                    url: update_url,
                    data: {},
                    error: function(xhr, status, error) {
                        // alert(xhr.status);
                        if (localStorage.getItem(saved_fx_name) !== null) {
                            var local_fx = JSON.parse(localStorage.getItem(saved_fx_name));
                            update_fx_dom(local_fx);
                        }
                        if (localStorage.getItem(saved_fx_name) == 0) {
                            var local_fx = JSON.parse(localStorage.getItem(saved_fx_name));
                            update_fx_dom(local_fx);
                        }

                    },
                    success: function(data) {
                        update_fx_dom(data);
                        localStorage.setItem(saved_fx_name, JSON.stringify(data));

                    },
                    type: 'POST'
                });

            }
```

<a name="section-2"></a>

## Device Time

On device time, JavaScript is used in the TV display index.html to get the browser time of the device 

```php
 function getTime(){
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
}

```