<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function show($uuid)
    {
        return Order::find($uuid);
    }

    public function store(StoreOrderRequest $request)
    {
        if ($request->validated()){
            $order = Order::create($request->all());
            return response(array('uuid' => $order['uuid']), Response::HTTP_CREATED);
        }
        return response('Something was wrong, please try again late', 400);
    }

    public function update($uuid, StoreOrderRequest $request)
    {
        $order = Order::find($uuid);
        $order->update($request->only('manufacturer', 'model', 'total_price'));
        return response($order, Response::HTTP_ACCEPTED);
    }

}
