<?php
// source: /home/marek/sbweb/app/CoreModule/templates/Page/gallery.latte

use Latte\Runtime as LR;

class Template3619fc1c6e extends Latte\Runtime\Template
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
		if (isset($this->params['photo'])) trigger_error('Variable $photo overwritten in foreach on line 12');
		if (isset($this->params['video'])) trigger_error('Variable $video overwritten in foreach on line 22');
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
<div class="fotog-column">
	<h2>Foto</h2>


	<div id="f-galerie" class="fotogal" style="display:block;">
		    <h3>Ukázka různorodosti našich akcí</h3>

<p>
<?php
		$iterations = 0;
		foreach ($photos as $photo) {
			?>      <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($photo->path)) /* line 12 */ ?>photo_<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($photo->image_id)) /* line 12 */ ?>.jpg" data-lightbox="galerie"><img src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($photo->thumbs)) /* line 12 */ ?>/photo_<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($photo->image_id)) /* line 12 */ ?>.jpg" width="230"></a>
<?php
			$iterations++;
		}
?>
      		
		</p>
	</div>
</div>
      

<div class="videog-column">
       	<h2>Video</h2>
             
<?php
		$iterations = 0;
		foreach ($videos as $video) {
			?>        <h3><?php echo LR\Filters::escapeHtmlText($video->name) /* line 23 */ ?></h3>
	      <?php echo $video->link /* line 24 */ ?>

<?php
			$iterations++;
		}
?>
        
        
        
        
        
</div>	
<?php
	}

}
