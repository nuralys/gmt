<div class="title admin_t">Редактирование</div>
<div class="model_info">
<?php
echo $this->Form->create('Specialization');
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model fl_r'));
echo $this->Form->input('img', array('label' => 'Логотип', 'type' => 'file'));
echo $this->Form->input('link', array('label' => 'Ссылка'));
?>
</div>
<?
echo $this->Form->end('Редактировать');
?>

</div>