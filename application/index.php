<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Truck Driver Application for Qualification</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
</head>

<body>
    <div id="overlay"></div>
    <div class="main" id="form">
        <form id="appform" action="submit.php" method="POST">
            <h2 class="textcenter">Truck Driver Application for Qualification</h2>
            <h1 class="textcenter">SOLY LANDLINE LLC.</h1>
            <h3 class="textcenter">1816 E Abram St.</h3>
            <h4 class="textcenter">Arlington, TX 76010</h4>
            <h4 class="textcenter">Phone: 817-875-6821</h4>
            <h4 class="textcenter">Fax: 877-801-5935</h4>
            <p class="textcenter">In compliance with Federal and State equal opportunity laws, qualified applicants are considered for all positions
                without regard to race, religion, sex, national origin, age, marital status, or non-job related disability.
                Please answer all questions.</p>
            <p>
                <div class="input-set">
                    <label for="input_0">Date of Application: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                        required>
                </div>
            </p>
            <div class="boxline">
                <h3>TO BE READ AND SIGNED BY APPLICANT</h3>
                <p>
                    I authorize you to make such investigations and inquiries of my personal, employment, financial or medical history and other
                    related matters as may be necessary in arriving at an employment decision. (Generally, inquiries regarding
                    medical history will be made only if and after a conditional offer of employment has been extended.)
                    I hereby release employers, schools, health care providers and other persons from all liability in responding
                    to inquiries and releasing information in connection with my application. In the event of employment,
                    I understand that false or misleading information given in my application or interview(s) may result
                    in discharge. I understand, also, that I am required to abide by all rules and regulations of the Company.
                </p>
                <p>I understand that information I provide regarding current and/or previous employers may be used, and those
                    employer(s) will be contacted, for the purpose of investigating my safety performance history as required
                    by 49 CFR 391.23(d) and (e). I understand that I have the right to:</p>
                <ul>
                    <li>Review information provided by previous employer; and</li>
                    <li>Have errors in the information corrected by previous employers and for those previous employers to re-send
                        the corrected inlormation to the prospective employer; and</li>
                    <li>Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s)
                        and I cannot agree on the accuracy of the information.</li>
                </ul>
                <br>
                <p>
                    <div class="input-set">
                        <label for="input_1">Signature (Name): </label>
                        <input type="text" name="input_1" id="input_1" placeholder="" required>
                    </div>
                    <div class="input-set">
                        <label for="input_2">Date: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                    </div>
                </p>
            </div>
            <h1 class="heading"> Applicant to complete </h1>

            <p>
                <div class="input-set">
                    <label for="input_3">Last Name: </label>
                    <input type="text" name="input_3" id="input_3" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_4">First Name: </label>
                    <input type="text" name="input_4" id="input_4" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_5">Middle Name: </label>
                    <input type="text" name="input_5" id="input_5" placeholder="" required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_6">SSN: </label>
                    <input type="text" name="input_6" id="input_6" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_7">Date of Birth: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_8">CDL Driver's License #: </label>
                    <input type="text" name="input_8" id="input_8" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_9">State: </label>
                    <input type="text" name="input_9" id="input_9" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_10">Expiration Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                        required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_11">When was this license first issued? </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                        required>
                </div>
                <div class="input-set">
                    <label for="input_12">Years of CDL driving experience: </label>
                    <input type="text" name="input_12" id="input_12" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_13">Medical Exam: Date of Issue: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                        required>
                </div>
                <div class="input-set">
                    <label for="input_14">Expiration Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                        required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_15">Applying for: Owner Operator/Contracted Driver </label>
                    <input type="text" name="input_15" id="input_15"
                        placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_16">E-mail address: </label>
                    <input type="text" name="input_16" id="input_16" placeholder="" required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_17">If contracted driver list Owner of Truck </label>
                    <input type="text" name="input_17" id="input_17" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_18">Current Address: Street: </label>
                    <input type="text" name="input_18" id="input_18" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_19">City: </label>
                    <input type="text" name="input_19" id="input_19" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_20">State: </label>
                    <input type="text" name="input_20" id="input_20" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_21">Zip Code: </label>
                    <input type="text" name="input_21" id="input_21" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_22">How long? </label>
                    <input type="text" name="input_22" id="input_22" placeholder="" required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_23">Home Phone #: </label>
                    <input type="text" name="input_23" id="input_23" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_24">Cell Phone #: </label>
                    <input type="text" name="input_24" id="input_24" placeholder="" required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_25">Emergency Contact Name: </label>
                    <input type="text" name="input_25" id="input_25" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_26">Phone #: </label>
                    <input type="text" name="input_26" id="input_26" placeholder="" required>
                </div>
            </p>
            <b>Please list all residence for the past three years (leave blank if none). </b>
            <p>
                <div class="input-set">
                    <label for="input_27">Street: </label>
                    <input type="text" name="input_27" id="input_27" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_28">City: </label>
                    <input type="text" name="input_28" id="input_28" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_29">State: </label>
                    <input type="text" name="input_29" id="input_29" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_30">Zip Code: </label>
                    <input type="text" name="input_30" id="input_30" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_31">How long? </label>
                    <input type="text" name="input_31" id="input_31" placeholder="" required>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_32">Street: </label>
                    <input type="text" name="input_32" id="input_32" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_33">City: </label>
                    <input type="text" name="input_33" id="input_33" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_34">State: </label>
                    <input type="text" name="input_34" id="input_34" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_35">Zip Code: </label>
                    <input type="text" name="input_35" id="input_35" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_36">How long? </label>
                    <input type="text" name="input_36" id="input_36" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_37">Street: </label>
                    <input type="text" name="input_37" id="input_37" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_38">City: </label>
                    <input type="text" name="input_38" id="input_38" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_39">State: </label>
                    <input type="text" name="input_39" id="input_39" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_40">Zip Code: </label>
                    <input type="text" name="input_40" id="input_40" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_41">How long? </label>
                    <input type="text" name="input_41" id="input_41" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">Do you have the legal right to work in the United States?
                    <div class="input-set">
                        <input type="radio" name="input_42" id="input_42" value="yes"></div>
                        <label class="input-set-label">Yes</label>
                    <div class="input-set">
                        <input type="radio" name="input_42" id="input_42" value="no" checked> No</div>
                </div>
            </p>
            <p>
                <div class="input-set">Have you worked for this company before?
                    <div class="input-set">
                        <input type="radio" name="input_43" id="input_43" value="yes" onclick="show('showhide_0')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_43" id="input_43" value="no" checked onclick="hide('showhide_0')"> No</div>
                </div>
            </p>

            <span id="showhide_0" style="display:none">
                <p>
                    <div class="input-set">
                        <label for="input_44">Dates from: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_45"> to </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_46">Reason for leaving: </label>
                        <input type="text" name="input_46" id="input_46" placeholder="" maxlength="80">
                    </div>
                </p>
            </span>
            <p>
                <div class="input-set">Are you now employed?
                    <div class="input-set">
                        <input type="radio" name="input_48" id="input_48" value="yes" onclick="hide('showhide_1')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_48" id="input_48" value="no" checked onclick="show('showhide_1')"> No</div>
                </div>
            </p>
            <span id="showhide_1">
                <p>
                    <div class="input-set">
                        <label for="input_49">Date since last employment: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                    </div>
                </p>
            </span>
            <p>
                <div class="input-set">
                    <label for="input_50">Who referred you? </label>
                    <input type="text" name="input_50" id="input_50" placeholder="" maxlength="50">
                </div>
            </p>
            <p>
                <div class="input-set">Have you ever been convicted of a felony?
                    <div class="input-set">
                        <input type="radio" name="input_51" id="input_51" value="yes" onclick="show('showhide_2')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_51" id="input_51" value="no" checked onclick="hide('showhide_2')"> No</div>
                </div>
            </p>
            <span id="showhide_2" style="display:none">
                <p>
                    <label for="input_52">Please explain fully. Conviction of a crime is not an automatic bar to employment. All circumstances
                        will be considered.
                        <br>
                    </label>
                    <textarea name="input_52" id="input_52" form="appform" style="width:100%" maxlength="10000"></textarea>
                </p>
            </span>
            <h3 class="heading">Education</h3>
            <p>
                <div class="input-set">
                    <label for="input_53">High School Attended: </label>
                    <input type="text" name="input_53" id="input_53" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_54">City: </label>
                    <input type="text" name="input_54" id="input_54" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_55">State: </label>
                    <input type="text" name="input_55" id="input_55" placeholder="" required>
                </div>
                <div class="input-set">Graduated?
                    <div class="input-set">
                        <input type="radio" name="input_56" id="input_56" value="yes"> Yes </div>
                    <div class="input-set">
                        <input type="radio" name="input_56" id="input_56" value="no" checked> No</div>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_57">College Trade School Attended: </label>
                    <input type="text" name="input_57" id="input_57" placeholder=""
                        required>
                </div>
                <div class="input-set">
                    <label for="input_58">City: </label>
                    <input type="text" name="input_58" id="input_58" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_59">State: </label>
                    <input type="text" name="input_59" id="input_59" placeholder="" required>
                </div>
                <div class="input-set">Graduated?
                    <div class="input-set">
                        <input type="radio" name="input_60" id="input_60" value="yes"> Yes </div>
                    <div class="input-set">
                        <input type="radio" name="input_60" id="input_60" value="no" checked> No</div>
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_61">Driving School Attended: </label>
                    <input type="text" name="input_61" id="input_61" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_62">City: </label>
                    <input type="text" name="input_62" id="input_62" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_63">State: </label>
                    <input type="text" name="input_63" id="input_63" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_64">Completion date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                        required>
                </div>
            </p>
            <p>
                <div class="input-set">Have you
                    <b>ever</b> been convicted of/or having a pending DWI/DUI?
                    <div class="input-set">
                        <input type="radio" name="input_65" id="input_65" value="yes" onclick="show('showhide_3')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_65" id="input_65" value="no" checked onclick="hide('showhide_3')"> No</div>
                </div>
                <div class="input-set">
                    <span id="showhide_3" style="display:none">
                        <label for="input_66">When? </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                    </span>
                </div>
            </p>
            <p>
                <div class="input-set">Have you
                    <b>ever</b> had a positive pre-employment random or post-accident drug/alcohol test?
                    <div class="input-set">
                        <input type="radio" name="input_67" id="input_67" value="yes" onclick="show('showhide_4')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_67" id="input_67" value="no" checked onclick="hide('showhide_4')"> No</div>
                </div>
                <div class="input-set">
                    <span id="showhide_4" style="display:none">
                        <label for="input_68">When? </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                    </span>
                </div>
            </p>
            <p>
                <div class="input-set">Have you
                    <b>ever</b> refused a random or post-accident drug / alcohol test?
                    <div class="input-set">
                        <input type="radio" name="input_69" id="input_69" value="yes" onclick="show('showhide_5')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_69" id="input_69" value="no" checked onclick="hide('showhide_5')"> No</div>
                </div>
                <div class="input-set">
                    <span id="showhide_5" style="display:none">
                        <label for="input_70">When? </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                    </span>
                </div>
            </p>

            <h2 class="heading"> Employment Record </h2>
            <h4> Please start with the most recent employer.</h4>
            <p>
                In accordance with
                <i>FMCSR 391.21 & .23</i>, an applicant must list all previous work experience for the three (3) years prior
                to the date of the application shown on page one, as well as all commercial driving experience for the seven
                (7) year period prior to those three years, for a total of 10 years. Include your job description, date of
                employment, reason for leaving and whether you were subject to FMCSA & U.S. DOT alcohol and controlled substance
                testing requirements for each job listed. Please start with the most recent employer. lnclude self-employment
                or time leased to another carrier. Any gaps in employment (including unemployment or retirement) must be
                explained.
            </p>
            <br>
            <div id="employers">
                <p>
                    <div class="input-set">
                        <label for="input_71">Employer: </label>
                        <input type="text" name="input_71[]" id="input_71" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_72">From </label>
                        <input type="text" name="input_72[]" id="input_72" placeholder="MM/DD/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_73">To </label>
                        <input type="text" name="input_73[]" id="input_73" placeholder="MM/DD/YYYY">
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_74">Address: </label>
                        <input type="text" name="input_74[]" id="input_74" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_75">City: </label>
                        <input type="text" name="input_75[]" id="input_75" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_76">State: </label>
                        <input type="text" name="input_76[]" id="input_76" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_77">Zip: </label>
                        <input type="text" name="input_77[]" id="input_77" placeholder="">
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_78">Phone #: </label>
                        <input type="text" name="input_78[]" id="input_78" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_79">Contact person: </label>
                        <input type="text" name="input_79[]" id="input_79" placeholder="">
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_80">Equipment Operated: </label>
                        <input type="text" name="input_80[]" id="input_80" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_81">Average Lenght of Haul: </label>
                        <input type="text" name="input_81[]" id="input_81" placeholder="">
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_82">Position Held: </label>
                        <input type="text" name="input_82[]" id="input_82" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_83">Reason for Leaving: </label>
                        <input type="text" name="input_83[]" id="input_83" placeholder="">
                    </div>
                </p>
                <p>
                    <div class="input-set">Were you subject to Federal Motor Carrier Safety Regulations (FMCSRs) at this employer?
                        <div class="input-set">
                            <input type="radio" name="input_159[0]" id="input_159" value="yes"> Yes </div>
                        <div class="input-set">
                            <input type="radio" name="input_159[0]" id="input_159" value="no" checked> No</div>
                    </div>
                </p>
                <p>
                    <div class="input-set">Was this a safety sensitive function as designated by the DOT and subject to 49 CFR part 402?
                        <div class="input-set">
                            <input type="radio" name="input_160[0]" id="input_160" value="yes"> Yes </div>
                        <div class="input-set">
                            <input type="radio" name="input_160[0]" id="input_160" value="no" checked> No</div>
                    </div>
                </p>
            </div>
            <input type="button" onclick="addemployed()" class="btn-5" value=" + add an employer">
            <br />
            <br />

            <h3 class="heading">Accident Record</h3>
            <p>List of all motor vehicle accidents in which the applicant was involved during the last 3 years. If none, leave
                blank.</p>
            <br>


            <p>
                <div class="input-set">
                    <label for="input_84">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
                <div class="input-set">
                    <label for="input_85">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label>
                    <input type="text" name="input_85" id="input_85"
                        placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_86">Fatalities: </label>
                    <input type="text" name="input_86" id="input_86" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_87">Injuries: </label>
                    <input type="text" name="input_87" id="input_87" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_88">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
                <div class="input-set">
                    <label for="input_89">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label>
                    <input type="text" name="input_89" id="input_89"
                        placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_90">Fatalities: </label>
                    <input type="text" name="input_90" id="input_90" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_91">Injuries: </label>
                    <input type="text" name="input_91" id="input_91" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_92">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
                <div class="input-set">
                    <label for="input_93">Nature of Accident (Head-on, Rear-end, Upset, etc.): </label>
                    <input type="text" name="input_93" id="input_93"
                        placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_94">Fatalities: </label>
                    <input type="text" name="input_94" id="input_94" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_95">Injuries: </label>
                    <input type="text" name="input_95" id="input_95" placeholder="">
                </div>
            </p>
            <br />
            <h3 class="heading">Traffic Convictions</h3>
            <p> list of all violations of motor vehicle laws or ordinances (other than violations involving only parking) of
                which the applicant was
                <u>convicted or forfeited bond or collateral</u> during the past 3 years. If none, leave blank</p>
            <br>
            <p>
                <div class="input-set">
                    <label for="input_96">City/St </label>
                    <input type="text" name="input_96" id="input_96" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_97">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
                <div class="input-set">
                    <label for="input_98">Charge (Include miles over if speeding): </label>
                    <input type="text" name="input_98" id="input_98" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_99">Penalty: </label>
                    <input type="text" name="input_99" id="input_99" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_100">City/St </label>
                    <input type="text" name="input_100" id="input_100" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_101">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
                <div class="input-set">
                    <label for="input_102">Charge (Include miles over if speeding): </label>
                    <input type="text" name="input_102" id="input_102"
                        placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_103">Penalty: </label>
                    <input type="text" name="input_103" id="input_103" placeholder="">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_104">City/St </label>
                    <input type="text" name="input_104" id="input_104" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_105">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
                <div class="input-set">
                    <label for="input_106">Charge (Include miles over if speeding): </label>
                    <input type="text" name="input_106" id="input_106"
                        placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_107">Penalty: </label>
                    <input type="text" name="input_107" id="input_107" placeholder="">
                </div>
            </p>
            <br />
            <h3 class="heading">Experience and Qualifications - Driver</h3>
            <p> All driver licenses or permits held in the past 3 years</p>
            <br />
            <p>
                <div class="input-set">
                    <label for="input_108">State: </label>
                    <input type="text" name="input_108" id="input_108" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_109">Licence No.: </label>
                    <input type="text" name="input_109" id="input_109" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_110">Type: </label>
                    <input type="text" name="input_110" id="input_110" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_111">Expiration Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_112">State: </label>
                    <input type="text" name="input_112" id="input_112" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_113">Licence No.: </label>
                    <input type="text" name="input_113" id="input_113" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_114">Type: </label>
                    <input type="text" name="input_114" id="input_114" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_115">Expiration Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_116">State: </label>
                    <input type="text" name="input_116" id="input_116" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_117">Licence No.: </label>
                    <input type="text" name="input_117" id="input_117" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_118">Type: </label>
                    <input type="text" name="input_118" id="input_118" placeholder="">
                </div>
                <div class="input-set">
                    <label for="input_119">Expiration Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY">
                </div>
            </p>

            <p>
                <div class="input-set">A. Have you ever been denied a license, permit or privilege to operate a motor vehicle?
                    <div class="input-set">
                        <input type="radio" name="input_120" id="input_120" value="yes"> Yes </div>
                    <div class="input-set">
                        <input type="radio" name="input_120" id="input_120" value="no" checked> No</div>
                </div>
            </p>
            <p>
                <div class="input-set">B. Has any license, permit or privilege ever been suspended or revoked?
                    <div class="input-set">
                        <input type="radio" name="input_121" id="input_121" value="yes"> Yes </div>
                    <div class="input-set">
                        <input type="radio" name="input_121" id="input_121" value="no" checked> No</div>
                </div>
            </p>
            <p>
                <label for="input_122">If the answer to either A or B is yes, give details </label>
                <br>
                <textarea name="input_122" id="input_122" form="appform" style="width:100%" maxlength="1000"></textarea>
            </p>

            <br />
            <h3 class="heading">Driving Experience</h3>
            <p>Check yes or no.</p>
            <br />

            <p>
                <div class="input-set">Straight Truck (Van, Tank, Flat, Dump Reefer):
                    <div class="input-set">
                        <input type="radio" name="input_123" id="input_123" value="yes" onclick="show('showhide_6')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_123" id="input_123" value="no" checked onclick="hide('showhide_6')"> No</div>
                </div>
                <span id="showhide_6" style="display:none">
                    <div class="input-set">
                        <label for="input_124">From: </label>
                        <input type="text" name="input_124" id="input_124" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_125">To: </label>
                        <input type="text" name="input_125" id="input_125" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_126">Approx No. of Miles (Total): </label>
                        <input type="text" name="input_126" id="input_126" placeholder="">
                    </div>
                </span>
            </p>
            <p>
                <div class="input-set">Tractor & Semi-trailer (Van, Tank, Flat, Dump Reefer):
                    <div class="input-set">
                        <input type="radio" name="input_127" id="input_127" value="yes" onclick="show('showhide_7')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_127" id="input_127" value="no" checked onclick="hide('showhide_7')"> No</div>
                </div>
                <span id="showhide_7" style="display:none">
                    <div class="input-set">
                        <label for="input_128">From: </label>
                        <input type="text" name="input_128" id="input_128" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_129">To: </label>
                        <input type="text" name="input_129" id="input_129" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_130">Approx No. of Miles (Total): </label>
                        <input type="text" name="input_130" id="input_130" placeholder="">
                    </div>
                </span>
            </p>
            <p>
                <div class="input-set">Tractor - Two Trailers (Van, Tank, Flat, Dump Reefer):
                    <div class="input-set">
                        <input type="radio" name="input_131" id="input_131" value="yes" onclick="show('showhide_8')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_131" id="input_131" value="no" checked onclick="hide('showhide_8')"> No</div>
                </div>
                <span id="showhide_8" style="display:none">
                    <div class="input-set">
                        <label for="input_132">From: </label>
                        <input type="text" name="input_132" id="input_132" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_133">To: </label>
                        <input type="text" name="input_133" id="input_133" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_134">Approx No. of Miles (Total): </label>
                        <input type="text" name="input_134" id="input_134" placeholder="">
                    </div>
                </span>
            </p>
            <p>
                <div class="input-set">Tractor - Three Trailers (Van, Tank, Flat, Dump Reefer):
                    <div class="input-set">
                        <input type="radio" name="input_135" id="input_135" value="yes" onclick="show('showhide_9')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_135" id="input_135" value="no" checked onclick="hide('showhide_9')"> No</div>
                </div>
                <span id="showhide_9" style="display:none">
                    <div class="input-set">
                        <label for="input_136">From: </label>
                        <input type="text" name="input_136" id="input_136" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_137">To: </label>
                        <input type="text" name="input_137" id="input_137" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_138">Approx No. of Miles (Total): </label>
                        <input type="text" name="input_138" id="input_138" placeholder="">
                    </div>
                </span>
            </p>
            <p>
                <div class="input-set">Motorcoach - School Bus:
                    <div class="input-set">
                        <input type="radio" name="input_139" id="input_139" value="yes" onclick="show('showhide_10')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_139" id="input_139" value="no" checked onclick="hide('showhide_10')"> No</div>
                </div>
                <span id="showhide_10" style="display:none">
                    <div class="input-set">
                        <label for="input_140">From: </label>
                        <input type="text" name="input_140" id="input_140" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_141">To: </label>
                        <input type="text" name="input_141" id="input_141" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_142">Approx No. of Miles (Total): </label>
                        <input type="text" name="input_142" id="input_142" placeholder="">
                    </div>
                </span>
            </p>
            <p>
                <div class="input-set">Other:
                    <div class="input-set">
                        <input type="radio" name="input_161" id="input_161" value="yes" onclick="show('showhide_12')"> Yes</div>
                    <div class="input-set">
                        <input type="radio" name="input_161" id="input_161" value="no" checked onclick="hide('showhide_12')"> No</div>
                </div>
                <span id="showhide_12" style="display:none">Type of Equipment:
                    <div class="input-set">
                        <input type="text" name="input_147" id="input_147" placeholder="">
                    </div>
                    <div class="input-set">
                        <label for="input_148">From: </label>
                        <input type="text" name="input_148" id="input_148" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_149">To: </label>
                        <input type="text" name="input_149" id="input_149" placeholder="MM/YYYY">
                    </div>
                    <div class="input-set">
                        <label for="input_150">Approx No. of Miles (Total): </label>
                        <input type="text" name="input_150" id="input_150" placeholder="">
                    </div>
                </span>
            </p>
            <p>
                <label for="input_151">List states operated in for last five years: </label>
                <br>
                <textarea maxlength="2000" name="input_151" id="input_151" form="appform" style="width:100%"></textarea>
            </p>
            <p>
                <label for="input_152">Show special courses or training that will help you as a driver: </label>
                <br>
                <textarea maxlength="2000" name="input_152" id="input_152" form="appform" style="width:100%"></textarea>
            </p>
            <p>
                <label for="input_153">Which safe driving awards do you hold and from whom? </label>
                <br>
                <textarea maxlength="2000" name="input_153" id="input_153" form="appform" style="width:100%"></textarea>
            </p>
            <h3 class="heading">Experience and Qualifications - Other</h3>
            <p>
                <label for="input_154">Show any trucking, transporting or other than shown elsewhere in this application: </label>
                <br>
                <textarea maxlength="2000" name="input_154" id="input_154" form="appform" style="width:100%"></textarea>
            </p>
            <p>
                <label for="input_155">List courses and training other than shown elsewhere in this application: </label>
                <br>
                <textarea maxlength="2000" name="input_155" id="input_155" form="appform" style="width:100%"></textarea>
            </p>
            <p>
                <label for="input_156">List special equipment or technical materials you can work with other than those already shown: </label>
                <br>
                <textarea maxlength="2000" name="input_156" id="input_156" form="appform" style="width:100%"></textarea>
            </p>
            <p>
                <div class="input-set">
                    <label for="input_157">Signature (Name): </label>
                    <input type="text" name="input_157" id="input_157" placeholder="" required>
                </div>
                <div class="input-set">
                    <label for="input_158">Date: </label>
                    <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                </div>
            </p>

            <br />
            <h3 class="heading">Pre-employment qualification Drug/Alcohol testing notification and consent</h3>
            <div class="boxline">
                <h3>TO BE READ AND ACCEPTED BY THE APPLICANT</h3>
                <p>
                    I understand as required by the Federal Motor Carrier Safety Regulations,49 CFR part 391.103, and company policy, all prospective
                    drivers must submit to a controlled substance test involving collection of a urine sample which will
                    be tested for the following controlled substances; marijuana. cocaine, opiates, amphetamines, and phencyclidine
                    (PCP). I understand I am also subject regulatory alcohol testing and any other Substance Abuse Testing
                    in accordance with the company policy and/or regulatory requirements.</p>
                <p>I understand, if I test positive for use of controlled substances, I am not medically qualified to operate
                    a commercial motor vehicle in interstate commerce. I also understand I will be given a reasonable opportunity
                    to confer with the company's Medical Review Officer before any positive test is reported to the company.
                    I further understand that once a positive test has been confirmed by the Medical Review Officer, I must
                    at my own expense be evaluated by a Substance Abuse Professional (SAP), submit to any required treatment,
                    and obtain a release by the Substance Abuse Professional prior to operating a commercial motor vehicle
                    in interstate commerce</p>
                <p>The result of any Substance Abuse test will be maintained by the Medical Review Ofticcr for the company who
                    will report whether the test result was negative or positive to the motor carrier. The Medical Review
                    Officer or the company may also release the result to my examining physician in connection with my DOT
                    required medical exam. The results will only be released to additional parties in accordance witlr the
                    regulations.
                </p>

                <p>I hereby agree lo submit to require Substance Abuse Testing (drug and/or alcohol)</p>
                <br>
                <p>
                    <div class="input-set">
                        <label for="input_200">Applicant's Printed Name: </label>
                        <input type="text" name="input_200" id="input_200" placeholder=""
                            required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_201">By checking this box you accept the above rules: </label>
                        <input type="checkbox" name="input_201"
                            id="input_201" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_202">Date: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                    </div>
                </p>
            </div>
            <br/>
            <br/>
            <br />
            <h3 class="heading">CERTIFICATE OF COMPLIANCE WITH DRIVER LICENSE REQUIREMENTS</h3>
            <div class="boxline">
                <h3>TO BE READ AND ACCEPTED BY THE APPLICANT</h3>
                <p>
                    MOTOR CARRIER INSTRUCTIONS: The requirements in Part 383 apply to every driver who operates in intrastate, interstate, or
                    foreign commerce and operates a vehicle weighing 26.001 pounds or more. can transport more than 15 people,
                    or transports hazardous material that require placarding. The requirements in Part 391 apply to every
                    driver who operates commerce and operates a vehicle weighing 10,001 pounds or more- can transport more
                    than 15 people, or transports hazardous materials that placarding.
                </p>

                <p>DRIVER REQUIREMENTS: Parts 383 and 391 of the Federal Motor Carrier safety Regulations contain some requirements
                    that you as a driver must comply with. These requirements are in effect as of July 1, 1997. They are
                    as follows:</p>
                <ul>
                    <li>
                        <strong>1. POSSESS ONLY ONE LICENSE:</strong>
                        <br/> You as a commercial vehicle driver may not possess more than one motor vehicle operator's license.
                        If you have more than one license, keep the license from your state of residence and return the additional
                        licenses to the states that issued them. DESTROYING a license does not close the record in the state
                        that issued it: you must notify that state. If a multiple license has been lost, stolen, or destroyed.
                        close your record by notifying the state of issuance that you no longer want to be licensed by that
                        state.</li>
                    <li>
                        <strong>2. NOTIFICATION OF LICENSE SUSPENSION, REVOCATION OR CANCELLATION: </strong>
                        <br/>Sections 391.15 (b) (2) and 383.33 of the Federal Motor Carrier Safety Regulations require that you
                        notify your employer the NEXT BUSINESS DAY of any revocation or suspension of your driver's license.
                        In addition, Section 383.31 requires that any time you violate a state or local traffic law (other
                        than parking). you must report it within 30 days to: l . Your employing motor carrier, and 2. the
                        state that issued your license. (If the violation occurs in a state other than the one which issued
                        your license.) The notification to both the employer and state must be in writing.

                    </li>
                </ul>

                <p>The following license is the only one I will possess:</p>
                <br>
                <p>
                    <div class="input-set">
                        <label for="input_203">Driver's license No. </label>
                        <input type="text" name="input_203" id="input_203" placeholder="" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_204">State </label>
                        <input type="text" name="input_204" id="input_204" placeholder="" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_205">Expiration Date: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY"
                            required>
                    </div>
                </p>

                <p>
                    <div class="input-set">
                        <label for="input_206">Driver's Name </label>
                        <input type="text" name="input_206" id="input_206" placeholder="" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_207">By checking this box you accept the above certifications: </label>
                        <input type="checkbox" name="input_207"
                            id="input_207" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_208">Date: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                    </div>
                </p>
            </div>
            <br/>
            <br/>
            <br />
            <h3 class="heading">IMPORTANT NOTICE REGARDING BACKGROUND REPORTS FROM THE PSI) Online Service</h3>
            <div class="boxline">
                <h3>TO BE READ AND ACCEPTED BY THE APPLICANT</h3>
                <p>
                    I. In connection with your application for employment with SOLY LANDLINE LLC ("Prospective Employer"), Prospective Employer.
                    its employees, agents or contractors may obtain one or more reports regarding your driving, and safety
                    inspection history from the Federal Motor Carrier Safety Administration (FMCSA).</p>
                <p>When the application for employment is submitted in person. if the Prospective Employer uses any information
                    it obtains from FMCSA in a decision to not hire you or to make any other adverse employment decision
                    regarding you. the Prospective Employer will provide you with a copy of the report upon which its decision
                    was ba.sed and a written summary of your rights under the Fair Credit Reporting Act before taking any
                    final adverse action. If any final adverse action is taken against you based upon your driving history
                    or safety report, the Prospective Employer will notify you that the action has been taken and that the
                    action was based in pan or in whole on this report.</p>


                <p>When the application for employment is submitted by mail. telephone. computer. or other similar means, if
                    the Prospective Employer uses any inlörmation it obtains from FMCSA in a decision to not hire you or
                    to make any other adverse employment decision regarding you, the Prospective Employer must provide you
                    within three business days of taking adverse action oral. or electronic notification: that adverse action
                    has been taken bused in whole or in part on information obtained from FMCSA; the name. address. and thc
                    toll frec tclcphone number of FMCSA. that the FMCS,A did not muke the decision to take the adverse action
                    and is unable to provide you the specific reasons why the adverse action was taken; and that you may,
                    upon providing proper identification, request a free copy of the report and may dispute with the FMCS,A
                    the accuracy or completeness of any information or report. If you request a copy of a driver record from
                    the Prospective Employer who procured the report, then. within 3 business days of receiving your request.
                    together with proper identification. the Prospective Employer must send or provide to you a copy of your
                    report and a summary of your rights under the Fair Credit Reporting Act.</p>

                <p>If you agree that the Prospective Employer may obtain such background reports, please read the following
                    and sign below.
                    <br/>2. I authorize SOLY LANDLINE LLC ("Prospective Employer") to access the FMCSA Pre-Employment Screening
                    Program (PSP) system to seek information regarding my commercial driving safety record and information
                    regarding my safety inspection history. I understand that I am consenting to the release of safety performance
                    information including crash data from the previous five (5) years and inspection history from the previous
                    three (3) years. I understand and acknowledge that this release of information may assist the Prospective
                    Employer to make a determination regarding my suitability as an employee.
                    <br/>3. I further understand that neither the Prospective Employer nor the FMCSA contractor supplying the
                    crash and safety information has the capability to correct any safety data that appears to be incorrect.
                    I understand I may challenge the accuracy of the data by submitting a request to https:/idataqs.fmcsa.dot.gov.
                    If I am challenging crash or inspection information reported by a State. FMCSA cannot change or correct
                    this data. I understand my request vvill be forwarded by the DataQs system to the appropriate State for
                    adjudication.
                    <br/>4. Please note: Any crash or inspection in which you were involved ssill display on your PSP report.
                    Since the PSP report does not report, or assign, or imply fault, it will include all Commercial Motor
                    Vehicle (CMV) crashes where you were a driver or co-driver and where those crashes were reported to FMCSA.
                    regardless of fault. Similarly, all inspections, with or without violations. appear on the PSP report.
                    State citations associated with FMCSR violations that have been adjudicated by a court of law will also
                    appear. and remain. on a PSP report.
                    <br/>I have read the above Notice Regarding Background Reports provided to me by Prospective Employer and
                    I understand that if I sign this consent form, Prospective Employer may obtain a report of my crash and
                    inspection history. I hereby authorize Prospective Employer and its employees, authorized agents, and/or
                    affiliates to obtain the information authorized above.
                </p>
                <p></p>
                <br>
                <p>
                    <div class="input-set">
                        <label for="input_209"> Name: </label>
                        <input type="text" name="input_209" id="input_209" placeholder="" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_210">By checking this box you accept the above rules: </label>
                        <input type="checkbox" name="input_210"
                            id="input_210" required>
                    </div>
                </p>
                <p>
                    <div class="input-set">
                        <label for="input_211">Date: </label>
                        <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                    </div>
                </p>
            </div>

            <br/>
            <br/>
            <br />
            <h3 class="heading">THE BELOW DISCLOSURE AND A UTHORIZATION LANGUAGE IS FOR MANDA TORY USE BY ALL ACCOUNT HOLDERS
            </h3>
            <div class="boxline">
                <h3>IMPORTANT DISCLOSURE REGARDING BACKGROUND REPORTS FROM THE PSP Online Service
                </h3>
                <p>
                    In connection with your application for employment with TRANSPORT INC ("Prospective Employer"), Prospective Employer, its
                    employees, agents or contractors may obtain one or more reports regarding your driving, and safety inspection
                    history from the Federal Motor Carrier Safety Administration (FMCSA). When the application for employment
                    is submitted in person, if the Prospective Employer uses any information it obtains from FMCSA in a decision
                    to not hire you or to make any other adverse employment decision regarding you, the Prospective Employer
                    will provide you with a copy of the report upon which its decision was based and a written summary of
                    your rights under the Fair Credit Reporting Act before taking any final adverse action. If any final
                    adverse action is taken against you based upon your driving history or safety report, the Prospective
                    Employer will notify you that the action has been taken and that the action was based in part or in whole
                    on this report. When the application for employment is submitted by mail, telephone, computer, or other
                    similar means, if the Prospective Employer uses any information it obtains from FMCSA in a decision to
                    not hire you or to make any other adverse employment decision regarding you, the Prospective Employer
                    must provide you within three business days of taking adverse action oral, written or electronic notification:
                    that adverse action has been taken based in whole or in part on information obtained from FMCSA; the
                    name, address, and the toll free telephone number of FMCSA; that the FMCSA did not make the decision
                    to take the adverse action and is unable to provide you the specific reasons why the adverse action was
                    taken; and that you may, upon providing proper identification, request a free copy of the report and
                    may dispute with the FMCSA the accuracy or completeness of any information or report. If you request
                    a copy of a driver record from the Prospective Employer who procured the report, then, within 3 business
                    days of receiving your request, together with proper identification, the Prospective Employer must send
                    or provide to you a copy of your report and a summary of your rights under the Fair Credit Reporting
                    Act. Neither the Prospective Employer nor the FMCSA contractor supplying the crash and safety information
                    has the capability to correct any saféty data that appears to be incorrect. You may challenge the accuracy
                    of the data by submitting a request to https://dataqs.fmcsa.dot.gov. If you challenge crash or inspection
                    information reported by a State, FMCSA cannot change or correct this data. Your request will be forwarded
                    by the DataQs system to the appropriate State for adjudication. Any crash or inspection in which you
                    were involved will display on your PSP report. Since the PSP report does not report, or assign, or imply
                    fault, it will include all Commercial Motor Vehicle (CMV) crashes where you were a driver or co-driver
                    and where those crashes were reported to FMCSA, regardless of fault. Similarly, all inspections, with
                    or without violations, appear on the PSP report. State citations associated with Federal Motor Carrier
                    Safety Regulations (FMCSR) violations that have been adjudicated by a court of law will also appear,
                    and rcmain, on a PSP report. The Prospective Employer cannot obtain background reports from FMCSA without
                    your authorization.
                    <p>
                        <strong>AUTHORIZATION</strong>
                    </p>

                    <p>If you agree that the Prospective Employer may obtain such background reports, please read the following
                        and sign below: I authorize SOLY LANDLINE LLC ("Prospective Employer") to access the FMCSA Pre-Employment
                        Screening Program (PSP) system to seek information regarding my commercial driving safety record
                        and information regarding my safety inspection history. I understand that I am authorizing the release
                        of safety performance information including crash data from the previous five (5) years and inspection
                        history from the previous three (3) years. I understand and acknowledge that this release of information
                        may assist the Prospective Employer to make a determination regarding my suitability as an employee.
                        I further understand that neither the Prospective Employer nor the FMCSA contractor supplying the
                        crash and safety information has the capability to correct any safety data that appears to be incorrect.
                        I understand I may challenge the accuracy of the data by submitting a request to https://dataqs.fmcsa.dot.gov.
                        If I challenge crash or inspection information reported by a State, FMCSA cannot change or correct
                        this data. I understand my request will be forwarded by the DataQs system to the appropriate State
                        for adj udication. I understand that any crash or inspection in which I was involved will display
                        on my PSP report. Since the PSP report does not report, or assign, or imply fault, I acknowledge
                        it will include all CMV crashes where I was a driver or co-driver and where those crashes were reported
                        to FMCSA, regardless of fault. Similarly, I understand all inspections, with or without violations,
                        will appear 1 on my PSP report and State citations associated with FMCSR violations that have been
                        adjudicated by a court of law will also appear, and remain, on my PSP report. I have read the above
                        Disclosure Regarding Background Repons provided to me by Prospective Employer and I understand that
                        if I sign this Disclosure and Authorization, Prospective Employer may obtain a report of my crash
                        and inspection history. I hereby authorize Prospective Employer and its employees, authorized agents,
                        and/or affiliates to obtain the information authorized above.
                    </p>

                    <br>
                    <p>
                        <div class="input-set">
                            <label for="input_212"> Name: </label>
                            <input type="text" name="input_212" id="input_212" placeholder="" required>
                        </div>
                    </p>
                    <p>
                        <div class="input-set">
                            <label for="input_213">By checking this box you accept the above authorizations: </label>
                            <input type="checkbox" name="input_213"
                                id="input_213" required>
                        </div>
                    </p>
                    <p>
                        <div class="input-set">
                            <label for="input_214">Date: </label>
                            <input type="date" name="input_\d+" id="input_\d+" placeholder="MM/DD/YYYY" required>
                        </div>
                    </p>
            </div>



            <input name="submit" type="submit" value="Submit your application" class="btn-5" style="margin:20px 0;" />

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
            document.getElementById('employers').insertAdjacentHTML('beforeend', ' <p><div class="input-set"><label for="input_71">Employer: </label> <input type="text" name="input_71[]" id="input_71" placeholder=""></div><div class="input-set"><label for="input_72">From </label> <input type="date" name="input_72[]" id="input_72" placeholder="MM/DD/YYYY"></div><div class="input-set"><label for="input_73">To </label> <input type="date" name="input_73[]" id="input_73" placeholder="MM/DD/YYYY"></div></p>'
                + '<p> <div class="input-set"><label for="input_74">Address: </label> <input type="text" name="input_74[]" id="input_74" placeholder=""></div><div class="input-set"><label for="input_75">City: </label> <input type="text" name="input_75[]" id="input_75" placeholder=""></div><div class="input-set"><label for="input_76">State: </label> <input type="text" name="input_76[]" id="input_76" placeholder=""></div><div class="input-set"><label for="input_77">Zip: </label> <input type="text" name="input_77[]" id="input_77" placeholder=""></div></p>'
                + '<p><div class="input-set"><label for="input_78">Phone #: </label> <input type="text" name="input_78[]" id="input_78" placeholder=""></div><div class="input-set"><label for="input_79">Contact person: </label> <input type="text" name="input_79[]" id="input_79" placeholder=""></div></p>'
                + '<p><div class="input-set"><label for="input_80">Equipment Operated: </label> <input type="text" name="input_80[]" id="input_80" placeholder=""></div><div class="input-set"><label for="input_81">Average Lenght of Haul: </label> <input type="text" name="input_81[]" id="input_81" placeholder=""></div></p>'
                + '<p><div class="input-set"><label for="input_82">Position Held: </label> <input type="text" name="input_82[]" id="input_82" placeholder=""></div><div class="input-set"><label for="input_83">Reason for Leaving: </label> <input type="text" name="input_83[]" id="input_83" placeholder=""></div></p>'
                + '<p><div class="input-set">Were you subject to Federal Motor Carrier Safety Regulations (FMCSRs) at this employer? <div class="input-set"><input type="radio" name="input_159[' + i + ']" value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_159[' + i + ']"  value="no" checked> No</div></div></p>'
                + ' <p><div class="input-set">Was this a safety sensitive function as designated by the DOT and subject to 49 CFR part 402? <div class="input-set"><input type="radio" name="input_160[' + i + ']"  value="yes"> Yes </div><div class="input-set"><input type="radio" name="input_160[' + i + ']"  value="no" checked> No</div></div></p>')
            i++;
        }
    </script>

    <script>
        $(document).ready(function(){
            $('#form').animate({opacity:"1", top:"0px"}, {duration: 800, specialEasing: {width: "linear"}});
        });
    </script>
</body>

</html>
{
    