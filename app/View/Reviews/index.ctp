<?php 
foreach($data as $item):
 ?>
 <ul class="reviews_list">
<li>
	<div class="name_client">
	<?=$item['Review']['title']?>
	</div>
	<div class="site_client">
		<?=$item['Review']['website']?>
	</div>
	<div class="site_client">
		<?=$item['Review']['modified']?>
	</div>
	<?=$item['Review']['body']?>
</li>

<?php endforeach ?>