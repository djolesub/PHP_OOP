<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 7:37 AM
 */
include_once "Person.php";
include_once "Employee.php";
include_once "Student.php";


$per1 = new Person("Djordje",27,"Cvijiceva 82");
echo $per1->getAge();
echo $per1->getName();
echo $per1->getAddress();

echo "<hr>";
echo $per1;
echo "<br>Student<hr>";

$st1 = new Student("Andjelka",24,"Subotic","ETF",4);
echo $st1->getAge();
echo $st1->getName();
echo $st1->getAddress();
echo $st1->getSchool();
echo $st1->getGrade();
echo "<br>toString<hr>";
echo $st1;
echo "<br>Employee<hr>";
$emp1 = new Employee("Pavle",25,"Kovacevic","Delta","Buisnes");
echo $emp1->getAge();
echo $emp1->getName();
echo $emp1->getAddress();
echo $emp1->getFirm();
echo $emp1->getDepartment();
echo "<br>toString<hr>";
echo $emp1;


