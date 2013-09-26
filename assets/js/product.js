$(function() {
		$( "#tabs" ).tabs();
		});
  $(document).ready(function()
  {
	  getcaptcha();
	  markets=["Construction","Automobile","Windmill","Aerospace","Electrical Industries","Silos"];
	  $('#getcaptcha').click(function(){
		  $('#captcha_img').html('loading...');
		   getcaptcha();
		  });
	  $("#account").click(function()
	  {
	  $("#submenu").toggle();   
	  });
	  
	  $('.productname').click(function(event)
	  {
		  event.preventDefault();
		  pid=$(this).attr('value');
		  $("#submenu").hide();
		  $.ajax({
					url:baseurl+"product/json_product/"+pid,
					dataType:"JSON",
					type:"GET",
					success: function(result)
					{
						product_details="";
						product_uses="";
						product_parents="";
						$("#account").html('<span>'+result.resultset.product[0].name+'</span>');
						$('.product_name').attr('value',result.resultset.product[0].name);
						$('#product_name').html(result.resultset.product[0].name);
						$('.product_image').attr('value',result.resultset.product[0].image);
						$('#product_image').attr('src',baseurl+'assets/images/icon_L/'+result.resultset.product[0].image+'.png');
						$('#product_description').html(result.resultset.product[0].description);
						
						$.each(result.resultset.product[0].details.split("#"), function(index, item) { 
						product_details+='<li>'+item+'</li>';
						});
						$('#product_details').html(product_details);
						
						$.each(result.resultset.product[0].uses.split("#"), function(index, item) { 
						product_uses+='<p class="bulll">'+item+'</p>';
						});
						$('#product_uses').html(product_uses);
						
						$.each(result.resultset.parents, function(index, item) {
						product_parents+= '<img src="'+baseurl+'assets/images/'+item['market_id']+'.png">';
						product_parents+='<p class="market_img">'+markets[item['market_id']-1]+'</p>';
						});
						$('#product_parents').html(product_parents);
					},
					error: function()
					{
						alert("Internal error, Please try again");
					}
			  });
	  });
	/*  $('#email').keydown(function()
			{
				 var email = $('#email').val();
				 if(email.length >1)
				 {
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if (!filter.test(email)) {
					 $('#email_err').html('Please provide a valid email address.');
					}
					else
					{
						$('#email_err').html('');
					}
				}
				else
					{
						$('#email_err').html('');
					}
				});
				*/
				$('#contact_submit').click(function()
				{
					//$('.err').html("");
					$.ajax({
					url:baseurl+"contact",
					data: $('#contactForm').serialize(),
					dataType:"JSON",
					type:"POST",
					success: function(result)
					{
						if(result.resultset.success == -1)
						{
							$.each(result.resultset.err,function(index,key) {
								$('#'+index+'_err').html(key);
								//console.log(index);
								});				
						}
						/*else if(result.resultset.success == 1)
						{
							$("input[type=text], textarea").val("");
							//$('#img_container').hide();
							$('#msg_disp').text(result.resultset.msg);
						}*/
						else
						{
							$('#msg_disp').text(result.resultset.msg);
						}
						getcaptcha();
					},
					error: function()
					{
						$('#msg_disp').text('Intenal error, try again !');
						getcaptcha();
					}
					});
					
					});
  });
  function getcaptcha()
  {
	$.ajax({
			url:baseurl+"captcha",
			data: $('#contactForm').serialize(),
			dataType:"JSON",
			type:"POST",
			success: function(result)
			{
				$('#captcha_img').html(result.resultset.captcha.image);
				result.resultset.captcha.image
				result.resultset.captcha.word
			},
			error: function()
			{
				$('#msg_disp').text('Intenal error, try again !');
			}
		});
  }