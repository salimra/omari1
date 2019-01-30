<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASSESMENT OF SELF MEDICATION WITH ANTIBIOTICS</title>
    <link rel="shortcut icon" type="image/x-icon" href="mu.jpeg" />

	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
   
        </nav>
       
        <div style="padding:25px;"id="page-wrapper" >
            <div id="page-inner">
			 <div style="padding:10px;"class="row">
                    <div class="col-md-12">
                        
                            <div align="center"><img src="mu.jpeg"width="90px"height="90px"/></div>
                          <div align="center" style="color:orange;">  <p style="color:orange;"><b>ASSESMENT OF KNOWLEDGE ATTITUDE  PRACTICES AND PREVALENCE <br/>
                            OF SELF-MEDICATION WITH THE ANTIBIOTICS AMONG MEDICAL STUDENTS<br/>AT MUHIMBILI UNIVERSITY OF HEALTH AND ALLIED SCIENCES <small></small>
</b></p></div>
                    </div>
                </div> 
                
    
		
		
		
  </tr>
  
        <div  class="row">
        <div class="col-md-5 col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    PART I
                </div>
                <div class="panel-body">
                <form  name="form" method="post" action="info.php">
                    <div >
                                    <label>University</label>
                                    <select name="university" class="form-control" required >
                                        <option value selected ></option>
                                        <option value="Muhimbili University">Muhimbil University</option>
                                        <option value="Kampala University">Kampala University</option>
                                        <option value="University of Dar es Salam">University of Dar es Salam</option>
                                        <option value="Ardhi University">Ardhi University</option>
                                    </select>
                      </div>
                      <div >
                        <label>Year Of Study</label>
                            <select name="year_study" class="form-control" required >
                                <option value selected ></option>
                               <option value="First Year">First Year</option>
                                <option value="Second Year ">Second Year</option>
                               <option value="Third Year">Third Year</option>
                
                          </select>
     </div>
     <div >
                        <label>Course</label>
                            <input class="form-control"type="text" placeholder="course name" required/>
     </div>
                      <div >
                                    <label>Gender</label>
                                    <select name="gender" class="form-control" required >
                                        <option value selected ></option>
                                        <option value="Male.">Male</option>
                                        <option value="Female.">Female</option>
                                    </select>
                      </div>
                      <div >
                                    <label>Age</label>
                                    <select name="age" class="form-control" required >
                                        <option value selected >Select Age</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30+">30+</option>
                                    </select>
                      </div>                             
                </select>
                      <div >
                      <label>Marital Status</label>
                                    <select name="marital_status" class="form-control" required >
                                        <option value selected >Marital Status</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="Divorce">Divorce</option>
                                        <option value="Widower">Widower</option>                                            
                                    </select>
                       </div>
                       <div class="form-group">
                                    <label>Number Of Children</label>
                                    <select name="number_of_children" class="form-control" required >
                                        <option value selected >Number of Children</option>
                                        <option value="none">none</option>
                                        <option value="one">one</option>
                                        <option value="Two">Two</option>
                                        <option value="More">More</option>                                            
                                    </select>                                            
                       </div>
                       <div class="form-group">
                                    <label>Place of Residence</label>
                                    <select name="residence" class="form-control" required >
                                    <option value selected >Place of Residence</option>
                                        <option value ="university" >University Hostels</option>
                                        <option value="single">Home</option>
                                    </select>  
                                    
                       </div>
                       
                       <div class="form-group">
                                    <label>Are you on long term Medication*</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="drug" id="post-format-gallery"  value="YES">YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="drug"  value="NO "checked>NO 
                                    </label>
                 
                        </div>
                       


                   <div class="form-group" id="gallery-box">
                   <label>Name the drug</label>
                   <label class="radio-inline">
                   <input type="text" name="drug"/> 
                </label>        
                </div> 
			

                    </div> 
                </div>
               
                 
            </div>
        </div>
 
	
  
                     
    <div style="padding:10px;" class="row">
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    PART II
                </div>
                <div class="panel-body">
                <form  name="form" method="post" action="info.php">
                        <div class="form-group">
                                    <label>Have You Heard The Term Self Medication *</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="self_medication" id="medical"  value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="self_medication"  value="NO "checked="">NO 
                                    </label>
                      </div>
                      <div id="wapi"class="form-group">
                                    <label>Where was you heard about it</label>
                                    <select name="place_hearding" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="lecture">Lecture</option>
                                        <option value="Seminars">Seminars</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Family/Friends">Family/Fiends</option>
                                        <option value="Health Practitioner">Health Pactitioner</option>
                                        
                                     
                                    </select>
                      </div>
                      <div class="form-group">
                                    <label>Have you ever practise Self Medication*</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Practice_self" id="practice"  value="YES">YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Practice_self"  value="NO " checked="" >NO 
                                    </label>
                                    
                                    </select>
                      </div>
                     
                     
                      <div id="fanya" class="form-group">
                                    <label>For Past Year How much time did you practice Self Medication</label>
                                          <select name="time_practice" class="form-control" required >
                                          <option value="1-2 times">Select in the list</option>
                                        <option value="1-2 times">1-2 times</option>
                                        <option value="13-24 time">13-24 times</option>
                                        <option value="More than 24 times">More than 24 times</option>
                                        <option value="I don't remember">I don't remember</option>
                                        <option value="I didn't Practice">I didn't Practice</option>
                                        
                                    </select>
                      </div>
                      <?php

