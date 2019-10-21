<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Truck Driver Application for Qualification</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

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
  </style>
</head>

<body>

    <div class="main">
        <form id="appform" action="submit.php" method="POST">
            <h2>Truck Driver Application for Qualification</h2>
            <h1>Solylandline TRANSPORT INC.</h1>
            <h3>800 Kipling Dr, </h3>
            <h4>Allen TX 75002</h4>
            <h4>Phone: 469-656-9301</h4>
            <h4>Fax: 469-5190-414</h4>
            <p>In compliance with Federal and State equal opportunity laws, qualified applicants are considered for all positions without regard to race, religion, sex, national origin, age, marital status, or non-job related disability. Please answer all questions.</p>
            <p><div class="input-set"><label for="input_0">Date of Application: </label> <input type="text" name="input_0" id="input_0" placeholder="MM/DD/YYYY" required></div></p>
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
                <p><div class="input-set"><label for="input_1">Signature (Name): </label> <input type="text" name="input_1" id="input_1" placeholder="" required></div><div class="input-set"><label for="input_2">Date: </label> <input type="text" name="input_2" id="input_2" placeholder="MM/DD/YYYY" required></div></p>
            </div>
            <h1 class="heading"> Applicant to complete </h1>

            <p><div class="input-set"><label for="input_3">Last Name: </label> <input type="text" name="input_3" id="input_3" placeholder="" required></div><div class="input-set"><label for="input_4">First Name: </label> <input type="text" name="input_4" id="input_4" placeholder="" required></div><div class="input-set"><label for="input_5">Middle Name: </label> <input type="text" name="input_5" id="input_5" placeholder="" required></div></p>
            <p><div class="input-set"><label for="input_6">SSN: </label> <input type="text" name="input_6" id="input_6" placeholder="" required></div><div class="input-set"><label for="input_7">Date of Birth: </label> <input type="text" name="input_7" id="input_7" placeholder="MM/DD/YYYY" required></div></p>
            <p><div class="input-set"><label for="input_8">CDL Driver's License #: </label> <input type="text" name="input_8" id="input_8" placeholder="" required></div><div class="input-set"><label for="input_9">State: </label> <input type="text" name="input_9" id="input_9" placeholder="" required></div><div class="input-set"><label for="input_10">Expiration Date: </label> <input type="text" name="input_10" id="input_10" placeholder="MM/DD/YYYY" required></div></p>
            <p><div class="input-set"><label for="input_11">When was this license first issued? </label> <input type="text" name="input_11" id="input_11" placeholder="MM/DD/YYYY" required></div><div class="input-set"><label for="input_12">Years of CDL driving experience:  </label> <input type="text" name="input_12" id="input_12" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_13">Medical Exam: Date of Issue: </label> <input type="text" name="input_13" id="input_13" placeholder="MM/DD/YYYY" required></div><div class="input-set"><label for="input_14">Expiration Date: </label> <input type="text" name="input_14" id="input_14" placeholder="MM/DD/YYYY" required></div></p>
            <p><div class="input-set"><label for="input_15">Applying for: Owner Operator/Contracted Driver </label> <input type="text" name="input_15" id="input_15" placeholder="" required></div><div class="input-set"><label for="input_16">E-mail address: </label> <input type="text" name="input_16" id="input_16" placeholder="" required></div></p>
            <p><div class="input-set"><label for="input_17">If contracted driver list Owner of Truck </label> <input type="text" name="input_17" id="input_17" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_18">Current Address: Street: </label> <input type="text" name="input_18" id="input_18" placeholder="" required></div><div class="input-set"><label for="input_19">City: </label> <input type="text" name="input_19" id="input_19" placeholder="" required></div><div class="input-set"><label for="input_20">State: </label> <input type="text" name="input_20" id="input_20" placeholder="" required></div><div class="input-set"><label for="input_21">Zip Code: </label> <input type="text" name="input_21" id="input_21" placeholder="" required></div><div class="input-set"><label for="input_22">How long? </label> <input type="text" name="input_22" id="input_22" placeholder="" required></div></p>
            <p><div class="input-set"><label for="input_23">Home Phone #: </label> <input type="text" name="input_23" id="input_23" placeholder="" required></div><div class="input-set"><label for="input_24">Cell Phone #: </label> <input type="text" name="input_24" id="input_24" placeholder="" required></div></p>
            <p><div class="input-set"><label for="input_25">Emergency Contact Name: </label> <input type="text" name="input_25" id="input_25" placeholder="" required></div><div class="input-set"><label for="input_26">Phone #: </label> <input type="text" name="input_26" id="input_26" placeholder="" required></div></p>
            <b>Please list all residence for the past three years (leave blank if none). </b>
            <p><div class="input-set"><label for="input_27">Street: </label> <input type="text" name="input_27" id="input_27" placeholder="" required></div><div class="input-set"><label for="input_28">City: </label> <input type="text" name="input_28" id="input_28" placeholder="" required></div><div class="input-set"><label for="input_29">State: </label> <input type="text" name="input_29" id="input_29" placeholder="" required></div><div class="input-set"><label for="input_30">Zip Code: </label> <input type="text" name="input_30" id="input_30" placeholder="" required></div><div class="input-set"><label for="input_31">How long? </label> <input type="text" name="input_31" id="input_31" placeholder="" required></div></p>
            <p><div class="input-set"><label for="input_32">Street: </label> <input type="text" name="input_32" id="input_32" placeholder=""></div><div class="input-set"><label for="input_33">City: </label> <input type="text" name="input_33" id="input_33" placeholder=""></div><div class="input-set"><label for="input_34">State: </label> <input type="text" name="input_34" id="input_34" placeholder=""></div><div class="input-set"><label for="input_35">Zip Code: </label> <input type="text" name="input_35" id="input_35" placeholder=""></div><div class="input-set"><label for="input_36">How long? </label> <input type="text" name="input_36" id="input_36" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_37">Street: </label> <input type="text" name="input_37" id="input_37" placeholder=""></div><div class="input-set"><label for="input_38">City: </label> <input type="text" name="input_38" id="input_38" placeholder=""></div><div class="input-set"><label for="input_39">State: </label> <input type="text" name="input_39" id="input_39" placeholder=""></div><div class="input-set"><label for="input_40">Zip Code: </label> <input type="text" name="input_40" id="input_40" placeholder=""></div><div class="input-set"><label for="input_41">How long? </label> <input type="text" name="input_41" id="input_41" placeholder=""></div></p>
            <p><div class="input-set">Do you have the legal right to work in the United States? <div class="input-set"><input type="radio" name="input_42" id="input_42" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_42" id="input_42" value="no" checked> No</div></div></p>
            <p><div class="input-set">Have you worked for this company before? <div class="input-set"><input type="radio" name="input_43" id="input_43" value="yes" onclick="show('showhide_0')"> Yes</div> <div class="input-set"><input type="radio" name="input_43" id="input_43" value="no" checked onclick="hide('showhide_0')"> No</div></div></p>

            <span id="showhide_0" style="display:none"><p><div class="input-set"><label for="input_44">Dates from: </label> <input type="text" name="input_44" id="input_44" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_45"> to </label> <input type="text" name="input_45" id="input_45" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_46">Reason for leaving: </label> <input type="text" name="input_46" id="input_46" placeholder="" maxlength="80"></div></p></span>
            <p><div class="input-set">Are you now employed? <div class="input-set"><input type="radio" name="input_48" id="input_48" value="yes" onclick="hide('showhide_1')"> Yes</div><div class="input-set"><input type="radio" name="input_48" id="input_48" value="no" checked onclick="show('showhide_1')"> No</div></div></p>
            <span id="showhide_1"><p><div class="input-set"><label for="input_49">Date since last employment: </label> <input type="text" name="input_49" id="input_49" placeholder="MM/DD/YYYY"></div></p></span>
            <p><div class="input-set"><label for="input_50">Who referred you? </label> <input type="text" name="input_50" id="input_50" placeholder="" maxlength="50"></div></p>
            <p><div class="input-set">Have you ever been convicted of a felony?<div class="input-set"> <input type="radio" name="input_51" id="input_51" value="yes" onclick="show('showhide_2')"> Yes</div><div class="input-set"> <input type="radio" name="input_51" id="input_51" value="no" checked onclick="hide('showhide_2')"> No</div></div></p>
            <span id="showhide_2" style="display:none"><p><label for="input_52">Please explain fully. Conviction of a crime is not an automatic bar to employment. All circumstances will be considered. <br></label> <textarea name="input_52" id="input_52" form="appform" style="width:100%" maxlength="10000"></textarea></p></span>
            <h3 class="heading">Education</h3>
            <p><div class="input-set"><label for="input_53">High School Attended: </label> <input type="text" name="input_53" id="input_53" placeholder="" required></div><div class="input-set"><label for="input_54">City: </label> <input type="text" name="input_54" id="input_54" placeholder="" required></div><div class="input-set"><label for="input_55">State: </label> <input type="text" name="input_55" id="input_55" placeholder="" required></div><div class="input-set">Graduated? <div class="input-set"><input type="radio" name="input_56" id="input_56" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_56" id="input_56" value="no" checked> No</div></div></p>
            <p><div class="input-set"><label for="input_57">College Trade School Attended: </label> <input type="text" name="input_57" id="input_57" placeholder="" required></div><div class="input-set"><label for="input_58">City: </label> <input type="text" name="input_58" id="input_58" placeholder="" required></div><div class="input-set"><label for="input_59">State: </label> <input type="text" name="input_59" id="input_59" placeholder="" required></div><div class="input-set">Graduated? <div class="input-set"><input type="radio" name="input_60" id="input_60" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_60" id="input_60" value="no" checked> No</div></div></p>
            <p><div class="input-set"><label for="input_61">Driving School Attended: </label> <input type="text" name="input_61" id="input_61" placeholder="" required></div><div class="input-set"><label for="input_62">City: </label> <input type="text" name="input_62" id="input_62" placeholder="" required></div><div class="input-set"><label for="input_63">State: </label> <input type="text" name="input_63" id="input_63" placeholder="" required></div><div class="input-set"><label for="input_64">Completion date: </label> <input type="text" name="input_64" id="input_64" placeholder="MM/DD/YYYY" required></div></p>
            <p><div class="input-set">Have you <b>ever</b> been convicted of/or having a pending DWI/DUI? <div class="input-set"><input type="radio" name="input_65" id="input_65" value="yes" onclick="show('showhide_3')"> Yes</div> <div class="input-set"><input type="radio" name="input_65" id="input_65" value="no" checked onclick="hide('showhide_3')"> No</div></div> <div class="input-set"><span id="showhide_3" style="display:none"><label for="input_66">When? </label> <input type="text" name="input_66" id="input_66" placeholder="MM/DD/YYYY"></span></div></p>
            <p><div class="input-set">Have you <b>ever</b> had a positive pre-employment random or post-accident drug/alcohol test?<div class="input-set"><input type="radio" name="input_67" id="input_67" value="yes" onclick="show('showhide_4')"> Yes</div> <div class="input-set"><input type="radio" name="input_67" id="input_67" value="no" checked onclick="hide('showhide_4')"> No</div></div> <div class="input-set"><span id="showhide_4" style="display:none"><label for="input_68">When? </label> <input type="text" name="input_68" id="input_68" placeholder="MM/DD/YYYY"></span></div></p>
            <p><div class="input-set">Have you <b>ever</b> refused a random or post-accident drug / alcohol test? <div class="input-set"><input type="radio" name="input_69" id="input_69" value="yes" onclick="show('showhide_5')"> Yes</div> <div class="input-set"><input type="radio" name="input_69" id="input_69" value="no" checked onclick="hide('showhide_5')"> No</div></div> <div class="input-set"><span id="showhide_5" style="display:none"><label for="input_70">When? </label> <input type="text" name="input_70" id="input_70" placeholder="MM/DD/YYYY"></span></div></p>

            <h2 class="heading"> Employment Record </h2>
            <h4> Please start with the most recent employer.</h4>
            <p>
                In accordance with <i>FMCSR 391.21 & .23</i>, an applicant must list all previous work experience for the three (3) years prior to the date of the application shown on page one, as well as all commercial driving experience for the seven (7) year period prior to those three years, for a total of 10 years. Include your job description, date of employment, reason for leaving and whether you were subject to FMCSA & U.S. DOT alcohol and controlled substance testing requirements for each job listed. Please start with the most recent employer. lnclude self-employment or time leased to another carrier. Any gaps in employment (including unemployment or retirement) must be explained.
            </p>
            <br>
            <div id="employers">
                <p><div class="input-set"><label for="input_71">Employer: </label> <input type="text" name="input_71[]" id="input_71" placeholder=""></div><div class="input-set"><label for="input_72">From </label> <input type="text" name="input_72[]" id="input_72" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_73">To </label> <input type="text" name="input_73[]" id="input_73" placeholder="MM/DD/YYYY"></div></p>
                <p><div class="input-set"><label for="input_74">Address: </label> <input type="text" name="input_74[]" id="input_74" placeholder=""></div><div class="input-set"><label for="input_75">City: </label> <input type="text" name="input_75[]" id="input_75" placeholder=""></div><div class="input-set"><label for="input_76">State: </label> <input type="text" name="input_76[]" id="input_76" placeholder=""></div><div class="input-set"><label for="input_77">Zip: </label> <input type="text" name="input_77[]" id="input_77" placeholder=""></div></p>
                <p><div class="input-set"><label for="input_78">Phone #: </label> <input type="text" name="input_78[]" id="input_78" placeholder=""></div><div class="input-set"><label for="input_79">Contact person: </label> <input type="text" name="input_79[]" id="input_79" placeholder=""></div></p>
                <p><div class="input-set"><label for="input_80">Equipment Operated: </label> <input type="text" name="input_80[]" id="input_80" placeholder=""></div><div class="input-set"><label for="input_81">Average Lenght of Haul: </label> <input type="text" name="input_81[]" id="input_81" placeholder=""></div></p>
                <p><div class="input-set"><label for="input_82">Position Held: </label> <input type="text" name="input_82[]" id="input_82" placeholder=""></div><div class="input-set"><label for="input_83">Reason for Leaving: </label> <input type="text" name="input_83[]" id="input_83" placeholder=""></div></p>
                <p><div class="input-set">Were you subject to Federal Motor Carrier Safety Regulations (FMCSRs) at this employer? <div class="input-set"><input type="radio" name="input_159[0]" id="input_159" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_159[0]" id="input_159" value="no" checked> No</div></div></p>
                <p><div class="input-set">Was this a safety sensitive function as designated by the DOT and subject to 49 CFR part 402? <div class="input-set"><input type="radio" name="input_160[0]" id="input_160" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_160[0]" id="input_160" value="no" checked> No</div></div></p>
            </div>
            <input type="button" onclick="addemployed()" value="Add One">
            <br /><br />

            <h3 class="heading">Accident Record</h3>  <p>List of all motor vehicle accidents in which the applicant was involved during the last 3 years. If none, leave blank.</p><br>


            <p><div class="input-set"><label for="input_84">Date: </label> <input type="text" name="input_84" id="input_84" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_85">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label> <input type="text" name="input_85" id="input_85" placeholder=""></div><div class="input-set"><label for="input_86">Fatalities: </label> <input type="text" name="input_86" id="input_86" placeholder=""></div><div class="input-set"><label for="input_87">Injuries: </label> <input type="text" name="input_87" id="input_87" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_88">Date: </label> <input type="text" name="input_88" id="input_88" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_89">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label> <input type="text" name="input_89" id="input_89" placeholder=""></div><div class="input-set"><label for="input_90">Fatalities: </label> <input type="text" name="input_90" id="input_90" placeholder=""></div><div class="input-set"><label for="input_91">Injuries: </label> <input type="text" name="input_91" id="input_91" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_92">Date: </label> <input type="text" name="input_92" id="input_92" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_93">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label> <input type="text" name="input_93" id="input_93" placeholder=""></div><div class="input-set"><label for="input_94">Fatalities: </label> <input type="text" name="input_94" id="input_94" placeholder=""></div><div class="input-set"><label for="input_95">Injuries: </label> <input type="text" name="input_95" id="input_95" placeholder=""></div></p>
            <br /><h3 class="heading">Traffic Convictions</h3> <p> list of all violations of motor vehicle laws or ordinances (other than violations involving only parking) of which the applicant was <u>convicted or forfeited bond or collateral</u> during the past 3 years. If none, leave blank</p><br>
            <p><div class="input-set"><label for="input_96">City/St </label> <input type="text" name="input_96" id="input_96" placeholder=""></div><div class="input-set"><label for="input_97">Date: </label> <input type="text" name="input_97" id="input_97" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_98">Charge (Include miles over if speeding): </label> <input type="text" name="input_98" id="input_98" placeholder=""></div><div class="input-set"><label for="input_99">Penalty: </label> <input type="text" name="input_99" id="input_99" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_100">City/St </label> <input type="text" name="input_100" id="input_100" placeholder=""></div><div class="input-set"><label for="input_101">Date: </label> <input type="text" name="input_101" id="input_101" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_102">Charge (Include miles over if speeding): </label> <input type="text" name="input_102" id="input_102" placeholder=""></div><div class="input-set"><label for="input_103">Penalty: </label> <input type="text" name="input_103" id="input_103" placeholder=""></div></p>
            <p><div class="input-set"><label for="input_104">City/St </label> <input type="text" name="input_104" id="input_104" placeholder=""></div><div class="input-set"><label for="input_105">Date: </label> <input type="text" name="input_105" id="input_105" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_106">Charge (Include miles over if speeding): </label> <input type="text" name="input_106" id="input_106" placeholder=""></div><div class="input-set"><label for="input_107">Penalty: </label> <input type="text" name="input_107" id="input_107" placeholder=""></div></p>
            <br /><h3 class="heading">Experience and Qualifications - Driver</h3>
            <p> All driver licenses or permits held in the past 3 years</p><br />
            <p><div class="input-set"><label for="input_108">State: </label> <input type="text" name="input_108" id="input_108" placeholder=""></div><div class="input-set"><label for="input_109">Licence No.: </label> <input type="text" name="input_109" id="input_109" placeholder=""></div><div class="input-set"><label for="input_110">Type: </label> <input type="text" name="input_110" id="input_110" placeholder=""></div><div class="input-set"><label for="input_111">Expiration Date: </label> <input type="text" name="input_111" id="input_111" placeholder="MM/DD/YYYY"></div></p>
            <p><div class="input-set"><label for="input_112">State: </label> <input type="text" name="input_112" id="input_112" placeholder=""></div><div class="input-set"><label for="input_113">Licence No.: </label> <input type="text" name="input_113" id="input_113" placeholder=""></div><div class="input-set"><label for="input_114">Type: </label> <input type="text" name="input_114" id="input_114" placeholder=""></div><div class="input-set"><label for="input_115">Expiration Date: </label> <input type="text" name="input_115" id="input_115" placeholder="MM/DD/YYYY"></div></p>
            <p><div class="input-set"><label for="input_116">State: </label> <input type="text" name="input_116" id="input_116" placeholder=""></div><div class="input-set"><label for="input_117">Licence No.: </label> <input type="text" name="input_117" id="input_117" placeholder=""></div><div class="input-set"><label for="input_118">Type: </label> <input type="text" name="input_118" id="input_118" placeholder=""></div><div class="input-set"><label for="input_119">Expiration Date: </label> <input type="text" name="input_119" id="input_119" placeholder="MM/DD/YYYY"></div></p>

            <p><div class="input-set">A. Have you ever been denied a license, permit or privilege to operate a motor vehicle? <div class="input-set"><input type="radio" name="input_120" id="input_120" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_120" id="input_120" value="no" checked> No</div></div></p>
            <p><div class="input-set">B. Has any license, permit or privilege ever been suspended or revoked? <div class="input-set"><input type="radio" name="input_121" id="input_121" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_121" id="input_121" value="no" checked> No</div></div></p>
            <p><label for="input_122">If the answer to either A or B is yes, give details </label><br> <textarea name="input_122" id="input_122" form="appform" style="width:100%" maxlength="1000"></textarea></p>

            <br /><h3 class="heading">Driving Experience</h3>
            <p>Check yes or no.</p><br />

            <p><div class="input-set">Straight Truck (Van, Tank, Flat, Dump Reefer): <div class="input-set"><input type="radio" name="input_123" id="input_123" value="yes" onclick="show('showhide_6')"> Yes</div> <div class="input-set"><input type="radio" name="input_123" id="input_123" value="no" checked onclick="hide('showhide_6')"> No</div></div> <span id="showhide_6" style="display:none"><div class="input-set"><label for="input_124">From: </label> <input type="text" name="input_124" id="input_124" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_125">To: </label> <input type="text" name="input_125" id="input_125" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_126">Approx No. of Miles (Total): </label> <input type="text" name="input_126" id="input_126" placeholder=""></div></span></p>
            <p><div class="input-set">Tractor & Semi-trailer (Van, Tank, Flat, Dump Reefer): <div class="input-set"><input type="radio" name="input_127" id="input_127" value="yes" onclick="show('showhide_7')"> Yes</div> <div class="input-set"><input type="radio" name="input_127" id="input_127" value="no" checked onclick="hide('showhide_7')"> No</div></div> <span id="showhide_7" style="display:none"><div class="input-set"><label for="input_128">From: </label> <input type="text" name="input_128" id="input_128" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_129">To: </label> <input type="text" name="input_129" id="input_129" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_130">Approx No. of Miles (Total): </label> <input type="text" name="input_130" id="input_130" placeholder=""></div></span></p>
            <p><div class="input-set">Tractor - Two Trailers (Van, Tank, Flat, Dump Reefer): <div class="input-set"><input type="radio" name="input_131" id="input_131" value="yes" onclick="show('showhide_8')"> Yes</div> <div class="input-set"><input type="radio" name="input_131" id="input_131" value="no" checked onclick="hide('showhide_8')"> No</div></div> <span id="showhide_8" style="display:none"><div class="input-set"><label for="input_132">From: </label> <input type="text" name="input_132" id="input_132" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_133">To: </label> <input type="text" name="input_133" id="input_133" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_134">Approx No. of Miles (Total): </label> <input type="text" name="input_134" id="input_134" placeholder=""></div></span></p>
            <p><div class="input-set">Tractor - Three Trailers (Van, Tank, Flat, Dump Reefer): <div class="input-set"><input type="radio" name="input_135" id="input_135" value="yes" onclick="show('showhide_9')"> Yes</div> <div class="input-set"><input type="radio" name="input_135" id="input_135" value="no" checked onclick="hide('showhide_9')"> No</div></div> <span id="showhide_9" style="display:none"><div class="input-set"><label for="input_136">From: </label> <input type="text" name="input_136" id="input_136" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_137">To: </label> <input type="text" name="input_137" id="input_137" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_138">Approx No. of Miles (Total): </label> <input type="text" name="input_138" id="input_138" placeholder=""></div></span></p>
            <p><div class="input-set">Motorcoach - School Bus: <div class="input-set"><input type="radio" name="input_139" id="input_139" value="yes" onclick="show('showhide_10')"> Yes</div> <div class="input-set"><input type="radio" name="input_139" id="input_139" value="no" checked onclick="hide('showhide_10')"> No</div></div> <span id="showhide_10" style="display:none"><div class="input-set"><label for="input_140">From: </label> <input type="text" name="input_140" id="input_140" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_141">To: </label> <input type="text" name="input_141" id="input_141" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_142">Approx No. of Miles (Total): </label> <input type="text" name="input_142" id="input_142" placeholder=""></div></span></p>
            <p><div class="input-set">Other: <div class="input-set"><input type="radio" name="input_161" id="input_161" value="yes" onclick="show('showhide_12')"> Yes</div> <div class="input-set"><input type="radio" name="input_161" id="input_161" value="no" checked onclick="hide('showhide_12')"> No</div></div> <span id="showhide_12" style="display:none">Type of Equipment: <div class="input-set"><input type="text" name="input_147" id="input_147" placeholder=""></div><div class="input-set"><label for="input_148">From: </label> <input type="text" name="input_148" id="input_148" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_149">To: </label> <input type="text" name="input_149" id="input_149" placeholder="MM/YYYY"></div><div class="input-set"><label for="input_150">Approx No. of Miles (Total): </label> <input type="text" name="input_150" id="input_150" placeholder=""></div></span></p>
            <p><label for="input_151">List states operated in for last five years: </label><br> <textarea maxlength="2000" name="input_151" id="input_151" form="appform" style="width:100%"></textarea></p>
            <p><label for="input_152">Show special courses or training that will help you as a driver: </label> <br> <textarea maxlength="2000" name="input_152" id="input_152" form="appform" style="width:100%"></textarea></p>
            <p><label for="input_153">Which safe driving awards do you hold and from whom? </label> <br> <textarea maxlength="2000" name="input_153" id="input_153" form="appform" style="width:100%"></textarea></p>
            <h3 class="heading">Experience and Qualifications - Other</h3>
            <p><label for="input_154">Show any trucking, transporting or other than shown elsewhere in this application: </label> <br> <textarea maxlength="2000" name="input_154" id="input_154" form="appform" style="width:100%"></textarea></p>
            <p><label for="input_155">List courses and training other than shown elsewhere in this application: </label> <br> <textarea maxlength="2000" name="input_155" id="input_155" form="appform" style="width:100%"></textarea></p>
            <p><label for="input_156">List special equipment or technical materials you can work with other than those already shown: </label> <br> <textarea maxlength="2000" name="input_156" id="input_156" form="appform" style="width:100%"></textarea></p>
            <p><div class="input-set"><label for="input_157">Signature (Name): </label> <input type="text" name="input_157" id="input_157" placeholder="" required></div><div class="input-set"><label for="input_158">Date: </label> <input type="text" name="input_158" id="input_158" placeholder="MM/DD/YYYY" required></div></p>

            <input name="submit"type="submit" value="Submit" style="width:150px;margin-bottom:30px;" />

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