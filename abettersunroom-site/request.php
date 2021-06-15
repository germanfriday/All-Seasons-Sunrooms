<?php

session_start();

if(isset($_SESSION['submitted_form_values'])){extract($_SESSION['submitted_form_values']);}

?>
<?php $section  = "request";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>sunrooms</title>
<script language="JavaScript" type="text/javascript" src="includes/common.js"></script>
<link href="includes/MasterStyles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center">
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="stroke">
    <tr>
      <td><?php include('includes/header.php'); ?></td>
    </tr>
    <tr>
      <td valign="top"><?php include('includes/page_image.php'); ?>
      </td>
    </tr>
    <tr>
      <td valign="top"><table width="750" border="0" cellspacing="0" cellpadding="10">
          <tr>
            <td colspan="4" align="left"><?php include('includes/page_title.php'); ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
			
			
            <td><form name="All_Seasons_Sunrooms_Request_Form_Submission"  method="post" action="process.php">
                <table width="300" border="0" cellpadding="5" cellspacing="0">
                  <tr>
                    <td colspan="2" align="left" valign="top"><span class="Required">*</span><span class="FormElements"> indicates required field </span></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="FormHeading">First Name <span class="Required">*</span> <br />
                      <label>
                      <input name="first_name" type="text" class="FormElements" id="first_name" />
                      </label></td>
                    <td align="left" valign="top" class="FormHeading">Last Name <span class="Required">*</span><br />
                      <input name="last_name" type="text" class="FormElements" id="last_name" /></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="FormHeading">Daytime Phone <span class="Required">*</span><br />
                      <input name="daytime_phone" type="text" class="FormElements" id="daytime_phone" /></td>
                    <td align="left" valign="top" class="FormHeading">Evening Phone<span class="Required">*</span><br />
                      <input name="evening_phone" type="text" class="FormElements" id="evening_phone" /></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="left" valign="top" class="FormHeading">Address<br />
                      <input name="address" type="text" class="FormElements" id="address" size="30" /></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="FormHeading">City<br />
                      <input name="city" type="text" class="FormElements" id="city" /></td>
                    <td align="left" valign="top" class="FormHeading">State<br />
                      <select name="state" id="state" class="FormElements">
                        <option value=""></option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="DC">DC</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="FormHeading">Zip<br />
                      <input name="zip" type="text" class="FormElements" id="zip" size="11" /></td>
                    <td align="left" valign="top" class="FormHeading"><p>Email<br />
                        <input name="email" type="text" class="FormElements" id="email" size="11" />
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="FormHeading">How did you hear<br />
about us? <br />
<select name="how_hear" class="FormElements" id="how_hear">
  <option value=""></option>
  <option value="radio_ad">Radio Ad</option>
  <option value="tv_ad">Television Ad</option>
  <option value="direct_mail">Direct Mail</option>
  <option value="search_engine">Search Engine</option>
  <option value="trade_show">Trade Show</option>
  <option value="save_on_everything">Save on Everything</option>
  <option value="yellow_pages">Yellow Pages</option>
  <option value="word_of_mouth">Word of Mouth</option>
  <option value="other">Other</option>
</select></td>
                    <td align="left" valign="top" class="FormHeading"><p>Sunroom style(s) you are interested in </p>
                      <p><span class="items2">
                        <input name="studio" type="checkbox" class="FormElements" value="I am insterested" />
                        Studio </span><br />
                        <span class="items2">
                        <input name="cathedral" type="checkbox" class="FormElements" value="I am insterested" />
                        Cathedral </span><br />
                        <span class="items2">
                        <input name="solarium" type="checkbox" class="FormElements" id="Solarium" value="I am insterested" />
                      Solarium</span></p></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="left" valign="top" class="FormHeading">Questions and Comments <br />
                      <label>
                      <textarea name="questions_comments" cols="40" rows="4" class="FormElements" id="QuestionsComments"></textarea>
                      </label></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="left" valign="top" class="FormHeading"><input name="Submit" type="image" onclick="MM_validateForm('FirstName','','R','LastName','','R','DayPhone','','R','EveningPhone','','R','Email','','NisEmail');return document.MM_returnValue" src="images/submit.jpg" alt="Submit" /></td>
                  </tr>
                </table>
            </form></td>
            <td valign="top"><p class="PageText">Although a sunroom is for everyone, it may not be for every house. 20% of all homes are not permitted to have a sunroom. There are many shapes and styles of houses, built to different codes. Two houses that look the same might be different only by the codes it was built under. One city may say you need 35 ft from the back of your house to the back of your property line, while another says you need 30ft. This makes all the difference in how a sunroom is custom designed to fit onto your home. It is very important to have an on location site survey and evaluation, not only to design a sunroom of your dreams but to see if one is even allowed in your city. We know it sounds unfair, but it's true, for all sunroom companies.</p>
              <p class="PageText">&nbsp;</p>
              <p class="PageText">Fill out the form at left, or <a href="contact.php">Contact Us</a> to start the process of designing the sunroom of your dreams.</p></td>
            <td valign="top"></td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td><?php include('includes/footer.php'); ?></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-946070-27");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
