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
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="card-title">All Logo</h6>
                    <a href="{{ route('admin.add.logo') }}" class="btn btn-success"><i data-feather="plus"></i> Create Logo</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Logo Name</th>
                                    <th>Logo</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($logos as $logo)
                                <tr>
                                    <th>{{ $logo->id }}</th>
                                    <th>{{ $logo->logo_text }}</th>
                                    <th><img src="{{ asset('images/logo/'.$logo->image) }}" width="100px" alt="alttt"></th>
                                    <td>{{ $logo->status == '1' ? 'Hidden':'Shown' }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit.logo', $logo->id) }}" class="btn btn-info">Edit</a>
                                        <a  onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.logo', $logo->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                    <p class="text-danger text-center">Logo is not available Right Now!</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
