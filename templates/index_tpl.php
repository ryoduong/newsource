<?php

	$d->reset();

	$sql="select id,ten$lang as ten,tenkhongdau,mota,photo from #_news where hienthi=1 and noibat=1 and type='tintuc' order by stt,id desc limit 8";

	$d->query($sql);

	$news=$d->result_array();



	$d->reset();

	$sql="select id,ten$lang as ten,tenkhongdau,mota,photo from #_news where hienthi=1 and spmoi=1 and type='tintuc' order by stt,id desc";

	$d->query($sql);

	$news_moi=$d->fetch_array();

?>

<div class="tieude_giua"><div><?=$title_cat?> aaa</div><span></span></div>

<div class="wap_item">

<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>

    <div class="item">

            <p class="sp_img zoom_hinh hover_sang1"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>">

            <img src="thumb/268x228/1/<?php if($product[$i]['photo']!=NULL) echo _upload_sanpham_l.$product[$i]['photo']; else echo 'images/noimage.png';?>" alt="<?=$product[$i]['ten']?>" /></a></p>

            <h3 class="sp_name"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>" ><?=$product[$i]['ten']?></a></h3>

           

    </div><!---END .item-->

<?php } ?>

<div class="clear"></div>

<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>

</div><!---END .wap_item-->

