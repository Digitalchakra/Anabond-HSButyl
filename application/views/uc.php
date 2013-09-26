<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->


<? $page = $this->uri->segment(1); $mid = $this->uri->segment(3);
$markets=array("Construction","Automobile","Windmill","Aerospace","Electrical Industries","Silos");
?>

<!-- product -->
<div class="product_pg">
<!-- product icon -->
	<div class="icon_conainer">
		
		<? if($page =="market"){
			foreach($markets as $key=>$value)
			{
			 ?>
  	<div class="icon_box_bg" onclick="window.location.href = '<? echo base_url('market/index').'/'.(1+$key); ?>'">
    <div class="icon_box_p <? if($mid==(1+$key)) { echo ' market_hover';}?>">   
      <div class="icon_box<?echo (1+$key);?>">      
      </div>
      <p><?=$value;?></p>    
    </div>
    </div>  
<? } }?>
<div class="clearall"></div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<center>Under Construction</center>
    <div class="clearall"></div>
  </div>
  <div class="clearall"></div>
</div>