@extends('dashboard.admin.admin_master')
@section('admin_content')
    <p class="alert-success">
        <?php

        use Illuminate\Support\Facades\Session;

        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
    </p>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="card-title dm-sans pt-3" style="font-size: 20px; font-weight: bold;">All Services</h6>
                    <div class="Btn">
                        <a href="{{ route('admin.add.services') }}" class="btn btn-success dm-sans mt-2" style="font-size: 16px; font-weight: bold; padding-top: 10px">Add Services</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Photos</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($Services as $key => $service)
                                    <tr>

                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td><img src="{{ asset('images/Services/' . $service->image) }}" style="width: 100px"
                                                alt="img" /></td>
                                        <td>{{ $service->status == '1' ? 'Hidden':'Shown' }}</td>
                                        <td class="center">
                                            <a class="btn btn-sm btn-info" href="{{ route('admin.edit.services', $service->id) }}">
                                                <i class="halflings-icon white edit"></i> Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.services',$service->id) }}">
                                                <i class="halflings-icon white trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
