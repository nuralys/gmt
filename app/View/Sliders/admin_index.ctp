<a href="/admin/sliders/add">Добавить слайд</a>
<?php //debug($data) ?>
<ul>
	<?php foreach($data as $item): ?>
		<li class="news_item_admin">
			<div class="news_admin_title"><?=$item['Slider']['title']?> </div>
			<div class="news_edit">	<a href="sliders/edit/<?=$item['Slider']['id']?>">Редактировать</a> </div> 
		<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Slider']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
		</li>
		<hr><br>
	<?php endforeach ?>
</ul>