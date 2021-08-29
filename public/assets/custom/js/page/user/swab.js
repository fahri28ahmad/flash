$(document).ready(function(){
	$(".print-swab").on("click",function(e){
		var id = $(this).attr("data-id");
		$("#Modalprint .swab-btn").attr("href",PRINT_PDF + "/" + id);
	})
});