<?php
	$keyword = array();
	$matches=array("hunger","hungry","wet","water","hot","sunny","heat","windy","thunder","lighting","cut","injury");

	foreach ($matches as $match) { 
		$datastring = preg_match("/$match/", "hi it is very hot wet to day");
		if ($datastring) {
			$keyword[]=$match;
		}
		
	}
	
	
	
	newsFinder($keyword);
	
?>
