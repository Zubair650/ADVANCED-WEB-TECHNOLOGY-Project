
@include('student.bootstrap')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="{{ url('add-student') }}" class="btn btn-outline-success float-end">Add Medicines with Diseases Details </a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        
                        <tbody>
                            <tr><td><h5><b> Disease &nbsp;</h5></td>
                            <td><h5><b> Medicine</h5></td></tr>
                                
                                <tr><td rowspan="100"><b> {{$Diseases->name}}</b></td>
                            
                                 @foreach ($Diseases->medicines_diseases as $item)
                           
                                <td><b><li>{{$item->medicine->name}}</b></li>
                                    
                                    {{$item->medicine->details}}
                                    
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
