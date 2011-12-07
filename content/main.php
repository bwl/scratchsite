<div id="head">
	<div id="logo"></div>
	<div id="title-area">
		<div class="title-area-title">SDG</div>
		<div class="title-area-description">Swiss Magazine</div>
	</div>
</div>


<ul id="sidebar">
	<li><a href="#">Perspective</a></li>
	<li><a class="active" href="#">Work</a></li>
	<li><a href="#">Platforms</a></li>
	<li><a href="#">Clients</a></li>
	<li><a href="#">In Touch</a></li>
	<li><a href="#">At a Glance</a></li>
	<li><a href="#">&nbsp;</a></li>
	<li><a href="#">&nbsp;</a></li>
	<li><a href="#">&nbsp;</a></li>
	<li><a href="#">&nbsp;</a></li>
	<li><a href="#">&nbsp;</a></li>
	<li><a href="#">&nbsp;</a></li>
</ul>


<div class="arrows arrows-top">
	<span class="arrow-left">◀</span>
	<span class="arrow-center">◉</span>
	<span class="arrow-right">▶</span>
</div>


<div id="big-gallery">
	<img src="overlay-images/charles-big.jpg" width="1280" height="960" />
</div>


<div id="overlay-gallery">
	<img src="overlay-images/charles.jpg" width="818" height="497" />
</div>


<?php


function random_color(){
    mt_srand((double)microtime()*1000000);
    $c = '';
    while(strlen($c)<6){
        $c .= sprintf("%02X", mt_rand(0, 255));
    }
    return $c;
}

function split_images_filler(){

	$background_color = random_color();

	$return  = '<div class="split-1"><img width="203" height="82" src="http://dummyimage.com/203x82/'.$background_color.'/'.$background_color.'" /></div>';

	$background_color = random_color();

	$return .= '<div class="split-2"><img width="203" height="82" src="http://dummyimage.com/203x82/'.$background_color.'/'.$background_color.'" /></div>';

	$background_color = random_color();

	$return .= '<div class="split-3"><img width="203" height="82" src="http://dummyimage.com/203x82/'.$background_color.'/'.$background_color.'" /></div>';

	return $return;
}


?>



<div id="content-wrap">
	<div id="content">
		<div class="content-cell-1 content-cell">
			<div class="split-1"><img width="203" height="82" src="split-images/charles.jpg" /></div>
			<div class="split-2"><img width="203" height="82" src="split-images/Pearl.jpg" /></div>
			<div class="split-3"><img width="203" height="82" src="split-images/plaza.jpg" /></div>
			<span>SDG Magazine</span></div>
		<div class="content-cell-2 content-cell"><span>FILM</span></div>
		<div class="content-cell-3 content-cell"><span>PRINTING</span></div>
		<div class="content-cell-4 content-cell"><?=split_images_filler()?><span>RENDERING</span></div>
		<div class="content-cell-5 content-cell"><?=split_images_filler()?><span>COLLATERAL</span></div>
		<div class="content-cell-6 content-cell"><?=split_images_filler()?></div>
		<div class="content-cell-7 content-cell"><?=split_images_filler()?><span>Content Cell 7</span></div>
		<div class="content-cell-8 content-cell"><?=split_images_filler()?><span>Content Cell 8</span></div>
		<div class="content-cell-9 content-cell"><?=split_images_filler()?><span>Content Cell 9</span></div>
		<div class="content-cell-10 content-cell"><?=split_images_filler()?><span>Content Cell 10</span></div>
		<div class="content-cell-11 content-cell"><?=split_images_filler()?><span>Content Cell 11</span></div>
		<div class="content-cell-12 content-cell"><?=split_images_filler()?><span>Content Cell 12</span></div>
	</div>
</div>

<div id="content-copy-block">

Integer dolor nisi, bibendum sed faucibus eu, elementum id mi. Suspendisse at commodo magna. Suspendisse purus sapien, consectetur ut tincidunt at, rutrum ac purus. Donec quis est dui, dignissim blandit arcu. Curabitur laoreet nulla quis mi tincidunt suscipit. Maecenas dignissim pellentesque suscipit. Sed et velit vitae velit ornare iaculis. Nunc libero leo.

</div>


<style type="text/css" media="screen">

body{-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-o-user-select:none;user-select:none;/* width:1024px;*/
/* overflow:hidden;*/}
html{/* */
/* width:1024px;*/
/* overflow:hidden;*/}
#overlay-gallery{position:absolute;top:166px;left:204px;width:818px;z-index:1000;background-color:#5A5A5A;display:none;}
#big-gallery{position:absolute;top:0px;left:0px;width:1280px;height:960px;z-index:-1;background-color:#5A5A5A;display:none;}

#head{
	height:82px;width:100%;
	}


#logo{background-color:rgba(0,0,0,0.33);width:203px;margin-right:1px;height:82px;float:left;background-image:url('assets/logo.png');background-position: 85px 35px;
background-repeat:no-repeat;}

#sidebar{margin:0;padding:0;}
#sidebar li{margin:0;padding:0;list-style:none;text-align:right;}
#sidebar li a{display:block;text-decoration:none;background-color:rgba(64,64,64,0.33);width:193px;height:24px;font-size:12px;letter-spacing:0.1em;margin-top:1px;padding-top:58px;padding-right:10px;text-transform:uppercase;color:white;}
#sidebar li a:hover{background-color:rgba(64,64,64,0.66);}
#sidebar li a.active{color:black;}

#title-area{float:right;height:82px;padding-right:8px;background-color:rgba(0,0,0,0.33);}
.title-area-title{font-size:63px;font-family:Helvetica Neue;font-weight:100;color:white;margin-top:-7px;text-align:right;}
.title-area-description{font-family:Arial,Helvetica;text-align:right;font-size:24px;margin-top:-16px;font-weight:normal;color:white;text-transform:uppercase;}
.content-cell{width:203px;height:245px;margin-right:1px;/*background-image:url('http://dummyimage.com/203x248');*/background-repeat:no-repeat;float:left;text-transform:uppercase;}
.content-cell span{display:block;padding-top:14px;padding-left:7px;padding-right:7px;}
.content-cell img{margin-bottom:1px;}
/*.content-cell-1{background-image:url('assets/cell-1.jpg');padding-top:0px;padding-left:0px;padding-right:0px;}
*/
.content-cell-2{background-image:url('assets/cell-2.jpg');padding-top:250px;}
.content-cell-3{background-image:url('assets/cell-3.jpg');padding-top:250px;}
/*.content-cell-4{background-image:url('assets/cell-4.jpg');}
*/
/*.content-cell-5{background-image:url('assets/cell-5.jpg');}
*/
/*.content-cell-6{background-image:url('assets/cell-6.jpg');}
*/
#content-wrap{height:280px;position:absolute;width:100%;top:249px;overflow:hidden;z-index:-1;}
#content{height:280px;position:absolute;width:100000px;top:0px;left:204px;}
#content-copy-block{color:black;position:absolute;top:532px;font-size:13px;left:210px;width:189px;line-height:1.4;}
.arrows{position:absolute;top:230px;right:10px;color:#BFBFBF;}
.arrow-right,.arrow-left,.arrow-center{cursor:pointer;}
.arrow-right:hover,.arrow-left:hover,.arrow-center:hover{color:black;}



	
</style>