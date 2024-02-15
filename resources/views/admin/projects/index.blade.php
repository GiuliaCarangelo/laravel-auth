@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-start">Projects</h1>
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
                        
                        @foreach ( $projects as $index=>$project )
                            <tr>
                                <th scope="col"> {{ $index }} </th>
                                <th scope="col">{{ $project->name }}</th>
                                <th scope="col">{{ $project->programming_languages }}</th>
                                <th scope="col">{{ $project->repo_url }}</th>
                                <th scope="col">{{ $project->creation_day }}</th>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
