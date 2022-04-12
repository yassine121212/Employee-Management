@extends('adminlte::page')

@section('title', 'Departments Management System | Update')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Update departement
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('departements.update',$departement->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="nom_dep" class="form-label fw-bold">Name of departement</label>
                            <input type="text" name="nom_dep" value="{{old("nom_dep",$departement->nom_dep)}}" placeholder="Name of departement" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="nombre_emp">Number of employes</label>
                            <input type="text" name="nombre_emp" value="{{old("nombre_emp",$departement->nombre_emp)}}"  placeholder="Number of employes" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="heure_debut">Hour of begining</label>
                            <input type="text" class="form-control" value="{{old("heure_debut",$departement->heure_debut)}}"  name="heure_debut" placeholder="hh:mm:ss">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="heure_fin">Hour of ending</label>
                            <input type="text" class="form-control" value="{{old("heure_fin",$departement->heure_fin)}}"  placeholder="hh:mm:ss" name="heure_fin">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="jour_repo">Rest day</label>
                            <input type="text" class="form-control" value="{{old("jour_repo",$departement->jour_repo)}}"  placeholder="Rest day" name="jour_repo">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="Even">Even</label>
                            <input type="text" class="form-control" value="{{old("address",$departement->even)}}"  placeholder="Evenement" name="even">
                        </div>
    
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

