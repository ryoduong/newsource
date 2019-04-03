<?php if($_GET['com']==''||$_GET['com']=='index'){?> 

<?php
    $d->reset();
    $sql_slider = "select ten$lang as ten,link,photo,mota$lang as mota from #_slider where hienthi=1 and type='slider' order by stt,id desc";
    $d->query($sql_slider);
    $slider=$d->result_array();
?>
<link href="css/css_jssor_slider.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/js_jssor_slider_caption.js"></script>
<style>
    /*------- style chấm slider ---------*/
    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av
    {
        filter: alpha(opacity=70);
        opacity: .7;
        overflow:hidden;
        cursor: pointer;
        border: #ccc 1px solid;
    }
    .jssorb01 div { background-color: #fff;border-radius:50%; }
    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #f00; }
    .jssorb01 .av { background-color: #f00; }
</style>

<div id="slider">

    <div id="slider1_container" style="position: relative;width: 1366px; height: 500px;margin:0 auto;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move;width: 1366px; height: 500px;overflow: hidden;">
            <?php for($i=0;$i<count($slider);$i++){ ?>
            <div>
                <a href="<?=$slider[$i]['link']?>" target="_blank">
                <img u="image" src="thumb/1366x500/1/<?php if($slider[$i]['photo']!='')echo _upload_hinhanh_l.$slider[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$slider[$i]['ten']?>" />
                
                <? /*<div u=caption t="tatca" du="1500" class="captionOrange caption-box">
                    <a class="name-cap" href="<?=$slider[$i]['link']?>" target="_blank"><?=$slider[$i]['ten']?></a>
                    <div class="mota-caption"><?=catchuoi($slider[$i]['mota'],200)?></div>
                </div>
                
                <div u="caption" t="CLIP|L" style="position:absolute;left:10%;top:30%;height:40px;font-size:36px;color:#fff;line-height:40px;font-weight:bold;"><?=$slider[$i]['ten']?></div>
                <div u="caption" t="CLIP|TB" style="position:absolute;left:20%;top:50%;width:500px;font-size:18px;color:#fff;line-height:27px;background:rgba(0,0,0,0.2);padding:0px;"><?=catchuoi($slider[$i]['mota'],400)?></div>*/?>
                
                </a>
            </div>
            <?php } ?>                
        </div>
        <!-- Trigger -->
                 
         <?php /*?><div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;right:0px;margin:0 auto;background:#F90;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><div u="numbertemplate"></div></div>
        </div><?php */?>
        
         <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 0px;left:0px;margin:0 auto;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
        </div>  
                 
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top:40%;"></span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top:40%;"></span>
    </div><!-- Jssor Slider End -->
</div><!---END #slider-->    
   
<?php }?>
    
 