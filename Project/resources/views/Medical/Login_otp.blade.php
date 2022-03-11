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
                    Emergency Login
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('checkLogin') }}" method="post">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Name: </label>
                             <br>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">OTP Code:</label>
                            
                            <input type="text" name="code" class="form-control">
                            @error('code')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                        
                        <button type="submit" class="btn btn-success">Login</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>