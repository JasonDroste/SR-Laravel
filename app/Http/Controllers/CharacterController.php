<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Controllers\MetaDDLController;

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
    public function create()
    {
        $ddlData = MetaDDLController::getMetaType();
        return view('characters.create', ['ddlData' =>$ddlData]);
    }

    //store Character data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            '' => '',
        
        ]);
    }
}
