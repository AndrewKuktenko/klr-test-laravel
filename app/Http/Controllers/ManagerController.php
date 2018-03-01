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
use Storage;
use Validator;



class ManagerController extends Controller
{

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'managerName' => 'required|max:255',
            'managerEmail' => 'required|email',
            'managerPhone' => 'required',
            'managerCompany' => 'required|max:255',
            'managerPhoto' => 'required|image'
        ])->validate();

        $photoName = time().'.'.$request->managerPhoto->getClientOriginalExtension();

        $request->managerPhoto->move(public_path('avatars'), $photoName);

        $manager = new Manager;

        $manager->name = request('managerName');
        $manager->email = request('managerEmail');
        $manager->phone = request('managerPhone');
        $manager->company = request('managerCompany');
        $manager->photo_id = $photoName;

        $manager->save();

        return back()->withInput();
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'managerName' => 'required|max:255',
            'managerEmail' => 'required|email',
            'managerPhone' => 'required',
            'managerCompany' => 'required|max:255',
            'managerPhotoUpd' => 'required|image'
        ])->validate();

        $id = request('id');

        $exists = DB::table('managers')->where('id', $id)->first();

        if($exists === null) {
            return redirect('/')
                ->withErrors("No such manager id as $id!")
                ->withInput();
        }

        if($id != null) {

            $name = request('managerName');
            $email = request('managerEmail');
            $phone = request('managerPhone');
            $company = request('managerCompany');

            $photoName = time().'.'.$request->managerPhotoUpd->getClientOriginalExtension();

            $request->managerPhotoUpd->move(public_path('avatars'), $photoName);

            $oldPhotoName = DB::table('managers')->where('id',$id)->select('photo_id')->get();
            $oldPhotoName->map(function ($value){
                unlink(public_path() .  '/avatars/' . $value->photo_id );
            });

            DB::table('managers')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'company' => $company,
                    'photo_id' => $photoName
                ]);
        }
        
        return back()->withInput();
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

        $managers = Manager::all();

        return view('managers', ['managers' => $managers]);

    }

    public function findProjectsById(Request $request) {

        $id = $request->id;

        $manager = Manager::find($id);

        $projects = $manager->projects;

        $returnHTML = view('layouts.sections.managers.load',['projects'=> $projects])->render();
        return response()->json(['success' => true, 'html'=>$returnHTML]);
    }
}