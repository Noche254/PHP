<?php
//all your code
// $myName="Denoche";
// echo $myName;

//arrays
$students = array("Purity", "Annette", "Denoche", "Roy", "Jamal", "Diana");
echo $students[2];

//Associative array
$myMarks = array( "Assessments" => 25,
                  "CAT" => 15,
                  "Projects" => 35,
                  "Attendance" => 8,
                );
echo "Project Marks: " .$myMarks["Projects"];


//Multidimentional Arrays
$webDevTechnologies = array(
    'frontend' => array('HTML', 'CSS', 'JS', 'BOOTSTRAP'),
    'backend' => array('PHP', 'Python','Java','JS'),
    'frameworks' => array('Laravel','Django','SpringBoot','Flutter'),
    'Database' => array('MySQL','PostgreSQL','MongoDB','Firebase')
);
echo $webDevTechnologies['frontend'][2];
echo $webDevTechnologies['frameworks'][2];
echo $webDevTechnologies['Database'][0];

?>