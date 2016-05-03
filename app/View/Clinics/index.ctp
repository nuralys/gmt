 <?php if(!empty($data)): ?>
<div class="content">
	<ul class="breadcrums">
		<li><a href="/">Главная</a></li>
		<li>Клиники</li>
	</ul>
	<div class="title">
		<h1>Клиники</h1>
	</div>
	<ul class="strani">
	<?php foreach($data as $item): ?>
		<li>
			<div class="strani_img">
				<img src="/img/clinic/thumbs/<?=$item['Clinic']['img']?>" alt="<?=$item['Clinic']['title']?>">
			</div>
			<div class="name"><?=$item['Clinic']['title']?></div>
			<!-- <div class="starna">Страна: Южная Корея</div> -->
			<div class="des">
				<?=$item['Clinic']['body']?>
			</div>
			<a href="/clinics/view/<?=$item['Clinic']['id']?>"><div class="button stran_more"><span>ПОДРОБНЕЕ</span></div></a>
		</li>
	<?php endforeach ?>	
	</ul>
</div>
<?php else: ?>
<p>К сожалению информация еще не добавлена...</p>
<?php endif ?>