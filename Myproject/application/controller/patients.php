<?php

/**
 * Class Patients
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Patients extends Controller
{
    
    public function init_patients($patientsList){
        $ms = Array();
        foreach($patientsList as $patient){
            $m = new Patient($patient);
            array_push($ms,$m);
        }
        return $ms;
    }
    
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/patients/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function getPatient(){
        require APP . 'classes/patient.php';
        require APP . 'classes/family.php';
        $id = $_POST['patientID'];
        //Get from database
        
        $patientDetails = $this->model->getPatient($id);
        $patientFamily = $this->model->getPatientFamily($id);
        
        //Instantiate Family and Patient Object
        $familyDetails = new Family($patientFamily); // this object contains Patients Objects of all family
                                                     // Members
                                                    // To get it you need to call method __getFamilyMembers

        $patient = new Patient($patientDetails[0]); // this object contains only the principal patient 
                                                    // object (the one who have patient_id = $id)
        
        require APP . 'view/patients/patient.php';
        
    }
    
    public function getPatientsList(){
        require APP . 'classes/patient.php';
        require APP . 'classes/family.php';
        $patients = $this->model->getPatientsList();
        $patientsList = $this->init_patients($patients);
        require APP . 'view/patients/patientsList.php';
    }
    
}
