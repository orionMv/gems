
$(document).ready(function(){

	
$('#employees tbody tr').click(function(){
		
		
		//grab selected elements id & add class 'selected' to the clicked row
		employee_id = $(this).data('id');
		$('#employees tbody tr').removeClass('selected');
		$(this).addClass('selected');
		
		var edit_button = $('.employee_buttons .edit');
		var resign_button = $('.employee_buttons .resign');
		
		
		//disable button functions
		edit_button.removeClass('disabled');
		resign_button.removeClass('disabled');
		
		
		//assign button urls with newly selected items id
		edit_button.attr('href',"/employees/"+employee_id+"/edit");
		resign_button.attr('href',"/employees/"+employee_id+"/resign");
		
		
		
		
	});



	
});


function redirect(url){
	
	window.location.href = url;
	
}