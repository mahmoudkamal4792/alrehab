@extends('layouts.auth')
@section('PageTitle', 'التحقق من الحساب')

@section('PageContent')
<form class="otp-form sign-form" action="/reset">
    @include('components.otp_form')
</form>

@endsection