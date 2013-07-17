<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->

<!-- product -->
<div class="product_pg">
  <h1><?=$product_head['name']?></h1>
  <p class="pg2_cnt1">HS Butyl are pleased to announce a new butyl tape to their comprehensive range of butyl tapes.Our new 0800 product has been designed for use within the Vehicle Construction Sector.HS Butyl are pleased to announce a new butyl tape to their comprehensive range of butyl tapes. </p>
  <h2>select a product</h2>
  <div class="clearall"></div>
  <div class="scroll">
  	<div class="srl_left">
    	<!--		dropdown menu  -->
			<div class="dd_menu_product">
        <div class="dropdown"> <a id="account" class="account" > <span>select market segment</span> </a>
        	<div id="submenu" class="submenu" style="display: none; ">
            <ul class="root_producr">
            	<? foreach($product as $row) 
							{
							?>
               <li > <a href="<?=base_url('product/index').'/'.$row['id'];?>"><?=$row['name'];?></a> </li>
						<? } ?>
          </ul>
          </div>
      </div>
     </div>
      
<!--		dropdown menu end  --> 
    </div>
  	<div class="srl_rit">
            <p class="pg2_enq"><a href="#"></a></p>
        <p class="phone">Or &nbsp;Call:  +91-44-2346 0041/42/43</p>
    </div>
  </div><div class="clearall"></div>
  <div class="pg2_container">
    <div class="pg2_cnt_lft">
		 <div class="center_box">
        <p><b><?=$product_first['name'];?></b></p>
        <div class="center_bx1"> <img src="<?=base_url('assets/images/icon_L').'/'.$product_first['image'].'.png';?>" alt="" title=""/> </div>
      </div>
      
      <div class="product_container2">
        <div class="pro_lft">
          <p>MAKE AN ENQUIRY</p>
          <input class="textbx" type="text" value="Name" onblur="if (this.value == '') {this.value = 'Name';}" onfocus="if (this.value == 'Name') {this.value = '';}" />
          <input class="textbx" type="text" value="Email id" onblur="if (this.value == '') {this.value = 'Email id';}" onfocus="if (this.value == 'Email id') {this.value = '';}"/>
          
          <textarea value="Post Enquiry Here" onblur="if (this.value == '') {this.value = 'Post Enquiry Here';}" onfocus="if (this.value == 'Post Enquiry Here') {this.value = '';}"></textarea>
          <input class="sss_post_btn" type="button" value="" />
        </div>
      </div>
    </div>
    <div class="pg2_cnt_rit">
<!--     <div class="center_box">
        <p><b><?=$product_first['name'];?></b></p>
        <div class="center_bx1"> <img src="<?=base_url('assets/images/icon_L').'/'.$product_first['image'].'.png';?>" alt="" title=""/> </div>
      </div>-->
      <div class="rit_box">
        <ul>
          <li>Good adhesion to a wide range of substrates</li>
          <li>Good UV resistance</li>
          <li>The softer composition makes this product highly conformable</li>
          <li>Remains flexible throughout its service life</li>
          <li>Easy and accurate to use with little waste and no mess</li>
          <li>High tack</li>
        </ul>
        <div class="clearall"></div>
        <p class="sss_t1">Potential Applications:</p>
        <div class="clearall"></div>
        <div> <span class="img1" href="#"></span>
          <p>Automobile</p>
        </div>
        <div class="clearall"></div>
        <div> <span class="img2" href="#"></span>
          <p>Construction</p>
        </div>
        <div class="clearall"></div>

      </div>
      <div class="clearall"></div>
      <div class="tabbed_menu sss_relative">        
        <div id="tabs" class="container">
		  <ul class="tabs">
			<li><a href="#tab1">Product Description</a></li>
			<li><a href="#tab2">Technical Information</a></li>
			<li class="dwnld"><a href="#tab3">&nbsp;</a></li>
		  </ul>
		  <div class="tab_container">
			<div id="tab1" class="tab_content">
			  <p class="bulll">0303 is a general purpose butyl tape.</p>
			  <p class="bulll">Product uses</p>
			  <p class="bulll">For use as an air, dust or water seal for compression joints and seams.</p>
			  <p class="bulll">For Water sealing applications in vechicle construction.</p>
			</div>
			<div id="tab2" class="tab_content">
			  <p class="bulll">0303 is a general purpose butyl tape.</p>
			  <p class="bulll">Product uses</p>
			</div>
			<div id="tab3" class="tab_content">
				<p class="bulll">Download PDF</p>
			</div>
		  </div>
		  <!--<span class="sss_download"></span>-->
		</div>
      </div>
      
    </div>
    <div class="clearall"></div>
  </div>
  <div class="clearall"></div>
</div>
	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" >
		 $(function() {
		$( "#tabs" ).tabs();
		});
  $(document).ready(function()
  {
	  $("#account").click(function()
	  {
	  $("#submenu").toggle();   
	  });
  });
</script>