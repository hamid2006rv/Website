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
	/////////////////////////////////////
	$('#menu1').change(function(){
			$('#menu2').html('');
			$('#menu3').html('');
			var id=$(this).val();
			$.post('php/functions.php',{action:4, id:id},function(e){
			try{
			
				var data=JSON.parse(e);
		    	for(var i=0;i<Object.keys(data).length;i++)
					{
					var k=Object.keys(data)[i];
					$('#menu2').append("<option value='"+k+"'>"+data[k].name+"</option>");
					}
				$('#menu2').find('option').first().attr('selected','selected');
				$('#menu2').change();
			}catch(ex){}
			});
		});
	///////////////////////////////////////////
		$('#menu2').change(function(){
			$('#menu3').html('');
			var id=$(this).val();
			$.post('php/functions.php',{action:4, id:id},function(e){
			try{
			
				var data=JSON.parse(e);
		    	for(var i=0;i<Object.keys(data).length;i++)
					{
					var k=Object.keys(data)[i];
					$('#menu3').append("<option value='"+k+"'>"+data[k].name+"</option>");
					}
				$('#menu3').find('option').first().attr('selected','selected');
			}catch(ex){}
			});
		});
		/////////////////////////////////////
	$('#menux1').change(function(){
			$('#menux2').html('');
			$('#menux3').html('');
			var id=$(this).val();
			$.post('php/functions.php',{action:4, id:id},function(e){
			try{
			
				var data=JSON.parse(e);
		    	for(var i=0;i<Object.keys(data).length;i++)
					{
					var k=Object.keys(data)[i];
					$('#menux2').append("<option value='"+k+"'>"+data[k].name+"</option>");
					}
				$('#menux2').find('option').first().attr('selected','selected');
				$('#menux2').change();
			}catch(ex){}
			});
		});
	///////////////////////////////////////////
		$('#menux2').change(function(){
			$('#menux3').html('');
			var id=$(this).val();
			$.post('php/functions.php',{action:4, id:id},function(e){
			try{
			
				var data=JSON.parse(e);
		    	for(var i=0;i<Object.keys(data).length;i++)
					{
					var k=Object.keys(data)[i];
					$('#menux3').append("<option value='"+k+"'>"+data[k].name+"</option>");
					}
				$('#menux3').find('option').first().attr('selected','selected');
			}catch(ex){}
			});
		});
});