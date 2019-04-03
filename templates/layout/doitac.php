<?php
	
	$d->reset();
	$sql="select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='doitac' order by stt,id desc";
	$d->query($sql);
	$doitac=$d->result_array();

?>
<div id="boxdoitac">
	<div id="doitac">
		<div class="marquee" id="mycrawler2">
			<?php for($i=0,$count_doitac=count($doitac);$i<$count_doitac;$i++){ ?>
		    	<a href="<?=$doitac[$i]['link']?>" title="<?=$doitac[$i]['link']?>" target="_blank"><img src="thumb/163x114/2/<?=_upload_hinhanh_l.$doitac[$i]['photo']?>" alt="<?php if($doitac[$i]['ten']!='') echo $doitac[$i]['ten'];else echo $company['ten']?>" /></a>
		    <?php } ?>
		</div>
	</div>
<div class="clear"></div>
</div>

