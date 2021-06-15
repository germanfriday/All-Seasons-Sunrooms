<?php

switch ($section)
{
case "resources";
		$resources = "_f2";
		break;

case "sitemap";
		$sitemap = "_f2";
		break;
		
case "request";
		$request = "_f2";
		break;

case "contact";
		$contact = "_f2";
		break;

case "styles";
		$styles = "_f2";
		break;

case "construction";
		$construction = "_f2";
		break;

case "roi";
		$roi = "_f2";
		break;
		
case "faqs";
		$faqs = "_f2";
		break;
		
case "showcase";
		$showcase = "_f2";
		break;
}
?>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="index.php"><img src="images/logo.jpg" alt="All Seasons Sunrooms Logo" /></a></td>
    <td colspan="3"><table border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="5"><img src="images/enjoy_title.jpg" alt="Enjot the Outdoors in Comfort" /></td>
      </tr>
      <tr>
        <td><img src="images/head_top_spacer.jpg" alt="Nav Top Spacer" /></td>
        <td><a href="resources.php"><img src="images/nav_resources<? echo $resources ?>.jpg" alt="Resources" id="nav9"<?php
if ($section=='resources')
  echo ""; 
else
  echo 'onmouseover="changeImage9()" onmouseout="changeBack9()"'; ?> /></a></td>
        <td><a href="sitemap.php"><img src="images/nav_sitemap<? echo $sitemap ?>.jpg" alt="Site map" id="nav6"<?php
if ($section=='sitemap')
  echo ""; 
else
  echo 'onmouseover="changeImage6()" onmouseout="changeBack6()"'; ?> /></a></td>
        <td><a href="request.php"><img src="images/nav_request<? echo $request ?>.jpg" alt="Request Info" id="nav7"<?php
if ($section=='request')
  echo ""; 
else
  echo 'onmouseover="changeImage7()" onmouseout="changeBack7()"'; ?> /></a></td>
        <td><a href="contact.php"><img src="images/nav_contact<? echo $contact ?>.jpg" alt="Contact Us" id="nav8"<?php
if ($section=='contact')
  echo ""; 
else
  echo 'onmouseover="changeImage8()" onmouseout="changeBack8()"'; ?> /></a></td>
      </tr>
    </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4"><table width="750" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><a href="styles.php"><img src="images/nav_styles<? echo $styles ?>.jpg" alt="Sunroom Styles" id="nav1"<?php
if ($section=='styles')
  echo ""; 
else
  echo 'onmouseover="changeImage1()" onmouseout="changeBack1()"'; ?> /></a></td>
          <td><a href="construction.php"><img src="images/nav_construction<? echo $construction ?>.jpg" alt="Construction Materials &amp; Process" id="nav2"<?php
if ($section=='construction')
  echo ""; 
else
  echo 'onmouseover="changeImage2()" onmouseout="changeBack2()"'; ?> /></a></td>
          <td><a href="roi.php"><img src="images/nav_roi<? echo $roi ?>.jpg" alt="ROI Chart &amp; Warranties" id="nav3"<?php
if ($section=='roi')
  echo ""; 
else
  echo 'onmouseover="changeImage3()" onmouseout="changeBack3()"'; ?> /></a></td>
          <td><a href="faqs.php"><img src="images/nav_faqs<? echo $faqs ?>.jpg" alt="FAQs" id="nav4"<?php
if ($section=='faqs')
  echo ""; 
else
  echo 'onmouseover="changeImage4()" onmouseout="changeBack4()"'; ?> /></a></td>
          <td><a href="showcase.php"><img src="images/nav_showcase<? echo $showcase ?>.jpg" alt="Showcase" id="nav5"<?php
if ($section=='showcase')
  echo ""; 
else
  echo 'onmouseover="changeImage5()" onmouseout="changeBack5()"'; ?> /></a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="4"><img src="images/head_bottom_spacer.jpg" alt="Nav Bottom Spacer" /></td>
  </tr>
</table>
