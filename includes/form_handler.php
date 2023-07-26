<?php

// error_reporting(E_ALL);
// error_reporting(-1);
// ini_set('error_reporting', E_ALL);

include("FileUploaderClass.php");

//Please insert the config file's new path.
include("config.php");

if (isset($_POST["Submit"]))
{
    $FormHandler = new FormHandler();
    $FormHandler->Save($_POST);
    $FormHandler->SaveUploadedFile("IdDocument");
    //$FileHandler->upload_file("IdDocument", );
}

class FormHandler
{
    private $Conn;
    private $DNS;
    private $FileHandler;
    private const uploadsFilePath = ".\\id_uploads\\";

    function __construct()
    {
        $this->DNS = "mysql:dbname=" . DB_NAME . "; host=" . DB_HOST . ";";

        try {
            $this->Conn = new PDO(
                $this->DNS,
                DB_USERNAME,
                DB_PASSWORD
            );
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        $FileHandler = new FileUploader();
    }

    public function Save($formData): void
    {
        
        $cols = '';
        $colsPlaceHolders = '';

        unset($formData["IdDocument"]);
        unset($formData["Submit"]);
        
        $this->Conn->query($this->TryCreateTable());
        
        foreach ($formData as $column => $value) 
        {
            $cols .= $column . ",";
            $colsPlaceHolders .= ':a' . $column . ",";
        }

        $cols = rtrim($cols, ',');
        $colsPlaceHolders = rtrim($colsPlaceHolders, ',');
        $sqlStatement = "INSERT INTO `TrainingDevelopmentCommitmentForm` ($cols) VALUES ($colsPlaceHolders)";
        $preparedStatement = $this->Conn->prepare("$sqlStatement;");

        foreach ($formData as $column => $value) 
        {
            $preparedStatement->bindValue(':a' . $column, $value);
        }
        $preparedStatement->execute();
    }

    public function SaveUploadedFile($file) : void
    {
        if(!is_dir(FormHandler::uploadsFilePath))
        {
            mkdir(FormHandler::uploadsFilePath, 0777, true);
        }
        FileUploader::upload_file($file, FormHandler::uploadsFilePath);
    }

    private function TryCreateTable(): string
    {
        return "
            CREATE TABLE IF NOT EXISTS `TrainingDevelopmentCommitmentForm`(
                FormId INT AUTO_INCREMENT PRIMARY KEY,
                Title VARCHAR (256) NOT NULL DEFAULT '', 
                Initials VARCHAR (256) NOT NULL DEFAULT '', 
                IdNumber VARCHAR (15) NOT NULL DEFAULT '', 
                FirstName VARCHAR (256) NOT NULL DEFAULT '', 
                MiddleName VARCHAR (256) DEFAULT '', 
                Surname VARCHAR (256) NOT NULL DEFAULT '', 
                BirthDate DATE, 
                Age INT NOT NULL DEFAULT 0, 
                Occupation VARCHAR (256) NOT NULL DEFAULT '', 
                Telephone VARCHAR (50) DEFAULT '', 
                Cellphone VARCHAR (50) DEFAULT '',
                Fax VARCHAR (256) DEFAULT '', 
                Email VARCHAR (256) NOT NULL DEFAULT '', 
                NameAndSurname VARCHAR (256) NOT NULL DEFAULT '', 
                Relationship VARCHAR (256) NOT NULL DEFAULT '', 
                TelephoneAndMobileNumber VARCHAR (256) NOT NULL DEFAULT '', 
                Race VARCHAR (256) NOT NULL DEFAULT '', 
                Gender VARCHAR (256) NOT NULL DEFAULT '', 
                HomeLanguage VARCHAR (256) NOT NULL DEFAULT '', 
                IsDisabled VARCHAR (10) NOT NULL DEFAULT '', 
                DisabilityNature VARCHAR (256) NOT NULL DEFAULT '', 
                IsEyesightDisadvatanged VARCHAR (10) NOT NULL DEFAULT '', 
                IsHearingDisadvatanged VARCHAR (10) NOT NULL DEFAULT '', 
                IsWalkingDisadvatanged VARCHAR (10) NOT NULL DEFAULT '', 
                IsRecallectionDisadvatanged VARCHAR (10) NOT NULL DEFAULT '', 
                IsSouthAfricanCitizen VARCHAR (10) NOT NULL DEFAULT '', 
                BirthCountry VARCHAR (256) NOT NULL DEFAULT '', 
                Province VARCHAR (256) NOT NULL DEFAULT '', 
                HighSchoolName VARCHAR (256) NOT NULL DEFAULT '', 
                LastSchoolYear VARCHAR (256) NOT NULL DEFAULT '', 
                TeachingPhase VARCHAR (256) NOT NULL DEFAULT '', 
                LearnerResidentialArea VARCHAR (256) NOT NULL DEFAULT '', 
                TrainingProvince VARCHAR (256) NOT NULL DEFAULT '', 
                DistrictMunicipality VARCHAR (256) NOT NULL DEFAULT '', 
                LocalMunicipality VARCHAR (256) NOT NULL DEFAULT '', 
                HouseNumber VARCHAR (256) NOT NULL DEFAULT '', 
                StreetName VARCHAR (256) NOT NULL DEFAULT '', 
                Suburb VARCHAR (256) NOT NULL DEFAULT '', 
                City VARCHAR (256) NOT NULL DEFAULT '', 
                AreaType VARCHAR (256) NOT NULL DEFAULT '', 
                AreaCode VARCHAR (256) NOT NULL DEFAULT '', 
                IsPostalAddressSameAsResidence VARCHAR (15) NOT NULL DEFAULT '', 
                PrivateBag VARCHAR (256) DEFAULT '', 
                PostalCity VARCHAR (256) DEFAULT '', 
                AreaPostalCode VARCHAR (8) DEFAULT '', 
                EmployerName VARCHAR (256) NOT NULL DEFAULT '', 
                Principal VARCHAR (256) NOT NULL DEFAULT '', 
                EmployeeSDLNumber VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerTelephone VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerFax VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerEmail VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerDistrictMunicipality VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerLocalMunicipality VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerHouseNumber VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerSuburb VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerAddressAreaCode VARCHAR (256) NOT NULL DEFAULT '', 
                IsEmployerPostalAddressSameAsResidence VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerPrivateBag VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerPostalCity VARCHAR (256) NOT NULL DEFAULT '', 
                EmployerPostalCode VARCHAR (256) NOT NULL DEFAULT '', 
                TrainingProviderName VARCHAR (256) DEFAULT '',
                TrainingProviderNameAndSurnameContactPerson VARCHAR (256) DEFAULT '', 
                TrainingProviderStreetName VARCHAR (256) DEFAULT '',
                TrainingProviderSuburb VARCHAR (256) DEFAULT '',
                TrainingProviderCity VARCHAR (256) DEFAULT '',
                TrainingProviderDistrictMunicipality VARCHAR (256) DEFAULT '',
                TrainingProviderLocalMunicipality VARCHAR (256) DEFAULT '',
                TrainingProviderTelephone VARCHAR (256) DEFAULT '',
                TrainingProviderCellphone VARCHAR (256) DEFAULT '',
                TrainingProviderFax VARCHAR (256) DEFAULT '',
                TrainingProviderRegistrationNumber VARCHAR (256) DEFAULT '',
                TrainingProviderSDLNumber VARCHAR (256) DEFAULT '',
                ETDPSETAProgrammeNumber VARCHAR (256) DEFAULT '',
                OutputIndicatorNumber VARCHAR (256) DEFAULT '',
                CourseTitle VARCHAR (256) DEFAULT '',
                IsPartQualification VARCHAR (15) DEFAULT '',
                SAQAIDCode VARCHAR (256) DEFAULT '',
                NQFLevel INT DEFAULT 0,
                NumberOfCredits VARCHAR (256) DEFAULT '',
                IsArtisanRelated VARCHAR (15) DEFAULT '',
                ProgramDuration VARCHAR (256) DEFAULT '',
                ModeOfDelivery VARCHAR (256) DEFAULT '',
                DateOfEnrolmentOntoProgramme DATE,
                EstimatedDateOfCompletionOfTheProgramme DATE,
                IsCommittedToAttend VARCHAR (15) DEFAULT ''
            );
        ";
    }
}