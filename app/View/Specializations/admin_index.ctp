<h1>Список специализации</h1>
<a href="/admin/specializations/add">Добавить новую специализацию</a>
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
 		<td><?=$item['Specialization']['id']?></td>
 		<td><?=$item['Specialization']['title']?></td>
 		<td><a href="/admin/specializations/edit/<?=$item['Specialization']['id']?>">Редактировать</a> |
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Specialization']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>

	<?php endforeach ?>
	</tr>
</table>
<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>