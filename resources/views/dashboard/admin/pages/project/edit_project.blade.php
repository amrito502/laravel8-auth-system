@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Edit Project Form</h4>
                <form action="{{ route('admin.update.project', $project->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Project Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="name" id="defaultconfig" type="text"
                                value="{{ $project->name }}">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Project Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="title" id="defaultconfig" type="text"
                            value="{{ $project->title }}">
                                <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Choose Photo</label>
                        </div>
                        <div class="col-lg-8">
                            <img src="{{ asset('images/projects/' . $project->image) }}" style="width: 100px" alt="img" />
                            <input class="form-control" name="image" id="defaultconfig-2" type="file"
                                placeholder="Type Something..">
                            <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="defaultconfig-4" class="col-form-label">Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control" name="description" id="defaultconfig-4" rows="8">{{  $project->description }}</textarea>

                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Update Project">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
