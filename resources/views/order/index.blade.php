@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="paymenthistoryh1"
         <h1>{{ Auth::user()->name }}'s bestel geschiedenis</h1>
        <h2 class="paymenthistoryh1">
            <a href="/up"><button class="btn btn-danger">[ : : Ga naar UP : : ]</button></a>
            <a href="{{ url('/order/create') }}"><button class="btn btn-success">[ : : Plaats bestelling : : ]</button></a>
        </h2>
    </div>
    <table class="display table table-bordered table-condensed table-responsive dynamic-table">
        <thead>
            <tr class="transaction-display-headers">
                <th>Pakket</th>
                <th>1e Service</th>
                <th>2de Service</th>
                <th>3de Service</th>
                <th>Betaald</th>
                <th>Besteldatum</th>
            </tr>
        </thead>

        <tbody>
        <br>
        @foreach($orders as $order)
        <tr class="clickable-row" data-url="/order/{{ $order->id }}">
            <td>{{ $order->Package->packageName}}</td>
            <td>{{ $order->Service1->serviceName }}</td>
            <td>{{ $order->Service2->serviceName }}</td>
            <td>{{ $order->Service3->serviceName }}</td>
            <td>{{ $order->paid ? 'Ja' : 'Nee' }}</td>
            <td>{{ $order->created_at }}</td>
            <td>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="DW52XH79WQ9Y2">
                    <input type="image" src="https://www.paypalobjects.com/nl_NL/NL/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal, de veilige en complete manier van online betalen.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
                </form>
                <b>NOTE: Work-In-Progress</b>
            </td>
            {!! Form::close() !!}
        </tr>
        @endforeach
        </tbody>

    </table>
    <br>
    <hr>
    <h2 class="paymenthistoryh1"><a href="/up"><button class="btn btn-danger">[ : : Ga naar UP : : ]</button></a></h2>
</div>
@endsection