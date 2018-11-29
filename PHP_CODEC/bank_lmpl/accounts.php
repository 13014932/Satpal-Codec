
<?php
include 'Bank_acc.php';
	class saving_acc implements Deposit_acc,Credit_int
	{
		public $withdraw_v;
		public $deposit_v;
		public $mounth_int;
		
		public function Withdraw($withdraww)
		{
			$this->withdraw_v=$withdraww;	
		}
		public function Deposit($depositt)
		{ 
			$this->deposit_v=$depositt;
		}
		public function get_balance()
		{
			$bal=$this->deposit_v - $this->withdraw_v;
			$bal_m_f=$this->mounth_int + $bal;
			$bal_hy_f=$this->add_half_y_int()+$bal;
			$bal_y_f=$this->add_annl_int()+$bal;
			return "Your Balance Is= ".$bal."Rs With Mounthly Intrest Of ".$this->mounth_int."Finel Balance mounthly= <b>".$bal_m_f."</b> After 6 Mounth of intrest finel Balance =<b>".$bal_hy_f."</b>After One Year of intrest finel Balance=<b>".$bal_y_f."</b>";
		}
		
		public function add_mounthly_int($m_i)
		{
			$this->mounth_int=$m_i;
		}
		public function add_half_y_int()
		{
			$hf =6 * $this->mounth_int;
			return $hf ;
		}
		public function add_annl_int()
		{
			$y=12*$this->mounth_int;
			return $y;
		}


	}
	/*class FD_acc implements Deposit_acc,Credit_int
	{
		public $withdraw=0;
		public $deposit;
		public $mounth_int;
	
		public function Withdraw($withdraw)
		{
			$this->withdraw=$withdraw;
		}
		public function Deposit($deposit)
		{
			$this->deposit=$deposit;
		}
	    public function get_balance()
		{
			if($this->withdraw >=1)
			{
				$bal_fd_with=$this->deposit - $this->withdraw;
				return $bal_fd_with;
			}
			else 
			{
			$bal_m_f=$this->mounth_int + $this->deposit;
			$bal_hy_f=$this->add_half_y_int()+ $this->deposit;
			$bal_y_f=$this->add_annl_int()+ $this->deposit;
			return "Your Balance Is= ".$this->deposit."Rs With Mounthly Intrest Of ".$this->mounth_int."Finel Balance mounthly= <b>".$bal_m_f."</b> After 6 Mounth of intrest finel Balance =<b>".$bal_hy_f."</b>After One Year of intrest finel Balance=<b>".$bal_y_f."</b>";
				
			}
		}
		public function add_mounthly_int($m_i)
		{
			$this->mounth_int=$m_i;
		}
	public function add_half_y_int()
	{
		$hf=6*$this->mounth_int;
		return $hf;
	}
	public function add_annl_int()
	{
		$y_i=12*$this->mounth_int;
		return $y_i;
	}
	}
/*	class personal_loan_acc implements Loan_acc,Debit_int
	{
		public function repay_princ();
	public function pay_interest();
	public function pay_par_princ();
	public Dedect_mounth_ly();
	public Dedect_half_y_int();
	public Dedect_annl_int();
		
	}
	class housing_loan_acc implements Loan_acc,Debit_int
	{
		
	}
	*/


?>
