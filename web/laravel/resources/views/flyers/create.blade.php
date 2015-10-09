@inject('countries', 'App\Http\Utilities\Country')
@extends('layout')

@section('content')
<h1>Selling Your Home?</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" action="/flyers" class="col-md-6">
        @include('flyers.form')
    </form>
@stop