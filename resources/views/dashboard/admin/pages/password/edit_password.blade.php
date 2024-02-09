@extends('dashboard.admin.admin_master')
@section('admin_content')

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Update Password
                </h4>
                <form action="{{ route('admin.update.password',$admin_info->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="name" class="col-form-label">Enter Your Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="{{ $admin_info->name }}"  name="name" id="name" type="text" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="email"  class="col-form-label">Enter Your Email</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="{{ $admin_info->email }}" name="email" id="email" type="text" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="password" class="col-form-label">Change Password</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="{{ $admin_info->password }}" name="password" id="password" type="text" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="phone" class="col-form-label">Change Phone Number</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="{{ $admin_info->phone }}" name="phone" id="phone" type="text" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="address" class="col-form-label">Change Address</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" value="{{ $admin_info->address }}" name="address" id="address" type="text" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="image" class="col-form-label">Change Photo</label>
                        </div>
                        <div class="col-lg-8">
                            <img src="{{ asset('images/admin/' . $admin_info->image) }}" style="width: 100px" alt="img" />
                            <input class="form-control" name="image" id="image" type="file" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-check mb-2">
                            <input type="checkbox" name="status" {{ $admin_info->status == '1' ? 'checked':'' }} class="form-check-input" id="status"
                                style="cursor: pointer">
                            <label class="form-check-label" for="status">Status
                            </label>
                        </div>
                    </div>

                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Update Profile">
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
