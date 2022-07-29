<div>
    <div class="fq-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center order-md-0 order-1" style="margin-top: 80px;">
                    <h1 class="" style="color:var(--tableTitleColor1)">FAQ</h1>
                    <p class="" style="color:var(--tableTitleColor2)">Populate with relevant content please!</p>
                    @if(Auth::user()->role->name == 'Superadmin')
                    <button class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Add Faq</button>
                    @endif
                </div>
                <div class="col-md-6 align-self-center order-md-0 order-1" style="margin-top: 80px;">
                <label for="">Filer By Section</label>
                    <select class="form-control" wire:model="search" wire:input="findFAQ" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        <option value="0">All</option>
                        @foreach($sections as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="faq container">

        <div class="faq-layouting layout-spacing">

            <div class="fq-tab-section">
                <div class="row">
                    <div class="col-md-12 mb-5 mt-5">
                        <div class="accordion" id="accordionExample">

                            @if(count($faqs) > 0)
                            @foreach($faqs as $faq)
                            <div class="card" style="background:var(--tableDiv); border: 2px solid var(--tableDivBorder); ">
                                <div class="card-header" id="fqheadingOne">
                                    <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseOne{{$faq->id}}" aria-expanded="false" aria-controls="fqcollapseOne">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                            <polyline points="16 18 22 12 16 6"></polyline>
                                            <polyline points="8 6 2 12 8 18"></polyline>
                                        </svg>&nbsp;&nbsp;&nbsp;<span style="font-size:16px"><b>Q:</b> &nbsp;</span> <span class="faq-q-title" color:var(--blackText)>{{$faq->question}}</span>
                                        <div class="like-faq">
                                            <span class="section" 
                                                @if($faq->section->name == 'Media') style="background:var(--danger)" @endif
                                                @if($faq->section->name == 'Rates') style="background:var(--info)" @endif
                                                @if($faq->section->name == 'Banner') style="background:var(--primary)" @endif
                                                @if($faq->section->name == 'News') style="background:var(--warning)" @endif
                                                @if($faq->section->name == 'Announcement') style="background:var(--purple)" @endif
                                            ><small>{{$faq->section->name}}</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="fqcollapseOne{{$faq->id}}" class="collapse" aria-labelledby="fqheadingOne" data-parent="#accordionExample">
                                    <div class="card-body" style="background:var(--dashboardCard) ">
                                    <hr style="border-top: 1px solid var(--tableDivBorder)"><br>
                                        <p style="color:var(--tableFontColor)">
                                        <span style="font-size:16px; color:var(--primary)"><b>A:</b> &nbsp;</span> {{$faq->answer}}
                                        </p>
                                        <br><br>
                                        @if(Auth::user()->role->name == 'Superadmin')
                                        <button class="btn btn-sm btn-primary " style="display:block; margin:auto; border-radius:30px" data-toggle="modal" data-target="#editfaq" onclick=" 
                                                document.getElementById('Fid').value = '{{$faq->id}}';
                                                document.getElementById('question').value = '{{$faq->question}}';
                                                document.getElementById('answer').value = '{{$faq->answer}}';
                                                document.getElementById('section_id').value = '{{$faq->section_id}}';
                                            ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                            </svg>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @else
                            <div style="padding:100px 0px 0px 0px ">
                                <h2 class="text-center"><span class="text-danger">
                                        No Faqs found for this section.
                                    </span> </h2>
                            </div>
                            @endif


                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>