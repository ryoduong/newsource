<?php
	$d->reset();
	$sql="select ten,mota,photo from #_about where hienthi=1 and type='about'";
	$d->query($sql);
	$about=$d->fetch_array();
?>

<div id="box_dn">
	<div class="boxdn clearfix">
		<div class="trai_boxdn">
			<div class="ten_boxdn">
				<p class="ten1">Về chúng tôi</p>
				<p class="ten2"><?=$about['ten']?></p>
			</div>
			<div class="mota_boxdn"><?=strip_tags($about['mota'])?></div>
			<div class="xemgt"><a href="gioi-thieu.html">Xem thêm </a></div>
		</div>
		<div class="phai_boxdn">
			<div class="imggt1"><img src="thumb/643x502/1/<?=_upload_hinhanh_l.$about['photo']?>"></div>
		</div>
	</div>
</div>