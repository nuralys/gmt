
<li>
	<a href="/specializations/view/<?php echo $specializations['Specialization']['id']; ?>"><?php echo $specializations['Specialization']['title']; ?></a>
	<?php if($specializations['children']) : ?>
	<ul class="spec_list_sub">
		<?php echo $this->_catMenuHtml($specializations['children']); ?>
	</ul>
	<?php endif; ?>
</li>
