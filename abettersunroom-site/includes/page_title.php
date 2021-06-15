<?php

switch ($section)
{
case "resources";
		$page_title = "resources";
		break;
		
case "sitemap";
		$page_title = "sitemap";
		break;
		
case "request";
		$page_title = "request";
		break;

case "contact";
		$page_title = "contact";
		break;

case "styles";
		$page_title = "styles";
		break;

case "construction";
		$page_title = "construction";
		break;

case "roi";
		$page_title = "roi";
		break;
		
case "faqs";
		$page_title = "faqs";
		break;
		
case "showcase";
		$page_title = "showcase";
		break;
}
?>
<img src="images/<? echo $page_title ?>_title.jpg" alt="<? echo $page_title ?> Title" />
