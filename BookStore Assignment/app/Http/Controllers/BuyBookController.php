<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Buybook;
use App\Book;
class BuyBookController extends Controller
{
   // Method to store BOOK AFTER BUY.
    public function storeBookAfterBuy(Request $request)
    {
        $saveBook = new Buybook;

        $saveBook->book_id = $request->book_id;
        $saveBook->book_price = $request->book_price;
        $saveBook->quantity = $request->mbook_quantity;
        
        $saveBook->save();
		if( $saveBook){
		 $data=Book::find($request->book_id);
		 $buydbook=$data->quantity;
		  		 
		DB::table('books')
            ->where('id', $request->book_id)
            ->update(['quantity' => $buydbook -($request->mbook_quantity)]);
			
		return redirect('/buydbooks');
		}
		 
       } 

// Method to VIEW BOOK AFTER BUY.
 public function viewBooksAfterBuy() {
       
            $data=Buybook::all();

              return view('Buydbooks',['buydbooks' => $data]);

        
    }

}