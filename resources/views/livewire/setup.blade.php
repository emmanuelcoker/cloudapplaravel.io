
    <div class="col-md-12">
        <div class="contact-occupation">
            <select class="form-control" wire:model="location_country" wire:change="getStatesOnSetup" id="" required>
                <option value="0">Country</option>
                @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>
        <Br>
    
        <div class="contact-occupation">
            <select class="form-control" wire:model="location_state" wire:change="getCitiesOnSetup" id="" required>
                <option value="0">State</option>
                @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
                @endforeach
            </select>
        </div>
        <Br>
    
        <div class="contact-occupation">
            <select class="form-control" wire:model="location_city" wire:change="onCity" id="" required>
                <option value="0">City</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <Br>
    </div>
