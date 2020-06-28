<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Configurations/init.php';
function ValidateAdmission($validation)
{
    $dataSet = $validation;
    $validatedData = [];

    if (isset($dataSet['AppliedFor'])) {
        if ($dataSet['AppliedFor'] == "School" || $dataSet['AppliedFor'] == "College") {
            $validatedData += ["AppliedFor" => $dataSet['AppliedFor']];
        } else {
            redirect(SITE_URL, 'flash_warning', 'Invalid Application form!');
        }
    }

    if ($dataSet['AppliedFor'] == "School") {
        $validatedData += ["Stream" => null];
    } else {
        if (isset($dataSet['Stream'])) {
            if ($dataSet['Stream'] == "Science" || $dataSet['Stream'] == "Management") {
                $validatedData += ["Stream" => $dataSet['Stream']];
            } else {
                redirect(SITE_URL, 'flash_warning', 'Invalid Stream!');
            }
        }
    }

    if (isset($dataSet['Level'])) {
        if($dataSet['AppliedFor'] == "College"){
             $validatedData += ["Level" => null];
        }else{
             if ($dataSet['Level'] == "Nursery" || $dataSet['Level'] == "L.K.G" || $dataSet['Level'] == "U.K.G" || $dataSet['Level'] >= 1 || $dataSet['Level'] <= 10) {
                 $validatedData += ["Level" => $dataSet['Level']];
            } else {
                redirect(SITE_URL, 'flash_warning', 'Invalid Level!');
            }
        }
    }

    $validatedData += ["FullName" => $dataSet['FullName']];

    if (isset($dataSet['Gender'])) {
        if ($dataSet['Gender'] == "Male" || $dataSet['Gender'] == "Female" || $dataSet['Gender'] == "Other") {
            $validatedData += ["Gender" => $dataSet['Gender']];
        } else {
            redirect(SITE_URL, 'flash_warning', 'Invalid Gender!');
        }
    }

    $nationality = [
        "Afghan",
        "Albanian",
        "Algerian",
        "American",
        "Andorran",
        "Angolan",
        "Antiguans",
        "Argentinean",
        "Armenian",
        "Australian",
        "Austrian",
        "Azerbaijani",
        "Bahamian",
        "Bahraini",
        "Bangladeshi",
        "Barbadian",
        "Barbudans",
        "Batswana",
        "Belarusian",
        "Belgian",
        "Belizean",
        "Beninese",
        "Bhutanese",
        "Bolivian",
        "Bosnian",
        "Brazilian",
        "British",
        "Bruneian",
        "Bulgarian",
        "Burkinabe",
        "Burmese",
        "Burundian",
        "Cambodian",
        "Cameroonian",
        "Canadian",
        "Cape Verdean",
        "Central African",
        "Chadian",
        "Chilean",
        "Chinese",
        "Colombian",
        "Comoran",
        "Congolese",
        "Costa Rican",
        "Croatian",
        "Cuban",
        "Cypriot",
        "Czech",
        "Danish",
        "Djibouti",
        "Dominican",
        "Dutch",
        "East Timorese",
        "Ecuadorean",
        "Egyptian",
        "Emirian",
        "Equatorial Guinean",
        "Eritrean",
        "Estonian",
        "Ethiopian",
        "Fijian",
        "Filipino",
        "Finnish",
        "French",
        "Gabonese",
        "Gambian",
        "Georgian",
        "German",
        "Ghanaian",
        "Greek",
        "Grenadian",
        "Guatemalan",
        "Guinea-Bissauan",
        "Guinean",
        "Guyanese",
        "Haitian",
        "Herzegovinian",
        "Honduran",
        "Hungarian",
        "I-Kiribati",
        "Icelander",
        "Indian",
        "Indonesian",
        "Iranian",
        "Iraqi",
        "Irish",
        "Israeli",
        "Italian",
        "Ivorian",
        "Jamaican",
        "Japanese",
        "Jordanian",
        "Kazakhstani",
        "Kenyan",
        "Kittian and Nevisian",
        "Kuwaiti",
        "Kyrgyz",
        "Laotian",
        "Latvian",
        "Lebanese",
        "Liberian",
        "Libyan",
        "Liechtensteiner",
        "Lithuanian",
        "Luxembourger",
        "Macedonian",
        "Malagasy",
        "Malawian",
        "Malaysian",
        "Maldivan",
        "Malian",
        "Maltese",
        "Marshallese",
        "Mauritanian",
        "Mauritian",
        "Mexican",
        "Micronesian",
        "Moldovan",
        "Monacan",
        "Mongolian",
        "Moroccan",
        "Mosotho",
        "Motswana",
        "Mozambican",
        "Namibian",
        "Nauruan",
        "Nepalese",
        "New Zealander",
        "Nicaraguan",
        "Nigerian",
        "Nigerien",
        "North Korean",
        "Northern Irish",
        "Norwegian",
        "Omani",
        "Pakistani",
        "Palauan",
        "Panamanian",
        "Papua New Guinean",
        "Paraguayan",
        "Peruvian",
        "Polish",
        "Portuguese",
        "Qatari",
        "Romanian",
        "Russian",
        "Rwandan",
        "Saint Lucian",
        "Salvadoran",
        "Samoan",
        "San Marinese",
        "Sao Tomean",
        "Saudi",
        "Scottish",
        "Senegalese",
        "Serbian",
        "Seychellois",
        "Sierra Leonean",
        "Singaporean",
        "Slovakian",
        "Slovenian",
        "Solomon Islander",
        "Somali",
        "South African",
        "South Korean",
        "Spanish",
        "Sri Lankan",
        "Sudanese",
        "Surinamer",
        "Swazi",
        "Swedish",
        "Swiss",
        "Syrian",
        "Taiwanese",
        "Tajik",
        "Tanzanian",
        "Thai",
        "Togolese",
        "Tongan",
        "Trinidadian or Tobagonian",
        "Tunisian",
        "Turkish",
        "Tuvaluan",
        "Ugandan",
        "Ukrainian",
        "Uruguayan",
        "Uzbekistani",
        "Venezuelan",
        "Vietnamese",
        "Welsh",
        "Yemenite",
        "Zambian",
        "Zimbabwean"
    ];
    // foreach ($nationality as $key => $index) {
    //     if (isset($dataSet['Nationality']) && $dataSet['Nationality'] == $index) {
    //         $validatedData += ["Nationality" => $dataSet['Nationality']];
    //         break;
    //     }
    // }
    $validatedData += ["Nationality" => $dataSet['Nationality']];
    $validatedData += ["YearBs" => $dataSet['YearBs']];
    $validatedData += ["MonthBs" => $dataSet['MonthBs']];
    $validatedData += ["DayBs" => $dataSet['DayBs']];
    $validatedData += ["YearAD" => $dataSet['YearAD']];
    $validatedData += ["MonthAD" => $dataSet['MonthAD']];
    $validatedData += ["DayAD" => $dataSet['DayAD']];

    $zones = [
        "Bagmati",
        "Bheri",
        "Dhawalagiri",
        "Gandaki",
        "Janakpur",
        "Karnali",
        "Koshi",
        "Lumbini",
        "Mahakali",
        "Mechi",
        "Narayani",
        "Rapti",
        "Sagarmatha",
        "Seti",
        "Other"
    ];

    // foreach ($zones as $key => $index) {
    //     if (isset($dataSet['Zone']) && ucfirst($dataSet['Zone']) == ucfirst($index)) {
    //         $validatedData += ["Zone" => ucfirst($dataSet['Zone'])];
    //         break;
    //     }
    // }
    $validatedData += ["Zone" => $dataSet['Zone']];
    $districts = [
        "achham",
        "arghakhanchi",
        "baglung",
        "baitadi",
        "bajhang",
        "bajura",
        "banke",
        "bara",
        "bardiya",
        "bhaktapur",
        "bhojpur",
        "chitwan",
        "dadeldhura",
        "dailekh",
        "dang deukhuri",
        "darchula",
        "dhading",
        "dhankuta",
        "dhanusa",
        "dholkha",
        "dolpa",
        "doti",
        "gorkha",
        "gulmi",
        "humla",
        "ilam",
        "jajarkot",
        "jhapa",
        "jumla",
        "kailali",
        "kalikot",
        "kanchanpur",
        "kapilvastu",
        "kaski",
        "kathmandu",
        "kavrepalanchok",
        "khotang",
        "lalitpur",
        "lamjung",
        "mahottari",
        "makwanpur",
        "manang",
        "morang",
        "mugu",
        "mustang",
        "myagdi",
        "nawalparasi",
        "nuwakot",
        "okhaldhunga",
        "palpa",
        "panchthar",
        "parbat",
        "parsa",
        "pyuthan",
        "ramechhap",
        "rasuwa",
        "rautahat",
        "rolpa",
        "rukum",
        "rupandehi",
        "salyan",
        "sankhuwasabha",
        "saptari",
        "sarlahi",
        "sindhuli",
        "sindhupalchok",
        "siraha",
        "solukhumbu",
        "sunsari",
        "surkhet",
        "syangja",
        "tanahu",
        "taplejung",
        "terhathum",
        "udayapur"
    ];

    // foreach ($districts as $key => $index) {
    //     if (isset($dataSet['District']) && ucfirst($dataSet['District']) == ucfirst($index)) {
    //         $validatedData += ["District" => ucfirst($dataSet['District'])];
    //         break;
    //     }
    // }
    $validatedData += ["District" => $dataSet['District']];
    $validatedData += ["VDC_Municapilaty" => $dataSet['VDC_Municapilaty']];
    $validatedData += ["WardNo" => $dataSet['WardNo']];
    $validatedData += ["ToleNo" => $dataSet['ToleNo']];
    $validatedData += ["TelephoneNo" => $dataSet['TelephoneNo']];
    $validatedData += ["FatherName" => $dataSet['FatherName']];

    // foreach ($nationality as $key => $index) {
    //     if (isset($dataSet['FatherNationality']) && $dataSet['FatherNationality'] == $index) {
    //         $validatedData += ["FatherNationality" => $dataSet['FatherNationality']];
    //         break;
    //     }
    // }
    $validatedData += ["FatherNationality" => $dataSet['FatherNationality']];
    $validatedData += ["FatherOccupation_Title" => $dataSet['FatherOccupation_Title']];
    $validatedData += ["Telephone_Off" => $dataSet['FatherOccupation_Title']];
    $validatedData += ["Telephone_Res" => $dataSet['Telephone_Res']];
    $validatedData += ["MotherName" => $dataSet['MotherName']];


    // foreach ($nationality as $key => $index) {
    //     if (isset($dataSet['MotherNationality']) && $dataSet['MotherNationality'] == $index) {
    //         $validatedData += ["MotherNationality" => $dataSet['MotherNationality']];
    //         break;
    //     }
    // }

    $validatedData += ["MotherNationality" => $dataSet['MotherNationality']];
    $validatedData += ["MotherOccupation_Title" => $dataSet['MotherOccupation_Title']];
    $validatedData += ["MotherTelephone" => $dataSet['MotherTelephone']];
    $validatedData += ["LocalGurdain" => $dataSet['LocalGurdain']];
    $validatedData += ["Relationship" => $dataSet['Relationship']];
    $validatedData += ["Address" => $dataSet['Address']];
    $validatedData += ["GurdainTelephoneNo" => $dataSet['GurdainTelephoneNo']];
    $validatedData += ["MobileNo" => $dataSet['MobileNo']];
    $validatedData += ["SlcPassedSchool" => $dataSet['SlcPassedSchool']];
    $validatedData += ["PassedOutYear" => $dataSet['PassedOutYear']];
    $validatedData += ["SlcPassedSchoolAddress" => $dataSet['SlcPassedSchoolAddress']];
    $validatedData += ["OptionalSubjectsInSlc" => $dataSet['OptionalSubjectsInSlc']];
    $validatedData += ["FirstOptional" => $dataSet['FirstOptional']];
    $validatedData += ["Mark1stOpionalInSlc" => $dataSet['Mark1stOpionalInSlc']];
    $validatedData += ["AggregratePercent" => $dataSet['AggregratePercent']];
    $validatedData += ["SecondOptional" => $dataSet['SecondOptional']];
    $validatedData += ["Mark2ndOpionalInSlc" => $dataSet['Mark2ndOpionalInSlc']];
    $validatedData += ["ECA" => $dataSet['ECA']];
    $validatedData += ["Hobby" => $dataSet['Hobby']];
    $validatedData += ["Awards" => $dataSet['Awards']];
    $validatedData += ["Bus" => $dataSet['Bus']];

    $bloodGroups = [
        "A+",
        "A-",
        "B+",
        "B-",
        "AB+",
        "AB-",
        "O+",
        "O-"
    ];


    foreach ($bloodGroups as $key => $index) {
        if (isset($dataSet['BloodGroup']) && $dataSet['BloodGroup'] == $index) {
            $validatedData += ["BloodGroup" => $dataSet['BloodGroup']];
            break;
        }
    }

    $validatedData += ["HealthProblem" => $dataSet['HealthProblem']];
    $validatedData += ["EmergencyContact" => $dataSet['EmergencyContact']];
    $validatedData += ["UnSualHabit" => $dataSet['UnSualHabit']];

    return $validatedData;
}
