<?php

namespace App\Http\Controllers;

use App\Models\Greenvibes;
use Illuminate\Http\Request;

class GreenvibesController extends Controller
{
    public function facture(){

        return view('greenvibes.facture');
    }


    public function create(){
        $grenVibes = Greenvibes::all();

        return view('greenvibes.create', compact('grenVibes'));
    }


    public function store(Request $request){

        $data = $request->all();

        $grenVibes = New Greenvibes();
        $grenVibes->create([
            'mois' => $request->mois,
            'montant' => $request->montant
        ]);

        return redirect()->route('greenvibes.create')->with('success', 'ajouter avec succés');
    }


    public function edit($id)
{
    $data = Greenvibes::findOrFail($id);
    return view('greenvibes.update', compact('data'));
}

public function update(Request $request, $id)
{
    $data = Greenvibes::findOrFail($id);
    $data->update($request->all());
    return redirect()->route('greenvibes.create')->with('success', 'Article updated successfully');
}


}