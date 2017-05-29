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
            <form action="{{ url('contact') }}" method="POST">
                <div class="form-group">
                    <label name="email"><h2>Uw emailadres:</h2></label>
                    <input id="email" name="email" class="form-control">
                </div>
                
                <div class="form-group">
                    <label name="subject"><h2>Onderwerp:</h2></label>
                    <input id="subject" name="subject" class="form-control">
                </div>
                
                <div class="form-group">
                    <label name="message"><h2>Bericht:</h2></label>
                    <textarea id="message" name="message" class="form-control">Voer uw bericht in...</textarea>
                </div>
                
                <input type="submit" value="Verstuur email" class="btn btn-toolbar"></input>
            </form>
            <br>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection