<?php

namespace App\Controllers;

use App\Models\{Job, Project};
        
class IndexController extends BaseController{
    public function indexAction(){
                
        $jobs = Job::all();
        $project1 = new Project('Project 1','Description 1');

        $projects = [
        $project1
        ]; 

        $lastName = 'Benitez';
        $name = "Hector $lastName";
        $limitMonths = 60;

        return $this->renderHTML('index.twig',[
            'name' => $name,
            'jobs' => $jobs
        ]);
        
    }
}

?>