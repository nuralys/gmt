<div class="title admin_t">
		<h2>Добавление клиники</h2>
	</div>
<?php 
echo $this->Form->create('Clinic', array('type' => 'file'));?>
<div class="input select">
	<label for="CountryId">Категория:</label>
	<select name="data[Clinic][country_id]" id="CountryId">
		<option value="0">-</option>
		<?php foreach($c_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));

echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));

echo $this->Form->input('keywords', array('label' => '', 'class' => 'admin_input_f', 'placeholder' => 'Ключевые слова '));
echo $this->Form->input('description', array('label' => '', 'class' => 'admin_input_f','placeholder' => 'Описание '));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
?>