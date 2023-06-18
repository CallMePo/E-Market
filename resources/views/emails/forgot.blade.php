@component('mail::message')
    Hello {{$akun->namaAkun}},

    Email ini digunakan untuk reset password anda

@component('mail::button', ['url' => url('reset/' .$akun->remember_token)])
Reset Password Anda
@endcomponent

<p>Jika ada masalah silahkan hubungi kami</p>

Terima kasih, <br>
{{ config('app.name') }}
@endcomponent
