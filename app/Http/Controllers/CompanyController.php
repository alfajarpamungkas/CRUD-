<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $data = company::all();
        //$data = Company::with('articel')->latest();
        //dd($data->toArray());
        return view ('datacompany',compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function tambahcategory(){
        return view('tambahcategory');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Company::create($request->all());
        return redirect()->route('category');

    }
    public function tambahhcategory($id){

        $data = Company::find($id);
        //dd($data);
        return view('tampildata', compact('data'));

    }
    public function updatecategory(Request $request, $id){
        $data = Company::find($id);
        $data->update($request->all());

        return redirect()->route('category');
    }

    public function delete($id){
        $data = Company::find($id);
        $data->delete();
        return redirect()->route('category');

    }

    public function detaildata($id){
        $data['article']=Articel::get();
        //dd($data['article']->toArray());
        $data['articel'] = Company::find($id);
        //dd($data);
        return view('detaildata',$data);
    }

    public function tambaharticle($id){
        $category_id = Articel::join('companies', 'companies.id', '=', 'articels.company_id')
                        ->select('articels.*', 'companies.title', 'companies.slug', 'companies.status')
                        ->where('companies.company_id', $id)
                        ->get();
        return view('tambaharticle',compact('id'));
    }

    public function insertarticle(Request $request, $id){
        //dd($id);
        $file = Articel::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotoarticle/', $request->file('image')->getClientOriginalName());
            $file->image = $request->file('image')->getClientOriginalName();
            $file->save();
        }
        return redirect()->route('detaildata',['id'=>$id]);
    }

    public function tambahkanarticle($id){

        $file = Articel::find($id);
        //dd($file);
        return view('tampildataeditarticle', compact('file'));

    }
    public function updatearticle(Request $request, $id){
        //$file = Articel::find($id);
        //$file->update($request->all());

        $input = $request->all();
        $file = Articel::findorfail($id);
        if ($image = $request->file('image')) {
            $destinationPath = 'fotoarticle/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        else{
            unset($input['image']);
        }
        $file->update($input);
        return redirect()->route('detaildata',['id'=>$id]);
    }

}
