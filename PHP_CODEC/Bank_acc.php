<?php

		interface Deposit_acc
{
	public function Withdraw();
	public function Deposit();
	public function get_balance();
}

/*interface Loan_acc	 
{
	
	public function repay_princ();
	public function pay_interest();
	public function pay_par_princ();
	
}
/*interface interest
{
	public function calint();	
}
*/
interface Credit_int
{
	public function add_mounthly_int();
	public function add_half_y_int();
	public function add_annl_int();
	
}
/* interface Debit_int
{	
	public Dedect_mounth_ly();
	public Dedect_half_y_int();
	public Dedect_annl_int();
	
}
*/






?>