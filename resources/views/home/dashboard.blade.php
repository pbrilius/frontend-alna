@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="alert alert-danger d-none" role="alert">
    </div>
    <div class="alert alert-success d-none" role="alert">
    </div>
    <div class="progress d-none">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <Dashboard></Dashboard>
    <Grid></Grid>
@endsection()
