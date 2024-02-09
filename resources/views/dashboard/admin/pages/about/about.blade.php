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
                    <h6 class="card-title">All About Content</h6>
                    <a href="{{ route('admin.add.about') }}" class="btn btn-success"><i data-feather="plus"></i> Create About</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Photos</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($about as $key=>$about_item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $about_item->title }}</td>
                                        <td>{{ $about_item->description }}</td>
                                        <td>
                                            <img src="{{ asset('images/about/'.$about_item->image) }}" alt="about" style="width: 100px">
                                        </td>
                                        <td>{{ $about_item->status == '1' ? 'Hidden':'Shown' }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.about',$about_item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            <a onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.about',$about_item->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
