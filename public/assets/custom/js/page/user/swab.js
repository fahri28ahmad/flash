$(document).ready(function(){
	$(".print-swab").on("click",function(e){
		var id = $(this).attr("data-id");
		var swab = $(this).attr("data-print-swab");

		if(swab == 1){
			$("#Modalprint .swab-btn").attr("href",PRINT_PDF + "/" + id);
			$("#Modalprint .swab-btn button").removeClass("btn-secondary");
			$("#Modalprint .swab-btn button").addClass("btn-primary");
		}else{
			$("#Modalprint .swab-btn button").addClass("btn-secondary");
			$("#Modalprint .swab-btn button").removeClass("btn-primary");
		}
		$("#Modalprint .invoice-btn").attr("href",PRINT_PDF_INVOICE + "/" + id);
	})

	$(".delete-swab").on("click",function(e){
		var id = $(this).attr("data-id");
		$("#Modalhapus .patient-package-id").val(id);
	})
});