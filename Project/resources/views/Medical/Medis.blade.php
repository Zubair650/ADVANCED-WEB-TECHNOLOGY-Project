@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!--@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif-->

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
                   
                      
                        @foreach($dis as $row)
                        <div class="btn-group-horizontal" >
                           <a href="{{url('Med_Dis/'.$row->id)}}" class="btn btn-outline-dark d-grid" ><b>{{$row->name}}</a> 
                        </div> 
                        <br>  
                        @endforeach
                    
                        
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>