@extends('adminlte::page')

@section('title', 'Departements Management System | Create')

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
                        Add new departement
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('departements.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nom_dep" class="form-label fw-bold">Name of departement</label>
                            <input type="text" name="nom_dep" value="{{old("fullname")}}" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="heure_debut">Hour of begining</label>
                            <input type="text" name="heure_debut" value="{{old("heure_debut")}}"  placeholder="hh:mm:ss" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="heure_fin">Hour of ending</label>
                            <input type="text" class="form-control" value="{{old("heure_fin")}}"  name="heure_fin" placeholder="hh:mm:ss">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="jour_repo">Day of rest</label>
                            <input type="text" class="form-control" value="{{old("jour_repo")}}"  placeholder="Day" name="jour_repo">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="even">Phone</label>
                            <input type="text" class="form-control" value="{{old("even")}}"  placeholder="Evenement" name="even">
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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

