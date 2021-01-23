@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="alert alert-warning d-none" role="alert">
    </div>
    <div class="alert alert-success d-none" role="alert">
    </div>
    <Dashboard></Dashboard>
    <Grid></Grid>
@endsection()
