@extends('layouts.layout')
@section('content')
{{ Form::open(array('route' => 'order.store')) }}
    @include('order.form')
{{ Form::close() }}
@endsection