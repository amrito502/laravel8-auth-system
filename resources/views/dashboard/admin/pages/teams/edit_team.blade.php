@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Edit Team Members
                    Form</h4>
                <form action="{{ route('admin.update.team', $team->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Member Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="name" id="defaultconfig" type="text"
                                value="{{ $team->name }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Profession</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="profession" id="defaultconfig" type="text"
                                value="{{ $team->profession }}">
                            <span class="text-danger">
                                @error('profession')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Facebook</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="facebook" id="defaultconfig" type="text"
                                value="{{ $team->facebook }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Instagram</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="instagram" id="defaultconfig" type="text"
                                value="{{ $team->facebook }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Twitter</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="twitter" id="defaultconfig" type="text"
                                value="{{ $team->facebook }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig" class="col-form-label">Add Linkedin</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="linkedin" id="defaultconfig" type="text"
                                value="{{ $team->facebook }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="defaultconfig-2" class="col-form-label">Choose Photo</label>
                        </div>
                        <div class="col-lg-8">
                            <img src="{{ asset('images/teams/' . $team->image) }}" style="width: 100px" alt="img" />
                            <input class="form-control" name="image" id="defaultconfig-2" type="file">
                            <span class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-5" style="margin-right: 68px!important;" type="submit" value="Update Team">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
