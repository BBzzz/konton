<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bine ați venit la <i>contabilul Dvs. online</i></h1>
<p>Acest site a fost conceput pentru evidenta contabilă și de stocuri în partidă simplă, destinat persoanelor fizice autorizate - cabinete de avocatură și notariat, asociații de proprietari, cabinete medicale, experți financiari și alte profesii liberale.</p>
<h2>Pe acest site puteți să faceți contabilitatea afacerii Dvs. (bineînțeles cu ajutorul nostru!)</h2>
<h3><a href="?r=utilizator/create">Mă interesează!</a></h3>
<?php if(!Yii::app()->user->isGuest):?>
<p>Ultima logare pe <?php echo Yii::app()->dateFormatter->formatDateTime(Yii::app()->user->lastLoginTime, 'full', 'short');?> .	</p>
<?php endif;?>

