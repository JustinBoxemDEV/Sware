@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="contact-block">
            <br>
            <div class="page-header">
                <h1>&LT;/Laat je horen!&GT;</h1>
            </div>
            @if(Auth::guest())
            <h1>U moet ingelogd zijn om gebruik te maken met de mail service
                <br>
                <br>
                <a href="/login" style="background-color: black;">Inloggen</a>
            </h1>
            @else
            <h1>FORM HERE</h1>
            @endif
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection