<?php

function getPosts() {
	$url = 'http://api.tumblr.com/v2/blog/whatshouldwecallme.tumblr.com/posts?'.
		'api+key=bG8HFgqwsVn0AUHbmIl2I09hQE7NcTgdLUjQ4bR9zP4Yiymnea';
	$jsonString = file_get_contents($url);
	$arrayOfPosts = json_decode($jsonString)->response->posts;
	return $arrayOfPosts;
}

function getPostsByTag($searchTerm) {
	$url = 'http://api.tumblr.com/v2/tagged?tag='.$searchTerm.
		'&api+key=bG8HFgqwsVn0AUHbmIl2I09hQE7NcTgdLUjQ4bR9zP4Yiymnea';
	$jsonString = file_get_contents($url);
	$arrayOfPosts = json_decode($jsonString)->response;
	return $arrayOfPosts;
}

?>