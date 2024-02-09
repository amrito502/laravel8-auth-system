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
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="card-title">All Review</h6>
                    <a href="{{ route('admin.add.review') }}" class="btn btn-success"><i data-feather="plus"></i> Add Client Review</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Review Title</th>
                                    <th>Client Rating</th>
                                    <th>Review Screenshot</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($review as $key=>$review_item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $review_item->title }}</td>
                                        <td>{{ $review_item->rating }}</td>
                                        <td>
                                            <img src="{{ asset('images/review/'.$review_item->image) }}" alt="review" style="width: 100px">
                                        </td>
                                        <td>{{ $review_item->status == '1' ? 'Hidden':'Shown' }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.review',$review_item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.review',$review_item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
