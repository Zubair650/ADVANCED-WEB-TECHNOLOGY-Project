@include('Medical.bootstrap')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
                    <h4>
                    <a href="{{ url('doctors') }}" class="btn btn-outline-danger float-end">Lists</a>
                    Add Doctor
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-doctors') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Doctor's Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Department</label>
                            <input type="text" name="department" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Bio</label>
                            <input type="text" name="bio" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Doctor's Joining Date</label>
                            <input type="text" name="joining_date" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                       
                        </div>
                        <div>
                        <div class="form-group mb-3">
                        
                        <button type="submit" class="btn btn-success">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>