<?php 

class Student {
    protected string $student_number;
    protected string $firstname;
    protected string $lastname;
    protected string $dob;
    
    public function __construct(string $student_number, string $lastname, string $firstname, string $dob) {
        $this->student_number = $student_number;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->dob = $dob;
    }

    public function  getStudentNumber() : string {
        return $this->student_number;
    }

    public function completName(): string {
        return $this->lastname .", ". $this->firstname;
    }
public function getDob(): string {
    return $this->dob;
}

}