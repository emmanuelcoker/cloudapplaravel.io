
<div class="tab-pane fade" id="rounded-pills-icon-vd1" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4  style="color:var(--blackText)">Preview </h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:center;">
                                            <h4  style="color:var(--blackText)">File Type</h4>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align:center;">
                                            <h4  style="color:var(--blackText)">Title</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:left;">
                                            <h4 style="color:var(--blackText)" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Status</h4>
                                        </div>
                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <?php $x = 1;
                                $y = 1;  ?>

@if(count($tv->morningVideos($tv->id)) > 0)
<div id="mediaDragM" class='dragula'>
                                @foreach($tv->morningVideos($tv->id) as $video)
                                <div class="items" data-index_morning="{{$video->id}}" data-position_morning="{{$video->m_position}}">
                                    <div class="item-content">
                                        <div class="user-profile" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <a href="" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">
                                                <video src="{{Variables::tvPath('train/item'.$video->video.'.mp4')}}" style="width:70px; height:70px; margin-left: 40px; margin-top:-10px "> </video></a>
                                            &nbsp;&nbsp;

                                        </div>
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" data-occupation="{{$video->title}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Video)</p>
                                            </div>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align: center;">
                                            <p class="info-title">Title: </p>
                                            <p class="usr-email-addr" data-email="{{$video->title}}" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">{{$video->title}}</p>
                                        </div>

                                        <div class="user-email" style="width: 20%; text-align: center;">
                                        @if($video->is_active)
                                        <div class="classSchedule classSuccess">Active</div>
                                        @else
                                        <div class="classSchedule classDanger">Not Active</div>
                                        @endif
                                        </div>
                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            &nbsp;&nbsp;
                                            <a href="#" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
 @else
                                <h3 class="text-center text-danger" style="margin:60px 0px">You have not uploaded Scheduled Videos for this display!<h2>
                                @endif
                            </div>
                        </div>




                        <div class="tab-pane fade" id="rounded-pills-icon-vd2" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4  style="color:var(--blackText)">Preview 3</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:center;">
                                            <h4  style="color:var(--blackText)">File Type</h4>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align:center;">
                                            <h4  style="color:var(--blackText)">Title</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:left;">
                                            <h4 style="color:var(--blackText)" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Status</h4>
                                        </div>
                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <?php $x = 1;
                                $y = 1;  ?>

@if(count($tv->afternoonVideos($tv->id)) > 0)
<div id="mediaDragA" class='dragula'>
                                @foreach($tv->afternoonVideos($tv->id) as $video)
                                <div class="items" data-index_afternoon="{{$video->id}}" data-position_afternoon="{{$video->m_position}}">
                                    <div class="item-content">
                                        <div class="user-profile" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <a href="" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">
                                                <video src="{{Variables::tvPath('train/item'.$video->video.'.mp4')}}" style="width:70px; height:70px; margin-left: 40px; margin-top:-10px "> </video></a>
                                            &nbsp;&nbsp;

                                        </div>
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" data-occupation="{{$video->title}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Video)</p>
                                            </div>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align: center;">
                                            <p class="info-title">Title: </p>
                                            <p class="usr-email-addr" data-email="{{$video->title}}" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">{{$video->title}}</p>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                        @if($video->is_active)
                                        <div class="classSchedule classSuccess">Active</div>
                                        @else
                                        <div class="classSchedule classDanger">Not Active</div>
                                        @endif
                                        </div>

                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            &nbsp;&nbsp;
                                            <a href="#" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
 @else
                                <h3 class="text-center text-danger" style="margin:60px 0px">You have not uploaded Scheduled Videos for this display!<h2>
                                @endif
                            </div>
                        </div>


                        <div class="tab-pane fade" id="rounded-pills-icon-vd3" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4  style="color:var(--blackText)">Preview 4</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:center;">
                                            <h4  style="color:var(--blackText)">File Type</h4>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align:center;">
                                            <h4  style="color:var(--blackText)">Title</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:left;">
                                            <h4 style="color:var(--blackText)" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Status</h4>
                                        </div>
                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <?php $x = 1;
                                $y = 1;  ?>
@if(count($tv->eveningVideos($tv->id)) > 0)
<div id="mediaDragE" class='dragula '>
                                @foreach($tv->eveningVideos($tv->id) as $video)
                                <div class="items" data-index_evening="{{$video->id}}" data-position_evening="{{$video->m_position}}">
                                    <div class="item-content">
                                        <div class="user-profile" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <a href="" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">
                                                <video src="{{Variables::tvPath('train/item'.$video->video.'.mp4')}}" style="width:70px; height:70px; margin-left: 40px; margin-top:-10px "> </video></a>
                                            &nbsp;&nbsp;

                                        </div>
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" data-occupation="{{$video->title}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Video)</p>
                                            </div>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align: center;">
                                            <p class="info-title">Title: </p>
                                            <p class="usr-email-addr" data-email="{{$video->title}}" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">{{$video->title}}</p>
                                        </div>
                                        
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                        @if($video->is_active)
                                        <div class="classSchedule classSuccess">Active</div>
                                        @else
                                        <div class="classSchedule classDanger">Not Active</div>
                                        @endif
                                        </div>

                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            &nbsp;&nbsp;
                                            <a href="#" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                        </div>
 @else
                                <h3 class="text-center text-danger" style="margin:60px 0px">You have not uploaded Scheduled Videos for this display!<h2>
                                @endif
                            </div>
                        </div>

