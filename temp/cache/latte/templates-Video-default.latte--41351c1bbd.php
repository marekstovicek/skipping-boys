<?php
// source: C:\xampp\htdocs\sbweb\app\AdminModule/templates/Video/default.latte

use Latte\Runtime as LR;

class Template41351c1bbd extends Latte\Runtime\Template
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
		if (isset($this->params['video'])) trigger_error('Variable $video overwritten in foreach on line 9');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		/* line 4 */
		$this->createTemplate($formPath, ['form' => 'videoForm'] + $this->params, "include")->renderToContentType('html');
?>
<hr>
<?php
		/* line 6 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["sortVideos"], []);
?>

<?php
		$_input = $_form["submit"];
		echo Nextras\Forms\Bridges\Latte\Macros\BS3InputMacros::input($_input->getControl()->addAttributes([]), $_input, false) ?>
<table>
<?php
		$iterations = 0;
		foreach ($videos as $video) {
?>
       
         <tr><td><h3><?php echo LR\Filters::escapeHtmlText($video->name) /* line 11 */ ?>  </h3><td><?php
			echo $video->link /* line 11 */ ?></td><td>  <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Admin:Video:default", [$url, $video->video_id])) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> | <a href="<?php
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Admin:Video:remove", [$url, $video->video_id])) ?>"><i class="fa fa-times" aria-hidden="true"></i></a><br>
             <p><input type="hidden" name="video_id[]" value="<?php echo LR\Filters::escapeHtmlAttr($video->video_id) /* line 12 */ ?>">
                    <input size="3" type="text" name="sort[]" value="<?php echo LR\Filters::escapeHtmlAttr($video->sort) /* line 13 */ ?>"></p></td></tr>
       
             
<?php
			$iterations++;
		}
?>
</table>  
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>





<?php
	}

}
