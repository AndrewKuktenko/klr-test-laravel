<?php
/**
 * Created by PhpStorm.
 * User: glados
 * Date: 27.02.18
 * Time: 1:57
 */

namespace App\Http\Controllers;

use App\Project;
use App\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjectController extends Controller
{
    public function store()
    {
        $project = new Project;

        $project->name = 'First';
        $project->price = '133123';
        $project->executor = 'Andrew';
        $project->start_at = '2018-02-27 00:13:13';
        $project->finish_at = '2018-02-27 00:13:13';

        $project->save();
    }

    public function show()
    {
        $manager = Manager::find(1);

        foreach ($manager->projects as $project)
        {
            echo $project;
        }
    }
}