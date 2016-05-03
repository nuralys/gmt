<div class="coment_news_container">
			<div class="cr">
				<div class="coment_slide">
					<section class="slider-comment" >
					<?php foreach($reviews as $item): ?>
						<div class="slider__item">
							<div class="slider_comment_content">
								<div class="name_client">
									<?=$item['Review']['title']?>
								</div>
								<div class="site_client">
									<?=$item['Review']['website']?>
								</div>
								<p>
								<?= $this->Text->truncate(strip_tags($item['Review']['body']), 800, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
							</div>
						</div>
						<?php endforeach ?>
					</section>
					<a href="#modal2" class="open_modal feed_back comments">Give feedback</a>
					<a href="/reviews" class="all_comment">All reviews</a>
				</div>
				<div class="news_slide">
					<section class="slider-news" >
						<?php foreach($news as $item): ?>
						<div class="slider__item">
							<div class="slider_news_content">
								<div class="news_date_slide">
								<?php echo $this->Time->format($item['News']['date'], '%e %b', 'invalid'); ?>
								</div>
								<div class="news_title_slide">
									<a href="/news/view/<?=$item['News']['id']?>">
									<?= $this->Text->truncate(strip_tags($item['News']['title']), 133, array('ellipsis' => '...', 'exact' => true)) ?></a>
								</div>
								<p>
									<?= $this->Text->truncate(strip_tags($item['News']['body']), 395, array('ellipsis' => '...', 'exact' => true)) ?>
								</p>
							</div>
						</div>
						<?php endforeach ?>
					</section>
					
					<a href="/news" class="all_comment">All comments</a>
				</div>
			</div>
		</div>
		<div class="our_clients">
			<div class="cr">
				<div class="title">
					Our clients
				</div>
				<section class="slider-our_clients" >
				<?php foreach($clients as $item): ?>
					<div class="slider__item">
						<div class="clents_item">
							<img src="/img/client/thumbs/<?=$item['Client']['img'] ?>" alt="<?=$item['Client']['title'] ?>">
						</div>
					</div>
					<?php endforeach ?>
				</section>
			</div>
		</div>