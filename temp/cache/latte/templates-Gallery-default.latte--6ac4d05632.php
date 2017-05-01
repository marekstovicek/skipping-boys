<?php
// source: C:\xampp\htdocs\sbweb\app\AdminModule/templates/Gallery/default.latte

use Latte\Runtime as LR;

class Template6ac4d05632 extends Latte\Runtime\Template
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
		if (isset($this->params['image'])) trigger_error('Variable $image overwritten in foreach on line 10');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		/* line 4 */
		$this->createTemplate($formPath, ['form' => 'uploadForm'] + $this->params, "include")->renderToContentType('html');
?>
<hr>
<?php
		/* line 6 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["sortImages"], []);
?>

<?php
		$_input = $_form["submit"];
		echo Nextras\Forms\Bridges\Latte\Macros\BS3InputMacros::input($_input->getControl()->addAttributes([]), $_input, false) ?>
<div  id="product-images-administration">
    
<?php
		$iterations = 0;
		foreach ($images as $image) {
?>        <div>
                <img width="250" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($image->thumbs)) /* line 11 */ ?>/photo_<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($image->image_id)) /* line 11 */ ?>.jpg" alt="">
                <a data-confirm="Opravdu si přejete odstranit vybraný náhled?" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Admin:Gallery:remove", [$url, $image->image_id])) ?>">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                <p><input type="hidden" name="image_id[]" value="<?php echo LR\Filters::escapeHtmlAttr($image->image_id) /* line 15 */ ?>">
                    <input size="3" type="text" name="sort[]" value="<?php echo LR\Filters::escapeHtmlAttr($image->sort) /* line 16 */ ?>"></p>
        </div>
<?php
			$iterations++;
		}
?>
</div>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>


        


<?php
	}

}
