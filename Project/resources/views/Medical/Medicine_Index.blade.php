
@include('Medical.bootstrap')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Medicine's Information
                        <a href="{{ url('add-med') }}" class="btn btn-outline-success float-end">Add Medicine</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Disease</th>
                                <th>Details</th>
                                <th>Price(BDT)</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($med as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->details }}</td>
                                <td>{{ $item->price }} BDT</td>
                                <td>
                                    <a href="{{ url('edit-med/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <td>
                                    <a href="{{ url('delete-med/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
