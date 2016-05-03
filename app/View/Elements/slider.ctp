<div class="slider_container">
	<section class="big_photo sliders" >
	<?php foreach($sliders as $item): ?>
		<div class="slider___item <?=$item['Slider']['color'] ?>">
		</div>
	<?php endforeach ?>
	</section>
	<div class=" cr ">
		<div class=" two_slider ">	
			<section class="slider-photo sliders" >
			<?php foreach($sliders as $item): ?>
				<div class="slider__item">
						<img src="/img/slider/thumbs/<?=$item['Slider']['img']?>" alt="<?=$item['Slider']['title']?>">
				</div>
			<?php endforeach ?>
			</section>
			<section class="slider-text sliders" >
			<?php foreach($sliders as $item): ?>
				<div class="slider__item">
					<div class="des_slider">
						<div class="title_des">
						<?= $this->Text->truncate(strip_tags($item['Slider']['title']), 104, array('ellipsis' => '...', 'exact' => true)) ?>
						</div>
						<p>
							<?=$item['Slider']['body']?>
						</p>

					</div>
					<a href="#modal3" class="feed_back order open_modal">ORDER</a>
				</div>
			<?php endforeach ?>
			</section>
		</div>
	</div>
</div>

