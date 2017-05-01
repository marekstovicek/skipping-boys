<?php
// source: C:\xampp\htdocs\sbweb\app\AdminModule/templates/Seo/default.latte

use Latte\Runtime as LR;

class Template977dd34a56 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<h2>Nastavení SEO - titulek a descriptions - pro <?php echo LR\Filters::escapeHtmlText($url) /* line 5 */ ?></h2>
<?php
		/* line 6 */
		$this->createTemplate($formPath, ['form' => 'seoForm'] + $this->params, "include")->renderToContentType('html');
		
	}

}
