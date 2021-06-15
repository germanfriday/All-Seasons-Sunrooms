<script language="JavaScript" type="text/javascript">
<!--
SubNav1= new Image(121,27);
SubNav1.src = "images/const_deck_btn_f2.jpg";
SubNav2 = new Image(121,27);
SubNav2.src = "images/const_roof_btn_f2.jpg";
SubNav3 = new Image(226,27);
SubNav3.src = "images/const_window_btn_f2.jpg";
//-->
</script>

<?php

switch ($subsection)
{
case "deck";
		$deck = "_f2";
		break;
		
case "roof";
		$roof = "_f2";
		break;

case "window";
		$window = "_f2";
		break;
}
?>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="construction_deck.php"><img src="images/const_deck_btn<? echo $deck ?>.jpg" alt="Deck System Button" border="0" id="deck_btn" onmouseover="MM_swapImage('deck_btn','','images/const_deck_btn_f2.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
    <td width="30">&nbsp;</td>
    <td><a href="construction_roof.php"><img src="images/const_roof_btn<? echo $roof ?>.jpg" alt="Roof System Button" border="0" id="roof_btn" onmouseover="MM_swapImage('roof_btn','','images/const_roof_btn_f2.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
    <td width="30">&nbsp;</td>
    <td><a href="construction_window.php"><img src="images/const_window_btn<? echo $window ?>.jpg" alt="Window &amp; Wall System Button" border="0" id="window_btn" onmouseover="MM_swapImage('window_btn','','images/const_window_btn_f2.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
  </tr>
</table>
