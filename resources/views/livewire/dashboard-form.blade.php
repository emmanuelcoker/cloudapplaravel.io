<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="row">
        <div class="col-md-6" >
            <div class="widget widget-chart-one" style="padding:10px">
                <div class="widget-heading">
                    <h5 class="">Present Location & Display</h5>
                </div>
                <Br>
                <div class="widget-content">
                    <div class="row" style="margin-bottom: 7px;">
                        <div class="col-md-6" style="margin-top:10px">
                            <div class="myLocation" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg> &nbsp;
                                {{session()->get('tv')['location']['name']}}
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-top:10px">
                            <div class="myLocation" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                                &nbsp; {{session()->get('tv')['name']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" >
            <div class="widget widget-chart-one" style="padding:10px">
                <div class="widget-heading">
                    <h5 class="">Change Location & Display</h5>
                </div>
                <div class="widget-content">
                    <div class="row">
                        <div class="col-md-6" style="margin-top:20px">
                            <div class="form-group">
                                <select wire:model="location" wire:change="getDisplays()" class="form-control" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                    <option value="0" class="form-control">Change Location</option>
                                    @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6" style="margin-top:20px">
                            <select wire:model="display" wire:change="changeDisplay()" class="form-control"  style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                <option value="0" class="form-control">Displays</option>
                                @foreach($displays as $display)
                                <option value="{{$display->id}}">{{$display->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>