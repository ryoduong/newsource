<div class="logo"><a href="index.php"><img src="images/logo.png" /></a></div>

<div class="sidebarSep mt0"></div>



<!-- Left navigation -->

<ul id="menu" class="nav">

<li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>



<li class="categories_li <?php if($_GET['com']=='product' || $_GET['com']=='order' || $_GET['com']=='excel') echo ' activemenu' ?>" id="menu_"><a href="" title="" class="exp"><span>Danh mục web</span><strong></strong></a>

    <ul class="sub">

    	<?php phanquyen_menu('Quản lý danh mục 1','product','man_danhmuc','sanpham'); ?>

        <?php phanquyen_menu('Quản lý danh mục 2','product','man_list','sanpham'); ?>

        <?php phanquyen_menu('Quản lý sản phẩm','product','man','sanpham'); ?>

    </ul>

</li>


<?php /* ?>
<li class="categories_li <?php if($_GET['type']=='daychuyen') echo ' activemenu' ?>" id="menu_dct"><a href="" title="" class="exp"><span> Nhà máy</span><strong></strong></a>

    <ul class="sub">

        <?php phanquyen_menu('Quản lý danh mục 1','news','man_danhmuc','daychuyen'); ?>

        <?php phanquyen_menu('Quản lý bài viết','news','man','daychuyen'); ?> 

    </ul>

</li>



<li class="categories_li <?php if($_GET['type']=='baogia') echo ' activemenu' ?>" id="menu_bg"><a href="" title="" class="exp"><span>Đội ngũ</span><strong></strong></a>

    <ul class="sub">

        <?php phanquyen_menu('Quản lý danh mục 1','news','man_danhmuc','baogia'); ?>

        <?php phanquyen_menu('Quản lý bài viết','news','man','baogia'); ?> 

    </ul>

</li>



<li class="categories_li <?php if($_GET['type']=='tintuc' || $_GET['type']=='hoso' || $_GET['type']=='hotro' || $_GET['type']=='gioithieun') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>

    <ul class="sub">

        <?php phanquyen_menu('Quản lý giới thiệu','news','man','gioithieun'); ?>

        <?php phanquyen_menu('Quản lý hỗ trợ','news','man','hotro'); ?>

        <?php phanquyen_menu('Quản lý hồ sơ pháp lý','news','man','hoso'); ?>

        <?php phanquyen_menu('Quản lý tin tức','news','man','tintuc'); ?>

    </ul>

</li>

  

<li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>

    <ul class="sub">

    	

        <?php phanquyen_menu('Cập nhật tuyển dụng','about','capnhat','tuyendung'); ?>

        <?php phanquyen_menu('Cập nhật giới thiệu','about','capnhat','about'); ?>

        <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>

        <?php phanquyen_menu('Cập nhật footer','about','capnhat','footer'); ?>

        <?php phanquyen_menu('Quản lý Video','video','man','video'); ?>

    </ul>

</li>



	

      

      

<li class="categories_li <?php if($_GET['com']=='newsletter' || $_GET['com']=='lkweb' || $_GET['com']=='yahoo') echo ' activemenu' ?>" id="menu_nt"><a href="" title="" class="exp"><span>Marketing Online</span><strong></strong></a>

      	<ul class="sub">

        	<?php phanquyen_menu('Quản lý mạng xã hội','lkweb','man','mxh'); ?>

        	<?php phanquyen_menu('Quản lý liên kết web','lkweb','man','lkweb'); ?>

            <?php //phanquyen_menu('Quản lý hỗ trợ trực tuyến','yahoo','man','yahoo'); ?>

            <?php phanquyen_menu('Quản lý Đăng ký báo giá','newsletter','man',''); ?>    	

        </ul>

</li>

      

<? /*<li class="categories_li <?php if($_GET['com']=='database' || $_GET['com']=='backup') echo ' activemenu' ?>" id="menu_ntt"><a href="" title="" class="exp"><span>Database</span><strong></strong></a>

      	<ul class="sub">

        	<?php phanquyen_menu('Quản lý database','database','man',''); ?>

            <?php phanquyen_menu('Backup database','backup','backup_database',''); ?>

            <?php phanquyen_menu('Backup file','backup','backup_file',''); ?>    	

        </ul>

</li> */?>

<li class="categories_li gallery_li <?php if($_GET['com']=='anhnen' || $_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner</span><strong></strong></a>

     <ul class="sub">

		<?php //phanquyen_menu('Cập nhật background','anhnen','capnhat','background'); ?>

        <?php phanquyen_menu('Cập nhật logo','background','capnhat','logo'); ?>

        <?php phanquyen_menu('Cập nhật banner','background','capnhat','banner'); ?>

        <?php phanquyen_menu('Quản lý slider','slider','man_photo','slider'); ?>

     </ul>

</li>

  

<li class="categories_li setting_li <?php if($_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>

    <ul class="sub">

    	<?php phanquyen_menu('Cấu hình thông tin Website','company','capnhat',''); ?>

         <li<?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>

    </ul>

</li>

</ul>

