<?php

namespace App\Repositories\Customers;

use App\Models\Customer as CustomerModel;

class GetCustomer {


    public static function Paginated($limit = 15)
    {
        return CustomerModel::with('metadata')->paginate($limit);
    }

}