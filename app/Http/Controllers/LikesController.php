<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flavour;

class LikesController extends Controller
{
    public function show(){
        $entries = Flavour::all();
        $disable = false;
        return view('flavours', [
            'entries' => $entries,
            'disableButton' => $disable
        ]);  
    }

    public function update(int $id){

        $flavour = Flavour::where("id", "=", $id)->first();
        $flavour->likes += 1; 

        $flavour->save();
        $entries = Flavour::all();

        return view('flavours', [
            'disableButton' => true,
            'entries' => $entries
        ]);
    }
}