$countries = array("Amoxicilin", "Azithromycin", "Ampicilin", "Ampiclox", "Ciprofloxin", "Cephalexin", "Cefuroxime", "Co-trimoxazole", "Cephalosporin", "Tetracycline", "Doxycycline", "Chloramphenicol", "Trindazole", "Metronidazole", "Erthromycin", "Septrin", "Neomycin", "Sulphonamide", "Penicilin", "Ofloxacin", "Norfloxacin", "others..");

?>
<div class="form-group">
    <label>Select Youre comonly used Antibiotic*</label>
    <select name="antibiotic" class="form-control" required>
        <option value selected ></option>
        <?php
        foreach($countries as $key => $value):
        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
        endforeach;
        ?>
    </select>
   
</div>
<?php

$countries = array("Runny nose", "Fever", "sore throat", "Acne", "Oral Ulcers", "Wounds", "Skin Infection", "Diarrhea and vomiting", "Sinusities", "Ear Infection", "Coughs", "Nasal Congetion", "Tooth ache", "Tonsil Infection", "Aches,Pain and Weakness", "Urinary tract Infection", "Others...");

?>
<div class="form-group">
    <label>Symptoms or illness made you use such antibiotics</label>
    <select name="antibiotic" class="form-control" required>
        <option value selected ></option>
        <?php
        foreach($countries as $key => $value):
        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
        endforeach;
        ?>
    </select>
    <div>
    <div  class="form-group">
                                    <label>Duration Of Antibiotic Intake</label>
                                          <select name="day_practice" class="form-control" required >
                                          <option >Select days</option>
                                          <option value="1-3 days">1-3 days</option>
                                        <option value="4-7 days">4-7 days</option>
                                        <option value="more than 7 days">more than 7 days</option>
                                        
                                        
                                    </select>
                      </div>
                      <div class="form-group">
                                    <label>Place of  obtaining the Medication</label>
                                    <select name="place_obtain" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="Pharmacy Store">Pharmacy Store</option>
                                        <option value="Family">Seminars</option>
                                        <option value="Family/Friends">Family/Fiends</option>
                                        <option value="Supermarket">Supermarket</option>
                                        
                                     
                                    </select>
                      </div> 
                      <?php

$countries = array("Academic Experrience", "My Own Experience", "Previous Doctorr Prescription", "Opinion of Friends", "Opinion of family members", "Recomended by Senioursi", "Antibiotic guideline", "WHO guideline", "Internet", "Advertisement");

