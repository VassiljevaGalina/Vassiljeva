<?php
/**
*Контроллер содержит функции - экшены,
*которые заставляют модель вывести нужную информацию
****************************************************
*/

/**
*Массив $posts содержит выборку всех полей из
*таблицы posts.
*Погружает файл list.php,содержащий вид вывода
*информации из $posts в браузере.
**/
function list_action()
{
	echo '<br><br><a href="./index.php/admin">Админка</a> | <a href="./index.php/autor">Автор</a>';
	$posts=get_all_posts();
	require "view/templates/list.php";
}
function show_action($id)
{	
	$post=get_post($id);
	require "view/templates/show.php";
}
function autor_action()
{	
	require "view/templates/autor.php";
}
function admin_action()
{
	if (isset($_POST['submit']) && !empty($_POST['add_title']))
	{
		$sql = add_post();
	}
	$posts=get_all_posts();
	require "view/templates/admin.php";
}
?>
