<x-mail::message>
# hi,{{$user->name}}



some onecheck your profile

<x-mail::button :url="'http://127.0.0.1:8755/'">
VIsit Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