?>
<div class="form-group">
    <label>Where did you took information of antibiotic you use</label>
    <select name="antibiotic" class="form-control" required>
        <option value selected ></option>
        <?php
        foreach($countries as $key => $value):
        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
        endforeach;
        ?>
    </select>
    <div> 
                     <div class="form-group">
                                    <label>Have You Ever Experienced serrious side effect or adverse drug reaction due to self medication with antibiotics</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="effect" id="ndio"  value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="effect"  value="NO "checked="">NO 
                                    </label>
                      </div>
                      <div id="madhara"class="form-group">
                                    <label>If So what did you do when you encountered that? </label>
                                    <select name="side_effect" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="I stopped taking the medicine immediately">I stopped taking the medicine immediately</option>
                                        <option value="I visit the physician while continue taking the medicine">I visit the physician while continue taking the medicine</option>
                                        <option value="I Stop taking the medication immediately and visited the physician">I Stop taking the medication immediately and visited the physician</option>
                                        
                                     
                                    </select>
                      </div>  
                      <div class="form-group">
                                    <label>What was the reasons for Practicing self-Medication? </label>
                                    <select name="reasons" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="Suficient Pharmacological Knowledge">Suficient Pharmacological Knowledge</option>
                                        <option value="To save Time">To save Time</option>
                                        <option value="To avoide queue or jam at outpatient depatment">To avoide queue or jam at outpatient depatment</option>
                                        <option value="To save Cost">To save Cost</option>
                                        <option value="Urgency or Problem">Urgency or Problem</option>
                                        <option value="others">Others</option>
                                        
                                     
                                    </select>
                      </div>                    
    <div class="form-group" >                                           
         <br/>
        <!-- <input style="background-color:orange;" class="form-control" type="submit" name="submit" /> -->
         
                   </div>
          

        
                </form>
         <p align="center"><a  class="btn btn-lg btn-primary btn-block"href="#" class="menu__link" data-toggle="modal" data-target="#myModal">PART III </a></p>
		 <p align="center"> <a  href="https://api.whatsapp.com/send?phone=255652708951">For website services,web apps click here<i class="fa fa-whatsapp w3-hover-opacity"></i></a><p>


    
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        </div>
        <footer class="w3-container w3-teal w3-center w3-margin-top">
  <p align="center">For any Problem on form filling contact us  Though the provided contacts below.</p>
  <div align="center"><i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <a  href="https://api.whatsapp.com/send?phone=255765362680"><i class="fa fa-whatsapp w3-hover-opacity"></i></a>
  <i class="fa fa-linkedin w3-hover-opacity"></i></div>
            <p style="color:black;"align="center";> &copy;all right's reserved</p>
            
           
          
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<!-- Modal1 -->
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
    <div >
    <div class="btn btn-lg btn-primary btn-block">
                    PART III
                </div>
                <div class="panel-body">

         <label>  1 : Answer the following  Questions on antibiotics by Selecting YES ,No Or <br/>I don't Know </label>
         <div><p> A: Different antibiotics are needed to cure different disease?</P>
         <style>
         p{color:brown;
         font-size:14px;}
         </style>
         
         <div >
         <label class="radio-inline">
                                        <input type="radio" name="cure_diferent"   value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cure_diferent"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="cure_diferent"  value="I dont know "checked="">I dont know 
                                    </label> 
        </div>
        <div><p> B: Antibiotics are effective against bacteria?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="back_effect"   value="YES" ><p>YES</p>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="back_effect"  value="NO "checked="">NO 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="back_effect"  value="I dont know  "checked="">I dont know 
                                    </label> 
        </div>
        <div><p> C: Antibiotics speed up the recovery from most coughs and colds?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="ant_speed" i value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ant_speed"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="ant_speed"  value="NO "checked="">I dont Know 
                                    </label> 
        </div>
        <div><p> D: Antibiotics are effective against viral diseases ?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="ant_effectv"   value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ant_effectv"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="ant_effectv"  value="NO "checked="">I dont Know 
                                    </label>
        </div>
        <div><p> E: If you get side effects during a course of antibiotics treatment, you should stop taking them as soon as possible
?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="ant_seffectv" i value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ant_seffectv"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="ant_seffectv"  value="NO "checked="">I dont Know 
                                    </label>
        </div>
        <div><p> F: If you get some kind of skin reaction when using an antibiotic, you should not use the same antibiotic again
?</P>
         
        <label class="radio-inline">
                                        <input type="radio" name="skinr"  value="YES "checked="">YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="skinr"  value="NO "checked="">NO 
                                    </label>  
                                    <label class="radio-inline">
                                        <input type="radio" name="skinr"  value="NO "checked="">I dont Know 
                                    </label>
        </div>
        <div><p> G: The unnecessary use of antibiotics can increase resistance of bacteria to them which is the worldwide problem currently
?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="unnecesary"  value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="unnecesary"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="unnecesary"  value="NO "checked="">I dont Know 
                                    </label>
        </div>
        <div><p> H: The self-medication can result into harmful effects and complicate illness and sometimes results into addiction ?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="self_medic" id="ndio"  value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="self_medic"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="self_medic"  value="NO "checked="">I dont Know 
                                    </label>
        </div>
        <div><p> I: Broad spectrum antibiotics are better than the narrow spectrum antibiotics?</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="broad" id="ndio"  value="YES" >YES
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="broad"  value="NO "checked="">NO 
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="broad"  value="NO "checked="">I dont Know 
                                    </label>
        </div>
        <p  align="center"><a  class="btn btn-lg btn-primary btn-block"href="#bot" >CLICK HERE TO VIEW WELL LAST QUESTION  </a></p>

            <!--part iii 2-->
            <div id="bot">
            <label>  2 : What is your attitude towards self-medication? </label>
         <div><p> A: Always I complete the course of treatment with the antibiotic even if i feel better</P>
         
         <label class="radio-inline">
                                        <input type="radio" name="dose"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="dose"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="dose"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="dose"  value="disagree "checked="">Disagree
                                    </label> 
        </div>
        <div><p> B:If I feel better after few days I sometimes stop taking
         my antibiotics before completing the course of treatment
 </P>
         
         <label class="radio-inline">
                                        <input type="radio" name="feel_better"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="feel_better"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="feel_better"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="feel_better"  value="disagree "checked="">Disagree
                                    </label> 
        </div>
        
        <div><p> C: I prefer to keep antibiotics at home or in my room in case there may be a need for them later
