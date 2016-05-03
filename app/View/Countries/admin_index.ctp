<h1>Список стран</h1>
<a href="/admin/countries/add">Добавить новую страну</a>
<?php //debug($data)?>
 <?php if(!empty($data)): ?>
<table>
	<tr>
			<th>ID</th>
			<th>Название</th>
			<th>Дествия</th>	
		</tr>


 	<?php foreach($data as $item): ?>
 	<tr>
 		<td><?=$item['Country']['id']?></td>
 		<td><?=$item['Country']['title']?></td>
 		<td><a href="/admin/countries/edit/<?=$item['Country']['id']?>">Редактировать</a> |
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Country']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>

	<?php endforeach ?>
	</tr>
</table>
<?php else: ?>
<p>К сожалению в данной категории нету товаров...</p>
<?php endif ?>