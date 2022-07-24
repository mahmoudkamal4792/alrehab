@extends('layouts.master')
@section('PageTitle', 'فروعنا')

@section('PageContent')
    <div class="container">
        <div class="branches-container">
            @include('components.branches')
        </div>
    </div>
@endsection