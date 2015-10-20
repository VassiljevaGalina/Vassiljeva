<?php ob_start() ?>

<h2>Административная страничка</h2>
<form method="POST" name="form1">
	<table>
		<tr>
			<td>Автор:</td>
			<td><input type="text" name="add_author"></td>
		</tr>
		<tr>
			<td>Дата:</td>
			<td><input type="text" name="add_time" value="<?php echo date("Y-m-d H:i:s"); ?>"></td>
		</tr>
		<tr>
			<td>Заголовок<b>*</b>:</td>
			<td><input type="text" name="add_title"></td>
		</tr>
		<tr>
			<td>Текст:</td>
			<td><textarea name="add_content"></textarea></td>
		</tr>
		<tr>
			<td><input type="reset" name="reset" value="Очистить"></td>
			<td><input type="submit" name="submit" value="Добавить"></td>
		</tr>
	</table>
</form>

<h2>Список постов</h2>
	<ol>  <?php foreach ($posts as $post): ?>
		<li>
		<a href="../index.php/show?id=<?php echo $post['id']; ?>">

				<?php echo $post['title'];?>
			</a>
		</li>
	<?php endforeach ?>
	</ol>

<?php $content=ob_get_clean(); ?>

<?php include "view/templates/layout.php";?>
