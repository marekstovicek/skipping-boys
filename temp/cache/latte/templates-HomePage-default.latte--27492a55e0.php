<?php
// source: C:\xampp\htdocs\sbweb\app\AdminModule/templates/HomePage/default.latte

use Latte\Runtime as LR;

class Template27492a55e0 extends Latte\Runtime\Template
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
?><h1>Vítej v administraci webu ropeskippingových borců.</h1>
<h2>Pusť se do budování ropeskippingu a marketingu.</h2>

<table>
    
</table>

<?php
	}

}
