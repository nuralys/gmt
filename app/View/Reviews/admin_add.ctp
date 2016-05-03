<div class="title admin_t">
		<h3>Добавление отзыва</h3>
	</div>
<?php 

echo $this->Form->create('Review');
echo $this->Form->input('title', array('label' => 'ФИО', 'class' => 'admin_input_f model '));
echo $this->Form->input('website', array('label' => 'Сайт', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>