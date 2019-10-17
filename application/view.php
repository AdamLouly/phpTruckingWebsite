<?php
$servername = "localhost";
$username = "tacan";
$password = "Jamal1963@";
$dbname = "tacantransport";
$output = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM drivers WHERE id = ".preg_replace("/[^0-9,.]/", "", $_GET['id']);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $output = $row;
    }
} else {
    echo "<strong>THIS APPLICATION DOESNT EXISTS.</strong>";
}
$conn->close();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Truck Driver Application for Qualification</title>
  <meta name="description" content="Tracan Trucking application">
  <meta name="author" content="wilevx.fr">

  <style>
    body {
	  padding-left: 10%;
	  padding-right: 10%;
	  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
	  margin-top:10px;
	}
    .main {
	  padding-left: 5%;
	  padding-right: 5%;
	  background-color: rgb(229, 246, 255);
	  -webkit-box-shadow: 1px 0px 6px 0px rgba(168,168,168,1);
	  -moz-box-shadow: 1px 0px 6px 0px rgba(168,168,168,1);
	  box-shadow: 1px 0px 6px 0px rgba(168,168,168,1);
    }
    .boxline {
	  border-width: 3px;
	  padding: 20px;
	  border-style: solid;
	  border-color: #3157a4;
    }
    input {
      background-color: #ffffff;
      height: 20px;
      border: 0.5px solid #9497c8;
      padding-left: 5px;
    }
    .input-set{
      display: inline-block;
      padding-bottom: 5px;
      padding-right: 10px;
    }
    h2{
	  padding-top: 30px;
	  margin-top:0;
    }
    .heading{
      border-bottom: 2px solid #3157a4;
    }
    .loaded{
        font-weight: bold;
        text-indent: 10px;
        background: #b3cdda;
        padding: 5px;
        line-height: 30px;
    }
    @media print {
        *{
            font-size:13px;
            float:none;
        }
        h2{
            font-size:17px;
        }
        .pagebreak {
            page-break-after: always;
        }
        body{
            padding:0;
        }
        .main {
        padding-left: 0%;
        padding-right: 0%;
        background-color: rgb(255, 255, 255);
        -webkit-box-shadow: 0px 0px 0px 0px rgba(168,168,168,0);
        -moz-box-shadow: 0px 0px 0px 0px rgba(168,168,168,0);
        box-shadow: 0px 0px 0px 0px rgba(168,168,168,0);
        }
        .loaded{
            font-weight: bold;
            text-indent: 10px;
            background: #b3cdda;
            border-bottom: 1px dotted #000;
            text-decoration: none;
            padding: 0px;
            line-height: 10px;
        }
        .printhide{
            display:none;
        }
    }
  </style>
</head>

