@component('mail::message')
# Introduction


This is new query from {{$name}}
<br>
Message:
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
