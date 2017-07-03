<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Bestelscherm</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">{{ Form::label('userID', 'Klant:*') }}</div>
                <div class="col-lg-6">{{ Form::select('userID', $user, array('disabled'))}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('packageID', 'Pakket: *') }}</div>
                <div class="col-lg-6">{{ Form::select('packageID', $package)}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('service1ID', 'Service 1: *') }}</div>
                <div class="col-lg-6">{{ Form::select('service1ID', $service1)}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('service2ID', 'Service 2: *') }}</div>
                <div class="col-lg-6">{{ Form::select('service2ID', $service2)}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('service3ID', 'Service 3: *') }}</div>
                <div class="col-lg-6">{{ Form::select('service3ID', $service3)}}</div>
            </div> 
            {{ Form::submit('Plaats bestelling') }}
            <h2 class="paymenthistoryh1"><a href="/order"><button class="btn btn-danger">[ : : Keer terug : : ]</button></a></h2>
        </div>
    </div>
</div>