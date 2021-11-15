<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FormationStoreRequest;
use App\Http\Requests\FormationUpdateRequest;
use App\Http\Requests\FormationUpdatePictureRequest;

class FormationController extends Controller
{
    public function index(){
        $formations= Formation::orderBy('updated_at','DESC')->get();
        return view('formations.list',compact('formations'));
    }
    public function details($id){

        $formation= Formation::find($id);

        return view('formations.details',compact('formation'));
    }

    public function add(){
        return view('formations.add');
    }
    public function store(FormationStoreRequest $request){
        $params = $request->validated();
        $file=Storage::put('public',$params['picture']);
        $params['picture']=substr($file,offset:7);
        Formation::create($params);
        return redirect()->route('formaList');
    }

    public function update($id,FormationUpdateRequest $request){
        $params=$request->validated();
        $formation = Formation::find($id);
        $formation->update($params);
        return redirect()->route('formaDetails',$id);
    }

    public function updatePicture($id, FormationUpdatePictureRequest $request){
        $params= $request->validated();
        $formation= Formation::find($id);
        if(Storage::exists("public/$formation->picture")){
            Storage::delete("public/$formation->picture");
        }
        $file=Storage::put('public',$params['picture']);
        $params['picture']=substr($file,offset:7);
        $formation->picture= $params['picture'];
        $formation->save();

        return redirect()->route('formaDetails',$id);
    }
    public function delete($id){
        $formation = Formation::find($id);

        if(Storage::exists("public/$formation->picture")){
            Storage::delete("public/$formation->picture");
        }
        $formation->delete();
        return redirect()->route('formaList');
    }
}
