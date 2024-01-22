@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Add Team Members Form</h4>
                <form action="{{ route('admin.store.team') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Member Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="name" id="defaultconfig" type="text"
                                placeholder="Type Name">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Profession</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="profession" id="defaultconfig" type="text"
                                placeholder="Type profession">
                                <span class="text-danger">@error('profession'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Facebook</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="facebook" id="defaultconfig" type="text"
                                placeholder="Type facebook link (optinal)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Instagram</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="instagram" id="defaultconfig" type="text"
                                placeholder="Type instagram link (optinal)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Twitter</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="twitter" id="defaultconfig" type="text"
                                placeholder="Type twitter link (optinal)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Linkedin</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="linkedin" id="defaultconfig" type="text"
                                placeholder="Type linkedin link (optinal)">
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
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Add Team">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
