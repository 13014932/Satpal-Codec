
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
