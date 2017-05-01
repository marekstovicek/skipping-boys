<?php
// source: C:\xampp\htdocs\sbweb\app\CoreModule/templates/Page/show.latte

use Latte\Runtime as LR;

class Template0978008bc6 extends Latte\Runtime\Template
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
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['show'])) trigger_error('Variable $show overwritten in foreach on line 8');
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
		extract($_args);
?>

<?php echo $page->content /* line 5 */ ?>


<table class="calendar" id="akce">
<?php
		$iterations = 0;
		foreach ($shows as $show) {
			?>        <tr><th><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->prettydate, $show->date_from, $show->date_to)) /* line 8 */ ?></th><td><?php
			echo LR\Filters::escapeHtmlText($show->name) /* line 8 */ ?></td></tr>
<?php
			$iterations++;
		}
?>
    </table>
<?php
		/* line 10 */ $_tmp = $this->global->uiControl->getComponent("visualPaginator");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
		
	}

}
