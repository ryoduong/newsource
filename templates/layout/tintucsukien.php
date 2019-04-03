<?php
	$d->reset();
	$sql="select id,ten$lang as ten,tenkhongdau,mota,photo from #_news where hienthi=1 and noibat=1 and type='tintuc' order by stt,id desc";
	$d->query($sql);
	$news=$d->result_array();

	$d->reset();
	$sql="select link,ten	 from #_video where hienthi=1 and type='video' order by stt,id desc";
	$d->query($sql);
	$video=$d->result_array();
?>
<script type="text/javascript">
    $(document).ready(function(){
      $('.re_news').slick({
		  	lazyLoad: 'ondemand',
        	infinite: true,//Hiển thì 2 mũi tên
			accessibility:true,
			vertical:true,//Chay dọc
		  	slidesToShow: 3,    //Số item hiển thị
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
<div id="events">
	<div class="boxlfevent">
		<div class="boxltcon">
			<h3 class="tensk">tin tức</h3>
	<div class="re_news">
	<?php for($i=0;$i<count($news);$i++) {?>
			<div class="ndsk">
				<div class="hinhsk"><a href="tin-tuc/<?=$news[$i]['tenkhongdau']?>-<?=$news[$i]['id']?>.html"><img src="thumb/135x80/1/<?=_upload_tintuc_l.$news[$i]['photo']?>" alt=""></a></div>
				<div class="motask">
					<h3 class="tentin"><a href="tin-tuc/<?=$news[$i]['tenkhongdau']?>-<?=$news[$i]['id']?>.html"><?=catchuoi($news[$i]['ten'],70)?></a></h3>
					<p class="motatin"><?=catchuoi($news[$i]['mota'],90)?></p>
				</div>
			</div>
	<?php }?>
	</div>
		</div>
		<div class="boxrhcon">
		<h3 class="tensk">video</h3>
		<?/*
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
		*/?>
		<link href="css/fotorama.css" rel="stylesheet">
		<script src="js/fotorama.js" type="text/javascript"></script>
		<div class="fotorama" data-nav="thumbs" data-width="100%" data-arrows="true" data-thumbwidth="131" data-thumbheight="83" data-loop="true" data-fit="contain" data-allowfullscreen="true" data-stopautoplayontouch="false">            
		        <?php for($i=0;$i<count($video);$i++){?>
		        	<a href="<?=$video[$i]['link']?>"><?=$video[$i]['ten']?></a>
		        <?php } ?>
		    </div>
		</div>
	</div>
	<div class="boxrhevent">
		<h3 class="tensk">fanpage - facebook</h3>
		<div class="fb-page" data-height="282" data-width="455" data-href="<?=$company['fanpage']?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<div class="fb-xfbml-parse-ignore"><blockquote cite="<?=$company['fanpage']?>"><a href="<?=$company['fanpage']?>">Facebook</a></blockquote></div>
		</div>
	</div>
<div class="clear"></div>
</div>
