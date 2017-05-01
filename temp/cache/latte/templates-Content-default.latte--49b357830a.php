<?php
// source: C:\xampp\htdocs\sbweb\app\AdminModule/templates/Content/default.latte

use Latte\Runtime as LR;

class Template49b357830a extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'content' => 'html',
		'scripts' => 'html',
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
		?><h2>Nastavení stránky <?php echo LR\Filters::escapeHtmlText($url) /* line 4 */ ?></h2>

<?php
		/* line 6 */
		$this->createTemplate($formPath, ['form' => 'contentForm'] + $this->params, "include")->renderToContentType('html');
?>

<?php
		$this->renderBlock('scripts', get_defined_vars());
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>

<script type="text/javascript" src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */ ?>/js/tinymce.init.js"></script>
<script type="text/javascript">
        initTinyMce("content");
</script>
<?php
	}

}
