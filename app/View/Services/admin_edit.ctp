	<div class="title admin_t">Редактирование услуг</div>
<div class="model_info_img">
					<div class="model_item_container">
						<div class="model_item">
							
								<img src="/img/service/thumbs/<?=$data['Service']['img']?>">
						</div>
					
							<?php ?>
						
					</div>
				</div>

<div class="model_info">
<?php 

echo $this->Form->create('Service', array('type' => 'file'));
echo $this->Form->input('img', array('label' => '', 'type' => 'file')); 
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model fl_r'));

echo $this->Form->input('body', array('label' => '', 'id' => 'editor'));
?>
</div>
	<?
	echo $this->Form->end('Редактировать');
	?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>