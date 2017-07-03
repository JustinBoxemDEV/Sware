@extends('layouts.layout')
@section('content')
<h3 class="page-header">Ordernummer: {{ $order->id }}<br></h3>

<table class="table table-condensed table-responsive">
    <thead>
        <tr class="transaction-display-headers">
            <th>Pakket</th>
            <th>1e Service</th>
            <th>2de Service</th>
            <th>3de Service</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $order->Package->packageName }}</td>
            <td>{{ $order->Service1->serviceName }}</td>
            <td>{{ $order->Service2->serviceName }}</td>
            <td>{{ $order->Service3->serviceName }}</td>
        </tr>
    </tbody>
</table>
<a href="{{ url('/order/' . $order->id . '/edit') }}" class="btn btn-success pull-left right-margin">
    <i class="fa fa-pencil-square-o"></i>Akkoord
</a>
<a href="{{ url('/order') }}" class="btn btn-danger pull-left right-margin">
    <i class="fa fa-pencil-square-o"></i>Annuleren
</a>
@endsection