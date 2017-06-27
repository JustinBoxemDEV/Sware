@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Uren toevoegingsscherm</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">{{ Form::label('userID', 'Klant:*') }}</div>
                <div class="col-lg-6">{{ Form::text('userID', $user, array('disabled'))}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('packageID', 'Pakket: *') }}</div>
                <div class="col-lg-6">{{ Form::select('packageID', $package)}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('serviceID1', 'Service 1: *') }}</div>
                <div class="col-lg-6">{{ Form::select('serviceID1', $service1)}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('serviceID2', 'Service 2: *') }}</div>
                <div class="col-lg-6">{{ Form::select('serviceID2', $service2)}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('serviceID3', 'Service 3: *') }}</div>
                <div class="col-lg-6">{{ Form::select('serviceID3', $service3)}}</div>
            </div> 
            {{ Form::submit('Opslaan') }}
            <h2 class="paymenthistoryh1"><a href="/order"><button class="btn btn-danger">[ : : Keer terug : : ]</button></a></h2>
        </div>
    </div>
</div>
@endsection


