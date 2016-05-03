<div class="title admin_t">
		<h3>Добавление услуги</h3>
	</div>
<?php 

echo $this->Form->create('Service', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model '));
echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>