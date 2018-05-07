<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function adminbooks() {

        return view('adminbooks');
    }

    public function userbooks() {

        $data=Book::all();

        return view('userbooks', ['showdata' => $data]);


    }

    // method to store NEW BOOK data
    public function storeNewBook(Request $request)
    {
        $saveVariant = new Book;

        $saveVariant->name = $request->book_name;
        $saveVariant->price = $request->price;
        $saveVariant->author_name	 = $request->author_name;
        $saveVariant->special_price = $request->special_price;
        $saveVariant->book_created_date = $request->book_created_date;
        $saveVariant->quantity = $request->quantity;

        $saveVariant->save();

        if ($saveVariant) {

            return redirect('/adminbooks');

        }
    }
    // method to DELETE Book.
    public function bookdelete(Request $request)
    {
        Book::destroy($request->vendor_del_id);
//        $deleteVariant = Variant::find($id);
//
//        $deleteVariant->delete();
        return redirect('/adminbooks');
    }
    //method to UPDATE variant Data

    public function bookUpdate(Request $request)
    {

        if (DB::table('books')
//            ->where('product_title', $request->Product_Titlee)
            ->where('id', $request->ubook_id)
            ->update(['name' => $request->ubook_name, 'price' => $request->uprice,
                'author_name' => $request->uauthor_name, 'special_price' => $request->uspecial_price,'book_created_date' => $request->ubook_created_date,'quantity' => $request->uquantity]))
        {



            return redirect('/adminbooks');

        }
    }

}
