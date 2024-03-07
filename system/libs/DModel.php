<?php

class DModel
{

	protected $db = array();

	public function __construct()
	{
		$connect = 'mysql:dbname=cn_web_ban mat kinh; host=localhost; charset=utf8';
		$user = 'root';
		$pass = 'Tripham1080';
		$this->db = new Database($connect, $user, $pass);
	}
}
