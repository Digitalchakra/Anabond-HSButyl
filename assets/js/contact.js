$(document).ready(function()
		{
			$("#account").click(function()
			  {
			  $("#submenu").toggle();   
			  });
			  $('.market').click(function()
				  {
					  $("#submenu").hide();
					  if($(this).attr('pid')=='NULL')
					  {
						  $("#account").html('<span>General Enquiry</span>');
						  $('#productname').attr('value','NULL');
						  $('#pname').text('');
						  $("#pimageDiv").hide();
					  }
					  else
					  {
						  pname=$(this).text();
						  $("#account").html('<span>'+pname+'</span>');
						  $('#productname').attr('value',pname);
						  $('#pname').text(pname);
						  $("#pimageDiv").show();
						  $("#pimage").attr('src',baseurl+'assets/images/icon_S/'+$(this).attr('imgname')+'.png');
					  }
				  });
			$('#email').keydown(function()
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
				
				$('#contact_submit').click(function()
				{
					$('.err').html("");
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
								});				
						}
						else if(result.resultset.success == 1)
						{
							$("input[type=text], textarea").val("");
							//$('#img_container').hide();
							$('#msg_disp').text(result.resultset.msg);
						}
						else
						{
							$('#msg_disp').text(result.resultset.msg);
						}
					},
					error: function()
					{
						$('#msg_disp').text('Intenal error, try again !');
					}
					});
					
					});
		});