<body>

    <div class="main">
    <button class="printhide" onclick="window.location.href = window.location.href.replace('view','edit');">EDIT THIS APPLICATION</button>
        <form id="appform" action="submit.php" method="POST">
            <h2>Truck Driver Application for Qualification</h2>
            <h1>SOLY LANDLINE LLC.</h1> 
            <h3>1816 E Abram St.</h3>
            <h4>Arlington, TX 76010</h4>
            <h4>Phone: 817-875-6821</h4>
            <h4>Fax: 877-801-5935</h4>
            <p>In compliance with Federal and State equal opportunity laws, qualified applicants are considered for all positions without regard to race, religion, sex, national origin, age, marital status, or non-job related disability. Please answer all questions.</p>
            <p><div class="input-set"><label for="input_0">Date of Application: </label> <?php echo "<span class=\"loaded\">". $output['applicationDate']."</span>"; ?></div></p>
            <div class="boxline">
                <h3>TO BE READ AND SIGNED BY APPLICANT</h3>
                <p>
                    I authorize you to make such investigations and inquiries of my personal, employment, financial or medical history and other related matters as may be necessary in arriving at an employment decision. (Generally, inquiries regarding medical history will be made only if and after a conditional offer of employment has been extended.) I hereby release employers, schools, health care providers and other persons from all liability in responding to inquiries and releasing information in connection with my application.
                    In the event of employment, I understand that false or misleading information given in my application or interview(s) may result in discharge. I understand, also, that I am required to abide by all rules and regulations of the Company.
                </p>
                <p>I understand that information I provide regarding current and/or previous employers may be used, and those employer(s) will be contacted, for the purpose of investigating my safety performance history as required by 49 CFR 391.23(d) and (e). I understand that I have the right to:</p>
                <ul>
                    <li>Review information provided by previous employer; and</li>
                    <li>Have errors in the information corrected by previous employers and for those previous employers to re-send the corrected inlormation to the prospective employer; and</li>
                    <li>Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information.</li>
                </ul>
                <br>
                <p><div class="input-set"><label for="input_1">Signature (Name): </label> <?php echo "<span class=\"loaded\">". $output['signatureName']."</span>"; ?></div><div class="input-set"><label for="input_2">Date: </label> <?php echo "<span class=\"loaded\">". $output['signatureDate']."</span>"; ?></div></p>
            </div>
            <div class="pagebreak"></div><div class="input-set">
            <h1 class="heading"> Applicant to complete </h1>

            <p><div class="input-set"><label for="input_3">Last Name: </label> <?php echo "<span class=\"loaded\">". $output['applicantLastName']."</span>"; ?></div><div class="input-set"><label for="input_4">First Name: </label> <?php echo "<span class=\"loaded\">". $output['applicantFirstName']."</span>"; ?></div><div class="input-set"><label for="input_5">Middle Name: </label> <?php echo "<span class=\"loaded\">". $output['applicantMiddleName']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_6">SSN: </label> <?php echo "<span class=\"loaded\">". $output['applicantSSN']."</span>"; ?></div><div class="input-set"><label for="input_7">Date of Birth: </label> <?php echo "<span class=\"loaded\">". $output['applicantDOB']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_8">CDL Driver's License #: </label> <?php echo "<span class=\"loaded\">". $output['applicantCDL']."</span>"; ?></div><div class="input-set"><label for="input_9">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantCDLState']."</span>"; ?></div><div class="input-set"><label for="input_10">Expiration Date: </label> <?php echo "<span class=\"loaded\">". $output['applicantCDLExpiry']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_11">When was this license first issued? </label> <?php echo "<span class=\"loaded\">". $output['applicantCDLIssue']."</span>"; ?></div><div class="input-set"><label for="input_12">Years of CDL driving experience:  </label> <?php echo "<span class=\"loaded\">". $output['applicantCDLExp']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_13">Medical Exam: Date of Issue: </label> <?php echo "<span class=\"loaded\">". $output['applicantMedicalIssue']."</span>"; ?></div><div class="input-set"><label for="input_14">Expiration Date: </label> <?php echo "<span class=\"loaded\">". $output['applicantMedicalExpiry']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_15">Applying for: Owner Operator/Contracted Driver </label> <?php echo "<span class=\"loaded\">". $output['applicantApplying']."</span>"; ?></div><div class="input-set"><label for="input_16">E-mail address: </label> <<?php echo "<span class=\"loaded\">". $output['applicantEmail']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_17">If contracted driver list Owner of Truck </label> <?php echo "<span class=\"loaded\">". $output['applicantOwnerTruck']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_18">Current Address: Street: </label> <?php echo "<span class=\"loaded\">". $output['applicantCurrStreet']."</span>"; ?></div><div class="input-set"><label for="input_19">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantCurrCity']."</span>"; ?></div><div class="input-set"><label for="input_20">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantCurrState']."</span>"; ?></div><div class="input-set"><label for="input_21">Zip Code: </label> <?php echo "<span class=\"loaded\">". $output['applicantCurrZip']."</span>"; ?></div><div class="input-set"><label for="input_22">How long? </label> <?php echo "<span class=\"loaded\">". $output['applicantCurrDuration']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_23">Home Phone #: </label> <?php echo "<span class=\"loaded\">". $output['applicantHomePhone']."</span>"; ?></div><div class="input-set"><label for="input_24">Cell Phone #: </label> <?php echo "<span class=\"loaded\">". $output['applicantCellPhone']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_25">Emergency Contact Name: </label> <?php echo "<span class=\"loaded\">". $output['applicantEmergencyName']."</span>"; ?></div><div class="input-set"><label for="input_26">Phone #: </label> <?php echo "<span class=\"loaded\">". $output['applicantEmergencyPhone']."</span>"; ?></div></p>
            <b>Please list all residence for the past three years (leave blank if none). </b>
            <p><div class="input-set"><label for="input_27">Street: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceOneStreet']."</span>"; ?></div><div class="input-set"><label for="input_28">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceOneCity']."</span>"; ?></div><div class="input-set"><label for="input_29">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceOneState']."</span>"; ?></div><div class="input-set"><label for="input_30">Zip Code: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceOneZip']."</span>"; ?></div><div class="input-set"><label for="input_31">How long? </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceOneDuration']."</span>"; ?></div></p>

            <p><div class="input-set"><label for="input_27">Street: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceTwoStreet']."</span>"; ?></div><div class="input-set"><label for="input_28">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceTwoCity']."</span>"; ?></div><div class="input-set"><label for="input_29">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceTwoState']."</span>"; ?></div><div class="input-set"><label for="input_30">Zip Code: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceTwoZip']."</span>"; ?></div><div class="input-set"><label for="input_31">How long? </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceTwoDuration']."</span>"; ?></div></p>
            
            <p><div class="input-set"><label for="input_27">Street: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceThreeStreet']."</span>"; ?></div><div class="input-set"><label for="input_28">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceThreeCity']."</span>"; ?></div><div class="input-set"><label for="input_29">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceThreeState']."</span>"; ?></div><div class="input-set"><label for="input_30">Zip Code: </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceThreeZip']."</span>"; ?></div><div class="input-set"><label for="input_31">How long? </label> <?php echo "<span class=\"loaded\">". $output['applicantResidenceThreeDuration']."</span>"; ?></div></p>
            <p><div class="input-set">Do you have the legal right to work in the United States? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantRightToWork']."</span>"; ?></div></p>
            <p><div class="input-set">Have you worked for this company before? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantEmployedByUs']."</span>"; ?></div></p>

            <span id="showhide_0" style="<?php if($output['applicantEmployedByUs'] == "no"){echo 'display:none;';}?>"><p><div class="input-set"><label for="input_44">Dates from: </label> <?php echo "<span class=\"loaded\">". $output['applicantEmployedByUsFrom']."</span>"; ?></div><div class="input-set"><label for="input_45"> to </label> <?php echo "<span class=\"loaded\">". $output['applicantEmployedByUsTo']."</span>"; ?></div><div class="input-set"><label for="input_46">Reason for leaving: </label> <?php echo "<span class=\"loaded\">". $output['applicantEmployedByUsReasonLeft']."</span>"; ?></div></p></span>
            <p><div class="input-set">Are you now employed? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantNowEmployed']."</span>"; ?></div></p>
            <span id="showhide_1"><p><div class="input-set"><label for="input_49">Date since last employment: </label> <?php echo "<span class=\"loaded\">". $output['applicantDateSinceEmployment']."</span>"; ?></div></p></span>
            <p><div class="input-set"><label for="input_50">Who referred you? </label> <?php echo "<span class=\"loaded\">". $output['applicantReferer']."</span>"; ?></div></p>
            <p><div class="input-set">Have you ever been convicted of a felony?<div class="input-set"> <?php echo "<span class=\"loaded\">". $output['applicantConvicted']."</span>"; ?></div></p>
            <span id="showhide_2" style="<?php if($output['applicantConvicted'] == "no"){echo 'display:none;';}?>"><p><label for="input_52">Please explain fully. Conviction of a crime is not an automatic bar to employment. All circumstances will be considered. <br></label><?php echo "<span class=\"loaded\">". $output['applicantConvictedDetails']."</span>"; ?></p></span>
            </div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
            <h3 class="heading">Education</h3>
            <p><div class="input-set"><label for="input_53">High School Attended: </label> <?php echo "<span class=\"loaded\">". $output['applicantHighSchool']."</span>"; ?></div><div class="input-set"><label for="input_54">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantHighSchoolCity']."</span>"; ?></div><div class="input-set"><label for="input_55">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantHighSchoolState']."</span>"; ?></div><div class="input-set">Graduated? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantHighSchoolGraduated']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_57">College Trade School Attended: </label> <?php echo "<span class=\"loaded\">". $output['applicantCollege']."</span>"; ?></div><div class="input-set"><label for="input_58">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantCollegeCity']."</span>"; ?></div><div class="input-set"><label for="input_59">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantCollegeState']."</span>"; ?></div><div class="input-set">Graduated? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantCollegeGraduated']."</span>"; ?></div></p>
            <p><div class="input-set"><label for="input_61">Driving School Attended: </label><?php echo "<span class=\"loaded\">". $output['applicantDrivingSchool']."</span>"; ?></div><div class="input-set"><label for="input_62">City: </label> <?php echo "<span class=\"loaded\">". $output['applicantDrivingSchoolCity']."</span>"; ?></div><div class="input-set"><label for="input_63">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantDrivingSchoolState']."</span>"; ?></div><div class="input-set"><label for="input_64">Completion date: </label> <?php echo "<span class=\"loaded\">". $output['applicantDrivingSchoolCompleted']."</span>"; ?></div></p>
            <p><div class="input-set">Have you <b>ever</b> been convicted of/or having a pending DWI/DUI? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantHasDUI']."</span>"; ?></div> <div class="input-set"><span id="showhide_3" style="<?php if($output['applicantHasDUI'] == "no"){echo 'display:none;';}?>"><label for="input_66">When? </label> <?php echo "<span class=\"loaded\">". $output['applicantDUIDate']."</span>"; ?></span></div></p>
            <p><div class="input-set">Have you <b>ever</b> had a positive pre-employment random or post-accident drug/alcohol test?<div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantDrugTest']."</span>"; ?></div> <div class="input-set"><span id="showhide_4" style="<?php if($output['applicantDrugTest'] == "no"){echo 'display:none;';}?>"><label for="input_68">When? </label> <?php echo "<span class=\"loaded\">". $output['applicantDrugTestDate']."</span>"; ?></div></p>
            <p><div class="input-set">Have you <b>ever</b> refused a random or post-accident drug / alcohol test? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantDrugTestRefused']."</span>"; ?></div> <div class="input-set"><span id="showhide_5" style="<?php if($output['applicantDrugTestRefused'] == "no"){echo 'display:none;';}?>"><label for="input_70">When? </label> <?php echo "<span class=\"loaded\">". $output['applicantDrugTestRefusedDate']."</span>"; ?></span></div></p>
            </div></div></div></div></div></div><div class="pagebreak"></div><div class="input-set"><div class="input-set">
            <h2 class="heading"> Employment Record </h2>
            <h4> Please start with the most recent employer.</h4>
            <p>
                In accordance with <i>FMCSR 391.21 & .23</i>, an applicant must list all previous work experience for the three (3) years prior to the date of the application shown on page one, as well as all commercial driving experience for the seven (7) year period prior to those three years, for a total of 10 years. Include your job description, date of employment, reason for leaving and whether you were subject to FMCSA & U.S. DOT alcohol and controlled substance testing requirements for each job listed. Please start with the most recent employer. lnclude self-employment or time leased to another carrier. Any gaps in employment (including unemployment or retirement) must be explained.
            </p>
            <br>
            <div id="employers">
            <?php
            $servername = "localhost";
            $username = "ANM";
            $password = "Jamal1963@";
            $dbname = "ANMtransport";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "SELECT * FROM employers WHERE driver = ".preg_replace("/[^0-9,.]/", "", $_GET['id']);
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo'<p><div class="input-set"><label for="input_71">Employer: </label><span class="loaded"> '.$row['employer'].' </span></div><div class="input-set"><label for="input_72">From </label> <span class="loaded"> '.$row['employedFrom'].' </span></div><div class="input-set"><label for="input_73">To </label> <span class="loaded"> '.$row['employedTo'].' </span></div></p>
                   <p><div class="input-set"><label for="input_74">Address: </label> <span class="loaded"> '.$row['address'].' </span> </div><div class="input-set"><label for="input_75">City: </label> <span class="loaded"> '.$row['city'].' </span> </div><div class="input-set"><label for="input_76">State: </label><span class="loaded"> '.$row['state'].' </span></div><div class="input-set"><label for="input_77">Zip: </label><span class="loaded"> '.$row['zip'].' </span></div></p>
                   <p><div class="input-set"><label for="input_78">Phone #: </label><span class="loaded"> '.$row['phone'].' </span></div><div class="input-set"><label for="input_79">Contact person: </label> <span class="loaded"> '.$row['contact'].' </span> </div></p>
                   <p><div class="input-set"><label for="input_80">Equipment Operated: </label><span class="loaded"> '.$row['equipment'].' </span></div><div class="input-set"><label for="input_81">Average Lenght of Haul: </label> <span class="loaded"> '.$row['averageLength'].' </span> </div></p>
                   <p><div class="input-set"><label for="input_82">Position Held: </label> <span class="loaded"> '.$row['position'].' </span> </div><div class="input-set"><label for="input_83">Reason for Leaving: </label> <span class="loaded"> '.$row['reasonLeft'].' </span></div></p>
                   <p><div class="input-set">Were you subject to Federal Motor Carrier Safety Regulations (FMCSRs) at this employer? <div class="input-set"><span class="loaded"> '.$row['FMCSRs'].' </span><div class="input-set"></div></p>
                   <p><div class="input-set">Was this a safety sensitive function as designated by the DOT and subject to 49 CFR part 402? <div class="input-set"><span class="loaded"> '.$row['safetySensitive'].' </span></div></p><br/>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            </div>
            <br /><br />
            </div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
            <h3 class="heading">Accident Record</h3>  <p>List of all motor vehicle accidents in which the applicant was involved during the last 3 years. If none, leave blank.</p><br>


            <p><div class="input-set"><label for="input_84">Date: </label> <?php echo "<span class=\"loaded\">". $output['accidentOneDate']."</span>"; ?></div><div class="input-set"><label for="input_85">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label> <?php echo "<span class=\"loaded\">". $output['accidentOneNature']."</span>"; ?></div><div class="input-set"><label for="input_86">Fatalities: </label> <?php echo "<span class=\"loaded\">". $output['accidentOneFatalities']."</span>"; ?></div><div class="input-set"><label for="input_87">Injuries: </label> <?php echo "<span class=\"loaded\">". $output['accidentOneInjuries']."</span>"; ?></div></p>
            
            <p><div class="input-set"><label for="input_84">Date: </label> <?php echo "<span class=\"loaded\">". $output['accidentTwoDate']."</span>"; ?></div><div class="input-set"><label for="input_85">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label> <?php echo "<span class=\"loaded\">". $output['accidentTwoNature']."</span>"; ?></div><div class="input-set"><label for="input_86">Fatalities: </label> <?php echo "<span class=\"loaded\">". $output['accidentTwoFatalities']."</span>"; ?></div><div class="input-set"><label for="input_87">Injuries: </label> <?php echo "<span class=\"loaded\">". $output['accidentTwoInjuries']."</span>"; ?></div></p>
            
            <p><div class="input-set"><label for="input_84">Date: </label> <?php echo "<span class=\"loaded\">". $output['accidentThreeDate']."</span>"; ?></div><div class="input-set"><label for="input_85">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label> <?php echo "<span class=\"loaded\">". $output['accidentThreeNature']."</span>"; ?></div><div class="input-set"><label for="input_86">Fatalities: </label> <?php echo "<span class=\"loaded\">". $output['accidentThreeFatalities']."</span>"; ?></div><div class="input-set"><label for="input_87">Injuries: </label> <?php echo "<span class=\"loaded\">". $output['accidentThreeInjuries']."</span>"; ?></div></p>
            
            <br /><h3 class="heading">Traffic Convictions</h3> <p> list of all violations of motor vehicle laws or ordinances (other than violations involving only parking) of which the applicant was <u>convicted or forfeited bond or collateral</u> during the past 3 years. If none, leave blank</p><br>
            <p><div class="input-set"><label for="input_96">City/St </label> <?php echo "<span class=\"loaded\">". $output['convictionOneCity']."</span>"; ?></div><div class="input-set"><label for="input_97">Date: </label> <?php echo "<span class=\"loaded\">". $output['convictionOneDate']."</span>"; ?></div><div class="input-set"><label for="input_98">Charge (Include miles over if speeding): </label> <?php echo "<span class=\"loaded\">". $output['convictionOneCharge']."</span>"; ?></div><div class="input-set"><label for="input_99">Penalty: </label> <?php echo "<span class=\"loaded\">". $output['convictionOnePenalty']."</span>"; ?></div></p>
            
            <p><div class="input-set"><label for="input_96">City/St </label> <?php echo "<span class=\"loaded\">". $output['convictionTwoCity']."</span>"; ?></div><div class="input-set"><label for="input_97">Date: </label> <?php echo "<span class=\"loaded\">". $output['convictionTwoDate']."</span>"; ?></div><div class="input-set"><label for="input_98">Charge (Include miles over if speeding): </label> <?php echo "<span class=\"loaded\">". $output['convictionTwoCharge']."</span>"; ?></div><div class="input-set"><label for="input_99">Penalty: </label> <?php echo "<span class=\"loaded\">". $output['convictionTwoPenalty']."</span>"; ?></div></p>
            
            <p><div class="input-set"><label for="input_96">City/St </label> <?php echo "<span class=\"loaded\">". $output['convictionThreeCity']."</span>"; ?></div><div class="input-set"><label for="input_97">Date: </label> <?php echo "<span class=\"loaded\">". $output['convictionThreeDate']."</span>"; ?></div><div class="input-set"><label for="input_98">Charge (Include miles over if speeding): </label> <?php echo "<span class=\"loaded\">". $output['convictionThreeCharge']."</span>"; ?></div><div class="input-set"><label for="input_99">Penalty: </label> <?php echo "<span class=\"loaded\">". $output['convictionThreePenalty']."</span>"; ?></div></p>
            <br /><h3 class="heading">Experience and Qualifications - Driver</h3>
            <p> All driver licenses or permits held in the past 3 years</p><br />
            <p><div class="input-set"><label for="input_108">State: </label> <?php echo "<span class=\"loaded\">". $output['licenceOneState']."</span>"; ?></div><div class="input-set"><label for="input_109">Licence No.: </label> <?php echo "<span class=\"loaded\">". $output['licenceOneNO']."</span>"; ?></div><div class="input-set"><label for="input_110">Type: </label> <?php echo "<span class=\"loaded\">". $output['licenceOneType']."</span>"; ?></div><div class="input-set"><label for="input_111">Expiration Date: </label> <?php echo "<span class=\"loaded\">". $output['licenceOneExp']."</span>"; ?></div></p>

            <p><div class="input-set"><label for="input_108">State: </label> <?php echo "<span class=\"loaded\">". $output['licenceTwoState']."</span>"; ?></div><div class="input-set"><label for="input_109">Licence No.: </label> <?php echo "<span class=\"loaded\">". $output['licenceTwoNO']."</span>"; ?></div><div class="input-set"><label for="input_110">Type: </label> <?php echo "<span class=\"loaded\">". $output['licenceTwoType']."</span>"; ?></div><div class="input-set"><label for="input_111">Expiration Date: </label> <?php echo "<span class=\"loaded\">". $output['licenceTwoExp']."</span>"; ?></div></p>
            
            <p><div class="input-set"><label for="input_108">State: </label> <?php echo "<span class=\"loaded\">". $output['licenceThreeState']."</span>"; ?></div><div class="input-set"><label for="input_109">Licence No.: </label> <?php echo "<span class=\"loaded\">". $output['licenceThreeNO']."</span>"; ?></div><div class="input-set"><label for="input_110">Type: </label> <?php echo "<span class=\"loaded\">". $output['licenceThreeType']."</span>"; ?></div><div class="input-set"><label for="input_111">Expiration Date: </label> <?php echo "<span class=\"loaded\">". $output['licenceThreeExp']."</span>"; ?></div></p>

            <p><div class="input-set">A. Have you ever been denied a license, permit or privilege to operate a motor vehicle? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantDeniedLicence']."</span>"; ?></div></p>
            <p><div class="input-set">B. Has any license, permit or privilege ever been suspended or revoked? <div class="input-set"><?php echo "<span class=\"loaded\">". $output['applicantRevokedLicence']."</span>"; ?></div></p>
            <p><label for="input_122">If the answer to either A or B is yes, give details </label><br> <?php echo "<span class=\"loaded\">". $output['applicantLicenseDetails']."</span>"; ?></p>
            </div></div></div><div class="pagebreak"></div><div class="input-set">
            <br /><h3 class="heading">Driving Experience</h3>
            <p>Check yes or no.</p><br />

            <p><div class="input-set">Straight Truck (Van, Tank, Flat, Dump Reefer): <div class="input-set"><?php echo "<span class=\"loaded\">". $output['experienceStraightTruck']."</span>"; ?></div> <span id="showhide_6" style="<?php if($output['experienceStraightTruck'] == "no"){echo 'display:none;';}?>"><div class="input-set"><label for="input_124">From: </label> <?php echo "<span class=\"loaded\">". $output['experienceStraightTruckFrom']."</span>"; ?></div><div class="input-set"><label for="input_125">To: </label> <?php echo "<span class=\"loaded\">". $output['experienceStraightTruckTo']."</span>"; ?></div><div class="input-set"><label for="input_126">Approx No. of Miles (Total): </label> <?php echo "<span class=\"loaded\">". $output['experienceStraightTruckMiles']."</span>"; ?></div></span></p>
            
            <p><div class="input-set">Tractor & Semi-trailer (Van, Tank, Flat, Dump Reefer): <div class="input-set"><?php echo "<span class=\"loaded\">". $output['experienceSemiTrailer']."</span>"; ?></div> <span id="showhide_6" style="<?php if($output['experienceSemiTrailer'] == "no"){echo 'display:none;';}?>"><div class="input-set"><label for="input_124">From: </label> <?php echo "<span class=\"loaded\">". $output['experienceSemiTrailerFrom']."</span>"; ?></div><div class="input-set"><label for="input_125">To: </label> <?php echo "<span class=\"loaded\">". $output['experienceSemiTrailerTo']."</span>"; ?></div><div class="input-set"><label for="input_126">Approx No. of Miles (Total): </label> <?php echo "<span class=\"loaded\">". $output['experienceSemiTrailerMiles']."</span>"; ?></div></span></p>
            
            <p><div class="input-set">Tractor - Two Trailers (Van, Tank, Flat, Dump Reefer): <div class="input-set"><?php echo "<span class=\"loaded\">". $output['experienceTwoTrailers']."</span>"; ?></div> <span id="showhide_6" style="<?php if($output['experienceTwoTrailers'] == "no"){echo 'display:none;';}?>"><div class="input-set"><label for="input_124">From: </label> <?php echo "<span class=\"loaded\">". $output['experienceTwoTrailersFrom']."</span>"; ?></div><div class="input-set"><label for="input_125">To: </label> <?php echo "<span class=\"loaded\">". $output['experienceTwoTrailersTo']."</span>"; ?></div><div class="input-set"><label for="input_126">Approx No. of Miles (Total): </label> <?php echo "<span class=\"loaded\">". $output['experienceTwoTrailersMiles']."</span>"; ?></div></span></p>
            
            <p><div class="input-set">Tractor - Three Trailers (Van, Tank, Flat, Dump Reefer): <div class="input-set"><?php echo "<span class=\"loaded\">". $output['experienceThreeTrailers']."</span>"; ?></div> <span id="showhide_6" style="<?php if($output['experienceThreeTrailers'] == "no"){echo 'display:none;';}?>"><div class="input-set"><label for="input_124">From: </label> <?php echo "<span class=\"loaded\">". $output['experienceThreeTrailersFrom']."</span>"; ?></div><div class="input-set"><label for="input_125">To: </label> <?php echo "<span class=\"loaded\">". $output['experienceThreeTrailersTo']."</span>"; ?></div><div class="input-set"><label for="input_126">Approx No. of Miles (Total): </label> <?php echo "<span class=\"loaded\">". $output['experienceThreeTrailersMiles']."</span>"; ?></div></span></p>
            
            <p><div class="input-set">Motorcoach - School Bus: <div class="input-set"><?php echo "<span class=\"loaded\">". $output['experienceMotorCoach']."</span>"; ?></div> <span id="showhide_6" style="<?php if($output['experienceMotorCoach'] == "no"){echo 'display:none;';}?>"><div class="input-set"><label for="input_124">From: </label> <?php echo "<span class=\"loaded\">". $output['experienceMotorCoachFrom']."</span>"; ?></div><div class="input-set"><label for="input_125">To: </label> <?php echo "<span class=\"loaded\">". $output['experienceMotorCoachTo']."</span>"; ?></div><div class="input-set"><label for="input_126">Approx No. of Miles (Total): </label> <?php echo "<span class=\"loaded\">". $output['experienceMotorCoachMiles']."</span>"; ?></div></span></p>
            
            <p><div class="input-set">Other: <div class="input-set"><?php echo "<span class=\"loaded\">". $output['experienceOther']."</span>"; ?></div> <span id="showhide_12" style="<?php if($output['experienceOther'] == "no"){echo 'display:none;';}?>">Type of Equipment: <?php echo "<span class=\"loaded\">". $output['experienceOtherType']."</span>"; ?></div><div class="input-set"><label for="input_148">From: </label> <?php echo "<span class=\"loaded\">". $output['experienceOtherFrom']."</span>"; ?></div><div class="input-set"><label for="input_149">To: </label> <?php echo "<span class=\"loaded\">". $output['experienceOtherTo']."</span>"; ?></div><div class="input-set"><label for="input_150">Approx No. of Miles (Total): </label> <?php echo "<span class=\"loaded\">". $output['experienceOtherMiles']."</span>"; ?></div></span></p>
            <p><label for="input_151">List states operated in for last five years: </label><br> <?php echo "<span class=\"loaded\">". $output['applicantStatesOperated']."</span>"; ?></p>
            <p><label for="input_152">Show special courses or training that will help you as a driver: </label> <br> <?php echo "<span class=\"loaded\">". $output['applicantSpecialCourses']."</span>"; ?></p>
            <p><label for="input_153">Which safe driving awards do you hold and from whom? </label> <br> <?php echo "<span class=\"loaded\">". $output['applicantAwards']."</span>"; ?></p>
            <h3 class="heading">Experience and Qualifications - Other</h3>
            <p><label for="input_154">Show any trucking, transporting or other than shown elsewhere in this application: </label> <br> <?php echo "<span class=\"loaded\">". $output['applicantOtherExperience']."</span>"; ?></p>
            <p><label for="input_155">List courses and training other than shown elsewhere in this application: </label> <br> <?php echo "<span class=\"loaded\">". $output['applicantOtherTraining']."</span>"; ?></textarea></p>
            <p><label for="input_156">List special equipment or technical materials you can work with other than those already shown: </label> <br> <?php echo "<span class=\"loaded\">". $output['applicantOtherEquipment']."</span>"; ?></p>
            <p><div class="input-set"><label for="input_157">Signature (Name): </label> <?php echo "<span class=\"loaded\">". $output['applicantSignatureFinal']."</span>"; ?></div><div class="input-set"><label for="input_158">Date: </label> <?php echo "<span class=\"loaded\">". $output['applicantSignatureDate']."</span>"; ?></div></p>
            </div></div></div></div></div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
            <br /><h3 class="heading">Pre-employment qualification Drug/Alcohol testing notification and consent</h3>
            <div class="boxline">
                <h3>TO BE READ AND ACCEPTED BY THE APPLICANT</h3>
                <p>
                    I understand as required by the Federal Motor Carrier Safety Regulations,49 CFR part 391.103, and
                    company policy, all prospective drivers must submit to a controlled substance test involving collection of
                    a urine sample which will be tested for the following controlled substances; marijuana. cocaine, opiates,
                    amphetamines, and phencyclidine (PCP). I understand I am also subject regulatory alcohol testing and any
                    other Substance Abuse Testing in accordance with the company policy and/or regulatory requirements.</p>
                <p>I understand, if I test positive for use of controlled substances, I am not medically qualified to operate a
                commercial motor vehicle in interstate commerce. I also understand I will be given a reasonable
                opportunity to confer with the company's Medical Review Officer before any positive test is reported to
                the company. I further understand that once a positive test has been confirmed by the Medical Review
                Officer, I must at my own expense be evaluated by a Substance Abuse Professional (SAP), submit to any
                required treatment, and obtain a release by the Substance Abuse Professional prior to operating a
                commercial motor vehicle in interstate commerce</p>
                <p>The result of any Substance Abuse test will be maintained by the Medical Review Ofticcr for the
                company who will report whether the test result was negative or positive to the motor carrier. The
                Medical Review Officer or the company may also release the result to my examining physician in
                connection with my DOT required medical exam. The results will only be released to additional parties in
                accordance witlr the regulations.
                </p>

                <p>I hereby agree lo submit to require Substance Abuse Testing (drug and/or alcohol)</p>
                <br>
                <p>
                <?php echo "<span class=\"loaded\">". $output['applicationDate']."</span>"; ?>
                <?php echo "<span class=\"loaded\">". $output['signatureName']."</span>"; ?></p>
            </div>
            <br/><br/>
            </div></div></div></div></div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
            <br /><h3 class="heading">CERTIFICATE OF COMPLIANCE WITH DRIVER LICENSE REQUIREMENTS</h3>
            <div class="boxline">
                <h3>TO BE READ AND ACCEPTED BY THE APPLICANT</h3>
                <p>
                MOTOR CARRIER INSTRUCTIONS: The requirements in Part 383 apply to every driver who
                operates in intrastate, interstate, or foreign commerce and operates a vehicle weighing 26.001 pounds or
                more. can transport more than 15 people, or transports hazardous material that require placarding.
                The requirements in Part 391 apply to every driver who operates commerce and operates a vehicle
                weighing 10,001 pounds or more- can transport more than 15 people, or transports hazardous materials
                that placarding.
                </p>

                <p>DRIVER REQUIREMENTS: Parts 383 and 391 of the Federal Motor Carrier safety Regulations contain some requirements that you as a driver must comply with. These requirements are in effect as of July 1, 1997. They are as follows:</p>
                    <ul>
                    <li><strong>1.	POSSESS ONLY ONE LICENSE:</strong><br/> You as a commercial vehicle driver may not possess more than one motor vehicle operator's license. If you have more than one license, keep the license from your state of residence and return the additional licenses to the states that issued them. DESTROYING a license does not close the record in the state that issued it: you must notify that state. If a multiple license has been lost, stolen, or destroyed. close your record by notifying the state of issuance that you no longer want to be licensed by that state.</li>
                    <li><strong>2.	NOTIFICATION OF LICENSE SUSPENSION, REVOCATION OR CANCELLATION: </strong>
                    <br/>Sections 391.15
                    (b) (2) and 383.33 of the Federal Motor Carrier Safety Regulations require that you notify your employer the NEXT BUSINESS DAY of any revocation or suspension of your driver's license. In addition, Section 383.31 requires that any time you violate a state or local traffic law (other than parking). you must report it within 30 days to: l . Your employing motor carrier, and 2. the state that issued your license. (If the violation occurs in a state other than the one which issued your license.) The notification to both the employer and state must be in writing.

                    </li>
                    </ul>

                <p>The following license is the only one I will possess:</p>
                <br>
                <p><div class="input-set"><label for="input_8">CDL Driver's License #: </label> <?php echo "<span class=\"loaded\">". $output['applicantCDL']."</span>"; ?></div><div class="input-set"><label for="input_9">State: </label> <?php echo "<span class=\"loaded\">". $output['applicantCDLState']."</span>"; ?></div><div class="input-set"><label for="input_10">Expiration Date: </label> <?php echo "<span class=\"loaded\">". $output['applicantCDLExpiry']."</span>"; ?></div></p>
                <p><?php echo "<span class=\"loaded\">". $output['applicationDate']."</span>"; ?>
                <?php echo "<span class=\"loaded\">". $output['signatureName']."</span>"; ?></p>
            </div>
            <br/><br/>
            </div></div></div></div></div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
            <br /><h3 class="heading">IMPORTANT NOTICE REGARDING BACKGROUND REPORTS FROM THE PSI) Online Service</h3>
            <div class="boxline">
                <h3>TO BE READ AND ACCEPTED BY THE APPLICANT</h3>
                <p>
                I. In connection with your application for employment with SOLY LANDLINE LLC ("Prospective Employer"), Prospective Employer. its employees, agents or contractors may obtain one or more reports regarding your driving, and safety inspection history from the Federal Motor Carrier Safety Administration (FMCSA).</p>
                <p>When the application for employment is submitted in person. if the Prospective Employer uses any information it obtains from FMCSA in a decision to not hire you or to make any other adverse employment decision regarding you. the Prospective Employer will provide you with a copy of the report upon which its decision was ba.sed and a written summary of your rights under the Fair Credit Reporting Act before taking any final adverse action. If any final adverse action is taken against you based upon your driving history or safety report, the Prospective Employer will notify you that the action has been taken and that the action was based in pan or in whole on this report.</p>

                
                <p>When the application for employment is submitted by mail. telephone. computer. or other similar means, if the Prospective Employer uses any inlörmation it obtains from FMCSA in a decision to not hire you or to make any other adverse employment decision regarding you, the Prospective Employer must provide you within three business days of taking adverse action oral.   or electronic notification: that adverse action has been taken bused in whole or in part on information obtained from FMCSA; the name. address. and thc toll frec tclcphone number of FMCSA. that the FMCS,A did not muke the decision to take the adverse action and is unable to provide you the specific reasons why the adverse action was taken; and that you may, upon providing proper identification, request a free copy of the report and may dispute with the FMCS,A the accuracy or completeness of any information or report. If you request a copy of a driver record from the Prospective Employer who procured the report, then. within 3 business days of receiving your request. together with proper identification. the Prospective Employer must send or provide to you a copy of your report and a summary of your rights under the Fair Credit Reporting Act.</p>

                    <p>If you agree that the Prospective Employer may obtain such background reports, please read the following and sign below.
