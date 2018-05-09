<?php
// Acceder a: view-source:https://scriptlemontree-smoreno91.c9users.io/trending.php
$texts =  [
"Vale $120.000<br><br>Está hecho en sintético liso.",
"Valen $115.000<br><br>Está hecho en sintético liso.",
"Vale $120.000<br><br>Está hecho en sintético liso.",
"Valen $110.000<br><br>Están hechos en sintética liso.<br>Desde la talla 35 a la 40.",
"Valen $100.000<br><br>Están hechos en sintético mate y suela de yute.<br>Desde la talla 35 a la 40.",
"Valen $85.000<br><br>Están hechos en sintético grabado.<br>Desde la talla 35 a la 40.",
"Valen $100.000<br><br>Están hechos en sintético liso con bordado.<br>Desde la talla 35 a la 40.",
"Valen $75.000<br><br>Están hechos en sintético charolado.<br>Desde la talla 35 a la 40.",
"Valen $100.000<br><br>Están hechos en sintético liso.<br>Desde la talla 35 a la 40.",
"Valen $95.000<br><br>Están hechos en sintético grabado.<br>Desde la talla 35 a la 40.",
"Valen $120.000<br><br>Están hechos en sintético liso.<br>Desde la talla 35 a la 40.",
"Valen $70.000<br><br>Están hechos en sintético charolado.<br>Desde la talla 35 a la 39.",
"Valen $120.000<br><br>Están hechos en sintético liso.<br>Desde la talla 35 a la 40.",
"Valen $70.000<br><br>Están hechos en sintético liso.<br>Desde la talla 35 a la 40.",
"Valen  $105.000. <br><br>Están hechos en sintético charolado.<br>Desde la talla 35 a la 40.",
];


$photos = [
"T1.png",
"T2.png",
"T3.png",
"T4.png",
"T5.png",
"T6.png",
"T7.png",
"T8.png",
"T9.png",
"T10.png",
"T11.png",
"T12.png",
"T13.png",
"T14.png",
"T15.png",
];

?>

<div class="page-title-image">
	<img alt="" src="{{media url="wysiwyg/trending/trending-title.png"}}" />
</div>
<?php $year = 2018 ?>
<?php $month = 5 ?>
<?php if($month==12): ?>
<h1 style="text-align: center; font-weight: bold; font-size: 26px; text-transform: uppercase;">Año nuevo</h1>
<?php endif ?>
<div class="trending-layout">
	<div class="clearfix">&nbsp;</div>
	<?php
	for ($i=0; $i < count($texts); $i++) {
	?>
<div class="col-sm-4">
		<div data-toggle="modal" data-target="#modal-lemontree" data-text="<?php echo htmlentities($texts[$i]) ?>">
			<img alt="" src="{{media url="wysiwyg/trending/<?php echo $year ?>/<?php echo $month ?>/<?php echo $photos[$i] ?>"}}" />
		</div>
	</div>
	<?php
		if(($i + 1) % 3 == 0 && $i != count($texts) - 1){
		?><div class="clearfix">&nbsp;</div>
	<?php
		}
	}
	?>
</div>
<div id="modal-datacontent" class="hidden" data-beforelink="" data-textlink="#LaNi&ntilde;aLola" data-link="http://www.lemontree.com.co/blog" data-afterlink="" data-linkinstagram="{{customVar code=instagram_lemon_tree}}" data-linkfacebook="{{customVar code=facebook_lemon_tree}}">aaa</div>
<!-- Modal -->
<p>{{widget type="cms/widget_block" template="cms/widget/static_block/default.phtml" block_id="17"}}</p>
