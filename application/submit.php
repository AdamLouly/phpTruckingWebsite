<?php
//Edit these settings:

$mysqlHost = "localhost";
$mysqlUser = "root";
$mysqlPassword = "root";
$mysqlDatabase = "truck";
$id ="";
//#####################

$mysqli = new mysqli($mysqlHost, $mysqlUser, $mysqlPassword, $mysqlDatabase);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
if(isset($_POST["submit"])){
	$sql = "INSERT INTO drivers (applicationDate, signatureName, signatureDate, applicantLastName, applicantFirstName, applicantSSN, applicantDOB, applicantCDL, applicantCDLState, applicantCDLExpiry, applicantCDLIssue, applicantCDLExp, applicantMedicalIssue, applicantMedicalExpiry, applicantApplying, applicantEmail, applicantOwnerTruck, applicantCurrStreet, applicantCurrCity, applicantCurrState, applicantCurrZip, applicantCurrDuration, applicantHomePhone, applicantCellPhone, applicantEmergencyName, applicantEmergencyPhone, applicantResidenceOneStreet, applicantResidenceOneCity, applicantResidenceOneState, applicantResidenceOneZip, applicantResidenceOneDuration, applicantResidenceTwoStreet, applicantResidenceTwoCity, applicantResidenceTwoState, applicantResidenceTwoZip, applicantResidenceTwoDuration, applicantResidenceThreeStreet, applicantResidenceThreeCity, applicantResidenceThreeState, applicantResidenceThreeZip, applicantResidenceThreeDuration, applicantRightToWork, applicantEmployedByUs, applicantEmployedByUsFrom, applicantEmployedByUsTo, applicantEmployedByUsReasonLeft, applicantNowEmployed, applicantDateSinceEmployment, applicantReferer, applicantConvicted, applicantConvictedDetails, applicantHighSchool, applicantHighSchoolCity, applicantHighSchoolState, applicantHighSchoolGraduated, applicantCollege, applicantCollegeCity, applicantCollegeState, applicantCollegeGraduated, applicantDrivingSchool, applicantDrivingSchoolCity, applicantDrivingSchoolState, applicantDrivingSchoolCompleted, applicantHasDUI, applicantDUIDate, applicantDrugTest, applicantDrugTestDate, applicantDrugTestRefused, applicantDrugTestRefusedDate, accidentOneDate, accidentOneNature, accidentOneFatalities, accidentOneInjuries, accidentTwoDate, accidentTwoNature, accidentTwoFatalities, accidentTwoInjuries, accidentThreeDate, accidentThreeNature, accidentThreeFatalities, accidentThreeInjuries, convictionOneCity, convictionOneDate, convictionOneCharge, convictionOnePenalty, convictionTwoCity, convictionTwoDate, convictionTwoCharge, convictionTwoPenalty, convictionThreeCity, convictionThreeDate, convictionThreeCharge, convictionThreePenalty, licenceOneState, licenceOneNO, licenceOneType, licenceOneExp, licenceTwoState, licenceTwoNO, licenceTwoType, licenceTwoExp, licenceThreeState, licenceThreeNO, licenceThreeType, licenceThreeExp, applicantDeniedLicence, applicantRevokedLicence, applicantLicenseDetails, experienceStraightTruck, experienceStraightTruckFrom, experienceStraightTruckTo, experienceStraightTruckMiles, experienceSemiTrailer, experienceSemiTrailerFrom, experienceSemiTrailerTo, experienceSemiTrailerMiles, experienceTwoTrailers, experienceTwoTrailersFrom, experienceTwoTrailersTo, experienceTwoTrailersMiles, experienceThreeTrailers, experienceThreeTrailersFrom, experienceThreeTrailersTo, experienceThreeTrailersMiles, experienceMotorCoach, experienceMotorCoachFrom, experienceMotorCoachTo, experienceMotorCoachMiles, experienceOther, experienceOtherType, experienceOtherFrom, experienceOtherTo, experienceOtherMiles, applicantStatesOperated, applicantSpecialCourses, applicantAwards, applicantOtherExperience, applicantOtherTraining, applicantOtherEquipment, applicantSignatureFinal, applicantSignatureDate) VALUES ('" . sanitize("input_0") . "', '" . sanitize("input_1") . "', '" . sanitize("input_2") . "', '" . sanitize("input_3") . "', '" . sanitize("input_5") . "', '" . sanitize("input_6") . "', '" . sanitize("input_7") . "', '" . sanitize("input_8") . "', '" . sanitize("input_9") . "', '" . sanitize("input_10") . "', '" . sanitize("input_11") . "', '" . sanitize("input_12") . "', '" . sanitize("input_13") . "', '" . sanitize("input_14") . "', '" . sanitize("input_15") . "', '" . sanitize("input_16") . "', '" . sanitize("input_17") . "', '" . sanitize("input_18") . "', '" . sanitize("input_19") . "', '" . sanitize("input_20") . "', '" . sanitize("input_21") . "', '" . sanitize("input_22") . "', '" . sanitize("input_23") . "', '" . sanitize("input_24") . "', '" . sanitize("input_25") . "', '" . sanitize("input_26") . "', '" . sanitize("input_27") . "', '" . sanitize("input_28") . "', '" . sanitize("input_29") . "', '" . sanitize("input_30") . "', '" . sanitize("input_31") . "', '" . sanitize("input_32") . "', '" . sanitize("input_33") . "', '" . sanitize("input_34") . "', '" . sanitize("input_35") . "', '" . sanitize("input_36") . "', '" . sanitize("input_37") . "', '" . sanitize("input_38") . "', '" . sanitize("input_39") . "', '" . sanitize("input_40") . "', '" . sanitize("input_41") . "', '" . sanitize("input_42") . "', '" . sanitize("input_43") . "', '" . sanitize("input_44") . "', '" . sanitize("input_45") . "', '" . sanitize("input_46") . "', '" . sanitize("input_48") . "', '" . sanitize("input_49") . "', '" . sanitize("input_50") . "', '" . sanitize("input_51") . "', '" . sanitize("input_52") . "', '" . sanitize("input_53") . "', '" . sanitize("input_54") . "', '" . sanitize("input_55") . "', '" . sanitize("input_56") . "', '" . sanitize("input_57") . "', '" . sanitize("input_58") . "', '" . sanitize("input_59") . "', '" . sanitize("input_60") . "', '" . sanitize("input_61") . "', '" . sanitize("input_62") . "', '" . sanitize("input_63") . "', '" . sanitize("input_64") . "', '" . sanitize("input_65") . "', '" . sanitize("input_66") . "', '" . sanitize("input_67") . "', '" . sanitize("input_68") . "', '" . sanitize("input_69") . "', '" . sanitize("input_70") . "', '" . sanitize("input_84") . "', '" . sanitize("input_85") . "', '" . sanitize("input_86") . "', '" . sanitize("input_87") . "', '" . sanitize("input_88") . "', '" . sanitize("input_89") . "', '" . sanitize("input_90") . "', '" . sanitize("input_91") . "', '" . sanitize("input_92") . "', '" . sanitize("input_93") . "', '" . sanitize("input_94") . "', '" . sanitize("input_95") . "', '" . sanitize("input_96") . "', '" . sanitize("input_97") . "', '" . sanitize("input_98") . "', '" . sanitize("input_99") . "', '" . sanitize("input_100") . "', '" . sanitize("input_101") . "', '" . sanitize("input_102") . "', '" . sanitize("input_103") . "', '" . sanitize("input_104") . "', '" . sanitize("input_105") . "', '" . sanitize("input_106") . "', '" . sanitize("input_107") . "', '" . sanitize("input_108") . "', '" . sanitize("input_109") . "', '" . sanitize("input_110") . "', '" . sanitize("input_111") . "', '" . sanitize("input_112") . "', '" . sanitize("input_113") . "', '" . sanitize("input_114") . "', '" . sanitize("input_115") . "', '" . sanitize("input_116") . "', '" . sanitize("input_117") . "', '" . sanitize("input_118") . "', '" . sanitize("input_119") . "', '" . sanitize("input_120") . "', '" . sanitize("input_121") . "', '" . sanitize("input_122") . "', '" . sanitize("input_123") . "', '" . sanitize("input_124") . "', '" . sanitize("input_125") . "', '" . sanitize("input_126") . "', '" . sanitize("input_127") . "', '" . sanitize("input_128") . "', '" . sanitize("input_129") . "', '" . sanitize("input_130") . "', '" . sanitize("input_131") . "', '" . sanitize("input_132") . "', '" . sanitize("input_133") . "', '" . sanitize("input_134") . "', '" . sanitize("input_13") . "', '" . sanitize("input_136") . "', '" . sanitize("input_137") . "', '" . sanitize("input_138") . "', '" . sanitize("input_139") . "', '" . sanitize("input_140") . "', '" . sanitize("input_141") . "', '" . sanitize("input_142") . "', '" . sanitize("input_161") . "', '" . sanitize("input_147") . "', '" . sanitize("input_148") . "', '" . sanitize("input_149") . "', '" . sanitize("input_150") . "', '" . sanitize("input_151") . "', '" . sanitize("input_152") . "', '" . sanitize("input_153") . "', '" . sanitize("input_154") . "', '" . sanitize("input_155") . "', '" . sanitize("input_156") . "', '" . sanitize("input_157") . "', '" . sanitize("input_158") . "')";

	if ($mysqli->query($sql) === TRUE) {
            $lastid = $mysqli->insert_id;
            $id = $lastid;
			foreach($_POST["input_71"] as $key=>$value){
				$sql = "INSERT INTO employers (driver, employer, employedFrom, employedTo, address, city, state, zip, phone, contact, equipment, averageLength, position, reasonLeft, FMCSRs, safetySensitive) VALUES ('" . $lastid . "', '" . sanitize_i("input_71", $key) . "', '" . sanitize_i("input_72", $key) . "', '" . sanitize_i("input_73", $key) . "', '" . sanitize_i("input_74", $key) . "', '" . sanitize_i("input_75", $key) . "', '" . sanitize_i("input_76", $key) . "', '" . sanitize_i("input_77", $key) . "', '" . sanitize_i("input_78", $key) . "', '" . sanitize_i("input_79", $key) . "', '" . sanitize_i("input_80", $key) . "', '" . sanitize_i("input_81", $key) . "', '" . sanitize_i("input_82", $key) . "', '" . sanitize_i("input_83", $key) . "', '" . sanitize_i("input_159", $key) . "', '" . sanitize_i("input_160", $key) . "')";
				if ($mysqli->query($sql) === TRUE) {
                    $link = "https://tacantransport.com/application/view.php?id=".$lastid;
                    exec('/usr/bin/python2.7 /var/www/html/sendmail.py "New application sent" "View it at '.$link.'"');
					header('Location: success.php');
				}
			}

	} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	} 

}else{
	echo "nosubmit";	
}

function sanitize($s){
	global $mysqli;
	if (!isset($_POST[$s]) || empty($_POST[$s])) {
		return "none";
	}else{
		return $mysqli->real_escape_string($_POST[$s]); 		
	}
}
function sanitize_i($s,$i){
	global $mysqli;
	if (!isset($_POST[$s][$i]) || empty($_POST[$s][$i])) {
		return "none";
	}else{
		return $mysqli->real_escape_string($_POST[$s][$i]); 		
	}
}
//By Startly Dev @ Startly.io