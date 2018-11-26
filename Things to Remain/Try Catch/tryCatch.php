
use Illuminate\Support\Facades\Log;  //display error on log file

class APIController extends Controller
{
    public function getCustomers()
    {
        try
        {
            $query = Vendor::select('vendors_name', 'vendor_split', 'vendor_login_accounts');
            return datatables($query)->make(true);
        }
        catch (\Exception $exception)
        {
            Log::info($exception->getMessage());
        }

    }
}



/*
*
* ProductController --controller , Product as Lib.
*/

class ProductController extends Controller
{
    public function showProducts()
    {
        return view('layouts.defaults', ['content' => view('products/productlist')]);
    }

    public function getProductPaginated()
    {
        try{

            $product_datas=new Product();  // $product_datas actual ->$product_data
            $product_data->getProductsPaginatedData();

            return $product_data;

        }
        catch (\Exception $e)
        {
            throw new \Exception('Data not avaialable');
        }

    }
}

phpUnit testing exception code goes here..

/*
*
*In  ProductTest 
*
*/

class ProductTest extends TestCase
{


    public function testProductController()
    {

// your expected code goes here

        $this->expectException(\Exception::class);             //assert the Exception class   --to test Exception is thrown from defined class.
        $this->expectExceptionMessage("Data not avaialable");  //assert the Exception massage --to test Exception masaage is thrown what you expect.

// your actual code goes here

        $product_return= new Product();
         $product_return->getProductPaginated();

    }

}
