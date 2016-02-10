<?php
  //include_once("db_inc.php");
	if(isset($_GET['action'])&&$_GET['action']=="add")
	{
?>
<div class="cover">
<h1>Add Client</h1>

	<form action="clientact.php" method="post" id="clientform">
    	<label for="fname">First Name</label><input type="text" name="fname" placeholder="First Name" required/>

      <label for="lname">Last Name</label> <input type="text" name="lname" placeholder="Last Name" required/>

      <label for="gender">Gender</label>
        <select name="gender" required>
          <option value="">-- Select one --</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

      <label for="phone">Phone Number(XXXX-XXX-XXX)</label> <input name="phone" type="tel" pattern="^\d{4}-\d{3}-\d{3}$" placeholder="Phone Number" required/>

      <label for="email">Email</label> <input type="email" name="email" placeholder="Email"/>

      <label for="address">Address</label><input type="text" name="address" placeholder="Address" required/>

      <label for="nationality">Nationality</label>
        <select name="nationality" required>
          <option value="">-- Select one --</option>
          <option value="afghan">Afghan</option>
          <option value="albanian">Albanian</option>
          <option value="algerian">Algerian</option>
          <option value="american">American</option>
          <option value="andorran">Andorran</option>
          <option value="angolan">Angolan</option>
          <option value="antiguans">Antiguans</option>
          <option value="argentinean">Argentinean</option>
          <option value="armenian">Armenian</option>
          <option value="australian">Australian</option>
          <option value="austrian">Austrian</option>
          <option value="azerbaijani">Azerbaijani</option>
          <option value="bahamian">Bahamian</option>
          <option value="bahraini">Bahraini</option>
          <option value="bangladeshi">Bangladeshi</option>
          <option value="barbadian">Barbadian</option>
          <option value="barbudans">Barbudans</option>
          <option value="batswana">Batswana</option>
          <option value="belarusian">Belarusian</option>
          <option value="belgian">Belgian</option>
          <option value="belizean">Belizean</option>
          <option value="beninese">Beninese</option>
          <option value="bhutanese">Bhutanese</option>
          <option value="bolivian">Bolivian</option>
          <option value="bosnian">Bosnian</option>
          <option value="brazilian">Brazilian</option>
          <option value="british">British</option>
          <option value="bruneian">Bruneian</option>
          <option value="bulgarian">Bulgarian</option>
          <option value="burkinabe">Burkinabe</option>
          <option value="burmese">Burmese</option>
          <option value="burundian">Burundian</option>
          <option value="cambodian">Cambodian</option>
          <option value="cameroonian">Cameroonian</option>
          <option value="canadian">Canadian</option>
          <option value="cape verdean">Cape Verdean</option>
          <option value="central african">Central African</option>
          <option value="chadian">Chadian</option>
          <option value="chilean">Chilean</option>
          <option value="chinese">Chinese</option>
          <option value="colombian">Colombian</option>
          <option value="comoran">Comoran</option>
          <option value="congolese">Congolese</option>
          <option value="costa rican">Costa Rican</option>
          <option value="croatian">Croatian</option>
          <option value="cuban">Cuban</option>
          <option value="cypriot">Cypriot</option>
          <option value="czech">Czech</option>
          <option value="danish">Danish</option>
          <option value="djibouti">Djibouti</option>
          <option value="dominican">Dominican</option>
          <option value="dutch">Dutch</option>
          <option value="east timorese">East Timorese</option>
          <option value="ecuadorean">Ecuadorean</option>
          <option value="egyptian">Egyptian</option>
          <option value="emirian">Emirian</option>
          <option value="equatorial guinean">Equatorial Guinean</option>
          <option value="eritrean">Eritrean</option>
          <option value="estonian">Estonian</option>
          <option value="ethiopian">Ethiopian</option>
          <option value="fijian">Fijian</option>
          <option value="filipino">Filipino</option>
          <option value="finnish">Finnish</option>
          <option value="french">French</option>
          <option value="gabonese">Gabonese</option>
          <option value="gambian">Gambian</option>
          <option value="georgian">Georgian</option>
          <option value="german">German</option>
          <option value="ghanaian">Ghanaian</option>
          <option value="greek">Greek</option>
          <option value="grenadian">Grenadian</option>
          <option value="guatemalan">Guatemalan</option>
          <option value="guinea-bissauan">Guinea-Bissauan</option>
          <option value="guinean">Guinean</option>
          <option value="guyanese">Guyanese</option>
          <option value="haitian">Haitian</option>
          <option value="herzegovinian">Herzegovinian</option>
          <option value="honduran">Honduran</option>
          <option value="hungarian">Hungarian</option>
          <option value="icelander">Icelander</option>
          <option value="indian">Indian</option>
          <option value="indonesian">Indonesian</option>
          <option value="iranian">Iranian</option>
          <option value="iraqi">Iraqi</option>
          <option value="irish">Irish</option>
          <option value="israeli">Israeli</option>
          <option value="italian">Italian</option>
          <option value="ivorian">Ivorian</option>
          <option value="jamaican">Jamaican</option>
          <option value="japanese">Japanese</option>
          <option value="jordanian">Jordanian</option>
          <option value="kazakhstani">Kazakhstani</option>
          <option value="kenyan">Kenyan</option>
          <option value="kittian and nevisian">Kittian and Nevisian</option>
          <option value="kuwaiti">Kuwaiti</option>
          <option value="kyrgyz">Kyrgyz</option>
          <option value="laotian">Laotian</option>
          <option value="latvian">Latvian</option>
          <option value="lebanese">Lebanese</option>
          <option value="liberian">Liberian</option>
          <option value="libyan">Libyan</option>
          <option value="liechtensteiner">Liechtensteiner</option>
          <option value="lithuanian">Lithuanian</option>
          <option value="luxembourger">Luxembourger</option>
          <option value="macedonian">Macedonian</option>
          <option value="malagasy">Malagasy</option>
          <option value="malawian">Malawian</option>
          <option value="malaysian">Malaysian</option>
          <option value="maldivan">Maldivan</option>
          <option value="malian">Malian</option>
          <option value="maltese">Maltese</option>
          <option value="marshallese">Marshallese</option>
          <option value="mauritanian">Mauritanian</option>
          <option value="mauritian">Mauritian</option>
          <option value="mexican">Mexican</option>
          <option value="micronesian">Micronesian</option>
          <option value="moldovan">Moldovan</option>
          <option value="monacan">Monacan</option>
          <option value="mongolian">Mongolian</option>
          <option value="moroccan">Moroccan</option>
          <option value="mosotho">Mosotho</option>
          <option value="motswana">Motswana</option>
          <option value="mozambican">Mozambican</option>
          <option value="namibian">Namibian</option>
          <option value="nauruan">Nauruan</option>
          <option value="nepalese">Nepalese</option>
          <option value="new zealander">New Zealander</option>
          <option value="ni-vanuatu">Ni-Vanuatu</option>
          <option value="nicaraguan">Nicaraguan</option>
          <option value="nigerien">Nigerien</option>
          <option value="north korean">North Korean</option>
          <option value="northern irish">Northern Irish</option>
          <option value="norwegian">Norwegian</option>
          <option value="omani">Omani</option>
          <option value="pakistani">Pakistani</option>
          <option value="palauan">Palauan</option>
          <option value="panamanian">Panamanian</option>
          <option value="papua new guinean">Papua New Guinean</option>
          <option value="paraguayan">Paraguayan</option>
          <option value="peruvian">Peruvian</option>
          <option value="polish">Polish</option>
          <option value="portuguese">Portuguese</option>
          <option value="qatari">Qatari</option>
          <option value="romanian">Romanian</option>
          <option value="russian">Russian</option>
          <option value="rwandan">Rwandan</option>
          <option value="saint lucian">Saint Lucian</option>
          <option value="salvadoran">Salvadoran</option>
          <option value="samoan">Samoan</option>
          <option value="san marinese">San Marinese</option>
          <option value="sao tomean">Sao Tomean</option>
          <option value="saudi">Saudi</option>
          <option value="scottish">Scottish</option>
          <option value="senegalese">Senegalese</option>
          <option value="serbian">Serbian</option>
          <option value="seychellois">Seychellois</option>
          <option value="sierra leonean">Sierra Leonean</option>
          <option value="singaporean">Singaporean</option>
          <option value="slovakian">Slovakian</option>
          <option value="slovenian">Slovenian</option>
          <option value="solomon islander">Solomon Islander</option>
          <option value="somali">Somali</option>
          <option value="south african">South African</option>
          <option value="south korean">South Korean</option>
          <option value="spanish">Spanish</option>
          <option value="sri lankan">Sri Lankan</option>
          <option value="sudanese">Sudanese</option>
          <option value="surinamer">Surinamer</option>
          <option value="swazi">Swazi</option>
          <option value="swedish">Swedish</option>
          <option value="swiss">Swiss</option>
          <option value="syrian">Syrian</option>
          <option value="taiwanese">Taiwanese</option>
          <option value="tajik">Tajik</option>
          <option value="tanzanian">Tanzanian</option>
          <option value="thai">Thai</option>
          <option value="togolese">Togolese</option>
          <option value="tongan">Tongan</option>
          <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
          <option value="tunisian">Tunisian</option>
          <option value="turkish">Turkish</option>
          <option value="tuvaluan">Tuvaluan</option>
          <option value="ugandan">Ugandan</option>
          <option value="ukrainian">Ukrainian</option>
          <option value="uruguayan">Uruguayan</option>
          <option value="uzbekistani">Uzbekistani</option>
          <option value="venezuelan">Venezuelan</option>
          <option value="vietnamese">Vietnamese</option>
          <option value="welsh">Welsh</option>
          <option value="yemenite">Yemenite</option>
          <option value="zambian">Zambian</option>
          <option value="zimbabwean">Zimbabwean</option>
        </select>
      <label for="date">Date of Birth</label><input type="date" id="dob" name="dob" required/>

      <label for="education">Education Background</label>
        <select name="education" required>
          <option value="">-- Select one --</option>
          <option value="Below S.L.C">Below S.L.C</option>
          <option value="S.L.C">S.L.C</option>
          <option value="High School">High School</option>
          <option value="Undergraduate">Undergraduate</option>
          <option value="Postgraduate">Postgraduate</option>
        </select>

      <label for="mode">Prefered Mode of Contact</label>
        <select name="cont_mode" required>
          <option value="">-- Select one --</option>
          <option value="Email">Email</option>
          <option value="Phone">Phone</option>
          <option value="None">None</option>
        </select> 
                                            
        <p><input type="submit" name="addclient" value="Submit"/></p>
    </form>

    <script language="JavaScript" type="text/javascript" 
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form

  var frmvalidator  = new Validator("clientform");
 
  frmvalidator.addValidation("fname","req","Please enter your First Name");
  frmvalidator.addValidation("fname","maxlen=20", "Max length for FirstName is 20");
  frmvalidator.addValidation("fname","alpha","First namae can have alphabetic chars only");
  
  frmvalidator.addValidation("lname","req","Please enter your Last Name");
  frmvalidator.addValidation("lname","maxlen=20","Max length for Lastname is 20");
  frmvalidator.addValidation("lname","alpha","Last name can have alphabetic chars only");

  frmvalidator.addValidation("phone","req","Please enter your Phone Number");

  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req");
  frmvalidator.addValidation("Email","email");
  
    
  frmvalidator.addValidation("Address","maxlen=50");


  function DobValidation()
    {
        var frm = document.forms["clientform"];
        var mindate = new Date(01/01/2000);

        if(frm.dob.value > mindate)
        {
            sfm_show_error_msg("You have to be 16+ to be our client.");
            return false;
        }
        else
        {
            return true;
        }
    }
  
  frmvalidator.setAddnlValidationFunction(DobValidation);


</script>

</div>
<?php
	}
?>
<?php
	if(isset($_GET['action'])&&$_GET['action']=="view")
	{
		$id=$_GET['id'];
		$res=$client->getclientByid($id);
		$row=$connect->fetchObject($res);
?>
	<h1>Information Of <?=($row->fname) . ' ' . ($row->lname)?></h1>
	<table width="348" height="112" border="0" cellpadding="5" cellspacing="1" bgcolor="#888888">
  <tr>
    <td width="128" valign="middle" bgcolor="#FFFFFF">First Name</td>
    <td width="197" valign="middle" bgcolor="#FFFFFF"><?=$row->fname?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Last Name</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->lname?></td>
  </tr>

   <tr>
    <td valign="middle" bgcolor="#FFFFFF">Gender</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->gender?></td>
  </tr>

   <tr>
    <td valign="middle" bgcolor="#FFFFFF">Phone</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->phone?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Email</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->email?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Address</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->address?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Nationality</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->nation?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Date of Birth</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->dob?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Education</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->education?></td>
  </tr>

  <tr>
    <td valign="middle" bgcolor="#FFFFFF">Mode of Contact</td>
    <td valign="middle" bgcolor="#FFFFFF"><?=$row->cntct_mode?></td>
  </tr>
</table>

<?php
	}
?>