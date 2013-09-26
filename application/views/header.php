<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anabond HS Butyl</title>
		<link rel = "stylesheet" type="text/css" href="<?=base_url('assets/css/style.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/touch_slider.css');?>">
		<link rel = "stylesheet" href = "<?=base_url('assets/css/default.css');?>" />
		<link rel = "stylesheet" media = "screen" href = "<?=base_url('assets/css/common.css');?>" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">
   var baseurl = "<?php print base_url(); ?>";
  </script>
  <style>
  .gsc-input{background:none !important}
  .gcsc-branding{display:none;}
  </style>
</head>

<body>
	<div class="all_in">
	<div class="wrapper">
  	<div class="header">
		<? $page = $this->uri->segment(1); ?>
 		 	<a href="<?=base_url();?>" title="HSBUTYL"><h1 style="float:left"></h1></a>
      
      	<ul>
        	<li class="sosusmenu"><a <? if($page =="market") echo 'class="active_link"'; ?>>MARKET</a>
          	<ul>
            		<li class="const"><a href="<?=base_url('market/index/1');?>">Construction</a></li>
            		<li class="automobi"><a href="<?=base_url('market/index/2');?>">Automobile</a></li>
            		<li class="widmill"><a href="<?=base_url('market/index/3');?>">Windmill</a></li>
            		<li class="areosp"><a href="<?=base_url('market/index/4');?>">Aerospace</a></li>
            		<li class="eleind"><a href="<?=base_url('market/index/5');?>">Electrical Industries</span></li>
            		<li class="silos"><a href="<?=base_url('market/index/6');?>">Silos</a></li>
            </ul>
          </li>
        	<li><a <? if($page =="product") echo 'class="active_link"'; ?> href="<?=base_url('product');?>">PRODUCTS</a></li>
        	<li><a <? if($page =="RandD") echo 'class="active_link"'; ?> href="<?=base_url('RandD');?>">R&D </a></li>
        	<li><a <? if($page =="about") echo 'class="active_link"'; ?> href="<?=base_url('about');?>">ABOUT US</a></li>
        	<li><a <? if($page =="contact") echo 'class="active_link"'; ?> href="<?=base_url('contact');?>">CONTACT US</a></li>
        </ul>
      
      <div class="srch" style="float:right; width:220px;margin-top:-6px;">
				
				<script>
  (function() {
    var cx = '002954699086083840021:9wtmutqjbgs';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
        <!--<form id="tfnewsearch" method="get" action="#">
          <input type="text" id="tfq" class="tftextinput4" name="q" size="21" maxlength="120" value="search" onblur="if (this.value == '') {this.value = 'search';}" onfocus="if (this.value == 'search') {this.value = '';}">
          <input type="submit" value="GO" class="tfbutton4">
        </form>-->
      </div>
    </div><div class="clearall"></div>
  </div><div class="clearall"></div>