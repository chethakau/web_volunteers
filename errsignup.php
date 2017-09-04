<?php 
include('inc/header.php');?>

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<script type="text/javascript">
var request = null;
 var x = 'pictures/ok.png';
  var x2 = 'pictures/cancel.png';
   var x3 = 'pictures/ok.png';
  function f11(){
  var unn=document.form2.usernameTf.value;
  if(unn=="")
  document.getElementById("unn").innerHTML = "<img src = "+x2+">";
 else
  document.getElementById("unn").innerHTML = "<img src = "+x+">";
    }
	function f22(){
  var pw=document.form2.passwordTf.value;
  if(pw=="")
  document.getElementById("pw").innerHTML = "<img src = "+x2+">";
 else
  document.getElementById("pw").innerHTML = "<img src = "+x+">";
    }
  function f1(){
  var fname=document.form1.fname.value;
  if(fname==""){
  document.getElementById("fn").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;
  }
  else{
  document.getElementById("fn").innerHTML = "<img src = "+x+">";
     document.getElementById("change").disabled = false;
	}}
  function f2(){
  var lname=document.form1.lname.value;
  if(lname==""){
  document.getElementById("ln").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;
  }
  else{
  document.getElementById("ln").innerHTML = "<img src = "+x+">";
    document.getElementById("change").disabled = false; 
	}
	}
		
 function f4(){
  var yr=document.form1.year.value;
  if(yr=="yer"){
  document.getElementById("yr").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;}
  else{
  document.getElementById("yr").innerHTML = "<img src = "+x+">";
     document.getElementById("change").disabled = false;
	}}
   function f5(){
  var con=document.form1.country.value;
  if(con==""){
  document.getElementById("con").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;
  }else{
  document.getElementById("con").innerHTML = "<img src = "+x+">";
   document.getElementById("change").disabled = false;}
    }
	 function f6(){
  var em=document.form1.email.value;
  if(em==""){
  document.getElementById("em").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;}
 else{
  document.getElementById("em").innerHTML = "<img src = "+x+">";
   document.getElementById("change").disabled = false;}
    
  //document.getElementById("em").innerHTML = "<img src = "+x+">";
    }
	function f7(){
  var un=document.form1.username.value;
  if(un=="")
  document.getElementById("un").innerHTML = "<img src = "+x2+">";
 else
  document.getElementById("un").innerHTML = "<img src = "+x+">";
    }
	function f8(){
  var sc=document.form1.secques.value;
  if(sc=="sec"){
  document.getElementById("sc").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;
  }else{
  document.getElementById("sc").innerHTML = "<img src = "+x+">";
   document.getElementById("change").disabled = false;}
    }
	function f9(){
  var ans=document.form1.answer.value;
  if(ans==""){
  document.getElementById("ans").innerHTML = "<img src = "+x2+">";
   document.getElementById("change").disabled = true;
  }
  else{
  document.getElementById("ans").innerHTML = "<img src = "+x+">";
  document.getElementById("change").disabled = false;
  }
    }
function chkpass(){
var password=document.form1.password.value;
var confpass=document.form1.confpass.value;
if(password=="" && confpass==""){
document.getElementById("sv2").innerHTML = "<img src = "+x2+">";
document.getElementById("in").innerHTML = "<img src = "+x2+">";
 document.getElementById("change").disabled = true;}
else{
if(password==confpass){
document.getElementById("sv2").innerHTML = "<img src = "+x+">";
document.getElementById("in").innerHTML = "<img src = "+x+">";
 document.getElementById("change").disabled = false;
}
else{
alert('Passwords Did Not Match \n Please Enter Again');
//document.getElementById("sv1").innerHTML= "<img src = "+x2+">;
document.getElementById("sv2").innerHTML = "<img src = "+x2+">";
document.getElementById("in").innerHTML = "<img src = "+x2+">";
 document.getElementById("change").disabled = true;
}
}
}

