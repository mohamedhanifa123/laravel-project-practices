<?php
//class & objects

 class fruit
 {
	 public $name;
	 public $color;
	 function set_name($n){
		$this->name=$n; 
 }
	function get_name(){
		return $this->name;
 
 }
	function set_color($c){
		$this->color=$c;
	}
	function get_color(){
		return $this->color;
	}
 
 }
 $apple=new fruit();
 $apple->set_name("APPLE");
 echo "1FRUIT NAME=".$apple->get_name(),"<br>";
 $apple=new fruit();
 $apple->set_color("RED");
 
 echo "1FRUIT COLOR=".$apple->get_color(),"<br>";
 $orange=new fruit();
 $orange->set_name("ORANGE");
 echo "2 FRUIT NAME=" .$orange->get_name(),"<br>";
 $orange=new fruit();
 $orange->set_color("ORANGE");
 echo "2FRUIT COLOR=" .$orange->get_color(),"<br>";
 
 //construct &destruct
 
 class person
 {
	 public $name;
	 function __construct($name)
	 {
		 $this->name=$name;
	 }
	 function get()
	 {
		 echo "NAME=" .$this->name;
	 }
 }
	 $obj1=new person("ABC");
	 $obj1->get();
	 echo "<br>";
 
 class people
 {
	 public $sample;
	 function __construct($sample)
	 {
		 $this->sample=$sample;
	 }
	 function get()
	 {
		 echo "SAMPLE=".$this->sample;
	 }
 }
$var=new people("welcome");
$var->get();
 
 
?>
