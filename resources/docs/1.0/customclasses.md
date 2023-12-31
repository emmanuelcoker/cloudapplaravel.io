# Custom Classes
### All Custom classes are located at the **<em>'projectFolder/app/CustomClasses' </em>**  folder 




- [Activity Class](#section-1)
- [Calendar Class](#section-2)
- [Location Class](#section-3)
- [Path Class](#section-4)
- [Publish Class](#section-5)
- [Permission Class](#section-6)
- [Rss Class](#section-7)
- [Schedule Class](#section-8)
- [StoreRateToArray Class](#section-9)
- [Variables Class](#section-10)





<a name="section-1"></a>
## Activity Class 

This Class helps with logging every single activity done on the app by any user, this activities include adding, updating, switching, uploading, scheduling,re-arranging, chatting, emailing, deleting and publishing of items.

This class has only `public static function logChanges($file, $section, $action, $switch = null)` function that takes 4 parameters

### Parameters
`$action` parameter is either added, updated, switched, uploaded, scheduled,re-arranged, chatted, emailed, deleted and published

**NOTE** This is the action that the user initiated

`$file` if a file was involve in the activity of the user, the path of that file must be logged, it is passed through this parameter

`$section` this is the page or section of the app the changes was made on

`$switch` this variable is null by default, its for actions that involves the user switching and item off or on (boolean)



<a name="section-2"></a>
## Calendar Class

This class is where the formatting of Training and media scheduling events are done to be stored in a JSON file which is being used by the calendar plugin at the calendar interface

### JSON file path 
All public files are found in the laravel public folder

```php
$outputPath = 'calender/events.json';
file_put_contents($outputPath, json_encode($event));
```




<a name="section-3"></a>
## Location Class

This class is where all the logic for creating a new location display folder is done, this process is done in the `createNewDisplay($company, $box)` function

What the function does is to duplicate the **Device1** folder and rename it to the new generated display name


### Parameters
It takes two parameters which include

`$company` the name of the company is passed through this parameter

`$box` the name of the display name generated is passed through this parameter



<a name="section-4"></a>
## Path Class

This class contains a `asset($path)` function used to reformat assets path url to where ever specified

### Parameters
`$path` parameter is the variable used to pass the asset name/short path 



<a name="section-5"></a>
## Publish Class

This class contains functions used to publish / convert php blade file to pure hmtl file for the TV display after the blade file has been updated with latest data, functions includes: 

### To static HTML
```php
public static function toStatic()
```

This function does the updating of the php blade file then converts it to static html


### To ZIP
```php
public static function zip()
```

This function compresses the location display folder into a zip file


### To CSV

`logChangedFiles` function in this same class logs all the changed assets (videos and images) made by the user into a session which is then display to the user or converted to CSV file (that is if csv option is chosen by the user)


```php
public static function logChangedFiles($file, $section)
```

### Parameters
`$file` the name of the file or page the user changed is passed through this parameter

`$section` this is the page or section of the app the changes was made on

##
##### Pushing to CSV
```php
 public static function apiCSV($files)
 ```

 This function takes the session data generated by the `logChangedFiles` function and stores the data into a CSV file



 <a name="section-6"></a>

## Permission Class

This class contains a function `check($key)` with a key variable parameter which is the key code name of the event/action the authenticated user is about to perform, this function returns `true` or `false` after checking if the authenticated user has the permission to perform that event or action

```php
public static function check($key)
```


<a name="section-7"></a>
## Rss Class

This class contains two functions for extracting and displaying RSS

* Function to extract and format feeds from a RSS link 

```php
private static function get_rss_feed_as_html(($feed_url, $max_item_cnt = 10, $show_date = true, $show_description = true, $max_words = 0, $cache_timeout = 7200, $cache_prefix = "/tmp/rss2html-")
```

##
#### Parameters

`$feed_url` passes the RSS external link

`$max_item_cnt` passes the number of feeds to extract from the rss link

`$show_date` passes boolean to either show feed/news published data or not (it is true by default)

`$show_description` passes boolean to either show feed/news description or not (it is true by default)

`$max_words` passes the number of words per rss feed to display

`$cache_timeout` passes desired cache timeout in seconds


* Function to display RSS to interface

This receives two parameters from the user and passes it to `get_rss_feed_as_html` function to complete extracting and formatting or RSS feeds 

```php
public static function output_rss_feed($feed_url, $max_item_cnt)
```
##
#### Parameters

`$feed_url` passes the RSS external link

`$max_item_cnt` passes the number of feeds to extract from the rss link





<a name="section-8"></a>
## Schedule Class

This class contains `updateTv()` function that updates a specified static location display with all time schedules specified by the user

```php
 public static function updateTv($tv_id, $newItem, $operation)
```

##
#### Parameters

`$tv_id` passes the TV id the user wants to update

`$newItem` passes the id of the media/asset file with the new time scheduled 

`$operation` passes the action the user want done on the new media/asset file, this action is either ('add' or 'remove)





<a name="section-9"></a>
## StoreRateToArray Class

This class contains functions that handles the storing and retrieving of Rate values from a PHP file in which its data is in an array format, for the option of the display index.html to get all rate data using Javascript

```php
  //storing rates in array format into a file
public static function store()
```

Note:
Rate data is serialized `serialize($data)` before being stored and unserialized after retrieving in other to convert data back to array


```php
    //retreiving rates
    public static function retrieve()
```




<a name="section-10"></a>
## Variables Class

This class handles the path to different locations on the application which includes path to TV display, ZIP directory, Company directory etc




