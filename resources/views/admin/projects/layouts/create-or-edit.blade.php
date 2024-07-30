@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if ($errors->any())
                <div class="col-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="@yield('form-action')" method="POST">
                @yield('form-method')
                @csrf
                <div>
                    <h1>
                        @yield('page-title')
                    </h1>
                </div>
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title', $project->title)}}">
                </div>
                <div>
                    <label for="preview">Preview</label>
                    <input type="text" name="preview" id="preview" class="form-control" value="{{old('preview', $project->preview)}}">
                </div>
                <input type="submit" value="@yield('page-title')" class="btn btn-primary">
                <input type="reset" value="Reset form" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
@endsection
