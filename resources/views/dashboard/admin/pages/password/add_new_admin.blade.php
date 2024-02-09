@extends('dashboard.admin.admin_master')
@section('admin_content')

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 dm-sans" style="font-size: 22px; font-weight: 700; color:#5660d9;">Add New Admin
                </h4>
                <form action="{{ route('admin.store.password') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="name" class="col-form-label">Enter Your Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" placeholder="Name" name="name" id="name" type="text" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="email"  class="col-form-label">Enter Your Email</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" placeholder="Email" name="email" id="email" type="text" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="password" class="col-form-label">Enter Password</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" placeholder="Password" name="password" id="password" type="text" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-check mb-2">
                            <input type="checkbox" name="status" class="form-check-input" id="status"
                                style="cursor: pointer">
                            <label class="form-check-label" for="status">Status
                            </label>
                        </div>
                    </div>

                    <div class="btn_submit d-flex justify-content-end mx-5 mt-3">
                        <input class="btn btn-primary mx-2" type="submit" value="Add New Admin">
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
