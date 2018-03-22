<?php
// Acceder a: view-source:localhost/script-lemon/trending.php
$texts =  [
"Valen $70.000<br><br>Están hechos en sintético charolado.<br>Desde la talla 35 a la 39.",
"Valen $90.000<br><br>Están hechos en sintético liso.<br>Desde la talla 35 a la 40.",
"Valen  $110.000. <br><br>Están hechos en sintético gamuzado.<br>Desde la talla 35 a la 40.",
"Valen $80.000<br><br>Están hechos en sintético charolado y grabado.<br>Desde la talla 35 a la 40.",
"Valen $65.000<br><br>Están hechos en sintético gamuzado.<br>Desde la talla 35 a la 39.",
"Valen $100.000<br><br>Están hechos en sintético liso.<br>Desde la talla 35 a la 40.",
"Valen $120.000<br><br>Están hechos en sintético gamuzado.<br>Desde la talla 35 a la 40.",
"Valen $120.000<br><br>Están hechos en sintético gamuzado.<br>Desde la talla 35 a la 40.",
"Valen $70.000<br><br>Están hechos en sintético gamuzado.<br>Desde la talla 35 a la 39.",
"Valen $100.000<br><br>Están hechos en sintético grabado.<br>Desde la talla 35 a la 39.",
"Valen $85.000<br><br>Están hechos en sintético tipo lona.<br>Desde la talla 35 a la 40.",
"Valen $70.000<br><br>Están hechos en sintética charolado.<br>Desde la talla 35 a la 40.",
"Valen $120.000<br><br>Está hecho en sintético liso y grabado.",
"Vale $120.000<br><br>Está hecho en sintético liso y grabado.",
"Vale $120.000<br><br>Está hecho en sintético liso.",
];

$photos = [
"2I1A8757.jpg",
"2I1A8761.jpg",
"2I1A8770.jpg",
"2I1A8772.jpg",
"2I1A8783.jpg",
"2I1A8786.jpg",
"2I1A8796.jpg",
"2I1A8806.jpg",
"2I1A8807.jpg",
"2I1A8814.jpg",
"2I1A8825.jpg",
"2I1A8829.jpg",
"2I1A8862.jpg",
"2I1A8866.jpg",
"2I1A8874.jpg",
];

?>

<div class="page-title-image">
	<img alt="" src="{{media url="wysiwyg/trending/trending-title.png"}}" />
</div>
<?php $year = 2018 ?>
<?php $month = 3 ?>
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