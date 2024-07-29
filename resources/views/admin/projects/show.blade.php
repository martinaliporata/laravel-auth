@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>{{$project->id}}:{{$project->title}}</h1>
        <h2>{{$project->date}}</h2>
        <h2>{{$project->author}}</h2>
        <p>{{$project->preview}}</p>
    </div>
</div>
@endsection
