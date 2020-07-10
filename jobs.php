<?php

class Job{
  private $title;
  public $description;
  public $visible=true;
  public $months;

  public function __construct($title, $description){
    $this->title = $title;
    $this->description = $description;

  }

  public function setTitle($t){
    if($t == ''){
      $this->title = 'N/A';
    }
    $this->title=$t;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getDurationAsString(){

    $years = floor($this->months/12);
    $extraMonths = $this->months % 12;
  
    if ($years == 0){
      return "$extraMonths months";
    }elseif ($extraMonths == 0){
      return "$years years";
    }else{
      return "$years years $extraMonths months";
    }
    
  }

}

$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Dev','This is an awesome job!!!');
$job2->months = 5;

$job3 = new Job('Devops','This is an awesome job!!!');
$job3->months = 24;

$jobs = [
  $job1,
  $job2,
  $job3

    /*[
      'title' => 'PHP Developer',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil',
      'visible' => true,
      'months' => 16
    ],
    [
      'title' => 'Python Dev',
      'visible' => true,
      'months' => 14
    ],
    [
      'title' => 'Devops',
      'visible' => true,
      'months' => 5
    ],
    [
      'title' => 'Node Dev',
      'visible' => true,
      'months' => 24
    ],
    [
      'title' => 'Frontend Dev',
      'visible' => true,
      'months' => 3
    ]*/
  ];
  
  function printJob($job){
  
    if($job->visible == false){
      return;
    }
    
    //Contenido de la funcion
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
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