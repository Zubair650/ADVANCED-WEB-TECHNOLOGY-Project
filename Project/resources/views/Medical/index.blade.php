
@include('Medical.bootstrap')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Doctor's Information
                        <a href="{{ url('add-doctors') }}" class="btn btn-outline-success float-end">Add Doctor</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Bio</th>
                                <th>Joining Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->bio }}</td>
                                <td>{{ $item->joining_date}}</td>
                                <td>
                                    <a href="{{ url('edit-doctors/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <td>
                                    <a href="{{ url('delete-doctors/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>                            
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
