<?php
// source: C:\xampp\htdocs\sbweb\app\CoreModule/templates/Page/default.latte

use Latte\Runtime as LR;

class Template9ae814ca17 extends Latte\Runtime\Template
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
		if (isset($this->params['vid'])) trigger_error('Variable $vid overwritten in foreach on line 9');
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


 <div class="video-column">
<?php
		if (isset($video)) {
			$iterations = 0;
			foreach ($video as $vid) {
				?>                       <?php echo $vid /* line 10 */ ?>

<?php
				$iterations++;
			}
		}
?>
          </div>


<?php
	}

}
