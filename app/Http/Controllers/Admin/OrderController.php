<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\OrderContract;
use App\Http\Controllers\BaseController;
class OrderController extends BaseController
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function index()
{
    $orders = $this->orderRepository->listOrders();
    $this->setPageTitle('Órdenes', 'Lista de órdenes');
    return view('admin.orders.index', compact('orders'));
}

public function show($orderNumber)
{
    $order = $this->orderRepository->findOrderByNumber($orderNumber);

    $this->setPageTitle('detalle de orden', $orderNumber);
    return view('admin.orders.show', compact('order'));
}
}
