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
		url:baseurl+"market/json_list/"+mid,
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