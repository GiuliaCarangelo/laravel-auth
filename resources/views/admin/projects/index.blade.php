@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-start d-inline-block pb-2">Projects</h1>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Programming Languages</th>
                            <th scope="col">Repo URL</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $projects as $project ) 
                        {{-- $index=> --}}
                        <tr>
                            <td scope="col"> {{ $loop->iteration }} </td>
                            <a href="{{ route('admin.projects.show', $project) }}">
                                <td scope="col">{{ $project->name }}</td>
                            </a>
                            <td scope="col">{{ $project->programming_languages }}</td>
                            <a href="{{ $project->repo_url }}">
                                <td scope="col">{{ $project->repo_url }}</td>
                            </a>
                            <td scope="col">{{ $project->creation_day }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.projects.show', $project) }}">
                                    <button class="btn btn-success me-1">
                                        Open
                                    </button>
                                </a>
                                <a href="">
                                    <button class="btn btn-warning me-1">
                                        Edit
                                    </button>
                                </a>
                                <a href="">
                                    <button class="btn btn-danger fw-bold me-1">
                                        Delete
                                    </button>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                        <h1>{{ $projects->count() }}</h1>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
