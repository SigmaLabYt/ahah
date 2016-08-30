<?php

class Family {
    
    private $familyMembers;
    
    function __construct($members){
        $ms = Array();
        foreach($members as $member){
            $m = new Patient($member);
            array_push($ms,$m);
        }
        $this->familyMembers = $ms;
    }
    
    function __getFamilyMembers(){
        return $this->familyMembers;
    }

}

?>