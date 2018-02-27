<?php
/**
 * Created by PhpStorm.
 * User: glados
 * Date: 27.02.18
 * Time: 1:57
 */

namespace App\Http\Controllers;

use App\Manager;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ManagerController extends Controller
{
    public function store() {
        $manager = new Manager;

        $manager->name = 'Andrew';
        $manager->email = 'andrew@email.com';
        $manager->phone = '0214313';
        $manager->company = 'Andrew COMP';
        $manager->photo_id = 'photo2';

        $manager->save();
    }

    public function addProject()
    {
        $manager_id = 2;
        $project_id = 1;
        $manager = Manager::find($manager_id);
        $manager->projects()->attach($project_id);
    }

    public function show()
    {
        $project = Project::find(1);

        foreach ($project->managers as $manager)
        {
            echo $manager;
        }
    }
}