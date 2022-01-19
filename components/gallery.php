<div class="container pt-4">
		<h1 class="mb-4">Галерея изображений</h1>
		<div class="row row-cols-2">
			<?
			$dir = dirname(__DIR__,1) . '/' . UPLOAD_DIR;
			$images = array_slice(scandir($dir), 2);
			
			foreach ($images as $image) : ?>
			<div class="col">
				<img src="<?=UPLOAD_DIR?>/<?=$image?>" class="img-fluid mb-2" alt="">
				<button type="button" class="btn btn-primary">Комментарии</button>
				<button type="button" class="btn btn-danger">Удалить</button>
			</div>			
			<?php endforeach; ?>
  </div>
</div>