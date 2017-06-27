@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="paymenthistoryh1"
         <h1>{{ Auth::user()->name }}'s bestel geschiedenis</h1>
        <h2 class="paymenthistoryh1">
            <a href="/up"><button class="btn btn-danger">[ : : Keer terug : : ]</button></a>
            <a href="/order/create"><button class="btn btn-primary">[ : : Plaats bestelling : : ]</button></a>
        </h2>
    </div>
    <table class="display table table-bordered table-condensed table-responsive dynamic-table">
        <thead>
            <tr>
                <th>Pakket</th>
                <th>1e Service</th>
                <th>2de Service</th>
                <th>3de Service</th>
                <th>Datum</th>
            </tr>
        </thead>

        <tbody>
        <br>
        @foreach($orders as $order)
        <tr class="clickable-row" data-url="/order/{{ $order->id }}">
            <td>{{ $order->User->name}}</td>
            <td>{{ $order->Package->packageName }}</td>
            <td>{{ $order->Service->serviceName }}</td>
            <td>{{ $order->Service->serviceName }}</td>
            <td>{{ $order->Service->serviceName }}</td>
            <td>{{ $order->created_at }}</td>
            {!! Form::close() !!}
        </tr>
        @endforeach
        </tbody>

    </table>
    <br>
    <h2 class="paymenthistoryh1"><a href="/up"><button class="btn btn-danger">[ : : Keer terug : : ]</button></a></h2>
</div>
@endsection