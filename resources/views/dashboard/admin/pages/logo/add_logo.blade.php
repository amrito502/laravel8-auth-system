@extends('dashboard.admin.admin_master')
@section('admin_content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">ADD LOGO FORM</h4>
                <form action="{{ route('admin.store.logo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="logo_text" class="col-form-label">Logo Text</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="logo_text" id="logo_text" type="text"
                                placeholder="Type Something..">
                                <span class="text-danger">@error('logo_text'){{ $message }}@enderror</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="logo" class="col-form-label">Choose Photo</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" name="image" id="logo" type="file">
                            <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
