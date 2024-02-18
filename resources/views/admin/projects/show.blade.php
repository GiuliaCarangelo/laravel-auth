@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container pl-0 d-flex flex-wrap flex-col">
    <div class="container">
        <div class="row">
            <div class="col-10 text-uppercase">
                <h2>
                    {{ $project->name }}
                </h2>
            </div>
        </div>

        <div class="col-10 px-0">
            <h4 scope="row">
                Programming languages used:
                {{ $project->programming_languages }}
            </h4>
            <h4 class="row justify-content-center">
                <a class="list-unstyled link-underline-light link-opacity-50-z pb-5" href="{{ $project->repo_url }}">
                    Open in GitHub
                </a>
            </h4>
        </div>

        <div class="col-10 px-0">
            <h5 class="row">
                Created: {{ $project->creation_day }}
            </h5>
        </div>

        <div class="col-2 px-0">
            <a class="row">
                <button class="btn btn-sm btn-success rounded-1 link-underline-dark">
                    Edit
                </button>
            </a>
        </div>
            
        <div class="col-10">
            <a href="{{ route('admin.projects.show', $project->id) }}">
                <h3>
                    <a href="{{ route('admin.admin.dashboard') }}">
                        <button type="button" class="btn btn-outline-primary btn-md my-4" disabled>
                            Altri post di {{ Auth::user()->name }}
                        </button>
                    </a>
                </h3>
            </a>
        </div>
    </div>
</div>

@endsection