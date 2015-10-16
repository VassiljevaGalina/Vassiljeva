<?php

function open_database_connection () 
{
	$link = mysql_connect('localhost', 'galina', '12345');
	mysql_select_db ('vassiljeva', $link);
	mysql_query('SET NAMES utf8');
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}

function get_all_posts() 
{
	$link = open_database_connection();
	$sql = "SELECT * FROM post";
	$result = mysql_query($sql, $link);
	$posts = array();
	while($row = mysql_fetch_assoc($result))
	{
		$posts[] = $row;
	}
	close_database_connection($link);
	return $posts;
}
function get_post($id) {
	$link = open_database_connection();
	$sql = "SELECT * FROM post WHERE id='$id'";
	$result = mysql_query($sql, $link);
	$post = mysql_fetch_assoc($result);
	close_database_connection($link);
	return $post;
}
function add_post()
{
	$author = $_POST['add_author'];
	$time = $_POST['add_time'];
	$title = $_POST['add_title'];
	$content = $_POST['add_content'];

	$link = open_database_connection();
	$sql = "INSERT INTO `post` (`id`, `author`, `time`, `title`, `content`) 
			VALUES (NULL, '$author', '$time', '$title', '$content');";
	$result = mysql_query($sql, $link);

	close_database_connection($link);
}
?>