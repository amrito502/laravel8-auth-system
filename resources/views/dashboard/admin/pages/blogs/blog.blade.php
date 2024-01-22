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
                    <h6 class="card-title dm-sans pt-3" style="font-size: 20px; font-weight: bold;">All Blogs</h6>
                    <div class="Btn">
                        <a href="{{ route('admin.add.blog') }}" class="btn btn-success dm-sans mt-2"
                            style="font-size: 16px; font-weight: bold; padding-top: 10px">Add Blog</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="5%" scope="col">ID</th>
                                    <th style="10%" scope="col">Blog Title</th>
                                    <th style="10%" scope="col">Blog Description</th>
                                    <th style="10%" scope="col">Blog Image</th>
                                    <th style="30%" scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->desc }}</td>
                                        <td><img src="{{ asset('images/blogs/' . $blog->image) }}" style="width: 100px" alt="img" /></td>
                                        <td class="center">
                                            <a class="btn btn-sm btn-info" href="{{ route('admin.edit.blog', $blog->id) }}">
                                                <i class="halflings-icon white edit"></i> Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.blog', $blog->id) }}">
                                                <i class="halflings-icon white trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <p class="text-danger text-center">Data is not available</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
