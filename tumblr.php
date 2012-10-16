<?php require 'functions.php' ?>
<html>
<head>
	<title>Tumblr Demo</title>
</head>
<body>

<?php
	$posts = getPostsByTag(urlencode($_REQUEST['tag']));
	echo '<ul>';
	foreach($posts as $post) {
		echo '<li><a href='.$post->post_url.'>'.$post->blog_name.'</a></li>';	
	}
	echo '</ul>';
?>

</body>
</html>