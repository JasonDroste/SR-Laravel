<?php

namespace App\Http\Controllers;

use App\Models\Character;

use App\Models\MetaTypes;
use App\Models\Qualities;
use Illuminate\Http\Request;


class CharacterController extends Controller
{
    // Get and show all characters
    public function index(){
        return view('characters.index', [
            'characters' => Character::latest()->filter(request(['quality', 'search']))->get(),
        ]);
    }

    // show single character
    public function show(Character $character){
        return view('characters.show', [
            'character' => $character
        ]);
    }

    // Show create form
    public function create(Request $request)
    {
        $ddlData = MetaTypes::getMetaData();
        $data = $request->session()->get('data');
    return view('characters.create', compact('data'),['ddlData' =>$ddlData]);
    }

    public function createPageTwo(Request $request)
    {
        $posCBData = Qualities::getPositiveQualities();
        $data = $request->session()->get('data');
    return view('characters.create-page-2', compact('data'),['posCBData' =>$posCBData]);
    }


    //store Character data
    public function store(Request $request)
    {
       //dd($request->all());
        $formFields = $request->validate([
            'u_id'=> 'required',
            'meta_name' => 'required',
            'meta_type' => 'required',
            
        ]);

        if(empty($request->session()->get('data')))
        {
            $data = New Character();
            $data->fill($formFields);
            $request->session()->put('data', $data);
        }
        else
        {
            $data = $request->session()->get('data');
            $data->fill($formFields);
            $request->session()->put('data', $data);
        }
        //Character::create($formFields);

        return redirect('/characters/create-page-2');
        //return redirect()->route('characters.create-page-2');
    }

    
    public function storePageTwo(Request $request)
    {
      

        $data = $request->session()->get('data');
        
        $request->session()->get('data', $data);
        
        return view('characters.create-page-3', compact('data', $data));
    }
}

