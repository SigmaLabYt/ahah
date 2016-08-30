<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get Patients List
     */
    public function getPatientsList($l=10){
        $sql = "SELECT * FROM patients LIMIT $l";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    /**
     * Get Patient By ID
     */
    public function getPatient($id){
        
        $sql = "SELECT * FROM patients WHERE patient_id = '$id'";
        
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    /**
     * Get Patient Family
     */
    public function getPatientFamily($id){
        
        $sql = "SELECT * FROM patients WHERE fname LIKE
         (SELECT fname FROM patients WHERE patient_id ='$id')
         AND patient_id <> '$id'";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }

}
