 <?php 
 $student = new Student('12-xxxxx','Galve', 'John', '2021-12-12');
 
 ?>
 
 <main class="content">
            <h2>Student Information</h2>
            <p> Student number: <?php echo $student->getStudentNumber(); ?> </p>
               <p>  Complete Name: <?php echo $student->completName() ?> </p>
                <p> Date of Birth: <?php echo $student->getDob(); ?> </p>
          
        </main>