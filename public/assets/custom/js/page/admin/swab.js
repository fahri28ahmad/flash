$(document).ready(function(){
	$(".verify-swab").on("click",function(e){
		var id = $(this).attr("data-id");

		$("#modalverifikasi .patient-package-id").val(id);
	})

	$(".delete-swab").on("click",function(e){
		var id = $(this).attr("data-id");
		$("#Modalhapus .patient-package-id").val(id);
	})
});