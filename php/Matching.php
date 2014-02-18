<?php
	$keyword = array();
	$matches=array("hunger","hungry","wet","water","hot","sunny","heat","windy","thunder","lighting","cut","injury");

	foreach ($matches as $match) { 
		$datastring = preg_match("/$match/", "hi it is very hot windy to day");
		if ($datastring) {
			$keyword[]=$match;
		}
		
	}
	
	
	
	newsFinder($keyword);


	function newsFinder($keyword)
	{
		$keyword = implode(",", $keyword);
		$config = "https://news.google.com/news/feeds?q={$keyword}&output=rss&safe=on";
		echo $keyword;

		$xmlFeed = $config;
		$xmlDoc = new DOMDocument();
		$xmlDoc->load($xmlFeed);
		$xmlOut = array();

		//get and output "<item>" elements
		$x=$xmlDoc->getElementsByTagName('item');
		for ($i=0; $i<=3; $i++){
	 	 $article = array(
		  	title => $x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue,
		  	url => $x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue,
		  	content => $x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue
	  );

	  array_push($xmlOut,$article);
	}	

	$response = array(
		type => 'success',
		content => $xmlOut
	);
	echo json_encode($response);
	}
	
?>
