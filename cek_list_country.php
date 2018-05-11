

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
           <script type="text/javascript">
           $(document).ready(function(){
           <!-- ****************For State Loads Starts***************************-->
           $("#field6").change(function (e){
           var state = 
           {
           '0': ['Not Available'],
           'Z1':['Australian Capital Territory','New South Wales',
           'Northern Territory','Queensland','South Australia',
           'Tasmania','Victoria','Western Australia'],
           'IN':['Delhi','Maharashtra','TamilNadu','Karnataka','Haryana',
           'Uttar Pradesh','Andhra Pradesh','Jammu and Kashmir',
           'West Bengal','Gujarat','Madhya Pradesh','Kerala',
           'Punjab','Bihar','Rajasthan','Orissa','Assam','NA',
           'Himachal Pradesh','Chhattisgarh'],
           'MY':['Johor','Kedah','Kelantan','Kuala Lumpur','Labuan','Melaka',
           'Negeri Sembilan','Pahang','Penang','Perak','Perlis','Sabah',
           'Sarawak','Selangor','Terengganu'],
           'CN':['Beijing','Anhui','Chongqing','Fujian','Gansu','Guangdong',
           'Guangxi','Guizhou','Hainan','Hebei','Heilongjiang','Henan',
           'Hubei','Hunan','Jiangsu','Jiangxi','Jilin','Liaoning','Nei',
           'Mongol','Ningxia','Qinghai','Shaanxi','Shandong',
           'Shanghai','Shanxi','Sichuan','Tianjin',
           'Xinjiang','Xizang','(Tibet)','Hong Kong','Macau','Yunnan','Zhejiang'],
           'ID':['Jakarta','Bandung','Bekasi','Cirebon','Semarang','Surabaya',
           'Medan','Ujungpandang','Denpasar','Yogyakarta','Makassar','Palu',
           'Samarinda','Manado','Jayapura','Merauke','Pekanbaru','Batam','Solo',
           'Malang']
           }    
           var value = this.value;
           // Access the object like city['CT'] .. That gives the Array
           state[value] !== undefined ? state[value] : '0';                                 
           var stateOptions = state[value];         
           var $field8 = $('#field8'),
           $field9 = $('#field9');  
           $field8.html(''); // clear the existing options  
           $field9.html(''); // clear the existing options                
           $.each(stateOptions, function (i, o) {
           $('<option>' + o + '</option>').appendTo('#field8');
           });// ------------>each end tag          
           });//----------------->on-change end tag
           <!-- ****************For State Loads Ended***************************-->
           <!-- ****************For City Loads Starts***************************-->
           $("#field8").change(function (e){     
           var city = 
           {
           '0': ['Not Available'],
           'TamilNadu' : ['Coimbatore','Mettupalyam','Karur','Pollachi'],
           'Karnataka' : ['Bangalore','Mysore','Bellary','Mandya','Chikmagalur'
           ,'Chamarajanagar','Udupi','Chikkaballapura'],
           'Delhi'     : ['Faridabad','Panchkula','Sonipat','Hisar','Palwal','Thanesar'],
           'Cirebon'     : ['Palimanan','Rajagaluh','Majalengka','Cirebon City','Sumberjaya','Karangampel'],
           'Batam'     : ['Batam','Bintan','Batam City']         
           }
           var value = this.value;
           city[value] !== undefined ? city[value] : '0';
           var cityOptions = city[value];
           var $field9 = $('#field9');              
           $field9.html(''); // clear the existing options 
           $.each(cityOptions, function (j, k) {
           $('<option>' + k + '</option>').appendTo('#field9');
           });// ------------>each end tag
           });//----------------->on-change end tag
           <!-- ****************For City Loads Ended***************************-->
           }); //-------------------->ready end tag
           </script>


           HTML Tag :

           <div id="formElement6" class="sc-view form-design-field sc-static-layout sc-regular-size" style="left: 0px; right: 0px; top: 0px; bottom: 0px; padding: 6px 5px 9px 9px" >
           <div class="field-wrapper" style="float: left; width: 100%; clear: both" >
           <div class="_100" style="float: left; width: 96%; margin-right: 2%; margin-left: 2%" >
           <p style="position: relative; margin: 0px; padding: 0px" >
           <label for="Country" style="display: block; line-height: 150%; padding: 1px 0pt 3px; white-space: nowrap" >Country</label>
           <select id="field6" name="Country" style="width: 100%" >
           <option value="" selected="selected" >--Please Select--</option>
           <option value="YE" >Yemen</option>
           <option value="YT" >Mayotte</option>
           <option value="Z1" >Austria-SEAD</option>
           <option value="ZA" >South Africa</option>
           <option value="ZM" >Zambia</option>
           <option value="ZW" >Zimbabwe</option>
           <option value="ZY" >Taiwan(CO Only)</option>
           <option value="ZZ" >Others</option>
           <option value="AM" >Armenia</option>
           <option value="GB" >United Kingdom</option>
           <option value="SI" >Slovenia</option>
           <option value="LS" >Lesotho</option>
           <option value="MC" >Monaco</option>
           <option value="CU" >Cuba</option>
           <option value="SL" >Sierra Leone</option>
           <option value="FO" >Faroe Islands</option>
           <option value="GQ" >Equatorial Guin</option>
           <option value="IN" >India</option>
           <option value="KY" >Cayman Islands</option>
           <option value="ME" >Montenegro</option>
           <option value="MN" >Mongolia</option>
           <option value="AF" >Afghanistan</option>
           <option value="AZ" >Azerbaijan</option>
           <option value="BS" >Bahamas</option>
           <option value="CK" >Cook Islands</option>
           <option value="EC" >Ecuador</option>
           <option value="MY" >Malaysia</option>
           <option value="NZ" >New Zealand</option>
           <option value="QA" >Qatar</option>
           <option value="SJ" >Svalbard</option>
           <option value="IR" >Iran</option>
           <option value="KI" >Kiribati</option>
           <option value="LC" >St. Lucia</option>
           <option value="MD" >Moldova</option>
           <option value="BI" >Burundi</option>
           <option value="BW" >Botswana</option>
           <option value="CH" >Switzerland</option>
           <option value="CY" >Cyprus</option>
           <option value="PE" >Peru</option>
           <option value="PS" >Palestine</option>
           <option value="SA" >Saudi Arabia</option>
           <option value="SO" >Somalia</option>
           <option value="GY" >Guyana</option>
           <option value="KR" >South Korea</option>
           <option value="AO" >Angola</option>
           <option value="BZ" >Belize</option>
           <option value="MX" >Mexico</option>
           <option value="RU" >Russian Fed.</option>
           <option value="MR" >Mauretania</option>
           <option value="SH" >Saint Helena</option>
           <option value="FJ" >Fiji</option>
           <option value="FK" >Falkland Islnds</option>
           <option value="FM" >Micronesia</option>
           <option value="FR" >France</option>
           <option value="GA" >Gabon</option>
           <option value="GD" >Grenada</option>
           <option value="GE" >Georgia</option>
           <option value="GF" >French Guayana</option>
           <option value="GG" >GUERNSEY</option>
           <option value="GH" >Ghana</option>
           <option value="GI" >Gibraltar</option>
           <option value="GL" >Greenland</option>
           <option value="GM" >Gambia</option>
           <option value="GN" >Guinea</option>
           <option value="GP" >Guadeloupe</option>
           <option value="GR" >Greece</option>
           <option value="GS" >S. Sandwich Ins</option>
           <option value="GT" >Guatemala</option>
           <option value="GU" >Guam</option>
           <option value="GW" >Guinea-Bissau</option>
           <option value="HM" >Heard/McDon.Isl</option>
           <option value="HN" >Honduras</option>
           <option value="HR" >Croatia</option>
           <option value="HT" >Haiti</option>
           <option value="HU" >Hungary</option>
           <option value="ID" >Indonesia</option>
           <option value="IE" >Ireland</option>
           <option value="IL" >Israel</option>
           <option value="IO" >Brit.Ind.Oc.Ter</option>
           <option value="IQ" >Iraq</option>
           <option value="IS" >Iceland</option>
           <option value="IT" >Italy</option>
           <option value="JE" >JERSEY</option>
           <option value="JM" >Jamaica</option>
           <option value="JO" >Jordan</option>
           <option value="JP" >Japan</option>
           <option value="KE" >Kenya</option>
           <option value="KG" >Kyrgyzstan</option>
           <option value="KH" >Cambodia</option>
           <option value="KM" >Comoros</option>
           <option value="KN" >St Kitts&amp;Nevis</option>
           <option value="KP" >North Korea</option>
           <option value="KW" >Kuwait</option>
           <option value="KZ" >Kazakhstan</option>
           <option value="LA" >Laos</option>
           <option value="LB" >Lebanon</option>
           <option value="LI" >Liechtenstein</option>
           <option value="LK" >Sri Lanka</option>
           <option value="LR" >Liberia</option>
           <option value="LT" >Lithuania</option>
           <option value="LU" >Luxembourg</option>
           <option value="LV" >Latvia</option>
           <option value="LY" >Libya</option>
           <option value="M4" >MIAMI</option>
           <option value="MA" >Morocco</option>
           <option value="MF" >SAINT MARTIN</option>
           <option value="MG" >Madagascar</option>
           <option value="MH" >Marshall Islnds</option>
           <option value="MK" >Macedonia</option>
           <option value="ML" >Mali</option>
           <option value="MM" >Myanmar</option>
           <option value="MP" >N.Mariana Islnd</option>
           <option value="MQ" >Martinique</option>
           <option value="MS" >Montserrat</option>
           <option value="MT" >Malta</option>
           <option value="AD" >Andorra</option>
           <option value="AE" >Utd.Arab Emir.</option>
           <option value="AG" >Antigua/Barbuda</option>
           <option value="AI" >Anguilla</option>
           <option value="AL" >Albania</option>
           <option value="AN" >Dutch Antilles</option>
           <option value="AQ" >Antarctica</option>
           <option value="AR" >Argentina</option>
           <option value="AS" >Samoa, America</option>
           <option value="AT" >Austria</option>
           <option value="AU" >Australia</option>
           <option value="AW" >Aruba</option>
           <option value="AX" >Åland</option>
           <option value="BA" >Bosnia-Herz.</option>
           <option value="BB" >Barbados</option>
           <option value="BD" >Bangladesh</option>
           <option value="BE" >Belgium</option>
           <option value="BF" >Burkina Faso</option>
           <option value="BG" >Bulgaria</option>
           <option value="BH" >Bahrain</option>
           <option value="BJ" >Benin</option>
           <option value="BL" >Blue</option>
           <option value="BM" >Bermuda</option>
           <option value="BN" >Brunei Daruss.</option>
           <option value="BO" >Bolivia</option>
           <option value="BR" >Brazil</option>
           <option value="BT" >Bhutan</option>
           <option value="BV" >Bouvet Islands</option>
           <option value="BY" >Belarus</option>
           <option value="C2" >Canary Island</option>
           <option value="C3" >CURACAO</option>
           <option value="CA" >Canada</option>
           <option value="CC" >Coconut Islands</option>
           <option value="CD" >Dem. Rep. Congo</option>
           <option value="CF" >CAR</option>
           <option value="CG" >Rep.of Congo</option>
           <option value="CI" >Cote d'Ivoire</option>
           <option value="CL" >Chile</option>
           <option value="CM" >Cameroon</option>
           <option value="CN" >China</option>
           <option value="CO" >Colombia</option>
           <option value="CR" >Costa Rica</option>
           <option value="CS" >Serbia/Monten.</option>
           <option value="CV" >Cape Verde</option>
           <option value="CX" >Christmas Islnd</option>
           <option value="CZ" >Czech Republic</option>
           <option value="DE" >Germany</option>
           <option value="DJ" >Djibouti</option>
           <option value="DK" >Denmark</option>
           <option value="DM" >Dominica</option>
           <option value="DO" >Dominican Rep.</option>
           <option value="DZ" >Algeria</option>
           <option value="EE" >Estonia</option>
           <option value="EG" >Egypt</option>
           <option value="EH" >West Sahara</option>
           <option value="ER" >Eritrea</option>
           <option value="ES" >Spain</option>
           <option value="ET" >Ethiopia</option>
           <option value="EU" >European Union</option>
           <option value="FI" >Finland</option>
           <option value="MU" >Mauritius</option>
           <option value="MV" >Maldives</option>
           <option value="MW" >Malawi</option>
           <option value="MZ" >Mozambique</option>
           <option value="NA" >Namibia</option>
           <option value="NC" >New Caledonia</option>
           <option value="NE" >Niger</option>
           <option value="NF" >Norfolk Islands</option>
           <option value="NG" >Nigeria</option>
           <option value="NI" >Nicaragua</option>
           <option value="NL" >Netherlands</option>
           <option value="NO" >Norway</option>
           <option value="NP" >Nepal</option>
           <option value="NR" >Nauru</option>
           <option value="NT" >NATO</option>
           <option value="NU" >Niue</option>
           <option value="OM" >Oman</option>
           <option value="OR" >Orange</option>
           <option value="PA" >Panama</option>
           <option value="PF" >Frenc.Polynesia</option>
           <option value="PG" >Pap. New Guinea</option>
           <option value="PH" >Philippines</option>
           <option value="PK" >Pakistan</option>
           <option value="PL" >Poland</option>
           <option value="PM" >St.Pier,Miquel.</option>
           <option value="PN" >Pitcairn Islnds</option>
           <option value="PR" >Puerto Rico</option>
           <option value="PT" >Portugal</option>
           <option value="PW" >Palau</option>
           <option value="PY" >Paraguay</option>
           <option value="RE" >Reunion</option>
           <option value="RO" >Romania</option>
           <option value="RS" >Serbia</option>
           <option value="RW" >Rwanda</option>
           <option value="S1" >SAIPAN</option>
           <option value="SB" >Solomon Islands</option>
           <option value="SC" >Seychelles</option>
           <option value="SD" >Sudan</option>
           <option value="SE" >Sweden</option>
           <option value="SG" >Singapore</option>
           <option value="SK" >Slovakia</option>
           <option value="SM" >San Marino</option>
           <option value="SN" >Senegal</option>
           <option value="SR" >Suriname</option>
           <option value="SS" >South Sudan</option>
           <option value="ST" >S.Tome,Principe</option>
           <option value="SV" >El Salvador</option>
           <option value="SY" >Syria</option>
           <option value="SZ" >Swaziland</option>
           <option value="T1" >TAHITI</option>
           <option value="TC" >Turksh Caicosin</option>
           <option value="TD" >Chad</option>
           <option value="TF" >French S.Territ</option>
           <option value="TG" >Togo</option>
           <option value="TH" >Thailand</option>
           <option value="TJ" >Tajikistan</option>
           <option value="TK" >Tokelau Islands</option>
           <option value="TL" >East Timor</option>
           <option value="TM" >Turkmenistan</option>
           <option value="TN" >Tunisia</option>
           <option value="TO" >Tonga</option>
           <option value="TP" >East Timor</option>
           <option value="TR" >Turkey</option>
           <option value="TT" >Trinidad,Tobago</option>
           <option value="TV" >Tuvalu</option>
           <option value="TZ" >Tanzania</option>
           <option value="UA" >Ukraine</option>
           <option value="UG" >Uganda</option>
           <option value="UM" >Minor Outl.Isl.</option>
           <option value="UN" >United Nations</option>
           <option value="US" >USA</option>
           <option value="UY" >Uruguay</option>
           <option value="UZ" >Uzbekistan</option>
           <option value="VA" >Vatican City</option>
           <option value="VC" >St. Vincent</option>
           <option value="VE" >Venezuela</option>
           <option value="VG" >Brit.Virgin Is.</option>
           <option value="VI" >Amer.Virgin Is.</option>
           <option value="VN" >Vietnam</option>
           <option value="VU" >Vanuatu</option>
           <option value="WF" >Wallis,Futuna</option>
           <option value="WS" >Samoa</option>
           <option value="XK" >Kosovo</option>
           </select>
           </p>
           </div>
           </div>
           </div>
           <div id="formElement7" class="sc-view form-design-field sc-static-layout sc-regular-size" style="left: 0px; right: 0px; top: 0px; bottom: 0px" >
           <div class="field-wrapper" style="float: left; width: 100%; clear: both" >
           <div class="_100" style="float: left; width: 96%; margin-right: 2%; margin-left: 2%" >
           <p style="position: relative; margin: 0px; padding: 0px" >
           <input id="field7" type="hidden" name="DataSource" value=""  />
           </p>
           </div>
           </div>
           </div>
           <div id="formElement8" class="sc-view form-design-field sc-static-layout sc-regular-size" style="left: 0px; right: 0px; top: 0px; bottom: 0px; padding: 6px 5px 9px 9px" >
           <div class="field-wrapper" style="float: left; width: 100%; clear: both" >
           <div class="_100" style="float: left; width: 96%; margin-right: 2%; margin-left: 2%" >
           <p style="position: relative; margin: 0px; padding: 0px" >
           <label for="state" style="display: block; line-height: 150%; padding: 1px 0pt 3px; white-space: nowrap" >State</label>
           <select id="field8" name="state" style="width: 100%" >
           <option value="First" >First</option>
           <option value="Second" >Second</option>
           <option value="Third" >Third</option>
           </select>
           </p>
           </div>
           </div>
           </div>
           <div id="formElement9" class="sc-view form-design-field sc-static-layout sc-regular-size" style="left: 0px; right: 0px; top: 0px; bottom: 0px; padding: 6px 5px 9px 9px" >
           <div class="field-wrapper" style="float: left; width: 100%; clear: both" >
           <div class="_100" style="float: left; width: 96%; margin-right: 2%; margin-left: 2%" >
           <p style="position: relative; margin: 0px; padding: 0px" >
           <label for="city" style="display: block; line-height: 150%; padding: 1px 0pt 3px; white-space: nowrap" >City</label>
           <select id="field9" name="city" style="width: 100%" >
           <option value="First" >First</option>
           <option value="Second" >Second</option>
           <option value="Third" >Third</option>
           </select>
           </p>
           </div>
           </div>
           </div>

