<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

require_once 'lib1/Project.php';


use App\Models\{Job, Project, Printable};
//use lib1\Project;
//use App\Models\Printable;

$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev','This is an awesome job!!!');
$job2->months = 5;

$job3 = new Job('Devops','This is an awesome job!!!');
$job3->months = 24;

$project1 = new Project('Project 1','Description 1');

//$projectlib = new lib1\Project();

$jobs = [
  $job1,
  $job2,
  $job3   
  ];

$projects = [
  $project1
]; 
  
  function printElement(Printable $job){
  
    if($job->visible == false){
      return;
    }
    
    //Contenido de la funcion
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    //echo '<p>' . getDuration($job->months) . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

?>