function m(){
               
                try{
                
                request = new XMLHttpRequest();
              //  alert(1);
            }
            catch(ex1){
               try{
               request= new ActiveXObject("Msxml2.XMLHTTP");
               //alert(2);
                          } 
                          
               catch(ex2){
                   try{
                   
                   request= new ActiveXObject("Microsoft.XMLHTTP");
                //   alert(3);
                   }
                   
                   catch(ex3){
                       alert('incorrect request');
                   }
        }
            
        } 
        
        var txt= document.getElementById("email").value;
        var url = "email.php?txt="+escape(txt);
        request.open("GET", url, true);
        request.onreadystatechange= f;
        request.send(null);
        //alert('fin');
        
    }  
    
    function f() {
        if(request.readyState==4){
          //  alert("off");
           // while(true){
    var txt1=request.responseText;
   // txt1.split(" ");
      //  alert(txt1);
		if(txt1==1){
    document.getElementById("Msg").innerHTML="";
	document.getElementById("em").innerHTML = "<img src = "+x+">";
	 document.getElementById("change").disabled = false;
	}
	 else if(txt1==2){
   document.getElementById("Msg").innerHTML="Email Address Already Registered";
	document.getElementById("em").innerHTML = "<img src = "+x2+">";
	 document.getElementById("change").disabled = true;
   }
   else if(txt1==0){
   document.getElementById("Msg").innerHTML="Inalid Email Address";
	document.getElementById("em").innerHTML = "<img src = "+x2+">";
	 document.getElementById("change").disabled = true;
   }
    }
}
function u(){
               
                try{
                
                request = new XMLHttpRequest();
                //alert(1);
            }
            catch(ex1){
               try{
               request= new ActiveXObject("Msxml2.XMLHTTP");
              // alert(2);
                          } 
                          
               catch(ex2){
                   try{
                   
                   request= new ActiveXObject("Microsoft.XMLHTTP");
                  // alert(3);
                   }
                   
                   catch(ex3){
                       alert('incorrect request');
                   }
        }
            
        } 
        
        var txt= document.getElementById("username").value;
        var url = "userch.php?txt="+escape(txt);
        request.open("GET", url, true);
        request.onreadystatechange= g;
        request.send(null);
        //alert('fin');
        
    }  
    
    function g() {
        if(request.readyState==4){
            //alert("off");
           // while(true){
    var txt1=request.responseText;
   // txt1.split(" ");
      //  alert(txt1);
		if(txt1==2){
   document.getElementById("mg").innerHTML="Username Already Exists";
	document.getElementById("un").innerHTML = "<img src = "+x2+">";
	 document.getElementById("change").disabled = true;
	}
	 else if(txt1==1) {
   document.getElementById("mg").innerHTML="";
	document.getElementById("un").innerHTML = "<img src = "+x+">";
	 document.getElementById("change").disabled = false;
   }
   else if(txt1==0){
   document.getElementById("mg").innerHTML="";
	document.getElementById("un").innerHTML = "<img src = "+x2+">";
	 document.getElementById("change").disabled = true;
   }
  
    }
}
function fill(){
               
                try{
                
                request = new XMLHttpRequest();
              //  alert(1);
            }
            catch(ex1){
               try{
               request= new ActiveXObject("Msxml2.XMLHTTP");
              //alert(2);
                          } 
                          
               catch(ex2){
                   try{
                   
                   request= new ActiveXObject("Microsoft.XMLHTTP");
                  // alert(3);
                   }
                   
                   catch(ex3){
                       alert('incorrect request');
                   }
        }
            
        } 
        
        var txt= document.getElementById("email").value;
        var url = "fill.php?txt="+escape(txt);
        request.open("GET", url, true);
        request.onreadystatechange= h;
        request.send(null);
        //alert('fin');
        
    }  
    
    function h() {
        if(request.readyState==4){
            //alert("off");
           // while(true){
    var txt2=request.responseText;
   // txt1.split(" ");
   //    alert(txt2);
		if(txt2==1)
		alert("You Have Not Completed The Form");
  
    }
}

</script>
<style type="text/css">
<!--
.style3 {font-size: 16px}
.style4 {
	font-size: 16px;
	color: #000000;
}
.style5 {
	font-size: 14px;
	color: #0066CC;
}
-->
</style>

<div id="wrapper">
  

<img align="right" alt="erro information" src="pictures/error2.png" width="48" height="48" /><span style="color: #FF0000">User name is already there. Please insert other User name..!</span>
<div id="content">
<div class="entry">
<div class="entry-title style4" align="center">
	     			<div class="entry-title style4">
                     <div><br>
          </div></div>
          <form  name="form1" action="getdata.php" method="post">
	<fieldset>
    <legend align="center" style="color: #0033FF"><span style="font-family: &quot;Times New Roman&quot;, Times, serif">Enter Personal Information</span></legend>
			
           <table width="484" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="183"><div align="right"><span class="style1">*</span><span class="style3">First Name</span> </div></td>
    <td width="290"><div align="left"> <input type="text" name="fname" id="fname" size="30" onBlur="f1()"/>
    <span class="textfieldValidState" id="fn"></span></div></td>
  </tr>
  
  <tr>
    <td><div align="right"><span class="style1">*</span><span class="style3">Last Name</span></div></td>
    <td><div align="left"><input name="lname" type="text" size="30" onBlur="f2()"/>
    <span class="textfieldValidState" id="ln"></span></div></td>
  </tr>
  <tr>
  	<td><div align="right"><span class="style1">*</span><span class="style3">Date of Birth</span></div></td>
    <td><div align="left">
      <select name="date" id="date">
        <option selected="selected" >Date</option>
         <?php
	  for($j=1;$j<32;$j++){
       echo '<option value='.$j.'>'.$j.'</option>';
	   }
	   ?>
      </select>
     
