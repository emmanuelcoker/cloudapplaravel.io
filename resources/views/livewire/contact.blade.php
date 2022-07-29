<div class="contact-form" style="background:transparent" >
    <form class="" wire:submit.prevent="send" style="background:transparent" >
       
        <h4 style="color:var(--blackText)">Send us a Message</h4>

        <div class="row mb-4">
            <div class="col-sm-12 col-12">
                <p class="" style="color:var(--blackText)" >Preferred method of communication</p>
            </div>
            <div class="col-sm-12 col-12 input-fields">
                <div class="n-chk">
                    <label class="new-control new-radio radio-primary" style="color:var(--blackText)">
                        <input  type="radio" class="new-control-input" wire:model="type" value="Email"  >
                        <span class="new-control-indicator"></span> &nbsp;&nbsp; Email
                    </label>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="n-chk">
                    <label class="new-control new-radio radio-primary" style="color:var(--blackText)">
                        <input type="radio" class="new-control-input" wire:model="type" value="Phone">
                        <span class="new-control-indicator"></span>&nbsp;&nbsp; Phone
                    </label>
                </div>
            </div>
        </div>


        @if($type == 'Email')
        <div class="row mb-4">
            <div class="col-sm-12 col-12 input-fields">
                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                </svg>
                <input style="background:var(--inputBackground); color:var(--inputColor); border:1px solid var(--imgBorder)"  type="text" class="form-control" wire:model="email" placeholder="Email" >
            </div>
        </div>
        @endif

        @if($type == 'Phone')
        <div class="row mb-4">
            <div class="col-sm-12 col-12 input-fields">
                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <input style="background:var(--inputBackground); color:var(--inputColor); border:1px solid var(--imgBorder)" type="text" class="form-control" wire:model="phone" placeholder="Phone">
            </div>
        </div>
        @endif

        <div class="row mb-4">
            <div class="col-sm-12 col-12 input-fields mb-4 mb-sm-0">

                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                </svg>
                <input style="background:var(--inputBackground); color:var(--inputColor); border:1px solid var(--imgBorder)" type="text" class="form-control" wire:model="subject" placeholder="Subject">
            </div>
        </div>

       
        <div class="row">
            <div class="col">
                <div class="form-group input-fields">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <textarea  style="background:var(--inputBackground); color:var(--inputColor); border:1px solid var(--imgBorder)" class="form-control" wire:model="message" id="exampleFormControlTextarea1" rows="4" placeholder="Description"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-sm-left text-center">
                <button class="btn btn-primary mt-4">Submit</button>
            </div>
        </div>
    </form>
</div>