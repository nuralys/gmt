<div class="title admin_t">
		<h2>Добавление специализации</h2>
	</div>
<?php 

echo $this->Form->create('Specialization', array('type' => 'file'));
?>
<div class="input select">
	<label for="SpecializationParentId">Специализация:</label>
	<select name="data[Specialization][parent_id]" id="SpecializationParentId">
		<option value="0">-</option>
		<?php foreach($s_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?

echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Текст'));
echo $this->Form->input('keywords', array('label' => '', 'class' => 'admin_input_f', 'placeholder' => 'Ключевые слова '));
echo $this->Form->input('description', array('label' => '', 'class' => 'admin_input_f','placeholder' => 'Описание '));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>