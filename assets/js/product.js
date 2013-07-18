$(function() {
		$( "#tabs" ).tabs();
		});
  $(document).ready(function()
  {
	  getcaptcha();
	  $('#getcaptcha').click(function(){
		  $('#captcha_img').html('loading...');
		   getcaptcha();
		  });
	  $("#account").click(function()
	  {
	  $("#submenu").toggle();   
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
					},
					error: function()
					{
						$('#msg_disp').text('Intenal error, try again !');
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