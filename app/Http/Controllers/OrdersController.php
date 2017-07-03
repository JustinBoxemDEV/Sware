<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Package;
use App\Service;

class OrdersController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::pluck('name','id');
        $package = Package::pluck('packageName','id');
        $service1 = Service::pluck('serviceName','id');
        $service2 = Service::pluck('serviceName','id');
        $service3 = Service::pluck('serviceName','id');
        return view('order.create', compact('user', 'package', 'service1', 'service2', 'service3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->fill($request->all());
        $order->save();

        return redirect('/order')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::all()->find($id);
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::pluck('name','id');
        $package = Package::pluck('packageName','id');
        $service1 = Service::pluck('serviceName','id');
        $service2 = Service::pluck('serviceName','id');
        $service3 = Service::pluck('serviceName','id');
        $order = Order::all()->find($id);
        return view('order.edit', compact('order','user','package','service1','service2','service3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::all()->find($id);
        $order->update($request->all());
        return redirect('/order' . $id)->with('succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::all()->find($id);
        $order->delete();
        return redirect('/order')->with('succes');
    }
}
