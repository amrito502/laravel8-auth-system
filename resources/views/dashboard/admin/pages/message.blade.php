@extends('dashboard.admin.admin_master')
@section('admin_content')
    <p class="alert-success">
        <?php

        use Illuminate\Support\Facades\Session;

        $message = Session::get('success');
        if ($message) {
            echo $message;
            Session::put('success', null);
        }
        ?>
    </p>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="card-title dm-sans pt-3" style="font-size: 20px; font-weight: bold;">All Messages</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="5%" scope="col">ID</th>
                                    <th style="10%" scope="col">Name</th>
                                    <th style="10%" scope="col">Email</th>
                                    <th style="10%" scope="col">Subject</th>
                                    <th style="10%" scope="col">Messages</th>
                                    <th style="30%" scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($messages as $key=>$message)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>
                                            <a  onclick="return confirm('Are you sure to delete');" href="{{ route('admin.delete.message', $message->id) }}" class="btn btn-sm btn-danger">Delete Message</a>
                                        </td>
                                    </tr>
                                @empty
                                    <p class="text-center text-danger">Message is not Available!</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
