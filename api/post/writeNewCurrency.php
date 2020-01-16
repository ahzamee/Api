<?php

	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');


	include_once '../../config/Database.php';
	include_once '../../model/Post.php';

	$database = new Database();
	$db = $database->connect();

	$post = new Post($db,"a","b","c","d","s");
	
	$result = $post->writeNewCurrency();
	
	if ($result) {
		echo 'successfully inserted';
	} else {
		echo 'unable to insert';
	}
	
	