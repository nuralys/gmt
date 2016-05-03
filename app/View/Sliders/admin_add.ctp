<div class="title admin_t">
		<h3>Добавление слайда</h3>
	</div>
<?php 

echo $this->Form->create('Slider', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file'));
echo $this->Form->input('link', array('label' => 'Ссылка'));?>
<select name="data[Slider][color]">
	<option value="">Выберите цвет фона</option>
	<option value="one">Фиолетовый</option>
	<option value="two">Голубой</option>
	<option value="three">Оранжевый</option>
	<option value="four">Зеленый</option>
</select>
<?php
echo $this->Form->end('Создать');
?>
</div>