<?php
class komputer{
	public $monitor,$keyboard,$mouse,$cpu;
	public function __construct($monitor,$keyboard,$mouse,$cpu){
		$this->monitor=$monitor;
		$this->keyboard=$keyboard;
		$this->mouse=$mouse;
		$this->cpu=$cpu;
	}
	public function get_monitor(){
		return $this->monitor;
	}
	public function get_keyboard(){
		return $this->keyboard;
	}
	public function get_mouse(){
		return $this->mouse;
	}
	public function get_cpu(){
		return $this->cpu;
	}
	
}
?>