<?php
// source: /home/marek/sbweb/app/templates/@layout.latte

use Latte\Runtime as LR;

class Templatef03399aa12 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title><?php
		if (isset($this->blockQueue["title"])) {
			?>Skipping Boys - <?php
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
		}
?></title>
        <meta name="description" content="<?php
		$this->renderBlock('description', $this->params, function ($s, $type) {
			$_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($_fi, 'htmlAttr', $this->filters->filterContent('striphtml', $_fi, $s));
		});
?>">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */ ?>/css/lightbox.css">
        <script type="text/javascript">
            
        </script>
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */ ?>/css/script.css">
        
        
	<meta name="viewport" content="width=device-width">
	<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>
</head>
<body onload="initialize(); ">
        <header>
      <div id="inner-header">
      <menu>
        <li><a <?php
		if ($active == 'default') {
			?>class="active"<?php
		}
		?>  href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Page:default")) ?>">DOMŮ</a></li>
        <li><a <?php
		if ($active == 'about') {
			?>class="active"<?php
		}
		?>   href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Page:about")) ?>">O NÁS</a></li>
        <li><a <?php
		if ($active == 'show') {
			?>class="active"<?php
		}
		?>   href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Page:show")) ?>">VYSTOUPENÍ</a></li>
        <li><a <?php
		if ($active == 'gallery') {
			?>class="active"<?php
		}
		?>   href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Page:gallery")) ?>">GALERIE</a></li>
        <li><a <?php
		if ($active == 'contact') {
			?>class="active"<?php
		}
		?>   href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Core:Page:contact")) ?>">KONTAKT</a></li>
      </menu>
      <div id="head-box">
        <h1><a href="#">Skipping Boys<span></span></a></h1>
        <div id="screen">
          <div id="slideshow">
<?php
		$iterations = 0;
		foreach ($foto as $fotka) {
			?>              <img class="slide"  src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 37 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($fotka)) /* line 37 */ ?>" width="580" height="380" style="z-index: 2" alt="Skipping Boys">
<?php
			$iterations++;
		}
?>
    
  </div>
        </div>
      </div>
      
      </div>
    </header> 

    <section>
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>	<div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 47 */ ?></div>
<?php
			$iterations++;
		}
?>
        
<?php
		$this->renderBlock('content', $this->params, 'html');
?>

    	<hr class="cleaner">
	</section>

		<footer>
			<div id="inner-footer">
				<div id="left-footer">
					<span>Spolupracujeme s:</span>
					<ul class="links">
						<li><a href="http://sokol-liben.cz/" target="_blank">Sokol Libeň</a></li>
						<li><a href="http://www.crazyjump.sk/" target="_blank">Crazy Jump</a></li>
					</ul>
				</div>
				<div id="right-footer">
					<div id="fb-root"></div>
					<script src="http://connect.facebook.net/en_US/all.js#appId=196563577063106&amp;xfbml=1"></script>
					<fb:like href="http://facebook.com/skippingboys" send="true" width="380" show_faces="false" font=""></fb:like>
					<p class="contact">
						<a href="https://www.youtube.com/channel/UCaSyk-3FQaCDeUb48tyMrsg" class="youtube-link">YouTube</a><br>
						<a href="https://www.facebook.com/SkippingBoys" class="fb-link">Facebook</a><br>
            <a href="https://www.instagram.com/skippingboys" class="instagram-link">Instagram</a><br>
            <a href="https://plus.google.com/107999492454393224553/" class="google-link">Google +</a><br>
						<a href="mailto:info@skippingboys.cz" class="mail-link">info@skippingboys.cz</a>
					</p>
				</div>
				<a href="http://www.toplist.cz/" target="_top"><img src="http://toplist.cz/dot.asp?id=1201073" border="0" alt="TOPlist" width="1" height="1"></a>
			</div>
		</footer>
<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['fotka'])) trigger_error('Variable $fotka overwritten in foreach on line 37');
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 47');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
	<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 81 */ ?>/js/main.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 82 */ ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 83 */ ?>/js/lightbox.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 84 */ ?>/js/hideshow.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 85 */ ?>/js/script.js"></script>
        
<?php
	}

}
