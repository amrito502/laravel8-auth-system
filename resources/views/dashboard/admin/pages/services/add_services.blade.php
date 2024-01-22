@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Add Services Form</h4>
                <form action="{{ route('admin.store.services') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Service Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="service_name" id="defaultconfig" type="text"
                                placeholder="Type Something..">
                                <span class="text-danger">@error('service_name'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Service Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="service_title" id="defaultconfig" type="text"
                                placeholder="Type Something..">
                                <span class="text-danger">@error('service_title'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Choose Photo</label>
                        </div>
                        <div class="col-lg-8">
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
                            <textarea class="form-control" name="description" id="defaultconfig-4" rows="8"
                                placeholder="Type your description..."></textarea>

                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Add Service">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