</P>
         
        <label class="radio-inline">
                                        <input type="radio" name="keep_ant"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="keep_ant"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="keep_ant"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="keep_ant"  value="disagree "checked="">Disagree
                                    </label> 
        </div>
        <div><p> D: It is good to be able to get antibiotics from relatives or friends without having to see a medical doctor

</P>
         
        <label class="radio-inline">
                                        <input type="radio" name="geting_ant"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="geting_ant"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="geting_ant"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="geting_ant"  value="disagree "checked="">Disagree
                                    </label> 
        </div>
       
       
        <div><p> E: I prefer to be able to buy antibiotics from the pharmacy without a prescription </P>
        <label class="radio-inline">
                                        <input type="radio" name="buy_ant"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="buy_ant"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="buy_ant"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="buy_ant"  value="disagree "checked="">Disagree
                                    </label> 
         
        </div>
        <div><p> F:I prefer to use an antibiotic if I have a cough for more than a week
</P>
<label class="radio-inline">
                                        <input type="radio" name="cough"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cough"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="cough"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="cough"  value="disagree "checked="">Disagree
                                    </label> 
       
        </div>
        <div><p> G: I give the leftover antibiotics to my friends if they get sick
</P>
<label class="radio-inline">
                                        <input type="radio" name="leftover"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="leftover"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="leftover"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="leftover"  value="disagree "checked="">Disagree
                                    </label> 
        
        </div>
        <div><p> H: Antibiotics should be used in any case once you have a fever

</P>
<label class="radio-inline">
                                        <input type="radio" name="fever_ant"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="fever_ant"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="fever_ant"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="fever_ant"  value="disagree "checked="">Disagree
                                    </label> 
        
        </div>
        <div><p> I: Consultation with the physician is essential before taking any medications

</P>
<label class="radio-inline">
                                        <input type="radio" name="consult_ant"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="consult_ant"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="consult_ant"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="consult_ant"  value="disagree "checked="">Disagree
                                    </label> 
        
        </div>
        <div><p> J: A patient can’t rationalize self-medication 


</P>
<label class="radio-inline">
                                        <input type="radio" name="slf_ant"   value="Strongly Agree" >Strongly Agree
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="self_ant"  value="Agree "checked="">Agree
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="self_ant"  value="Neutral"checked="">Neutral
                                    </label> 
                                    <label class="radio-inline">
                                        <input type="radio" name="self_ant"  value="disagree "checked="">Disagree
                                    </label> 
        
        </div>
       
        <br/>                          </label> 
        <input style="background-color:orange;" class="form-control" type="submit" name="submit">
        </div>      
          </div>
				</div>
			</div>
		</div>
	</div>
   
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>	
	<!-- gallery popup -->
	
					<script src="js/jquery.swipebox.min.js"></script> 
						<script type="text/javascript">
							jQuery(function($) {
								$(".swipebox").swipebox();
							});
						</script>
	
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

          
<script type="text/javascript">
$(function() {
    $('input[name=drug]').on('click init-drug', function() {
        $('#gallery-box').toggle($('#post-format-gallery').prop('checked'));
    }).trigger('init-drug');
});
</script>
         
         <script type="text/javascript">
$(function() {
    $('input[name=self_medication]').on('click init-self_medication', function() {
        $('#wapi').toggle($('#medical').prop('checked'));
    }).trigger('init-self_medication');
});
</script>
  <script type="text/javascript">
$(function() {
    $('input[name=Practice_self]').on('click init-Practice_self', function() {
        $('#fanya').toggle($('#practice').prop('checked'));
    }).trigger('init-Practice_self');
});
</script>
 <script type="text/javascript">
$(function() {
    $('input[name=effect]').on('click init-effect', function() {
        $('#madhara').toggle($('#ndio').prop('checked'));
    }).trigger('init-effect');
});
</script>
       
</body>
</html>
