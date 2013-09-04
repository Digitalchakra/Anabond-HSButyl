    <div class="banner">
    <!--		Slider start  -->   
<div class="touchslider ">
	<div class="touchslider-viewport slider_view">
		<div class="touchslider-item ">
			<div class="slider_item">
				<div class="slide_1">
					<img class="slider_img" src="<?=base_url('assets/images/slider1.png');?>">
				</div>
				<div class="slide_2">
					<br/>
					<h2>Anabond in tie up with UK's HS Butyl</h2>
					<p><b>mydigitalfc.com</b></p>
					<p>Chennai-based Anabond, manufacturer of industrial adhesives and sealants, has entered into a joint venture with HS Butyl, UK to manufacture butyl tapes in the country. Butyl tapes find wide application in the automotive, prefab construction, aviation and energy segments.</p>
				</div>
        <div class="clearall"></div>
				<a href="http://www.mydigitalfc.com/news/anabond-tie-uk%E2%80%99s-hs-butyl-949" target="_blank">More</a>
			</div>
		</div>
    
		<div class="touchslider-item ">
			<div class="slider_item">
				

				<div class="slide_1">
					<img class="slider_img" src="<?=base_url('assets/images/slider2.png');?>">
				</div>
        				<div class="slide_2">
					<br/>
					<ul>
						<li>Product quality - developed in the UK and India</li>
						<li>Local market knowledge – produced in India in a factory developed specifically for butyl tape </li>
						<li>R&D facilities in both India and UK </li>
						<li>Local dealers – 300 dealers across all states in India </li>
						<li>Product mixed using a state-of-the-art continuous mixer </li>
						<li>Range of product formats </li>
						<li>JV developed between two family businesses  </li>
						<li>Development facility in UK and India  </li>
					</ul>
          
				</div>
			</div>
		</div><div class="touchslider-item ">
			<div class="slider_item">
				<div class="slide_1">
					<img class="slider_img" src="<?=base_url('assets/images/slider3.png');?>">
				</div>
				<div class="slide_2">
					<br/>
					<h2>Anabond India bonds with UK firm </h2>
					<p><b>Business Line, The Hindu</b></p>
					<p>CHENNAI<br/>UK-based HS Butyl Ltd, a specialist in industrial adhesives, has entered the Indian market through a joint venture with Anabond India. The joint venture, Anabond HS Butyl Pvt Ltd, will manufacture butyl tapes, which find application in the automotive, prefab construction, aviation and energy sectors.  </p>
					<div class="clearall"></div>
          <a href="http://www.thehindubusinessline.com/companies/anabond-india-bonds-with-uk-firm/article4689768.ece" target="_blank">More</a>
				</div>
			</div>
		</div><div class="touchslider-item ">
			<div class="slider_item">
				<div class="slide_1">
					<img class="slider_img" src="<?=base_url('assets/images/slider4.png');?>">
				</div>
				<div class="slide_2">
					<br/>
					<h2>HS Butyl Enters Indian Market Through A  Joint Venture With Anabond</h2>
					<p><b>The Automotive Horizon</b></p>
					<p>CHENNAI<br/>UK-based HS Butyl Ltd, a specialist in industrial adhesives, has entered the Indian market through a joint venture with Anabond India. The joint venture, Anabond HS Butyl Pvt Ltd, will manufacture butyl tapes, which find application in the automotive, prefab construction, aviation and energy sectors. </p>
				<div class="clearall"></div>
        <a href="http://automotivehorizon.sulekha.com/hs-butyl-enters-indian-market-through-a-joint-venture_newsitem_6839" target="_blank">More</a>
        </div>
			</div>
		</div>
	</div>
	<div class="slider_nav">
		 <span class="touchslider-nav-item touchslider-nav-item-current"></span>
			 <span class="touchslider-nav-item"></span>
			 <span class="touchslider-nav-item"></span>
		 <span class="touchslider-nav-item"></span>
	</div>
</div>

    <!--		Slider end  -->  
    
    </div>
    <div class="clearall"></div>
  	<div id="product" class="container_width">
  	<div class="main_container">
    	<h1 >Products</h1>       
<!--		dropdown menu  -->
			<div class="dd_menu">
        <div class="dropdown"> <a id="account" class="account" > <span>Select Market Segment</span> </a>
        	<div id="submenu" class="submenu" style="display: none; ">
            <ul class="root">
            <li > <a mid='1' class= "market" >Construction</a> </li>
            <li > <a mid='2' class= "market">Automobile</a> </li>
            <li > <span mid='3' class= "">Windmill</span> </li>
            <li> <span mid='4' class= "">Aerospace</span> </li>
            <li> <span mid='5' class= "">Electrical Industries</span> </li>
            <li> <span mid='6' class= "">Silos</span> </li>
          </ul>
          </div>
      </div>
     </div>
      
