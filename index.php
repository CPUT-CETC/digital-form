<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Digital Form</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Instructions</h1>
            <ol>
                <li>Please read carefully before capturing, signing or submitting this online agreement</li>
                <li>Complete all mandatory fields on this agreement</li>
                <li>Ensure that information on this agreement is verified before submitting</li>
                <li>The following documents MUST be attached:</li>
            </ol>

            <ul>
                <li>A certified copy of a valid proof of identification (i.e. Green Barcoded Identity Document, ID Smart
                    Card or Driver’s Licence)</li>
            </ul>
        </header>
        <form action="">
            <section>
                <!-- Form - Section A -->
                <h3>SECTION A: BENEFICIARY PERSONAL INFORMATION</h3>
                <h5>NB: This section must be completed by the programme beneficiary</h5>

                <div class="container text-center">
                    <!-- First Row Grid -->
                    <div class="row">
                        <div class="col">
                            <label for="inputTitles" class="col-form-label">
                                Titles
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <select name="titles" id="inputTitles" class="form-control"
                                        aria-labelledby="titlesHelpInline">
                                        <option value="">Choose...</option>
                                        <option value="">Advocate</option>
                                        <option value="">Dr.</option>
                                        <option value="">Hon.</option>
                                        <option value="">Miss.</option>
                                        <option value="">Mr.</option>
                                        <option value="">Mrs.</option>
                                        <option value="">Ms.</option>
                                        <option value="">Professor</option>
                                        <option value="">Rev.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputInitials" class="col-form-label">
                                Initials
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputInitials" class="form-control"
                                        aria-labelledby="initialsHelpInline" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputIdNumber" class="col-form-label">
                                Identification Number
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputIdNumber" class="form-control"
                                        aria-labelledby="idNumberHelpInline" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row Grid -->
                    <div class="row">
                        <div class="col">
                            <label for="inputTitles" class="col-form-label">
                                First Name
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputFirstName" class="form-control"
                                        aria-labelledby="firstNameHelpInline" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputMidName" class="col-form-label">
                                Middle Name
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputMidName" class="form-control"
                                        aria-labelledby="midnameHelpInline">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputSurname" class="col-form-label">
                                Surname
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputSurname" class="form-control"
                                        aria-labelledby="surnameHelpInline" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Row -->
                    <div class="row">
                        <div class="col">
                            <label for="inputTitles" class="col-form-label">
                                Date of Birth
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <div class="input-group">
                                        <span class="input-group-text" id="dateOfBirth">example: 1980-06-21</span>
                                        <input type="text" class="form-control" id="basic-url"
                                            aria-describedby="dateOfBirth basic-addon4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="inputAge" class="col-form-label">
                                Age
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputAge" class="form-control"
                                        aria-labelledby="ageHelpInline" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fourth Row -->
                    <div class="row">
                        <div class="col">
                            <label for="inputAge" class="col-form-label">
                                Occupation
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows" id="my-grid-col-rows-half">
                                    <input type="text" id="inputOccupation" class="form-control"
                                        aria-labelledby="occupationHelpInline" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fifth Row -->
                    <div class="row">
                        <div class="col">
                            <label for="inputTelephone" class="col-form-label">
                                Telephone
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputTelephone" class="form-control"
                                        aria-labelledby="telephoneHelpInline">
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="inputCellphone" class="col-form-label">
                                Cellphone
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputCellphone" class="form-control"
                                        aria-labelledby="cellphoneHelpInline" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sixth Row -->
                    <div class="row">
                        <div class="col">
                            <label for="inputFax" class="col-form-label">
                                Fax
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputFax" class="form-control"
                                        aria-labelledby="faxHelpInline">
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="inputEmail" class="col-form-label">
                                Email
                                <span>*</span>
                            </label>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto my-grid-col-rows">
                                    <input type="text" id="inputEmail" class="form-control"
                                        aria-labelledby="emailHelpInline" required>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section>
                <h4>Next of kin</h4>

                <div class="row">
                    <div class="col">
                        <label for="inputName&Surname" class="col-form-label">
                            Name & Surname
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input type="text" id="inputName&Surname" class="form-control"
                                    aria-labelledby="name&SurnameHelpInline" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="inputRelationship" class="col-form-label">
                            Relationship
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input type="text" id="inputRelationship" class="form-control"
                                    aria-labelledby="relationshipHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="inputTelephone&MobileNumber" class="col-form-label">
                            Telephone & Mobile Number
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows" id="my-grid-col-rows-half">
                                <input type="text" id="inputTelephone&MobileNumber" class="form-control"
                                    aria-labelledby="telephone&MobileNumberHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
            </section>

            <section>
                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Race (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="African"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="African" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Coloured"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Coloured" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Indian"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Indian" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="White"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="White" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Gender (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="female"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Female" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="male"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Male" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Home Language
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <select name="titles" id="inputTitles" class="form-control"
                                    aria-labelledby="titlesHelpInline">
                                    <option value="">Choose...</option>
                                    <option value="Afrikaans">Afrikaans</option>
                                    <option value="English">English</option>
                                    <option value="IsiXhosa">IsiXhosa</option>
                                    <option value="IsiZulu">IsiZulu</option>
                                    <option value="IsiNdebele">IsiNdebele</option>
                                    <option value="IsiSwati">IsiSwati</option>
                                    <option value="Sepedi">Sepedi</option>
                                    <option value="Setswana">Setswana</option>
                                    <option value="Tshivenda">Tshivenda</option>
                                    <option value="Xitsonga">Xitsonga</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <section>
                <h4>Disablilities</h4>

                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Are you disabled? (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Yes"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Yes" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="No"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="No" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col">
                        <label for="race" class="col-form-label">
                            If Yes, Please state the nature of your disabitity
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto" style="width: 100%;">
                                <input type="text" id="inputDisNature" class="form-control"
                                    aria-labelledby="disnatureHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Seeing? (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Yes"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Yes" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="No"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="No" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Hearing? (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Yes"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Yes" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="No"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="No" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Walking? (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Yes"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Yes" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="No"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="No" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col">
                        <label for="race" class="col-form-label">
                            Remembering? (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="Yes"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Yes" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="No"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="No" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h4>Nationality</h4>

                <div class="row">
                    <div class="col">
                        <label for="race" class="col-form-label">
                            SA Citizenship? (Check the box on the left)
                            <span>*</span>
                        </label>
                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input name="isSouthAfricanCitizen" class="form-check-input mt-0" type="radio"
                                    value="Yes" aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="Yes" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <div class="input-group my-radios" id="my-grid-col-rows-half">
                            <div class="input-group-text">
                                <input name="isSouthAfricanCitizen" class="form-check-input mt-0" type="radio"
                                    value="No" aria-label="Radio button for following text input">
                            </div>
                            <input readonly value="No" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col">
                        <label for="race" class="col-form-label">
                            If No, Please state your country of birth
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto" style="width: 100%;">
                                <input type="text" id="inputDisNature" class="form-control"
                                    aria-labelledby="disnatureHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <label for="inputHighSchool" class="col-form-label">
                            Name of province where you attended school (High school)
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <select name="province" id="inputProvince" class="form-control"
                                    aria-labelledby="titlesHelpInline">
                                    <option value="">Choose...</option>
                                    <option value="">Eastern Cape</option>
                                    <option value="">Free State</option>
                                    <option value="">Gauteng</option>
                                    <option value="">Kwa-Zulu Natal</option>
                                    <option value="">Limpopo</option>
                                    <option value="">Mpumalanga</option>
                                    <option value="">Northern Cape</option>
                                    <option value="">North West</option>
                                    <option value="">Western Cape</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="highSchool" class="col-form-label">
                            Name of last school attended (High school)
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input type="text" id="highSchool" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="highSchool" class="col-form-label">
                            Last School Year
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input type="text" id="schoolYear" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="inputHighSchool" class="col-form-label">
                            Select Phase you teach
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <select name="province" id="inputProvince" class="form-control"
                                    aria-labelledby="titlesHelpInline">
                                    <option value="">Choose...</option>
                                    <option value="">Foundation Phase</option>
                                    <option value="">Intermediate Phase</option>
                                    <option value="">Senior Phase</option>
                                    <option value="">FET Phase</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="residenceArea" class="col-form-label">
                            Name of area where the learner resides
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input type="text" id="residenceArea" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="trainingProvince" class="col-form-label">
                            Name of province where training is taking place
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <select name="trainingProvince" id="trainingProvince" class="form-control"
                                    aria-labelledby="titlesHelpInline">
                                    <option value="">Choose...</option>
                                    <option value="">Eastern Cape</option>
                                    <option value="">Free State</option>
                                    <option value="">Gauteng</option>
                                    <option value="">Kwa-Zulu Natal</option>
                                    <option value="">Limpopo</option>
                                    <option value="">Mpumalanga</option>
                                    <option value="">Northern Cape</option>
                                    <option value="">North West</option>
                                    <option value="">Western Cape</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="districtMunicipality" class="col-form-label">
                            Name of District Municipality
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="DistrictMunicipality" type="text" id="districtMunicipality"
                                    class="form-control" aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="residenceArea" class="col-form-label">
                            Name of Local Municipality
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input type="text" id="residenceArea" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    </div>
                </div>
            </section>
            <hr>

            <section>
                <h4>Physical Address Information</h4>

                <div class="row">
                    <div class="col">
                        <label for="houseNo" class="col-form-label">
                            House No./Stand No.
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="HouseNumber" type="text" id="houseNo" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="streetName" class="col-form-label">
                            Street Name
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="StreetName" type="text" id="streetName" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="suburb" class="col-form-label">
                            Name of Suburb/Village/Township.
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="Suburb" type="text" id="suburb" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="city" class="col-form-label">
                            Name of City/Town/Tribal Authority
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="City" type="text" id="city" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="trainingProvince" class="col-form-label">
                            Type of area.
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <select name="trainingProvince" id="trainingProvince" class="form-control"
                                    aria-labelledby="titlesHelpInline">
                                    <option value="">Choose...</option>
                                    <option value="Rural">Rural</option>
                                    <option value="Urban">Urban</option>
                                    <option value="Peri">Peri</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="areaCode" class="col-form-label">
                            Area Code
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="AreaCode" type="text" id="areaCode" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr />

            <section>
                <div class="form-check">
                    <input name="IsPostalAddressSameAsResidence" class="form-check-input" type="checkbox" value=""
                        id="postalAddressCheck">
                    <label class="form-check-label" for="flexCheckDefault">
                        Same as above address?
                    </label>
                </div>
            </section>

            <section>
                <h4>Postal Address Information (If different from above)</h4>
                <div class="row">
                    <div class="col">
                        <label for="privateBag" class="col-form-label">
                            Private Bag/P.O Box Number
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="PrivateBag" type="text" id="postalAreaCode" class="form-control"
                                    aria-labelledby="initialsHelpInline">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="postalCity" class="col-form-label">
                            Name of City/Town/Tribal Authority
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="PostalCity" type="text" id="postalCity" class="form-control"
                                    aria-labelledby="initialsHelpInline">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="areaCode" class="col-form-label">
                            Area Code
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="AreaPostalCode" type="text" id="postalAreaCode" class="form-control"
                                    aria-labelledby="initialsHelpInline">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    </div>
                </div>
            </section>

            <hr />
            <section>
                <h3>SECTION B: EMPLOYER INFORMATION</h3>

                <div class="row">
                    <div class="col">
                        <label for="employer" class="col-form-label">
                            Employer Name
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="Employer" type="text" id="postalAreaCode" class="form-control"
                                    value="DEPARTMENT OF BASIC EDUCATION" aria-labelledby="initialsHelpInline">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="employer" class="col-form-label">
                            Principal /Subject Advisor
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="Employer" type="text" id="postalAreaCode" class="form-control"
                                    aria-labelledby="initialsHelpInline" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="employer" class="col-form-label">
                            Employer SDL Number (If Applicable)
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="Employer" type="text" id="postalAreaCode" class="form-control"
                                    value="NL00015647" aria-labelledby="postalAreaCode" disabled readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="employerTelephone" class="col-form-label">
                            Telephone
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerTelephone" type="text" id="employerTelephone" class="form-control"
                                    aria-labelledby="employerTelephone" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="fax" class="col-form-label">
                            Fax
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerFax" type="text" id="employerFax" class="form-control"
                                    value="NL00015647" aria-labelledby="employerFax" disabled readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="employerEmail" class="col-form-label">
                            Email
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerEmail" type="text" id="employerEmail" class="form-control"
                                    aria-labelledby="employerEmail" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="employerDistrictMunicipality" class="col-form-label">
                            Name of District Municipality
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerDistrictMunicipality" type="text" id="employerDistrictMunicipality"
                                    class="form-control" aria-labelledby="employerDistrictMunicipality" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="employerLocalMunicipality" class="col-form-label">
                            Name of Local Municipality
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerLocalMunicipality" type="text" id="employerLocalMunicipality"
                                    class="form-control" aria-labelledby="EmployerLocalMunicipality" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="employerHouseNo" class="col-form-label">
                            Physical Address: Street No./Stand No.
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerHouseNumber" type="text" id="employerHouseNumber"
                                    class="form-control" aria-labelledby="employerHouseNumber" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="employerSuburb" class="col-form-label">
                            Name of Suburb/Village/Township
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerSuburb" type="text" id="employerSuburb" class="form-control"
                                    aria-labelledby="EmployerSuburb">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="employerHouseNo" class="col-form-label">
                            Physical Address Area Code.
                            <span>*</span>
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerAddressAreaCode" type="text" id="employerAddressAreaCode"
                                    class="form-control" aria-labelledby="employerAddressAreaCode" required>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    </div>
                </div>
            </section>

            <section>
                <div class="form-check">
                    <input name="IsEmployerPostalAddressSameAsResidence" class="form-check-input" type="checkbox"
                        value="" id="employerPostalAddressSameAsResidence">
                    <label class="form-check-label" for="flexCheckDefault">
                        Same as above address?
                    </label>
                </div>
            </section>

            <section>
                <h4>Postal Address Information (If different from above)</h4>
                <div class="row">
                    <div class="col">
                        <label for="privateBag" class="col-form-label">
                            Postal Address: Private Bag/P.O. Box Number.
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerPrivateBag" type="text" id="employerPrivateBag"
                                    class="form-control" aria-labelledby="employerPrivateBag">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="postalCity" class="col-form-label">
                            Name of City/Town/Tribal Authority
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerPostalCity" type="text" id="employerPostalCity"
                                    class="form-control" aria-labelledby="employerPostalCity">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="employerPostalCode" class="col-form-label">
                            Postal Code.
                        </label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto my-grid-col-rows">
                                <input name="EmployerPostalCode" type="text" id="employerPostalCode"
                                    class="form-control" aria-labelledby="employerPostalCode">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    </div>
                </div>
            </section>
            <hr />

            <section>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button style="font-size: 22px; !important" class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                SECTION C: TRAINING PROVIDER/INSITUTION INFORMATION
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <h6>NB: This section must be completed by the training provider </h6>
                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderName" class="col-form-label">
                                        Name of Training Provider/Institution
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderName" type="text" id="trainingProviderName"
                                                value="NATIONAL EDUCATION COLLABORATION TRUST" disabled
                                                class="form-control" aria-labelledby="trainingProviderName">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="trainingProviderNameAndSurnameContactPerson" class="col-form-label">
                                        Name and Surname of Contact Person
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderNameAndSurnameContactPerson" type="text"
                                                id="trainingProviderName" value="DR JOHN THURLOW" disabled
                                                class="form-control" aria-labelledby="trainingProviderName">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderName" class="col-form-label">
                                        Training Provider /Institution Physical Address: House/Stand No.
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderName" type="text" id="trainingProviderName"
                                                value="BLOCK D" disabled class="form-control"
                                                aria-labelledby="trainingProviderName">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="trainingProviderNameAndSurnameContactPerson" class="col-form-label">
                                        Street Name
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderStreetName" type="text"
                                                id="trainingProviderStreetName" value=" WEST AVENUE" disabled
                                                class="form-control" aria-labelledby="trainingProviderStreetName">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderSuburb" class="col-form-label">
                                        Name of Suburb/Village/Township
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderSuburb" type="text" id="trainingProviderSuburb"
                                                value="CENTURION" disabled class="form-control"
                                                aria-labelledby="trainingProviderSuburb">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="trainingProviderCity" class="col-form-label">
                                        Name of City/Town/Tribal Authority
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderCity" type="text" id="trainingProviderCity"
                                                value="TSHWANE" disabled class="form-control"
                                                aria-labelledby="trainingProviderCity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderDistrictMunicipality" class="col-form-label">
                                        Name of District Municipality
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderDistrictMunicipality" type="text"
                                                id="trainingProviderDistrictMunicipality" value="TSHWANE" disabled
                                                class="form-control"
                                                aria-labelledby="trainingProviderDistrictMunicipality">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="trainingProviderLocalMunicipality" class="col-form-label">
                                        Name of Local Municipality
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderLocalMunicipality" type="text"
                                                id="trainingProviderLocalMunicipality" value="TSHWANE" disabled
                                                class="form-control"
                                                aria-labelledby="trainingProviderLocalMunicipality">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderTelephone" class="col-form-label">
                                        Telephone
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderTelephone" type="text"
                                                id="trainingProviderTelephone" value="(012) 752 6200" disabled
                                                class="form-control" aria-labelledby="trainingProviderTelephone">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="trainingProviderCellphone" class="col-form-label">
                                        Mobile
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderCellphone" type="text"
                                                id="trainingProviderCellphone" value="(082) 854 5543" disabled
                                                class="form-control" aria-labelledby="trainingProviderCellphone">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderFax" class="col-form-label">
                                        Telephone
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderFax" type="text" id="trainingProviderFax"
                                                value="(012) 752 6200" disabled class="form-control"
                                                aria-labelledby="trainingProviderFax">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="trainingProviderRegistrationNumber" class="col-form-label">
                                        Registration/ Accreditation number
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderRegistrationNumber" type="text"
                                                id="trainingProviderRegistrationNumber" value="" disabled
                                                class="form-control"
                                                aria-labelledby="trainingProviderRegistrationNumber">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="trainingProviderSDLNumber" class="col-form-label">
                                        SDL number (If applicable).
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="TrainingProviderSDLNumber" type="text"
                                                id="trainingProviderSDLNumber" value="L960784967" disabled
                                                class="form-control" aria-labelledby="trainingProviderSDLNumber">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr />

            <section>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button style="font-size: 22px; !important" class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                SECTION D: SKILLS DEVELOPMENT PROGRAMME INFORMATION
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <h6>NB: This section must be completed by the ETDP SETA designated official</h6>

                            <div class="row">
                                <div class="col">
                                    <label for="eTDPSETAProgrammeNumber" class="col-form-label">
                                        ETDP SETA Programme Number
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="ETDPSETAProgrammeNumber" type="text"
                                                id="eTDPSETAProgrammeNumber" value="THREE (3)" disabled
                                                class="form-control" aria-labelledby="eTDPSETAProgrammeNumber">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="outputIndicatorNumber" class="col-form-label">
                                        Output Indicator Number
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="OutputIndicatorNumber" type="text" id="outputIndicatorNumber"
                                                value="3.15" disabled class="form-control"
                                                aria-labelledby="outputIndicatorNumber">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="courseTitle" class="col-form-label">
                                        Project/ Course Title.
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="CourseTitle" type="text" id="courseTitle"
                                                value="Comprehension Across The Curriculum" disabled
                                                class="form-control" aria-labelledby="courseTitle">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="race" class="col-form-label">
                                        Part Qualification/Skills Programme?
                                    </label>
                                    <div class="input-group my-radios" id="my-grid-col-rows-half">
                                        <div class="input-group-text">
                                            <input name="isPartQualification" class="form-check-input mt-0" type="radio"
                                                value="Yes" checked aria-label="isPartQualification">
                                        </div>
                                        <input readonly value="Yes" type="text" class="form-control"
                                            aria-label="Text input with radio button">

                                        <div class="input-group-text">
                                            <input name="isPartQualification" class="form-check-input mt-0" type="radio"
                                                value="No" aria-label="Radio button for following text input">
                                        </div>
                                        <input readonly value="No" type="text" class="form-control"
                                            aria-label="Text input with radio button">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="sAQAIDCode" class="col-form-label">
                                        SAQA ID Code (If applicable)
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="SAQAIDCode" type="text" id="sAQAIDCode" value="" disabled
                                                class="form-control" aria-labelledby="sAQAIDCode">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="nQFLevel" class="col-form-label">
                                        NQF Level
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="NQFLevel" type="text" id="nQFLevel" value="5" disabled
                                                class="form-control" aria-labelledby="nQFLevel">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="numberOfCredits" class="col-form-label">
                                        Number of Credits (If applicable)
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="NumberOfCredits" type="text" id="numberOfCredits" value="15"
                                                disabled class="form-control" aria-labelledby="numberOfCredits">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="race" class="col-form-label">
                                        Artisan Related?
                                    </label>
                                    <div class="input-group my-radios" id="my-grid-col-rows-half">
                                        <div class="input-group-text">
                                            <input name="isArtisanRelated" class="form-check-input mt-0" type="radio"
                                                value="Yes" checked aria-label="isArtisanRelated">
                                        </div>
                                        <input readonly value="Yes" type="text" class="form-control"
                                            aria-label="Text input with radio button">

                                        <div class="input-group-text">
                                            <input name="isArtisanRelated" class="form-check-input mt-0" type="radio"
                                                value="No" aria-label="isArtisanRelated">
                                        </div>
                                        <input readonly value="No" type="text" class="form-control"
                                            aria-label="Text input with radio button">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="programDuration" class="col-form-label">
                                        Programme Duration
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="ProgramDuration" type="text" id="programDuration" value="6HRS"
                                                disabled class="form-control" aria-labelledby="programDuration">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="modeOfDelivery" class="col-form-label">
                                        Mode of Delivery
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="ModeOfDelivery" type="text" id="modeOfDelivery" value="ONLINE"
                                                disabled class="form-control" aria-labelledby="modeOfDelivery">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="dateOfEnrolmentOntoProgramme" class="col-form-label">
                                        Date of enrolment onto the Programme
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="DateOfEnrolmentOntoProgramme" type="date"
                                                id="dateOfEnrolmentOntoProgramme" value="2021-11-01" disabled
                                                class="form-control" aria-labelledby="dateOfEnrolmentOntoProgramme">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="estimatedDateOfCompletionOfTheProgramme" class="col-form-label">
                                        Estimated Date of Completion of the Programme
                                    </label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto my-grid-col-rows">
                                            <input name="EstimatedDateOfCompletionOfTheProgramme" type="date"
                                                id="estimatedDateOfCompletionOfTheProgramme" value="2023-03-31" disabled
                                                class="form-control"
                                                aria-labelledby="estimatedDateOfCompletionOfTheProgramme">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FIle Upload section -->
            <section>
                <div>
                    <h4>
                        <label for="idDoc" class="form-label">Please upload a copy of your ID document by clicking on
                            the
                            'choose files' button.</label>
                    </h4>
                    <input class="form-control form-control-lg" id="idDoc" type="file">
                </div>
            </section>

            <hr />
            <section>
                <h3>SECTION E: STATEMENT OF COMMITMENT AND SIGNATURES</h3>

                <div class="form-check">
                    <h6>The beneficiary</h6>
                    <input name="IsCommittedToAttend" class="form-check-input" type="checkbox" value=""
                        id="isCommittedToAttend">
                    <label class="form-check-label" for="flexCheckDefault">
                        I commit to attend the scheduled training and meet all the requirements of the programme.
                    </label>
                </div>
            </section>

            <section class="information">
                <h3>DISCLOSURE OF PERSONAL INFORMATION</h3>
                <p>
                    Information provided will solely be used for the ETDP SETA reporting purposes and will not be
                    provided
                    to the third party without the prior consent of the beneficiary. The ETDP SETA commits to handle the
                    beneficiary personal information in accordance with the provisions of the POPI Act.
                </p>

                <h3>INDEMINITY</h3>
                <p>
                    Upon signature of this agreement the training provider and beneficiary shall indemnify and hold
                    harmless
                    the SETA, its officers, employees and agents from and against any loss (including legal costs and
                    expenses) or liability incurred or suffered by any person arising from any claim, demand, action or
                    proceeding by any person where such loss or liability was caused by a willful, unlawful or negligent
                    act
                    or omission of the training provider, its employees, agents or subcontractors.
                </p>
            </section>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>