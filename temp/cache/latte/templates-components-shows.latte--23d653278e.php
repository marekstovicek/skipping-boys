<?php
// source: C:\xampp\htdocs\sbweb\app\CoreModule\components/../templates/components/shows.latte

use Latte\Runtime as LR;

class Template23d653278e extends Latte\Runtime\Template
{
	public $blocks = [
		'_' => 'block_b14a7',
	];

	public $blockTypes = [
		'_' => 'html',
	];


	function main()
	{
		extract($this->params);
		?><div id="<?php echo htmlSpecialChars($this->global->snippetDriver->getHtmlId('')) ?>"><?php $this->renderBlock('_', $this->params) ?></div><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['show'])) trigger_error('Variable $show overwritten in foreach on line 3');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function block_b14a7($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("", "static");
?>
    <table class="calendar" id="akce">
<?php
		$iterations = 0;
		foreach ($shows as $show) {
			?>        <tr><th><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->prettydate, $show->date)) /* line 3 */ ?></th><td><?php
			echo LR\Filters::escapeHtmlText($show->name) /* line 3 */ ?></td></tr>
<?php
			$iterations++;
		}
?>
    </table>
<?php
		$this->global->snippetDriver->leave();
		
	}

}
