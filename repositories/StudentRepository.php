<?php
class StudentRepository extends DBRepository implements IStudentRepository {

  public static function all() : array {
    
  $query = self::query("SELECT * FROM student");
    
    $result = [];
    foreach($query as $s ) {
        $result[]  = new Student ( 
            $s['student_number'],
            $s['firstname'],
            $s['lastname'],
            $s['dob']
            );
    }

    return $result;
    
  }

   public static function find(string $id) : array {
    return [];
   }
  
   public static function create( array $student ) : void {
   
   }
    
   public static function update( array $student, string $id) : void {
  
   }
    
   public static function delete(string $id) : void {
   
   }
}