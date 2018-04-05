<?php

namespace App\Http\Controllers;
// here customer is a model.
use App\Customer;                              

use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
     public function getCustomers()
    {
        $query = Customer::select('first_name', 'last_name', 'email');
        return datatables($query)->make(true);
    }
}
