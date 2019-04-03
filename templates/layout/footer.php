<?php	

	$d->reset();
	$sql = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
	$d->query($sql);
	$company_contact = $d->fetch_array();
	
    $d->reset();
    $sql="select id,ten$lang as ten,tenkhongdau from #_news where hienthi=1 and type='hotro' order by stt,id desc";
    $d->query($sql);
    $hotro=$d->result_array();

    $d->reset();
    $sql="select id,ten$lang as ten,tenkhongdau from #_news where hienthi=1 and type='gioithieun' order by stt,id desc";
    $d->query($sql);
    $gioithieu=$d->result_array();
	
?>
<div id="footer">
    <div id="main_footer">
        <div class="fttrai">
        <div class="tenftcom"><?=$company['ten']?></div>
            <?=$company_contact['noidung'];?>
        </div>

    </div>

    <div id="thongke">
        <div class="thongke_an">
        <div class="td_ft"><?=_thongketruycap?></div>
            <ul>
                <li>Đang online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
                <li>Ngày: <span><?=$homnay;?></span></li>
                <li>Tháng: <span><?=$trongthang;?></span></li>
                <li><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
                 
            </ul>
        </div>
        
       
    </div><!---END #thongke-->
    <div class="clear"></div>
</div><!---END #footer-->
<div id="copri">
<div class="copri">
    <div class="p_ri">
        <ul>
            <li></li>
        </ul>
    </div>
    <div class="t_ri">
        <p>Copyright © 2017 Huỳnh Dư. All rights reserved. Web design : NiNa Co., Ltd


</p>
    </div>
    <div class="clear"></div>
</div>
    
</div>