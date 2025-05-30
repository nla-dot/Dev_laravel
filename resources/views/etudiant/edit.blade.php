@extends('layouts.base')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Modifier un etudiant</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('etudiant.index') }}">Etudiant</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!--begin::Horizontal Form-->
                    <div class="card card-secondary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Formulaire de modification d'un etudiant</div>
                        </div>

                        @session('success')
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endsession
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{ route('etudiant.update', $etudiant->id) }}" method="POST">
                            @csrf
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $etudiant->nom }}" name="nom"
                                            class="form-control" id="name" />
                                        @error('nom')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Prenom</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $etudiant->nom }}" name="prenom"
                                            class="form-control" id="prenom" />
                                        @error('prenom')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="classe" class="col-sm-3 col-form-label">Classe</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $etudiant->classe }}" name="classe"
                                            class="form-control" id="classe" />
                                        @error('classe')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Mettre à jour</button>
                                <a href="{{ route('etudiant.index') }}" class="btn float-end">Revenir sur la liste</a>
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Horizontal Form-->
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div>
            <!--end::Row-->
        </div>
    </div>
    <!--end::App Content-->
@endsection
