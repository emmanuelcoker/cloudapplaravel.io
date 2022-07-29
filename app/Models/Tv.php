<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    use HasFactory;

    protected $fillable = [
       'location_id', 'displayID', 'zone_id', 'name', 'is_active', 'show_date_image', 'show_time', 'interest_rate_type', 'clockImage', 'color', 'template', 'localUpdateLogo', 'clockLayout', 'updatedVideo'
    ];

    //get tv medias
    public function medias(){
        return $this->hasMany('App\Models\Media');
    }
    
     
    public function location(){
        return $this->belongsTo('App\Models\Location');
    }
    
    public function zone(){
        return $this->belongsTo('App\Models\Zone');
    }
    
    
    //get tv announcement
    public function announcement(){
        return $this->hasOne('App\Models\Announce', 'tv_id');
    }
    
    //get tv training section
    public function trainingSection(){
        return $this->hasMany('App\Models\Training');
    }
    

    //get tv logos
    public function logos(){
        return $this->hasMany('App\Models\Logo');
    }
   
    //get tv rsses
    public function rsses(){
        return $this->hasMany('App\Models\Rss');
    }

    //get tv newses
    public function newses(){
        return $this->hasMany('App\Models\News');
    }
    
    //get tv banners
    public function banners(){
        return $this->hasMany('App\Models\Banner');
    }
    
    //get all tv trainings videos
    public function trainingVideos(){
        return $this->hasMany('App\Models\TrainingVideo');
    }


    //get tv morning training videos
    public function morningVideos($id){
        return TrainingVideo::where('tv_id', $id)->where('morning', true)->orderBy('m_position', 'asc')->get();
    }



    //get tv afternoon training videos
    public function afternoonVideos($id){
        return TrainingVideo::where('tv_id', $id)->where('afternoon', true)->orderBy('a_position', 'asc')->get();
    }



    //get tv evening training videos
    public function eveningVideos($id){
        return TrainingVideo::where('tv_id', $id)->where('evening', true)->orderBy('e_position', 'asc')->get();
    }

}
