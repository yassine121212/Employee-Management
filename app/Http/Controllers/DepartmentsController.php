<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = Departement::all();
    
        return view('departements.index')->with([
            'departements' => $departements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom_dep' => 'required',
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'jour_repo' => 'required',
            'even' => 'required' 
        ]);
        $data = $request->except(['_token']);
        Departement::create($data);
        return redirect()->route("departements.index")->with([
            "success" => "Departement added successfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departement = Departement::where('id', $id)->first();
        return view("departements.show")->with([
            "departement" => $departement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
             Departement::findOrFail($id) ;
        
        $departement = Departement::where('id', $id)->first();
        return view("departements.edit")->with([
            "departement" => $departement
        ]);
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
         
         /* $exist=Departement::find($id);
           if(!$exist){         redirect()->route("departements.index");
           }  */ 
        $departement = Departement::where('id', $id)->first();
        $this->validate($request, [
            'nom_dep' => 'required',
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'jour_repo' => 'required',
            'even' => 'required' 
        ]);
        $data = $request->except(['_token', '_method']);
        $departement->update($data);
        return redirect()->route("departements.index")->with([
            "success" => "Departement updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement = Departement::where('id', $id)->first();
        $departement->delete();
        return redirect()->route("departements.index")->with([
            "success" => "Departement deleted successfully"
        ]);
    }
}