<br/>2.	I authorize SOLY LANDLINE LLC ("Prospective Employer") to access the FMCSA Pre-Employment Screening Program (PSP) system to seek information regarding my commercial driving safety record and information regarding my safety inspection history. I understand that I am consenting to the release of safety performance information including crash data from the previous five (5) years and inspection history from the previous three (3) years. I understand and acknowledge that this release of information may assist the Prospective Employer to make a determination regarding my suitability as an employee.
<br/>3.	I further understand that neither the Prospective Employer nor the FMCSA contractor supplying the crash and safety information has the capability to correct any safety data that appears to be incorrect. I understand I may challenge the accuracy of the data by submitting a request to https:/idataqs.fmcsa.dot.gov. If I am challenging crash or inspection information reported by a State. FMCSA cannot change or correct this data. I understand my request vvill be forwarded by the DataQs system to the appropriate State for adjudication.
<br/>4.	Please note: Any crash or inspection in which you were involved ssill display on your PSP report. Since the PSP report does not report, or assign, or imply fault, it will include all Commercial Motor Vehicle (CMV) crashes where you were a driver or co-driver and where those crashes were reported to FMCSA. regardless of fault. Similarly, all inspections, with or without violations. appear on the PSP report. State citations associated with FMCSR violations that have been adjudicated by a court of law will also appear. and remain. on a PSP report.
<br/>I have read the above Notice Regarding Background Reports provided to me by Prospective Employer and I understand that if I sign this consent form, Prospective Employer may obtain a report of my crash and inspection history. I hereby authorize Prospective Employer and its employees, authorized agents, and/or affiliates to obtain the information authorized above.
</p>
                <p>
                <?php echo "<span class=\"loaded\">". $output['applicationDate']."</span>"; ?>
                <?php echo "<span class=\"loaded\">". $output['signatureName']."</span>"; ?></p>
            </div>
           </div></div></div></div></div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
           <h3 class="heading">THE BELOW DISCLOSURE AND A UTHORIZATION LANGUAGE IS FOR MANDA TORY USE BY