<!--		dropdown menu end  -->      
      <div id="product_box" class="box_container">
      	
      	<? foreach($product as $row) 
      	{
      	?>
      	<div class="box">
        	<div class="inside_box">
     		   	<a href="<?=base_url('product/index').'/'.$row['id'];?>"><img src="<?=base_url('assets/images/icon_S').'/'.$row['image'].'.png';?>"  alt="" title="<?=$row['name'];?>"/></a>
          </div>
        	<p><?=$row['name'];?></p>
        </div>
        <? } ?>
        
        
      </div>
    </div>
   </div>
   
   <!--     r&d    -->
      
   <!--<div id="randd" class="r_d">
   	<h1>R&amp;D</h1>
    <div class="r_d_container">
    	<div class="rd_left">
      	
      </div>
      <div class="rd_rit">
      	<p>HS Butyl are pleased to announce a new butyl tape to their comprehensive range of butyl tapes.Our new 0800 product has been designed for use within the Vehicle Construction Sector.HS Butyl are pleased to announce a new butyl tape to their comprehensive range of butyl tapes.
        </p>
        <p>Our new 0800 product has been designed for use within the Vehicle Construction Sector.</p>
        <ul>
        	<li>Contact Form.</li>
          <li>Link to Product Page.</li>
          <li>Image of the People in the lab, lab Equipment, Out side of the building.</li>
        </ul>
        <a href="#" onclick="">More</a>
      </div>
    </div>
   </div>   <div class="clearall"></div> -->
   
   <!--     aboutus    -->
   
<!--   <div id="aboutus" class="abt">
   		<h1>About Us</h1>
      <a href="#">View Our Products</a> <a href="#">More News</a>
      <div class="abt_cnt">
      	<p>Expanding strips used in body-in-white applications give greater surety of sealing uneven gaps. Short strips provide a great means to seal between wires in electrical harnesses, preventing water tracking.</p>
   			<p>Expanding strips used in body-in-white applications give greater surety of sealing uneven gaps. Short strips provide a great means to seal between wires in electrical harnesses, preventing water tracking. Expanding strips used in body-in-white applications give greater surety of sealing uneven gaps. Short strips provide a great means to seal between wires in electrical harnesses, preventing water tracking.</p>
				<p>Expanding strips used in body-in-white applications give greater surety of sealing uneven gaps. Short strips provide a great means to seal between wires in electrical harnesses, preventing water tracking. Expanding strips used in body-in-white applications give greater surety of sealing uneven gaps. Short strips provide a great means to seal between wires in electrical harnesses, preventing water tracking.</p>

    	</div>
   </div>-->
   <div class="clearall"></div>

   <!--     contact    -->
      
   <div id="contact" class="contact">
   		<div class="contact_lft">
      	<h1>Contact Us</h1>
        <p class="enq"><a href="<?=base_url('contact');?>">Post Your Enquiry Here</a></p>
        <p><span>Anabond HS Butyl Private Limited</span><br />
          Type II, 36, Dr.VSI Industrial Estate<br />
          Thiruvanmiyur, Chennai,<br />
          Tamilnadu, India<br />
          Pin: 600041<br />
        </p>
        <p><span class="phone_img"> Telephone Number: +91-44-2346 0041/42/43</span><br />
        		<span class="fax_img">Fax Number: +91-44-2346 0048</span><br />
           <span class="mail_img"> <a href="mailto:marketing@anabodhsbutyl.com">marketing@anabondhsbutyl.com</a></span>
        </p>
      </div>
      <div class="contact_rit">
        <iframe width="537" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Anabond+Adhesives+%26+Sealants,+Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;aq=0&amp;oq=Anabond+Adhesives+%26+Sealants+&amp;sll=12.978621,80.249773&amp;sspn=0.004595,0.008256&amp;ie=UTF8&amp;hq=Anabond+Adhesives+%26+Sealants,&amp;hnear=Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;t=m&amp;cid=11033483246055038958&amp;ll=12.978631,80.249805&amp;spn=0.027601,0.04343&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        <br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Anabond+Adhesives+%26+Sealants,+Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;aq=0&amp;oq=Anabond+Adhesives+%26+Sealants+&amp;sll=12.978621,80.249773&amp;sspn=0.004595,0.008256&amp;ie=UTF8&amp;hq=Anabond+Adhesives+%26+Sealants,&amp;hnear=Phase+II,+Tharamani,+Chennai,+Tamil+Nadu&amp;t=m&amp;cid=11033483246055038958&amp;ll=12.978631,80.249805&amp;spn=0.027601,0.04343&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>
        </div>
   </div>
   <div class="clearall"></div>
<script src="<?=base_url('assets/js/jquery.touchslider.min.js');?>" type="text/javascript"></script>
  <script type="text/javascript" >
  $(document).ready(function()
  {
	  $("#account").click(function()
	  {
	  $("#submenu").toggle();   
	  });
	  $('.market').click(function()
	  {
		  $("#submenu").hide();
		  $("#account").html('<span>'+$(this).text()+'</span>');
		  getproduct($(this).attr('mid'));
	  });
  });
$(".touchslider").touchSlider({
	autoplay: true,
});

function slideChange(args) 
{
	$('.selectors .item').removeClass('selected');
	$('.selectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
}
function getproduct(mid)
{
	$.ajax({
		type:"GET",
		url:baseurl+"product/json_list/"+mid,
		success: function(result)
		{
			html='';
			$.each(result.resultset.product,function(index,row)
			{
				html+='<div class="box">';
				html+='<div class="inside_box">';
				html+=   	'<a href="'+baseurl+'product/index/'+row.id+'"><img src="'+baseurl+'assets/images/icon_S/'+row.image+'.png"  alt="" title="'+row.name+'"/></a>';
				html+='</div>';
				html+='<p>'+row.name+'</p>';
				html+='</div>';
			}
			);
			$('#product_box').html(html);
		},
		error: function()
		{
			alert('Internal error, try later !');
		}
		});
}
		</script>