<select name="month" id="month">
  <option> Month</option>
  <option value="1">Jan</option>
  <option value="2">Feb</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">Aug</option>
  <option value="9">Sept</option>
  <option value="10">Oct</option>
  <option value="11">Nov</option>
  <option value="12">Dec</option>
</select>

      <select name="year" id="year" onBlur="f4()">
      <option value="yer"> Year </option>
      <?php
	  for($i=1950;$i<2010;$i++){
       echo '<option value='.$i.'>'.$i.'</option>';
	   }
	   ?>
       
        
         
      </select> <span class="textfieldValidState" id="yr"></span> </div>    </td>
   </tr> 
     
   <tr>
   <td><div align="right"><span class="style3">Country</span></div></td>
   <td><div align="left">
     <select name="country" id="country" onBlur="f5()">
     <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D&#039;Ivoire (Ivory Coast)">Cote D&#039;Ivoire (Ivory Coast)</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Czechoslovakia (former)">Czechoslovakia (former)</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Metropolitan">Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Great Britain (UK)">Great Britain (UK)</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea (North)">Korea (North)</option><option value="Korea (South)">Korea (South)</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="Neutral Zone">Neutral Zone</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand (Aotearoa)">New Zealand (Aotearoa)</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovak Republic">Slovak Republic</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Helena">St. Helena</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="US Minor Outlying Islands">US Minor Outlying Islands</option><option value="USSR (former)">USSR (former)</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
     </select>
     <span class="textfieldValidState" id="con"></span>
     </div>
     </td>
   </tr>
   <tr>
   <td><div align="right" class="style3">Gender </div></td>
   <td><div align="left"><select name="gender" id="gender" >
     <option selected="selected">Male</option>
     <option>Female</option>
      </select></div></td>
   </tr>
   <td><div align="right"><span class="style1">*</span><span class="style3">Telephone</span></div></td>
   <td><div align="left"><input name="telephone" type="text" size="30" />
   </div></td>
      <tr>
   <td> <div align="right"><span class="style1">*</span><span class="style3">E-mail</div></td>
   <td><div align="left"><input name="email" id="email" type="text" onBlur="f6()" onChange="m()" size="30"/>
   <span class="textfieldValidState" id="em"></span><br /><span class="style1" id="Msg"></span></div>
   </td>
           </tr>
          </table>
</fieldset>
<fieldset>
<legend align="center" style="color: #0033FF"><span style="font-family: &quot;Times New Roman&quot;, Times, serif">Enter User Account  Information</span></legend>
   <table width="484" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td width="183" ><div align="right"><span class="style1">*</span><span class="style3">Username</span></div></td>
    <td width="290"><div align="left"><input type="text" name="username" id="username" onBlur="f7()" onChange="u()" size="30" />
    <span class="textfieldValidState" id="un"></span><br /><span class="style1" id="mg"></span></div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style1">*</span><span class="style3">Password</span></div></td>
    <td><div align="left"><input name="password" type="password" id="password" size="30"/>
     <span class="textfieldValidState" id="sv2"></span></div></td>
  </tr>
  
  	
  <tr>   <td><div align="right"><span class="style1">*</span><span class="style3">Confirm Password</span></div></td>
   <td><div align="justify"><input name="confpass" type="password" id="confpass"  onblur="chkpass()" size="30"/>
   		  <span class="textfieldValidState" id="in"></span></div>
   </td>
   </tr>
    <tr>
   
   </tr>
   <tr>
   <td><div align="right"><span class="style1">*</span><span class="style3">Security Question</span></div></td>
   <td><div align="left"> <select name="secques" id="secques" onBlur="f8()">
      <option value="sec" > Security Question </option>
      <option >My Pet Name</option>
       <option>My Favourite Book</option>
        <option>My First tlephone Number</option>
         <option>My School Name</option>
      </select> <span class="textfieldValidState" id="sc"></span></div> </td>
   </tr>   
    <tr>
   <td><div align="right"><span class="style1">*</span><span class="style3">Answer</span></div></td>
   <td><div align="left"><input name="answer" type="text" onBlur="f9()" size="30"/>
   <span class="textfieldValidState" id="ans"></span></div></td>
   </tr>
  
</table>
   <div align="left"><span class="style1">*</span><span style="font-family: &quot;Times New Roman&quot;, Times, serif; color: #0033FF">Required fields...!</span>
   </div>
   <div align="center">
   <input name="change" type="submit" id="change" value="submit" onClick="fill()"/>
  <input name="clear" type="reset" value="Clear"/></div>
  </fieldset>
  </form>
  </p> 
              
                  
      <p></p>
			
	  </div>
	</div>

</div>



<?php 
include('inc/footer.php');
?>

