@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flash-message error d-none"></div>
<div class="flash-message success d-none"></div>
<Dashboard></Dashboard>
<Grid></Grid>
@endsection()