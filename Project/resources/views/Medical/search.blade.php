@include('Medical.bootstrap')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-7 p-4">
        <form action="{{route('findSearch')}}" method="post">
        {{ csrf_field() }}
        <div class="card">
                <div class="card-header">
                    <h4>
                    <a href="{{ url('dis') }}" class="btn btn-outline-danger float-end">Diseases Lists</a>
                     Search Diseases for Details
                    </h4>
                </div>
                <div class="card-body">
         <div class="input-group">
            <span> <input type="text" class="form-control" name="name"
            placeholder="Search Diseases"> </span>
                
            <br>&nbsp;&nbsp;
            <span><button type="submit" class="btn btn-outline-success">
                Search
                <!--<span class="glyphicon glyphicon-search"></span>-->
            </button></span> 
           &nbsp;&nbsp;
            <span>@error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
            </span> 
        
    </div>
</form>
</div>
</div>
</div>


                    

