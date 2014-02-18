<?php

class tweet {
	public $text;
	public $author;
	public $date;

	public function tweet($data) {
		$this->text = $data->text;
		$this->author = $data->user->screen_name;
		$this->date = $data->created_at;
	}
}

?>