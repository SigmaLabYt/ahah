<?php

class Patient {
    
    private $id;
    private $fname;
    private $lname;
    private $birth_date;
    
    function __construct($patientDetails){
        $this->id = $patientDetails->patient_id;
        $this->fname = $patientDetails->fname;
        $this->lname = $patientDetails->lname;
        $this->birth_date = $patientDetails->birth_date;
    }
    
    public function __getID(){
        return $this->id;
    }
    
    public function __getFname(){
        return $this->fname;
    }
    
    public function __getLname(){
        return $this->lname;
    }
    
    public function __getBirthDate(){
        return $this->birth_date;
    }

    public function __getFullName(){
        return $this->fname." ".$this->lname;
    }

}

?>