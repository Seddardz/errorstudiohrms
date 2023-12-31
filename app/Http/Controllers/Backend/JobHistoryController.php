<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobsModel;
use App\Models\JobHistoryModel;


class JobHistoryController extends Controller
{
    public function index(Request $request){
        $data['getRecord']=JobHistoryModel::getRecord($request);
        return view ('backend.job_history.list',$data);
    }

    public function add(Request $request){
        //si vous voulez obtenir touts les enregistrements
        //$data['getEmployees']=User::get();
        $data['getEmployees']=User::where('is_role','=',0)->get();
        $data['getJobs']=JobsModel::get();
        return view ('backend.job_history.add',$data);
    }

    public function add_post(Request $request)
    {
        // dd($request->all());
        $user = request()->validate([
            'employee_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'job_id'=>'required',
            'department_id'=>'required',

        ]);
        $user = new JobHistoryModel();
        $user->employee_id = trim($request->employee_id);
        $user->start_date = trim($request->start_date);
        $user->end_date = trim($request->end_date);
        $user->job_id = trim($request->job_id);
        $user->department_id = trim($request->department_id);
        $user->save();

        return redirect('admin/job_history')->with('success', 'Job history successfully register.');

    }
}
