@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
This message was received from CloudApp.
@endcomponent
@endslot

{{-- Body --}}
<ul>
    <li><b>Subject:</b><br> {{$data['subject']}}</li>
    <br>
    @if($data['type'] == 'Email')
    <li><b>Email:</b><br> {{$data['email']}}</li>
    @else
    <li><b>Phone:</b><br> {{$data['phone']}}</li>
    @endif
    <br>
    <br>
    <li><b>Message:</b><br> {{$data['message']}}</li><br>
</ul>


{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
<p>Client sent this message to you from CloudApp</p>
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent