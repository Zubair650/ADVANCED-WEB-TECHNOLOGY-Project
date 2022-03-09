

@include('Medical.bootstrap')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Doctor
                    <a href="{{ url('doctors') }}" class="btn btn-outline-danger float-end">Lists</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-doctors/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Doctor's Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Phone Number</label>
                            <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Email</label>
                            <input type="text" name="email" value="{{$student->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Department</label>
                            <input type="text" name="department" value="{{$student->department}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Bio</label>
                            <input type="text" name="bio" value="{{$student->bio}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Joining Date</label>
                            <input type="text" name="joining_date" value="{{$student->joining_date}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Doctor's Information</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

