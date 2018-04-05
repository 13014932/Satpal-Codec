
//here I  register API routes for application.

Route::get('/api/v1/customers', 'APIController@getCustomers')->name('api.customers.index');
