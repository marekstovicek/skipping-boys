<?php
// source: C:\xampp\htdocs\sbweb\app\AdminModule/templates/Reference/default.latte

use Latte\Runtime as LR;

class Templatea1b184bb22 extends Latte\Runtime\Template
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
		if (isset($this->params['show'])) trigger_error('Variable $show overwritten in foreach on line 6');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		/* line 4 */
		$this->createTemplate($formPath, ['form' => 'editForm'] + $this->params, "include")->renderToContentType('html');
?>
<table class="table table-striped">
<?php
		$iterations = 0;
		foreach ($shows as $show) {
			?>    <tr><td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->prettydate, $show->date_from, $show->date_to)) /* line 6 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText($show->name) /* line 6 */ ?></td><td><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Admin:Reference:default", [$show->show_id])) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> | <a href="<?php
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Admin:Reference:remove", [$show->show_id])) ?>"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>
<?php
			$iterations++;
		}
?>
</table>
<?php
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("visualPaginator");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
		
	}

}
