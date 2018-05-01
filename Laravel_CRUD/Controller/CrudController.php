<?php

namespace App\Http\Controllers;

use App\model\crud;
use Illuminate\Http\Request;
use App\model\Variant;
use Illuminate\Support\Facades\DB;
use App\lib\CrudLib;

class CrudController extends Controller
{


    public function helloWorld(){


        return view('hello');
    }
//varient table  GET data
    public function varientData()
    {


        $data = new Variant();
        $data = $data->getData();

        return view('varianttable', ['showdata' => $data]);


    }

// method to store variant data
    public function storeVariant(Request $request)
    {
//        $this->validate(request(), [
//
//            'fname' => 'required|max:5',
//            'lname' => 'required',
//
//
//        ]);
        $saveVariant = new Variant;

        $saveVariant->product_title = $request->product_title;
        $saveVariant->title = $request->title;
        $saveVariant->price = $request->price;
        $saveVariant->inventory_quantity = $request->inventory_quantity;

        $saveVariant->save();

        if ($saveVariant) {

            return redirect('/varianttable');

        }
    }
    // NEW VENDOR LOG-IN DATA.
//    public function storeNewUser(Request $request)
//    {
//        if (DB::table('vendors')
//            ->where('vendors_name', $request->vendors_name)
//            ->update(['vendor_login_accounts' => $request->vendor_login_accounts,'password' => $request->password])) {
//
//            return redirect('vendors');
//        }

//method to UPDATE variant Data

    public function updateVariant(Request $request)
    {
//        $saveVariant = new Variant;
//
//        $saveVariant->product_title = $request->Product_Titlee;
//        $saveVariant->title = $request->Titlee;
//        $saveVariant->price = $request->Pricee;
//        $saveVariant->inventory_quantity = $request->inventory_quantity;
//
//        $saveVariant->save();
//
//        if ($saveVariant) {
//
//            return redirect('/varianttable');
//
//        }

        if (DB::table('variants')
//            ->where('product_title', $request->Product_Titlee)
            ->where('id', $request->vid)
            ->update(['product_title' => $request->Product_Titlee, 'title' => $request->Titlee,
                'price' => $request->Pricee, 'inventory_quantity' => $request->inventory_quantityy]))
        {


//            $updateVariant = Variant::find($id);
//
//        $updateVariant->product_title = 'update test';
//        $updateVariant->title = 'update test';
//        $updateVariant->price = 500;
//        $updateVariant->inventory_quantity = 20;
//
//        $updateVariant->save();

            return redirect('/varianttable');

        }
    }

// method to DELETE variant Data

    public function deleteVariant(Request $request)
    {
        Variant::destroy($request->id);
//        $deleteVariant = Variant::find($id);
//
//        $deleteVariant->delete();
        return redirect('/varianttable');
    }

// method to DELETE by checkbox

    public function deleteByCheckBox(Request $request)
    {

        Variant::destroy($request->id);

        return redirect('/varianttable');
    }

    // function for bootstarp menu
    public function lekrajMenu()
    {

        return view('lekrajMenu');


    }

    public function satpalMenu()
    {

        return view('satpalMenu');


    }

//laravel all  temp test
    public function laraveTest()
    {

        $myData = crud::get()->toArray();

        return View('test', compact('myData'));

    }

//  Form View
    public function formView()
    {

        return view('CrudForm');

    }
//store the varient data


// Store the data to database request from form
    public function store(request $request)
    {
//        $this->validate(request(), [
//
//            'fname' => 'required|max:5',
//            'lname' => 'required',
//
//
//        ]);
        $saveMyData = new crud;

        $saveMyData->fname = $request->fname;
        $saveMyData->lname = $request->lname;
        $saveMyData->email = $request->email;
        $saveMyData->mobile = $request->mobile;

        $saveMyData->save();

        if ($saveMyData) {

            return redirect('/display_data');

        }
    }

// Get data from database
    public function getData()
    {

        $get_temp = new CrudLib();

        $get_data = $get_temp->fetchData();


        return view('display_data', compact('get_data'));

    }


}
