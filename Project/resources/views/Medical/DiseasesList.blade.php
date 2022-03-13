@include('Medical.bootstrap')
<div class="container p-4">
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
                    <select name="Diseases_id" class="form-control" data-bs-toggle="dropdown">
                    <option value="" disabled selected>Select a Disease</option>   
                    @foreach($Diseases as $row)
                            <option value="{{$row->id}}" name="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select> &nbsp;&nbsp;&nbsp;
                    <select name="Medicines_id" class="form-control " >
                    <option value="" disabled selected>Select a Medicine</option>     
                    @foreach($Medi as $r2)
                            <option value="{{$r2->id}}">{{$r2->name}}</option>
                        @endforeach
                    </select>
                        
                        
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