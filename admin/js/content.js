// JavaScript Document
$(document).ready(function(){
	
	$('.delete').click(function(e) {
        var deleted=$(this);
		var id=$(this).val();
		var result=confirm('آیا اطلاعیه شماره '+id+' حذف شود؟');
		if(result){
			$.post('php/functions.php',{action:2, id:id},function(e)
				{
				if(e=='ok')
					$(deleted).parent().parent().remove();
				}
			);
		}
	});
	////////////////////////////////////
	$('#hasTitle').click(function(){
		if($(this).is(':checked'))
			$('#ctitle').prop('disabled', false);
		else
			$('#ctitle').prop('disabled', true);
		});	
});