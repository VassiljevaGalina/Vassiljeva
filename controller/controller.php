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
function render_template($path, array $args)//функция, кот. оборачивает данные ($args) в html ($path)
{
	extract($args);
	ob_start();
	require $path;
	$html=ob_get_clean();
	return $html;	
}


function list_action()
{
	echo '<br><br><a href="./index.php/admin">Админка</a> | <a href="./index.php/autor">Автор</a>';

	$posts=get_all_posts();
	$html=render_template('view/templates/list.php',array('posts'=>$posts));
	return $html;	
	//require "view/templates/list.php";
}
function show_action($id)
{	
	$post=get_post($id);
	$html=render_template('view/templates/show.php',array('post'=>$post));
	return $html;
	//require "view/templates/show.php";
}
function autor_action()
{	
	$html=render_template('view/templates/autor.php',array());
	return $html;
	//require "view/templates/autor.php";
}
function admin_action()
{	
	if (isset($_POST['submit']))
	{
		add_post();
	}
	$posts=get_all_posts();
	$html=render_template('view/templates/admin.php',array('posts'=>$posts));
	return $html;
	//require "view/templates/admin.php";
}
?>
