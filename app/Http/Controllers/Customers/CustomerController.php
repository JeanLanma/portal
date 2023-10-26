<?php

namespace App\Http\Controllers\Customers;

use App\Repositories\Customers\GetCustomer;
use App\Http\Controllers\Controller;
use App\Models\Ticket\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // dd(GetCustomer::Paginated());
        return inertia('Customers/Index', [
            'customers' => GetCustomer::Paginated(),
        ]);
    }
}
