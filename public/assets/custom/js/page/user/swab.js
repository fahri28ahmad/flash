$(document).ready(function(){
	$(".print-swab").on("click",function(e){
		var id = $(this).attr("data-id");
		$("#Modalprint .swab-btn").attr("href",PRINT_PDF + "/" + id);
		$("#Modalprint .invoice-btn").attr("href",PRINT_PDF_INVOICE + "/" + id);
	})

	$(".delete-swab").on("click",function(e){
		var id = $(this).attr("data-id");
		$("#Modalhapus .patient-package-id").val(id);
	})
});