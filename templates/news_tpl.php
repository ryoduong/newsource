<?php if($_GET['com']=='bao-gia'){?>
<?php
    $d->reset();
    $sql="select id,ten from #_news_danhmuc where hienthi=1 and type='baogia' order by stt,id desc";
    $d->query($sql);
    $baogiadm=$d->result_array();
?>

<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<?php for($k=0;$k<count($baogiadm);$k++){   ?>
<?php
    $d->reset();
    $sql1="select id,ten,download,mota from #_news where hienthi=1 and type='baogia' and id_danhmuc='".$baogiadm[$k]['id']."' order by stt,id desc";
    $d->query($sql1);
    $baogia=$d->result_array();
?>
<div class="mucten"><?=$k+1?>.<?=$baogiadm[$k]['ten']?></div>
<table class="tb-no" border="1px">
    <thead>
        <tr>
            <th style="width: 5%">STT</th>
            <th style="width: 25%;">Tên tài liệu</th>
            <th>Ghi chú</th>
            <th style="width: 15%;">Tải về</th>
        </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<count($baogia);$i++){   ?>
        <tr>
            <td><?=$i+1?></td>
            <td><?=$baogia[$i]['ten']?></td>
            <td><?=$baogia[$i]['mota']?></td>
            <td>
                <?php if($baogia[$i]['download']!='') {?>
                        <div class="nutdow"><a href="upload/sanpham/<?=$baogia[$i]['download']?>"><i class="fa fa-2x fa-download" aria-hidden="true"></i></a></div>
                <?php }?>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>
<?php }?>
<?php }else{?>
<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
<div class="wap_box_new">
    <?php for($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++){ ?>
        <div class="box_news">
            <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html" title="<?=$tintuc[$i]['ten']?>"><img src="<?php if($tintuc[$i]['thumb']!=NULL)echo _upload_tintuc_l.$tintuc[$i]['thumb'];else echo 'images/noimage.png';?>" alt="<?=$tintuc[$i]['ten']?>" /></a>      
            <h3><a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html" title="<?=$tintuc[$i]['ten']?>"><?=$tintuc[$i]['ten']?></a></h3>
            
            <div class="mota"><?=catchuoi($tintuc[$i]['mota'],100)?></div> 
            <a class="xemthem" href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><?=_xemthem?></a> 
            <div class="clear"></div>         
        </div><!---END .box_new-->
    <?php } ?>
</div><!---END .wap_box_new-->
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->
<?php }?>
