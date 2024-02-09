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
                        <h6 class="card-title" style="    font-size: 20px!important;font-weight: bolder;margin-top: 10px;color: #6571FF;">All Blog Posts</h6>
                        <a href="{{ route('admin.add.blog') }}" class="btn btn-success"><i data-feather="plus"></i> Create Blog</a>
                    </div>
                    <div class="table-responsive mt-3">
                        <table id="dataTableExample" class="table table-bordered" style="border-top: 1px solid #E9ECEF!important; margin-top: 20px!important">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Photos</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $key=>$blog)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->short_description }}</td>
                                    <td>
                                        <img src="{{ asset('images/blogs/' . $blog->image) }}" style="width: 100px" alt="img" />
                                    </td>
                                    <td>{{ $blog->status == '1' ? 'Hidden':'Shown' }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('admin.edit.blog', $blog->id) }}">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.blog', $blog->id) }}">
                                            <i data-feather="trash-2"></i>
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
