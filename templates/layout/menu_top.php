<?php
	
	$d->reset();
	$sql="select ten$lang as ten,tenkhongdau,id from #_product_danhmuc where hienthi=1 and type='sanpham' order by stt,id desc";
	$d->query($sql);
	$product_danhmuc=$d->result_array();
	
?>
<!--Hover menu-->
<script language="javascript" type="text/javascript">
	$(document).ready(function() { 
		//Hover vào menu xổ xuống
		$(".menu ul li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300); 
			},function(){ 
			$(this).find('ul:first').css({visibility: "hidden"});
			}); 
		$(".menu ul li").hover(function(){
				$(this).find('>a').addClass('active2'); 
			},function(){ 
				$(this).find('>a').removeClass('active2'); 
		}); 
		//Hover vào danh mục xổ xuống
		/*$("#danhmuc ul li").hover(function(){
			$(this).find('ul:first').show(300); 
		},function(){ 
			$(this).find('ul:first').hide(300);
		}); */
		//Click vào danh mục xổ xuống
		$("#danhmuc > ul > li > a").click(function(){
			if($(this).parents('li').children('ul').find('li').length>0)
			{
				$("#danhmuc ul li ul").hide(300);
				
				if($(this).hasClass('active'))
				{
					$("#danhmuc ul li a").removeClass('active');
					$(this).parents('li').find('ul:first').hide(300); 
					$(this).removeClass('active');
				}
				else
				{
					$("#danhmuc ul li a").removeClass('active');
					$(this).parents('li').find('ul:first').show(300); 
					$(this).addClass('active');
				}
				return false;
			}
		});
	});  
</script>
<!--Hover menu-->

<nav id="menu_mobi" style="height:0; overflow:hidden;"></nav>
<div class="header_mobi"><a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars" aria-hidden="true"></i> </a>


</div>

<nav id="menu">
<ul>
	<div class="search">
			        <input type="text" name="keyword" id="keyword" class="keyword" onKeyPress="doEnter(event,'keyword');" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
			        <i class="fa fa-search" aria-hidden="true" onclick="onSearch(event,'keyword');"></i>
			    </div><!---END #search-->

    <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><?=_trangchu?></a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'san-pham') echo 'active'; ?>" href="san-pham.html"><?=_sanpham?></a>
    	<?=for2cap('product_danhmuc','product_list','san-pham','sanpham','','/')?>
    </li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'day-chuyen-san-xuat') echo 'active'; ?>" href="day-chuyen-san-xuat.html">Nhà máy</a>
    	<?=for2cap('news_danhmuc','news_list','day-chuyen-san-xuat','daychuyen','','/')?>
    </li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html">Tin tức</a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'bao-gia') echo 'active'; ?>" href="bao-gia.html">Đội ngũ</a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'tuyen-dung') echo 'active'; ?>" href="tuyen-dung.html">Tuyển dụng</a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
    
</ul>
</nav>