ALL ACCOUNT HOLDERS
</h3>
            <div class="boxline">
                <h3>IMPORTANT DISCLOSURE
REGARDING BACKGROUND REPORTS FROM THE PSP Online Service
</h3>
                <p>
                In connection with your application for employment with 	TRANSPORT INC ("Prospective Employer"), Prospective Employer, its employees, agents or contractors may obtain one or more reports regarding your driving, and safety inspection history from the Federal Motor Carrier Safety Administration (FMCSA).
                When the application for employment is submitted in person, if the Prospective Employer uses any information it obtains from FMCSA in a decision to not hire you or to make any other adverse employment decision regarding you, the Prospective Employer will provide you with a copy of the report upon which its decision was based and a written summary of your rights under the Fair Credit Reporting Act before taking any final adverse action. If any final adverse action is taken against you based upon your driving history or safety report, the Prospective Employer will notify you that the action has been taken and that the action was based in part or in whole on this report.
                When the application for employment is submitted by mail, telephone, computer, or other similar means, if the Prospective Employer uses any information it obtains from FMCSA in a decision to not hire you or to make any other adverse employment decision regarding you, the Prospective Employer must provide you within three business days of taking adverse action oral, written or electronic notification: that adverse action has been taken based in whole or in part on information obtained from FMCSA; the name, address, and the toll free telephone number of FMCSA; that the FMCSA did not make the decision to take the adverse action and is unable to provide you the specific reasons why the adverse action was taken; and that you may, upon providing proper identification, request a free copy of the report and may dispute with the FMCSA the accuracy or completeness of any information or report. If you request a copy of a driver record from the Prospective Employer who procured the report, then, within 3 business days of receiving your request, together with proper identification, the Prospective Employer must send or provide to you a copy of your report and a summary of your rights under the Fair Credit Reporting Act.
                Neither the Prospective Employer nor the FMCSA contractor supplying the crash and safety information has the capability to correct any saféty data that appears to be incorrect. You may challenge the accuracy of the data by submitting a request to https://dataqs.fmcsa.dot.gov. If you challenge crash or inspection information reported by a State, FMCSA cannot change or correct this data. Your request will be forwarded by the DataQs system to the appropriate State for adjudication.
                Any crash or inspection in which you were involved will display on your PSP report. Since the PSP report does not report, or assign, or imply fault, it will include all Commercial Motor Vehicle (CMV) crashes where you were a driver or co-driver and where those crashes were reported to FMCSA, regardless of fault. Similarly, all inspections, with or without violations, appear on the PSP report. State citations associated with Federal Motor Carrier Safety Regulations (FMCSR) violations that have been adjudicated by a court of law will also appear, and rcmain, on a PSP report.
                The Prospective Employer cannot obtain background reports from FMCSA without your authorization.</div>
                </div></div></div></div></div></div></div></div></div><div class="pagebreak"></div><div class="input-set">
                <div class="boxline">
                <p><strong>AUTHORIZATION</strong></p>
                
                    <p>If you agree that the Prospective Employer may obtain such background reports, please read the following and sign below:
                    I authorize SOLY LANDLINE LLC ("Prospective Employer") to access the FMCSA Pre-Employment Screening Program (PSP) system to seek information regarding my commercial driving safety record and information regarding my safety inspection history. I understand that I am authorizing the release of safety performance information including crash data from the previous five (5) years and inspection history from the previous three (3) years. I understand and acknowledge that this release of information may assist the Prospective Employer to make a determination regarding my suitability as an employee.
                    I further understand that neither the Prospective Employer nor the FMCSA contractor supplying the crash and safety information has the capability to correct any safety data that appears to be incorrect. I understand I may challenge the accuracy of the data by submitting a request to https://dataqs.fmcsa.dot.gov. If I challenge crash or inspection information reported by a State, FMCSA cannot change or correct this data. I understand my request will be forwarded by the DataQs system to the appropriate State for adj udication.
                    I understand that any crash or inspection in which I was involved will display on my PSP report. Since the PSP report does not report, or assign, or imply fault, I acknowledge it will include all CMV crashes where I was a driver or co-driver and where those crashes were reported to FMCSA, regardless of fault. Similarly, I understand all inspections, with or without violations, will appear
                    1
                    on my PSP report and State citations associated with FMCSR violations that have been adjudicated by a court of law will also appear, and remain, on my PSP report. I have read the above Disclosure Regarding Background Repons provided to me by
                    Prospective Employer and I understand that if I sign this Disclosure and Authorization, Prospective Employer may obtain a report of my crash and inspection history. I hereby authorize Prospective Employer and its employees, authorized agents, and/or affiliates to obtain the information authorized above.
                    </p>

                <br>
                <p>
                <?php echo "<span class=\"loaded\">". $output['applicationDate']."</span>"; ?>
                <?php echo "<span class=\"loaded\">". $output['signatureName']."</span>"; ?></p>
            </div>

        </form>
        </div>
	<script>
		i = 1;
		function show(s) {
			document.getElementById(s).style.display = 'block';
		}
		function hide(s) {
			document.getElementById(s).style.display = 'none';
		}
		function addemployed() {
			document.getElementById('employers').insertAdjacentHTML('beforeend', ' <p><div class="input-set"><label for="input_71">Employer: </label> <input type="text" name="input_71[]" id="input_71" placeholder=""></div><div class="input-set"><label for="input_72">From </label> <input type="text" name="input_72[]" id="input_72" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_73">To </label> <input type="text" name="input_73[]" id="input_73" placeholder="MM/DD/YYYY"></div></p>'
			+'<p> <div class="input-set"><label for="input_74">Address: </label> <input type="text" name="input_74[]" id="input_74" placeholder=""></div><div class="input-set"><label for="input_75">City: </label> <input type="text" name="input_75[]" id="input_75" placeholder=""></div><div class="input-set"><label for="input_76">State: </label> <input type="text" name="input_76[]" id="input_76" placeholder=""></div><div class="input-set"><label for="input_77">Zip: </label> <input type="text" name="input_77[]" id="input_77" placeholder=""></div></p>'
			+'<p><div class="input-set"><label for="input_78">Phone #: </label> <input type="text" name="input_78[]" id="input_78" placeholder=""></div><div class="input-set"><label for="input_79">Contact person: </label> <input type="text" name="input_79[]" id="input_79" placeholder=""></div></p>'
			+'<p><div class="input-set"><label for="input_80">Equipment Operated: </label> <input type="text" name="input_80[]" id="input_80" placeholder=""></div><div class="input-set"><label for="input_81">Average Lenght of Haul: </label> <input type="text" name="input_81[]" id="input_81" placeholder=""></div></p>'
			+'<p><div class="input-set"><label for="input_82">Position Held: </label> <input type="text" name="input_82[]" id="input_82" placeholder=""></div><div class="input-set"><label for="input_83">Reason for Leaving: </label> <input type="text" name="input_83[]" id="input_83" placeholder=""></div></p>'
				+ '<p><div class="input-set">Were you subject to Federal Motor Carrier Safety Regulations (FMCSRs) at this employer? <div class="input-set"><input type="radio" name="input_159['+i+']" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_159['+i+']"  value="no" checked> No</div></div></p>'
				  +' <p><div class="input-set">Was this a safety sensitive function as designated by the DOT and subject to 49 CFR part 402? <div class="input-set"><input type="radio" name="input_160['+i+']"  value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_160['+i+']"  value="no" checked> No</div></div></p>')
			i++;
		}
	</script>
</body>
</html>
<!-- By Startly Dev @ Startly.io -->