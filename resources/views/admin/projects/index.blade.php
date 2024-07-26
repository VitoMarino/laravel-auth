@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Activity</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $projects as $project )
                        <tr>
                            <td>{{$project->name}}</td>
                            <td>{{$project->activity}}</td>
                            <td>{{$project->description}}</td>
                            <td>{{$project->date}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
