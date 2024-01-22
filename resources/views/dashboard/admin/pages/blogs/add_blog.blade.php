@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Add Blogs Form</h4>
                <form action="{{ route('admin.store.blog') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Blog Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="title" id="defaultconfig" type="text"
                                placeholder="Write Blog Title">
                                <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Blog Choose Image</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="image" id="defaultconfig-2" type="file">
                            <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="defaultconfig-4" class="col-form-label">Blog Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control" name="desc" id="defaultconfig-4" rows="8"
                                placeholder="Write Blog description"></textarea>
                            <span class="text-danger">@error('desc'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Add Blog">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
