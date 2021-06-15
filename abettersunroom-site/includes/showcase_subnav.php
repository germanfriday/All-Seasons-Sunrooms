<script language="JavaScript" type="text/javascript">
<!--
SubNav1= new Image(95,30);
SubNav1.src = "images/show_studio_btn_f2.jpg";
SubNav2 = new Image(125,30);
SubNav2.src = "images/show_cathedral_btn_f2.jpg";
SubNav3 = new Image(117,30);
SubNav3.src = "images/show_solarium_btn_f2.jpg";
//-->
</script>

<?php

switch ($subsection)
{
case "cathedral";
		$cathedral = "_f2";
		break;
		
case "studio";
		$studio = "_f2";
		break;

case "solarium";
		$solarium = "_f2";
		break;
}
?>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="showcase_studio.php"><img src="images/show_studio_btn<? echo $studio ?>.jpg" alt="Studio Button" id="studio_btn" onmouseover="MM_swapImage('studio_btn','','images/show_studio_btn_f2.jpg','studio_image','','images/studio_showcase_f2.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
    <td width="30">&nbsp;</td>
    <td><a href="showcase_cathedral.php"><img src="images/show_cathedral_btn<? echo $cathedral ?>.jpg" alt="Cathedral Button" id="cathedral_btn" onmouseover="MM_swapImage('cathedral_btn','','images/show_cathedral_btn_f2.jpg','cathedral_image','','images/cathedral_showcase_f2.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
    <td width="30">&nbsp;</td>
    <td><a href="showcase_solarium.php"><img src="images/show_solarium_btn<? echo $solarium ?>.jpg" alt="Solarium Button" name="solarium_btn" id="solarium_btn" onmouseover="MM_swapImage('solarium_btn','','images/show_solarium_btn_f2.jpg','solarium_image','','images/solarium_showcase_f2.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
  </tr>
</table>
