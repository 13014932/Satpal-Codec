<!doctype html>
<html>
<body>

<?php

include 'accounts.php';

	class my_account
	{
		
		public function saving_acc()
		{
			$sav_acc_obj=new saving_acc();
			$sav_acc_obj->Depossit(100);
				$sav_acc_obj->Withdraw(40);
				$sav_acc_obj->add_mounthly_int(2);
				$sav_f_b = $sav_acc_obj->get_balance();
				return $sav_f_b;
		}
			
		
		


	}
	$my_acc_obj=new my_account();
	$my_acc_obj-saving_acc();








?>
</body>
</html>