<h1>Клиники</h1>
<a href="/admin/clinics/add">Добавить новую клинику</a>
<?php //debug($data)?>
 <?php if(!empty($data)): ?>
<table>
	<tr>
			<th>ID</th>
			<th>Название</th>
			
			<th>Дествия</th>	
		</tr>

 	<?php foreach($data as $key => $item): ?>
 	<tr>
 		<td><?=$key?></td>
 		
 		<td><?=$item?></td>
 		<td><a href="/admin/clinics/edit/<?=$key?>">Редактировать</a> |
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $key), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach ?>
	
</table>
<?php else: ?>
<p>К сожалению категорий нету...</p>
<?php endif ?>