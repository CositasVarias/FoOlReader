<?php fr_get_header(); ?>

<?php if(isset($_GET['last'])) //html displayed when the user reads the last chapter
	{
?>

<div class="theList">
	
	<h3>[ ! ] Este fue el último tomo que publicamos de este manga. ¡Gracias por preferir nuestra versión!</h3>

</div>


<?php
	}
?>

<?php fr_list_chapters(); ?>

<?php fr_get_footer(); ?>
