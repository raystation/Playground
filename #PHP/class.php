<?php

	class Dog {
		public $name;
		public $type;

		function __construct( $name, $type="dog" ) {
			$this->name = $name;
			$this->type = $type;
			echo $this->getinfo();
		}

		public function getinfo() {
			return "This is ".$this->name.". It is a ".$this->type.". ";
		}
	}

	$rex = new Dog("Rex","pug");
	$max = new Dog("Max","retriever");
	$lexi=new Dog("Lexi","weiner dog");

?>
