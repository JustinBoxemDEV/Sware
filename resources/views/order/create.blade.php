
    {{ Form::open(array('route' => 'order.store')) }}
        @include('order.form');
    {{ Form::close() }}