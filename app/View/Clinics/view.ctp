<div class="content">
	<ul class="breadcrums">
		<li><a href="/">Главная</a></li>
		<li><a href="/countries">Клиника</a></li>
		<li><?=$data['Clinic']['title'] ?></li>
	</ul>
	<div class="title">
		<h1><?=$data['Clinic']['title'] ?></h1>
	</div>
	<div class="secon_lvl_img">
		<img src="/img/Clinic/<?=$data['Clinic']['img'] ?>" alt="<?=$data['Clinic']['title'] ?>">
	</div>
	<?=$data['Clinic']['body'] ?>
	
</div>

