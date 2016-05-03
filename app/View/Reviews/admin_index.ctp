<a href="/admin/reviews/add">Добавить отзыв</a>
<?php //debug($data) ?>
<ul>
	<?php foreach($data as $item): ?>
		<li class="news_item_admin">
			<div class="news_admin_title"><?=$item['Review']['title']?> </div>
			<div class="news_edit">	<a href="reviews/edit/<?=$item['Review']['id']?>">Редактировать</a> </div> 
		<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Review']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
		</li>
		<hr><br>
	<?php endforeach ?>
</ul>