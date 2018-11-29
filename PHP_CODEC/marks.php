
<?php
  class marks {
	 public $m_eng;
	 public $m_hindi;
	 public $m_math;
	 public $m_science;
	 
	 public function __construct($m_eng,$m_hindi,$m_math,$m_science){
		 $this->m_eng=$m_eng;
		 $this->m_hindi=$m_hindi;
		 $this->m_math=$m_math;
		 $this->m_science=$m_science;
	 }
	 public function avg_marks()
	 {
		 $tot_mark= $this->m_eng+$this->m_hindi+$this->m_math+$this->m_science;
		$avg_mark=$tot_mark/4;
		 
		 return $avg_mark;
	 }
	 public function total_mark(){
		 
	 $total_mark=$this->m_eng+$this->m_hindi+$this->m_math+$this->m_science;
	 
		return $total_mark;
  }

  }
?>