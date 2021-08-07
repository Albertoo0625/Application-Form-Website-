<!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <h1>Personal Information</h1>
        <form>
            
            <p>First name* <input type="text" placeholder="First name"></p>  
            <p>Middle name* <input type="text" placeholder="Middle name"></p>
            <p>Last name* <input type="text" placeholder="Last name"></p>
            <p>Date of birth* <input type="date" name="date" placeholder="Date of birth"></p>
            <p>Citizenship* <input type="text" placeholder="Citizenship"></p>
            
            <p>Country of birth*</p><select id="country"  name="country">
                <option value="">-Select country-</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
<option value="Congo">Congo</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor (Timor Timur)">East Timor (Timor Timur)</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Grenada">Grenada</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option selected="selected" value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, North">Korea, North</option>
<option value="Korea, South">Korea, South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepa">Nepa</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Vincent">Saint Vincent</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia and Montenegro">Serbia and Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</section>

            
        
            <p>ID/Passport*<input type="text" placeholder="ID/Passport"></p>
            <p>Gender*<p><input type="radio" name ="gender" value="Male"> Male </p> 
                      <p><input type="radio" name ="gender" value="Female">Female</p>
            <p>Years of Formal Education in English*<input type="text" placeholder="Years of Formal Education in English"></p>
            <p>Highest Level Of Education*<input type="radio" name="primary" value="primary">primary</p>
                                            <input type="radio" name="secondary" value="secondary">secondary</p>
                                            <input type="radio" name="postgraduate" value="postgraduate">postgraduate</p>
                                            <input type="radio" name="others" value="others">others</p>


           <p>If others,please specify* <input type="textarea" placeholder="..."
            style="height:100px; width:200px;"></p>
           

           <p>Upload passport size photo* <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
          </form>
           </p>

           <p>other languages spoken or written* <input type="text" placeholder="other languages spoken or written"></p>
           <p>Do you have any disability*<input type="radio" value="Yes">Yes</p>
                                         <input type="radio" value="no">No</p>

            <p>If Yes, please explain the nature of your disability <input type="textarea" placeholder="..."
                style="height:100px; width:200px;"></p>       
                
        <h1>Religious Affiliation</h1>

        <p>Religious Affiliation* <input type="radio" name="Protestant" value="Protestant">Protestant</p>
                                  <input type="radio" name="Roman Catholic" value="Roman Catholic">Roman Catholic</p>
                                  <input type="radio" name="Hindu" value="Hindu">Protestant</p>
                                  <input type="radio" name="African Traditional Religion" value="African Traditional Religion">African Traditional Religion</p>
                                  <input type="radio" name="Muslim" value="Muslim">Muslim</p> 
                                  <input type="radio" name="Ordained Minister(for divinity applicants)" value="Ordained Minister(for divinity applicants)">Ordained Minister(for divinity applicants)</p>
                                  <input type="radio" name="Others(please specify)" value="Others(please specify)">Others(please specify)</p>
        <p>Specify Religious Affiliation <input type="textarea" placeholder="..."
            style="height:100px; width:200px;"></p>
            
            
        <h1>Current Address</h1>

        <p>Postal Address* <input type="text" placeholder="Postal Address"></p>
        <p>Postal Code* <input type="text" placeholder="Postal Code"></p>
        <p>Town* <input type="text" placeholder="Town"></p>
        <p>Country* <input type="text" placeholder="Country"></p>
        <p>Telephone(home)* <input type="text" placeholder="Telephone(home)"></p>
        <p>Mobile no* <input type="text" placeholder="Mobile no"></p>
        <p>Email Address* <input type="text" placeholder="Email Address"></p>

        <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
	
        </form>


        <script>
            $(document).ready(function() {
                $('#butsave').on('click', function() {
                    $("#butsave").attr("disabled", "disabled");
                    var First_name = $('#First_name').val();
                    var Middle_name = $('#Middle_name').val();
                    var Last_name = $('#Last_name').val();
                    var Gender = $('#Gender').val();
                    var email= $('#email').val();
                    var Citizenship = $('#Citizenship').val();
                    var country_of_birth = $('#country_of_birth').val();
                    var Date_of_birth = $('#Date_of_birth').val();
                    var ID_Passport = $('#ID_Passport').val();
                    var Years_of_formal_education_in_english = $('#Years_of_formal_education_in_english').val();
                    var Highest_level_of_education= $('#Highest_level_of_education').val();
                    if(First_name!="" && Middle_name!="" && Last_name!="" && email!="" && Gender!="" && Citizenship!="" && country_of_birth!="" && Date_of_birth!=""&& ID_Passport!="" && Years_of_formal_education_in_english="" && Highest_level_of_education!=""){
                        $.ajax({
                            url: "save.php",
                            type: "POST",
                            data: {
                                First_name: First_name,
                                Middle_name:Middle_name,
                                Last_name:Last_name,
                                Gender: Gender,
                                email: email,
                                Citizenship: Citizenship,
                                country_of_birth: country_of_birth,
                                Date_of_birth:Date_of_birth,
                                ID_Passport:ID_Passport,
                                Years_of_formal_education_in_english: Years_of_formal_education_in_english,
                                Highest_level_of_education:Highest_level_of_education.	
                            },
                            cache: false,
                            success: function(dataResult){
                                var dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode==200){
                                    $("#butsave").removeAttr("disabled");
                                    $('#fupForm').find('input:text').val('');
                                    $("#success").show();
                                    $('#success').html('Data added successfully !'); 						
                                }
                                else if(dataResult.statusCode==201){
                                   alert("Error occured !");
                                }
                                
                            }
                        });
                    }
                    else{
                        alert('Please fill all the field !');
                    }
                });
            });
            </script>
</body>
</html>