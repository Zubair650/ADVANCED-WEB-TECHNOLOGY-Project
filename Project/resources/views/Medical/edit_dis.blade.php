
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Disease
                    <a href="{{ url('dis') }}" class="btn btn-outline-danger float-end">Lists</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-dis/'.$dis->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Disease's Name</label>
                            <input type="text" name="name" value="{{$dis->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Disease's Medicine</label>
                            <input type="text" name="medicine" value="{{$dis->medicine}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Disease's Details</label>
                            <input type="text" name="details" value="{{$dis->details}}" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Disease's Information</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

