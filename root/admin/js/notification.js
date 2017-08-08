// JavaScript Document
$(document).ready(function(e) {
	
	$('.delete').click(function(e) {
        var deleted=$(this);
		var id=$(this).val();
		var result=confirm('آیا اطلاعیه شماره '+id+' حذف شود؟');
		if(result){
			$.post('php/functions.php',{action:1, id:id},function(e)
				{
				if(e=='ok')
					$(deleted).parent().parent().remove();
				}
			);
		}
	});
});