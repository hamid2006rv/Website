// JavaScript Document
$(document).ready(function(){
	
	$('#hasTitle').click(function(){
		if($(this).is(':checked'))
			$('#ctitle').prop('disabled', false);
		else
			$('#ctitle').prop('disabled', true);
		});	
});