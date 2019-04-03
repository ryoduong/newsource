<?php
	$d->reset();
	$sql="select id,ten$lang as ten,tenkhongdau,mota,photo from #_news where hienthi=1 and noibat=1 and type='daychuyen' order by stt,id desc";
	$d->query($sql);
	$daychuyen=$d->result_array();
?>
<div class="day_chuyen">
<div class="wap_daychuyen">
<div class="chayday">
<?php for($i=0;$i<count($daychuyen);$i++) {?>

	<div class="itemdc">
		<p class="hinhdc"><a href="day-chuyen-san-xuat/<?=$daychuyen[$i]['tenkhongdau']?>-<?=$daychuyen[$i]['id']?>.html"><img src="thumb/380x220/1/<?=_upload_tintuc_l.$daychuyen[$i]['photo']?>" alt="<?=$daychuyen[$i]['ten']?>"></a></p>
		<p class="tendc"><a href="day-chuyen-san-xuat/<?=$daychuyen[$i]['tenkhongdau']?>-<?=$daychuyen[$i]['id']?>.html"><?=$daychuyen[$i]['ten']?></a></p>
		<p class="motadc"><?=catchuoi($daychuyen[$i]['mota'],185)?></p>
	</div>
<?php }?>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('.chayday').slick({
		  	lazyLoad: 'ondemand',
        	infinite: true,//Hiển thì 2 mũi tên
			accessibility:true,
			vertical:false,//Chay dọc
		  	slidesToShow: 3,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
				responsive: [
			    {
			      breakpoint: 1024,
			      settings: 
{
			        slidesToShow: 3,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: false
			      }
			    },
			    {
			      breakpoint: 769,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 461,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]

      });
	});
</script>