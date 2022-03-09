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
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end">Medicines Lists</a>
                     Medicines for Disease
                    </h4>
                </div>
                <div class="card-body">

                

                        <form action="{{ url('Med_Dis') }}" method="POST">
                        @csrf
                   
                      
                        @foreach($Diseases as $row)
                            <li>{{$row->id->name}}</li>
                        @endforeach
                    
                        
                        
                        <div>
                        <div class="form-group mb-3">
                        <br><br>
                        
                        <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>