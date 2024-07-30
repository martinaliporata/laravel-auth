@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    <th scope="col">Preview</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td><em>{{$project->date}}</em></td>
                        <td>{{$project->author}}</td>
                        <td>{{$project->preview}}</td>
                        <td>
                            <a href="{{route('admin.projects.show', $project)}}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{route('admin.projects.destroy', $project)}}" method="POST" class="d-inline-block">
                                @method("delete")
                                @csrf
                                <input type="submit" class="btn btn-warning btn-sm form-destroyer" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$projects->links()}}
    </div>
</div>
@endsection

@section('additional-scripts')
    @vite('resources/js/projects/delete-confirmation.js')
@endsection
