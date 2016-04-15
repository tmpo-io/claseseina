<?php
$noticias = array(
  array(
    "titulo"=>"Título 1",
    "desc"=>"Descripción 1",
    "img"=>"http://i.kinja-img.com/gawker-media/image/upload/s--7098ugfu--/c_scale,fl_progressive,q_80,w_800/dociw4fbzf2fs4tvywgl.jpg"
  ),
  array(
    "titulo"=>"Título 2",
    "desc"=>"Descripción 2",
    "img"=>"http://i.kinja-img.com/gawker-media/image/upload/s--7098ugfu--/c_scale,fl_progressive,q_80,w_800/dociw4fbzf2fs4tvywgl.jpg"
  ),
  array(
    "titulo"=>"Título 3",
    "desc"=>"Descripción 3",
    "img"=>"http://i.kinja-img.com/gawker-media/image/upload/s--7098ugfu--/c_scale,fl_progressive,q_80,w_800/dociw4fbzf2fs4tvywgl.jpg"
  ),
  array(
    "titulo"=>"kdfjdslkj fdlskf dskljf",
    "desc"=>"Descripción 3",
    "img"=>"http://i.kinja-img.com/gawker-media/image/upload/s--7098ugfu--/c_scale,fl_progressive,q_80,w_800/dociw4fbzf2fs4tvywgl.jpg"
  )
);
?>

<section class="contenido">
	<h2>News</h2>
	<?php
	foreach($noticias as $noticia) {
		include "inc/noticia.php";
	}
	?>
</section>






