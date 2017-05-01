<?php
// source: C:\xampp\htdocs\sbweb\app\CoreModule/templates/Page/contact.latte

use Latte\Runtime as LR;

class Templatef6611dfe83 extends Latte\Runtime\Template
{
	public $blocks = [
		'title' => 'blockTitle',
		'description' => 'blockDescription',
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'title' => 'html',
		'description' => 'html',
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
?>

<?php
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
		extract($_args);
		echo LR\Filters::escapeHtmlText($page->title) /* line 1 */;
	}


	function blockDescription($_args)
	{
		extract($_args);
		echo LR\Filters::escapeHtmlText($page->description) /* line 2 */;
	}


	function blockContent($_args)
	{
?><div class="full-column">
	<h2 class="center">Vystoupení objednávejte na <a href="mailto:info@skippingboys.cz">info@skippingboys.cz</a></h2>
  <h3 class="center"> Můžete nás sledovat i zde: </h2>
  <div class="center">
  <br> 
  <a href="https://plus.google.com/107999492454393224553/" target="_blank"> <img src="http://www.skippingboys.cz/soc/google.jpg" alt="Google+"> </a>
  <a href="https://www.facebook.com/SkippingBoys" target="_blank"> <img src="http://www.skippingboys.cz/soc/fb.jpg" alt="Facebook"> </a>
  <a href="https://www.youtube.com/channel/UCaSyk-3FQaCDeUb48tyMrsg" target="_blank"> <img src="http://www.skippingboys.cz/soc/youtube.jpg" alt="Youtube"> </a>
  <a href="https://www.instagram.com/skippingboys/" target="_blank"> <img src="http://www.skippingboys.cz/soc/insta.jpg" alt="Instagram"> </a>
  </div>
</div>			<hr class="cleaner">
<?php
	}

}
