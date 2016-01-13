<?php

namespace App\Http\Controllers\Birth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Birth\BirthInfo;
use DB;
class BirthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birth_info=BirthInfo::get();
        return view('birth.birth')->with('birthInfo',$birth_info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('birth.birth_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b = new BirthInfo();
        $b->id = $request->input('id');
        $b->date_of_registration = $request->input('date_of_registration');
        $b->name_of_child = $request->input('name_of_child');
        $b->sex_of_child = $request->input('sex_of_child');
        $b->weight_of_child = $request->input('weight_of_child');
        $b->name_of_father = $request->input('name_of_father');
        $b->fathers_nationality = $request->input('fathers_nationality');
        $b->name_of_mother = $request->input('name_of_mother');
        $b->mothers_nationality = $request->input('mothers_nationality');
        $b->present_address = $request->input('present_address');
        $b->permanent_address = $request->input('permanent_address');
        $b->date_of_birth = $request->input('date_of_birth');
        $b->name_of_reporter = $request->input('name_of_reporter');
        $b->save();
        return redirect('birth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return $id;
//        return $birth_show = DB::table('birth_info')->where('id','=',$id)->first();
//        return view('birth_show')->with('birth_show',$birth_show);
        $birth_show=BirthInfo::find($id);
        return view('birth.birth_show')->with('birth_show',$birth_show);
        //$user = BirthInfo::find(1);
        //$data['bankaccount']=Bankaccount::find($id);
//        $birth_show=BirthInfo::find($id);
//        return view('birth_show')->with('birth_show',$birth_show);

        //$birth_show=BirthInfo::get();
        //return view('birth_show')->with('birth_show',$birth_show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BirthInfo::find($id);
        return view('birth.birth_edit')->with('birth',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = BirthInfo::find($id);
        $b->date_of_registration = $request->input('date_of_registration');
        $b->name_of_child = $request->input('name_of_child');
        $b->sex_of_child = $request->input('sex_of_child');
        $b->weight_of_child = $request->input('weight_of_child');
        $b->name_of_father = $request->input('name_of_father');
        $b->fathers_nationality = $request->input('fathers_nationality');
        $b->name_of_mother = $request->input('name_of_mother');
        $b->mothers_nationality = $request->input('mothers_nationality');
        $b->present_address = $request->input('present_address');
        $b->permanent_address = $request->input('permanent_address');
        $b->date_of_birth = $request->input('date_of_birth');
        $b->name_of_reporter = $request->input('name_of_reporter');
        $b->save();
        return redirect('birth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BirthInfo::destroy($id);
        return "deleted";
    }
    public function delete($id)
    {
        BirthInfo::destroy($id);
        $birth_info=BirthInfo::get();
        return view('birth.birth')->with('birthInfo',$birth_info);
    }
   /* public function modify(Request $request, $id)
    {
        $b = BirthInfo::find($id);
        $b->date_of_registration = $request->input('date_of_registration');
        $b->name_of_child = $request->input('name_of_child');
        $b->sex_of_child = $request->input('sex_of_child');
        $b->weight_of_child = $request->input('weight_of_child');
        $b->name_of_father = $request->input('name_of_father');
        $b->fathers_nationality = $request->input('fathers_nationality');
        $b->name_of_mother = $request->input('name_of_mother');
        $b->mothers_nationality = $request->input('mothers_nationality');
        $b->present_address = $request->input('present_address');
        $b->permanent_address = $request->input('permanent_address');
        $b->date_of_birth = $request->input('date_of_birth');
        $b->name_of_reporter = $request->input('name_of_reporter');
        $b->save();
        return redirect('birth');
    }*/
}
