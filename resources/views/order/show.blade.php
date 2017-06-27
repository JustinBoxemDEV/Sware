<h3 class="page-header">Ordernummer: {{ $order->id }}<br></h3>

<table class="table table-condensed table-responsive">
    <tbody>
        <tr>
            <!--<td>username</td>
            <td>{{ $member->username }}</td>-->
        </tr>
    </tbody>
</table>
<a href="{{ url('/order/' . $order->id . '/edit') }}" class="btn btn-warning pull-left right-margin">
    <i class="fa fa-pencil-square-o"></i>Update
</a>
<a href="/order">Keer terug</a>