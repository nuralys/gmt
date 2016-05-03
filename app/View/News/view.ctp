<div class="breadcrumbs_item_container">
	<a href="/" class="breadcrumbs_item">Home page</a>
	<a href="/news" class="breadcrumbs_item">NEWS</a>
	<a class="breadcrumbs_item"><?=$post['News']['title'] ?></a>
</div>

<div class="content">
	<div class="news_item">
		<div class="news_img">
			<img src="/img/news/thumbs/<?=$post['News']['img']?>" alt="<?=$post['News']['title'] ?>">
		</div>
		<div class="title_min">
			<h3><?=$post['News']['title'] ?></h3>
		</div>
		<div class="date"><?=$post['News']['date'] ?></div>
		<?=$post['News']['body'] ?>
	</div>
</div>
<div id="hypercomments_widget"></div>
<script type="text/javascript">
_hcwp = window._hcwp || [];
_hcwp.push({widget:"Stream", widget_id: 67140});
(function() {
if("HC_LOAD_INIT" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/67140/"+lang+"/widget.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>