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
                    <h6 class="card-title">All Hero Content</h6>
                    <a href="{{ route('admin.add.hero') }}" class="btn btn-success"><i data-feather="plus"></i> Create Hero</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Photos</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($hero as $key=>$hero_item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $hero_item->name }}</td>
                                        <td>{{ $hero_item->title }}</td>
                                        <td>{{ $hero_item->description }}</td>
                                        <td>
                                            <img src="{{ asset('images/hero/'.$hero_item->image) }}" alt="hero" style="width:100px">
                                        </td>
                                        <td>{{ $hero_item->status == '1' ? 'Hidden':'Shown' }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.hero',$hero_item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('admin.delete.hero',$hero_item->id) }}" onclick="return confirm('Are you sure to delete');" class="btn btn-danger btn-sm">Delete</a>
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
