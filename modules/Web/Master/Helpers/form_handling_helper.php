<?php 

function FHHelperShowFormError($errorFlash, $field){
	$string = "";
	if(isset($errorFlash[$field])){
	    foreach($errorFlash[$field] as $eu){
	    if(strlen($eu)>=1){
	            $string .= '<p class="text-danger">< echo $eu;</p>';
	    	}
	    }
	}

	return $string;
}