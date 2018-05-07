<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class BooksAPIController extends Controller
{
    public function getBooks()
    {
        try
        {
            $query = Book::select('id','name', 'price', 'special_price','author_name','book_created_date','quantity');
            return datatables($query)->make(true);
        }
        catch (\Exception $exception)
        {
            Log::info($exception->getMessage());
        }

    }
}
