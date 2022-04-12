@extends('adminlte::page')

@section('title', 'Departements Management System | '.$departement->nom_dep)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Profile : {{$departement->nom_dep}}
                    </h3>
                </div>
                <div class="card-body">
                
                    <hr>
                    <div class="form-group mb-3">
                        <label for="nom_dep" class="form-label fw-bold">Name of departement</label>
                        <div class="border border-secondary rounded p-2">
                            {{$departement->nom_dep}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fullname" class="form-label fw-bold">Number of employes</label>
                        <div class="border border-secondary rounded p-2">
                            {{$departement->nombre_emp}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="heure_debut" class="form-label fw-bold">Hour of begining</label>
                        <div class="border border-secondary rounded p-2">
                            {{$departement->heure_debut}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="heure_fin" class="form-label fw-bold">Hour of ending</label>
                        <div class="border border-secondary rounded p-2">
                            {{$departement->heure_fin}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jour_repo" class="form-label fw-bold">Rest day</label>
                        <div class="border border-secondary rounded p-2">
                            {{$departement->jour_repo}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="even" class="form-label fw-bold">Evenement</label>
                        <div class="border border-secondary rounded p-2">
                            {{$departement->even}}
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



