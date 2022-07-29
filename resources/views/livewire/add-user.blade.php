<form wire:submit.prevent="submit">
    <div class="searchable-items list">



        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="margin-top: 40px;">
            <div class="info">
                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <div class="work-section">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree3"><b>Full Name</b></label>
                                                <input type="text" wire:model="name" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Email</b></label>
                                                <input type="email" wire:model="email" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Phone Number</b></label>
                                                <input type="tel" wire:model="number" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree3"><b>Role</b></label>
                                                <select wire:model="role" id="" class="form-control" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                    <option value="">Choose</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Password</b></label>
                                                <input type="password" wire:model="password" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Confirm Password</b></label>
                                                <input type="password" wire:model="confirm" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button class="btn btn-success" type="submit" style="display: block; margin:30px auto 45px auto; width:200px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                </svg> &nbsp;&nbsp; Save
            </button>
</form>