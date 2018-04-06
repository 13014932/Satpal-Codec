
// FIND IT ON ROUTES/API.
//here I  register API routes for application.

<!-- CLASS APIController CALL getCustomers(Ref. TO GET ALL DATA BY MODEL/TABLE) AND ROUTE NAMED AS 'name('api.customers.index')'-->

Route::get('/api/v1/customers', 'APIController@getCustomers')->name('api.customers.index');
