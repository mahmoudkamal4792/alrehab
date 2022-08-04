@extends('layouts.master')
@section('PageTitle', 'حجوزاتي')

@section('PageContent')

<div class="container">
    <div class="orders-list">
        @include('components.order', ['count' => 5])
    </div>
</div>

@endsection