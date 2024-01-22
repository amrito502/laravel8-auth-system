@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Edit LOGO FORM</h4>
                <form action="{{ route('admin.update.logo', $logo->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="logo_text" class="col-form-label">Logo Text</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="logo_text" value="{{ $logo->logo_text }}" id="logo_text" type="text">
                            <span class="text-danger">@error('logo_text'){{ $message }}@enderror</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="logo" class="col-form-label">Choose Photo</label>
                        </div>
                        <div class="col-lg-8">
                            <img src="{{ asset('images/logo/'.$logo->image) }}" width="100px" alt="alttt">
                            <input class="form-control" name="image" id="logo" type="file">
                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Update Logo">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
