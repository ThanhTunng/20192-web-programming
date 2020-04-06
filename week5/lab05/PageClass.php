<?php 
	class Page {
		private $page;
		private $title;
		private $year;
		private $copyright;

		function __construct($page,$title,$copyright_owner){
			$this->page = "<div>$page</div>";
			$this->title = $title;
			$this->year = date('Y');
			$this->copyright = "Copyright (c) by ".$copyright_owner;
			$this->addHeader();
			$this->addFooter();
		}

		private function addHeader(){
			$this->title = "<header>$this->title</header>";
		}

		public function addContent($content){
			$this->page = $this->page."<div>$content</div>";
		}

		private function addFooter(){
			$this->copyright = $this->copyright."<footer><div class=\"copyright\">$this->copyright, $this->year</div></footer>";
		}

		public function get(){
			return ("<h1 align=\"center\">$this->title</h1>"."<hr><body>$this->page"."<hr><spans align=\"right\">$this->copyright</body>");
		}

	}
	

?>