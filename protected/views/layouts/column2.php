<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<!--<div class="span-19">-->
	<article class="span-19">
		<?php echo $content; ?>
	</article>
<!--</div>
<div class="span-5 last">-->
	<aside class="span-5 last">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operații',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</aside>
<!--</div>-->
<?php $this->endContent(); ?>
