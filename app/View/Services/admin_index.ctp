<a href="/admin/services/add">Добавить услуги</a>
<?php //debug($data) ?>
<ul>
	<?php foreach($data as $item): ?>
		<li class="news_item_admin">
			<div class="news_admin_title"><?=$item['Service']['title']?> </div>
			<div class="news_edit">	<a href="/admin/services/edit/<?=$item['Service']['id']?>">Редактировать</a> </div> 
		<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Service']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
		</li>
		<hr><br>
	<?php endforeach ?>
</ul>