@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{route('admin.projects.store')}}" method="POST">
                @method('POST')
                @csrf
                <div>
                    <h1>
                        Create a new project
                    </h1>
                </div>
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div>
                    <label for="preview">Preview</label>
                    <input type="text" name="preview" id="preview" class="form-control">
                </div>
                <input type="submit" value="Create" class="btn btn-primary">
                <input type="reset" value="Reset form" class="btn btn-danger">
            </form>
        </div>
        <h1>{{$project->id}}:{{$project->title}}</h1>
        <h2>{{$project->date}}</h2>
        <h2>{{$project->author}}</h2>
        <p>{{$project->preview}}</p>
    </div>
</div>
@endsection
