
    <h3 id="nav" class="page-header">Edit</h3>

    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::model($order, array('route' => array('order.update', $order->id), 'method' => 'put', 'class' => 'val-form', 'data-toggle' => 'validator')) !!}

                @include('order.form')

                <!-- Cancel Button -->
                <a href="{{ url('/order/' . $order->id) }}" class="btn btn-danger"  data-toggle="confirmation" role="button">Cancel</a>

            {!! Form::close() !!}
        </div>
    </div>