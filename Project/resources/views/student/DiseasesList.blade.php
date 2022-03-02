
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
                        
                            <div class="btn-group-vertical">
                            <a href="Med_Dis/1" style="height: 50px; width: 100px; outline:3px" class="btn btn-outline-danger ">Fever</a>
                            </div>&nbsp;
                            <div class="btn-group-vertical">
                            <a href="Med_Dis/2" style="height: 50px; width: 100px; outline:3px" class="btn btn-outline-danger">Acidity</a>
                            </div>   
  
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
