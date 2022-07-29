<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
            <div class="widget widget-card-two" style="border:2px solid var(--dashboardCard)">
                <div class="widget-content">

                    <div class="media">
                        <!-- <div class="w-img">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                    </div> -->
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Select Template</h6>
                            <p class="meta-date-time">Pick your choose</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <h5>6 Available Template</h5>
                        <div class="row" style="margin-top: 50px;">


                            <div class="col-md-6" style="margin-bottom:20px">
                                <img src="{{Path::asset('images/1b.jpg')}}" alt="" style="width: 300px; height:200px"  class="img-responsive">
                                <div class="n-chk" style="margin-top: 15px;">
                                    <label class="new-control new-checkbox checkbox-success">
                                        <input type="radio" wire:model="template" value="1" wire:click="update" class="new-control-input">
                                        <span class="new-control-indicator"></span> .
                                    </label>
                                </div>
                            </div>
                           
                            <div class="col-md-6" style="margin-bottom:20px">
                                <img src="{{Path::asset('images/2b.jpg')}}" alt="" style="width: 300px; height:200px"  class="img-responsive">
                                <div class="n-chk" style="margin-top: 15px;">
                                    <label class="new-control new-checkbox checkbox-success">
                                        <input type="radio" wire:model="template"  value="2"  wire:click="update" class="new-control-input">
                                        <span class="new-control-indicator"></span> .
                                    </label>
                                </div>
                            </div>
                           
                            <div class="col-md-6" style="margin-bottom:20px">
                                <img src="{{Path::asset('images/3b.jpg')}}" alt="" style="width: 300px; height:200px"  class="img-responsive">
                                <div class="n-chk" style="margin-top: 15px;">
                                    <label class="new-control new-checkbox checkbox-success">
                                        <input type="radio" wire:model="template"  value="3"  wire:click="update" class="new-control-input">
                                        <span class="new-control-indicator"></span> .
                                    </label>
                                </div>
                            </div>
                           
                            <div class="col-md-6" style="margin-bottom:20px">
                                <img src="{{Path::asset('images/4b.jpg')}}" alt="" style="width: 300px; height:200px"  class="img-responsive">
                                <div class="n-chk" style="margin-top: 15px;">
                                    <label class="new-control new-checkbox checkbox-success">
                                        <input type="radio" wire:model="template"  value="4"  wire:click="update" class="new-control-input">
                                        <span class="new-control-indicator"></span> .
                                    </label>
                                </div>
                            </div> 
                           
                            <div class="col-md-6" style="margin-bottom:20px">
                                <img src="{{Path::asset('images/5b.jpg')}}" alt="" style="width: 300px; height:200px"  class="img-responsive">
                                <div class="n-chk" style="margin-top: 15px;">
                                    <label class="new-control new-checkbox checkbox-success">
                                        <input type="radio" wire:model="template"  value="5"  wire:click="update" class="new-control-input">
                                        <span class="new-control-indicator"></span> .
                                    </label>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6" style="margin-bottom:20px">
                                <img src="{{Path::asset('images/fx_template.jpg')}}" alt="" style="width: 300px; height:200px"  class="img-responsive">
                                <div class="n-chk" style="margin-top: 15px;">
                                    <label class="new-control new-checkbox checkbox-success">
                                        <input type="radio" wire:model="template" value="6" wire:click="update" class="new-control-input">
                                        <span class="new-control-indicator"></span> .
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>