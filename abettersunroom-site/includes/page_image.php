<?php

switch ($section)

{
case "resources";

		$header = "resources";

		break;
		
case "sitemap";

		$header = "sitemap";

		break;
		
case "request";

		$header = "request";

		break;

case "contact";

		$header = "contact";

		break;

case "styles";

		$header = "styles";

		break;

case "construction";

		$header = "construction";

		break;

case "roi";

		$header = "roi";

		break;
		
case "faqs";

		$header = "faqs";

		break;
	
case "showcase";

		$header = "showcase";

		break;
}

?>

<?php

switch ($subsection)

{
case "cathedral";

		$header = "cathedral_showcase";

		break;

case "studio";

		$header = "studio_showcase";

		break;
		
case "solarium";

		$header = "solarium_showcase";

		break;
}

?>
<img src="images/<? echo $header ?>_header_image.jpg" alt="<? echo $header ?> Page Image" />

