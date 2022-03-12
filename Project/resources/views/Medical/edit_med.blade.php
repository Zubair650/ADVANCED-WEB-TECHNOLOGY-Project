

@include('Medical.bootstrap')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Medicine
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end">Lists</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-med/'.$med->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Medicine's Name</label>
                            <input type="text" name="name" value="{{$med->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Disease</label>
                            <input type="text" name="disease" value="{{$med->disease}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Details</label>
                            <input type="text" name="details" value="{{$med->details}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Price</label>
                            <input type="text" name="price" value="{{$med->price}}" class="form-control">
                        </div>
                        
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Medicine's Information</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

