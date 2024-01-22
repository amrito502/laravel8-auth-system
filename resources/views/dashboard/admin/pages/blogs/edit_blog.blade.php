@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Edit Blog Form</h4>
                <form action="{{ route('admin.update.blog', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Edit Blog Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="title" id="defaultconfig" type="text" value="{{ $blog->title }}">
                                <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Edit Blog Image</label>
                        </div>
                        <div class="col-lg-8">
                            <img src="{{ asset('images/blogs/' . $blog->image) }}" style="width: 100px" alt="img" />
                            <input class="form-control" name="image" id="defaultconfig-2" type="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="defaultconfig-4" class="col-form-label">Edit Blog Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control" name="desc" id="defaultconfig-4" rows="8">{{ $blog->desc }}</textarea>
                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Update Blog">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
