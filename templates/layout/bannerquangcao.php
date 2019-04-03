<?php
	$d->reset();
	$sql="select link,photo$lang as photo from #_background where hienthi=1 and type='bannerqc'";
	$d->query($sql);
	$bannerqc=$d->fetch_array();
?>
<div id="bannerqc">
<div class="bannerqc">
	<a href="<?=$bannerqc['link']?>" target="blank"><img src="thumb/1366x350/1/<?=_upload_hinhanh_l.$bannerqc['photo']?>" alt="<?=$company['ten']?>"></a>
</div>
</div>