$(document).ready(function(){ 
	$(window).scroll(function(){
		if ($(window).scrollTop() == $(document).height() - $(window).height()){
			if($(".page_number:last").val() <= $(".total_record").val()) {
				var pagenum = parseInt($(".page_number:last").val()) + 1;
				loadRecords('load_data.php?page='+pagenum);
			}
		}
	});	
});
function loadRecords(url) {
	$.ajax({
		url: url,
		type: "GET",
		data:  {total_record:$("#total_record").val()},
		beforeSend: function(){
			$('#loader').show();
		},
		complete: function(){
			$('#loader').hide();			
		},
		success: function(data){			
			$("#messages").append(data);
		},
		error: function(){} 	        
	});
} 
