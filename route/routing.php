<?php
echo $_SERVER["REQUEST_URI"];
$uri=$_SERVER["REQUEST_URI"];
$u=explode("?",$uri);
$uri=$u[0];
echo "<br>newUri=".$uri;

if ("/2KTVRp15/Vassiljeva/" ==$uri OR "/2KTVRp15/Vassiljeva/index.php"==$uri)
{
	//основная страница
	list_action();
}
elseif ("/2KTVRp15/Vassiljeva/index.php/show"==$uri)
{
	//просмотор сообщений при клике
	show_action($_REQUEST["id"]);
}
elseif ("/2KTVRp15/Vassiljeva/index.php/autor"==$uri)
{
	//ссылка ведущая на автора
	autor_action();
}
elseif ("/2KTVRp15/Vassiljeva/index.php/admin"==$uri)
{
	//ссылка ведущая на добавление нового сообщения
	admin_action();
}
//отсюда все ссылается в controller
?>