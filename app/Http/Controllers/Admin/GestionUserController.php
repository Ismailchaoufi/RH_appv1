<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\Grade;
use App\Models\Matricule;
use App\Models\Service;
use App\Models\StatusFonctionnaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GestionUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('role','!=','1')->get();
        return view('RH.users.listusers',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all(); // Assuming you have a Division model
        $services = Service::all();
        $grades = Grade::all();
        $matricules = Matricule::all();
        return view('RH.users.create',compact('services','divisions','grades','matricules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            // Validation des données d'entrée
    $request->validate([
        'nomFr' => 'required|string|max:255',
        'prenomFr' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',

    ]);


        $user = new User();
        
       

        $user->nomFr = $request->input('nomFr');
        $user->prenomFr = $request->input('prenomFr');
        $user->email = $request->input('email');
        $user->id_matricule = $request->input('id_matricule');
        $user->password = Hash::make('admin123');
        $user->id_status = 1;
        $user->id_grade = $request->input('id_grade');
        $user->id_division = $request->input('id_division');
        $user->id_service = $request->input('id_service');
        $user->save();
        return redirect()->route('users.index')->with('status', 'User Added Successfully');
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('RH.users.showuser',compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisions = Division::all(); // Assuming you have a Division model
        $services = Service::all();
        $grades = Grade::all();
        $matricules = Matricule::all();
        $status = StatusFonctionnaire::all();
        $user = User::find($id);
        return view('RH.users.edituser',compact('user','divisions','services','grades','matricules','status'));
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
        
            // Validation des données d'entrée
    $request->validate([
        'nomFr' => 'required|string|max:255',
        'prenomFr' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'id_matricule' => 'required|integer|unique:users,id_matricule|exists:matricules,id',
        'id_status' => 'required|integer|exists:status_fonctionnaires,id',
        'id_grade' => 'required|integer|exists:grades,id',
        'id_division' => 'required|integer|exists:divisions,id',
        'id_service' => 'required|integer|exists:services,id',
    ]);

    $user = User::find($id);

        
       

    $user->nomFr = $request->input('nomFr');
    $user->prenomFr = $request->input('prenomFr');
    $user->email = $request->input('email');
    $user->id_matricule = $request->input('id_matricule');
    $user->password = Hash::make($request->input('password'));
    $user->id_status = $request->input('id_status');
    $user->id_grade = $request->input('id_grade');
    $user->id_division = $request->input('id_division');
    $user->id_service = $request->input('id_service');
    $user->update();
    return redirect()->route('users.index')->with('status', 'User Updated Successfully');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status', 'User Deleted Successfully');
    }
}
