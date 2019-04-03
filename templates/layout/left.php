<?php
	$d->reset();
	$sql_tinmoi = "select id,ten$lang as ten,tenkhongdau,thumb,mota$lang as mota from #_news where type='tintuc' and hienthi=1 and noibat=1 order by stt,id desc";
	$d->query($sql_tinmoi);
	$tinmoi = $d->result_array();

	$d->reset();
	$sql_hotro = "select ten$lang as ten,dienthoai,email,skype from #_yahoo where hienthi=1 and type='yahoo' order by stt,id desc";
	$d->query($sql_hotro);
	$hotro = $d->result_array();
	
	$d->reset();
	$sql_quangcao = "select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='quangcao' order by stt,id desc";
	$d->query($sql_quangcao);
	$quangcao = $d->result_array();
	
	$d->reset();
	$sql_lkweb="select id,ten$lang as ten,link from #_lkweb where hienthi=1 and type='lkweb' order by stt,id desc";
	$d->query($sql_lkweb);
	$lkweb=$d->result_array();
	
	
?>
<script type="text/javascript">
    $(document).ready(function(){
      $('#tinmoi ul').slick({
		  	lazyLoad: 'ondemand',
        	infinite: true,//Hiển thì 2 mũi tên
			accessibility:true,
			vertical:true,//Chay dọc
		  	slidesToShow: 4,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true
      });
	});
</script>
<div id="danhmuc" class="danhmuc">
<div class="tieude">Đăng ký báo giá</div>
	<?php include _template."layout/dangkynhantin.php";?>
</div><!---END #danhmuc-->


<div id="video" class="danhmuc">
<div class="tieude">VIDEO CLIP</div>
	<div class="load_video">
	<script type="text/javascript">
		$(document).ready(function(e) {
			$(window).scroll(function(){
				if(!$('.load_video').hasClass('load_video2'))
				{
					$('.load_video').addClass('load_video2');
					$('.load_video').load( "ajax/video.php");
				}
			 });
        });
	</script>
    </div><!---END .load_video-->
</div><!---END #video-->
