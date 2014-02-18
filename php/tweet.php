<?php

class tweet {
	public $id;
	public $text;
	public $author;
	public $date;
	public $keywords;

	public function tweet($data) {
		$this->id = $data->id_str;
		$this->text = $data->text;
		$this->author = $data->user->screen_name;
		$this->date = $data->created_at;		

		$this->matchKeywords();
	}

	private function matchKeywords() {
		$config = require($_SERVER['DOCUMENT_ROOT'] . '/php/configuration/keywords.php');

		$this->keywords = array();

		foreach ($config as $match) { 
			if ( strpos($this->text,$match) ) {
				$this->keywords[] = $match;
			}		
		}
	}
}

