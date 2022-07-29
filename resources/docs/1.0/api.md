# APIs

### All API routes are defined in **'project/routes/api.php'** 


-   [Formatted Server Time](#section-1)
-   [Unformatted Server Time](#section-2)
-   [Run Schedule](#section-3)
-   [Get Updated Rate](#section-4)

<a name="section-1"></a>

## Formatted Server Time (Server Time)

Server Time modified with client specified time zone

### Route

```php
Route::get('/get_server_time', [App\Http\Controllers\Api\TimeController::class, 'index']);
```


<a name="section-2"></a>
## Unformatted Server Time

Server Time without any modification

### Route

```php
Route::get('/get_raw_server_time', [App\Http\Controllers\Api\TimeController::class, 'raw_time']); //the time is not modified in any way 
```

<a name="section-3"></a>
## Run Schedule

The API calls the function that updates the TV display index.html with all schedule that should occur

### Route

```php
Route::post('/run-schedule', [App\Http\Controllers\Api\ScheduleController::class, 'index']); 
```


<a name="section-4"></a>
## Get Updated Rate

This API gets all latest rates from the server

### Route

```php
Route::post('/get-rate-update', [App\Http\Controllers\Api\RateController::class, 'index']);
```