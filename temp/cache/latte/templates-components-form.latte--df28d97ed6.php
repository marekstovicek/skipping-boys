<?php
// source: C:\xampp\htdocs\sbweb\app\presenters/../templates/components/form.latte

use Latte\Runtime as LR;

class Templatedf28d97ed6 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		$form = $_form = $this->global->formsStack[] = is_object($form) ? $form : $this->global->uiControl[$form];
		?><form class="fancyform <?php
		if (isset($class)) {
			echo LR\Filters::escapeHtmlAttr($class) /* line 2 */;
		}
		?>"<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		'class' => NULL,
		), FALSE) ?>>
<?php
		$iterations = 0;
		foreach ($form->controls as $input) {
?>

<?php
			$button = $input->getControl()->type == 'submit';
			?>        <div<?php if ($_tmp = array_filter([$button ? 'form-buttons' : 'form-component'])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>
                <?php
			$_input = is_object($input) ? $input : $_form[$input];
			if ($_label = $_input->getLabel()) echo Nextras\Forms\Bridges\Latte\Macros\BS3InputMacros::label($_label->addAttributes([]), $_input, false);
			if ($input->error) {
				$_input = is_object($input) ? $input : $_form[$input];
				echo Nextras\Forms\Bridges\Latte\Macros\BS3InputMacros::input($_input->getControl()->addAttributes(['class' => 'invalid']), $_input, false);
			}
			else {
				$_input = is_object($input) ? $input : $_form[$input];
				echo Nextras\Forms\Bridges\Latte\Macros\BS3InputMacros::input($_input->getControl()->addAttributes([]), $_input, false);
			}
			if (!$button) {
?>                <div class="clear"></div>
<?php
			}
?>
        </div>
<?php
			$iterations++;
		}
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), FALSE);
		?></form><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['input'])) trigger_error('Variable $input overwritten in foreach on line 3');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
