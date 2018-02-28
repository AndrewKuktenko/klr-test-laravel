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
use Illuminate\Support\Facades\DB;
use Validator;


class ProjectController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'projectPrice' => 'required|integer ',
            'projectExecutor' => 'required|max:255',
            'startAt' => 'required|date',
            'finishAt' => 'required|date',
        ])->validate();

        $executors = request('projectExecutor');
        $executors = explode(',', $executors);

        foreach ($executors as $executor) {
            if (!$executor === "" || is_numeric($executor)) {

                $exists = DB::table('managers')->where('id', $executor)->first();

                if($exists === null) {
                    return redirect('/')
                        ->withErrors("No executor with id:$executor!")
                        ->withInput();
                }

            } else {
                return redirect('/')
                    ->withErrors('Executor id is null or not numeric!')
                    ->withInput();
            }
        }

        $project = new Project;

        $project->name = request('projectName');
        $project->price = request('projectPrice');
        $project->executor = request('projectExecutor');
        $project->start_at = request('startAt');
        $project->finish_at = request('finishAt');

        $project->save();

        $lastRow = DB::table('projects')->orderBy('id', 'desc')->first();

        $id = $lastRow->id;

        foreach ($executors as $executor) {
            if (!$executor === "" || is_numeric($executor)) {

                $manager = Manager::find($executor);

                $manager->projects()->attach($id);

            } else {
                return redirect('/')
                    ->withErrors('Executor id is null or not numeric!')
                    ->withInput();
            }
        }

    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'projectPrice' => 'required|integer',
            'projectExecutor' => 'required',
            'startAt' => 'required|date',
            'finishAt' => 'required|date',
        ])->validate();

        $id = request('id');

        $executors = request('projectExecutor');
        $executors = explode(',', $executors);

        foreach ($executors as $executor) {
            if (!$executor === "" || is_numeric($executor)) {

                $exists = DB::table('managers')->where('id', $executor)->first();

                if($exists === null) {
                    return redirect('/')
                        ->withErrors('No such executors id!')
                        ->withInput();
                }

                $manager = Manager::find($executor);

                if($manager->projects()->where('id', $id)->exists()) {
                    return redirect('/')
                        ->withErrors("Executor id:$executor already have this project!")
                        ->withInput();
                }

                $manager->projects()->attach($id);

            } else {
                return redirect('/')
                    ->withErrors('Executor id is null or not numeric!')
                    ->withInput();
            }
        }
        $exists = DB::table('projects')->where('id', $id)->first();

        if($exists === null) {
            return redirect('/')
                ->withErrors('No such id!')
                ->withInput();
        }

        if($id != null) {
            $name = request('projectName');
            $price = request('projectPrice');
            $executor = request('projectExecutor');
            $start_at = request('startAt');
            $finish_at = request('finishAt');


            DB::table('projects')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'price' => $price,
                    'executor' => $executor,
                    'start_at' => $start_at,
                    'finish_at' => $finish_at
                ]);
        }

    }

    public function show()
    {
        $manager = Manager::find(2);

        foreach ($manager->projects as $project)
        {
            echo '<pre>';
            echo $project;
            echo '</pre>';
        }
    }
}