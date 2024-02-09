@extends('dashboard.admin.admin_master')
@section('admin_content')
            <p class="text-muted mb-3">
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
                <div class="card-body">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title" style="    font-size: 20px!important;font-weight: bolder;margin-top: 10px;color: #6571FF;">All Admin</h6>
                        <a href="{{ route('admin.add.new.admin') }}" class="btn btn-success"><i data-feather="plus"></i> Add New Admin</a>
                    </div>
                    <div class="table-responsive mt-3">
                        <table id="dataTableExample" class="table table-bordered" style="border-top: 1px solid #E9ECEF!important; margin-top: 20px!important">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Photos</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($fetch_all_admin as $key=>$admin_item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $admin_item->name }}</td>
                                        <td>{{ $admin_item->email }}</td>
                                        <td>{{ $admin_item->password }}</td>
                                        <td>{{ $admin_item->phone }}</td>
                                        <td>{{ $admin_item->address }}</td>
                                        <td>
                                            <img src="{{ asset('images/admin/' . $admin_item->image) }}" style="width: 100px" alt="img" />
                                        </td>
                                        <td>{{ $admin_item->status == '1' ? 'Pending':'Approved' }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.password', $admin_item->id) }}" class="btn btn-info">edit</a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
