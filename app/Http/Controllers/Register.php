<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Register_model;
use App\Models\Register_model;
use DB;



class Register extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $number=1;
        if($number <10000){
            $number=$number+1;

        }else{
            $number=1;
        }
        $abbreviation=$number."TAK";
        $employee_code=str_pad($abbreviation,$number);
        $register_user=new Register_model([
        'f_name'=> $request->input('f_name'),
        'm_name'=>$request->input('m_name'),
        'l_name'=>$request->input('l_name'),
        'employee_code'=> $employee_code,
        'updated_date'=>date('Y-m-d H:i:s')

        ]);
        $register_user->save();
        return redirect('/list');
        $request->session()->flash('status', 'Task was successful!');

        
        
        //var_dump($f_name,$m_name,$l_name,$employee_code);
        

    }

    public function list()
    {
        $data=Register_model::
        orderBy('id','desc')
        ->get();
       
        return view('viewusers',['data'=>$data]);
    }

    public function edit($id)
    {        
        //return View('edituser',compact('data'));

    $data = Register_model::findOrFail($id);
    Return view ('edituser', compact ('data','id'));
        

    }

    public function update(Request $request, $id)
    {
        //return ('success');
        $data=request()->validate([
            'f_name'=>'required',
            'm_name'=>'',
            'l_name'=>'required'
        ]);

        //$register->_vivregistrationemployee->update($data);
        DB::table('_vivregistrationemployee')
        ->where('id', $id)
        ->update([
            'f_name'  => $request['f_name'],
            'm_name'  => $request['m_name'],
            'l_name'  => $request['l_name'],
            ]);

            return redirect('/list');

    }

    public function delete($id)
    {
        $data = Register_model::find($id);
        $data->delete();
        echo("user".$id."deleted");
        return redirect('/list');

    }
}
