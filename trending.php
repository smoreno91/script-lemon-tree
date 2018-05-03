<?php
// Acceder a: view-source:localhost/script-lemon/trending.php
$texts =  [
	"Valen  $105.000<br><br> Están hechos en sintético charolado.<br> Desde la talla 35 a la 40.  ",
	"Valen $75.000<br><br>Están hechos en sintético charolado.<br> Desde la talla 35 a la 40.",
	"Valen $120.000<br><br> Están hechos en sintético liso.<br>Desde la talla 35 a la 40.  ",
	"Valen $95.000<br><br> Están hechos en sintético grabado. <br>Desde la talla 35 a la 40.",
	"Valen $100.000<br><br> Están hechos en sintético liso. <br>Desde la talla 35 a la 40.",
	"Valen $70.000<br><br>Están hechos en sintético liso.<br> Desde la talla 35 a la 40.",
	"Valen $100.000 <br><br>Están hechos en sintético liso con bordado. <br>Desde la talla 35 a la 40.",
	"Valen $70.000<br><br>Están hechos en sintético charolado. <br>Desde la talla 35 a la 39.",
	"Valen $85.000<br><br>Están hechos en sintético grabado. <br>Desde la talla 35 a la 40.",
	"Valen $100.000 <br><br>Están hechos en sintético mate y suela de yute.<br>Desde la talla 35 a la 40.",
	"Valen $120.000<br><br> Están hechos en sintético liso. <br>Desde la talla 35 a la 40.",
	"Valen $110.000 <br><br>Están hechos en sintética liso. <br>Desde la talla 35 a la 40.",
	"Valen $115.000<br><br> Está hecho en sintético liso. ",
	"Vale $120.000<br><br>Está hecho en sintético liso. ",
	"Vale $120.000<br><br>Está hecho en sintético liso.",
];
/**
3121: Valen  $105.000<br><br> Están hechos en sintético charolado.<br> Desde la talla 35 a la 40.  
3145: Valen $75.000<br><br>Están hechos en sintético charolado.<br> Desde la talla 35 a la 40.
3163: Valen $120.000<br><br> Están hechos en sintético liso.<br>Desde la talla 35 a la 40.  
 3171: Valen $95.000<br><br> Están hechos en sintético grabado. <br>Desde la talla 35 a la 40.
3186: Valen $100.000<br><br> Están hechos en sintético liso. <br>Desde la talla 35 a la 40.
3214: Valen $70.000<br><br>Están hechos en sintético liso.<br> Desde la talla 35 a la 40.
3255: Valen $100.000 <br><br>Están hechos en sintético liso con bordado. <br>Desde la talla 35 a la 40.
 3263: Valen $70.000<br><br>Están hechos en sintético charolado. <br>Desde la talla 35 a la 39.
 3331: Valen $85.000<br><br>Están hechos en sintético grabado. <br>Desde la talla 35 a la 40.
 3389: Valen $100.000 <br><br>Están hechos en sintético mate y suela de yute.<br>Desde la talla 35 a la 40.
3410: Valen $120.000<br><br> Están hechos en sintético liso. <br>Desde la talla 35 a la 40.
3501: Valen $110.000 <br><br>Están hechos en sintética liso. <br>Desde la talla 35 a la 40.
3593: Valen $115.000<br><br> Está hecho en sintético liso.
3621: Vale $120.000<br><br>Está hecho en sintético liso.
3631: Vale $120.000<br><br>Está hecho en sintético liso.
*/

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
