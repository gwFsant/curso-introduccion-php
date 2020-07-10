<?php

class BaseElement{
    protected $title;
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