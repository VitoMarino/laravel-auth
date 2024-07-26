@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST">
                    @method('POST')
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="activity">Activity</label>
                        <input type="text" name="activity" id="activity" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="name">Image URL</label>
                        <input type="text" name="image" id="image" class="form-control">
                    </div>

                    <input type="submit" value="Create" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
@endsection
