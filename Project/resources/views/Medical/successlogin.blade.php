<html>
@include('Medical.bootstrap')
 <body>
  <br />
  <div class="container p-4">
  <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
            <div class="card-header">
                    <h4>
                    Login Successful
                    </h4>
                   
                </div>
                <div class="card-body">
                 <a href="{{ url('med') }}" class="btn btn-outline-primary d-grid"><b>Medicines Lists</b></a>
                 <br>
                <a href="{{ url('dis') }}" class="btn btn-outline-primary d-grid"> <b>Diseases Lists</b></a>
                 <br>
                  <a href="{{ url('search') }}" class="btn btn-outline-primary d-grid"><b>Search Details about Diseases</b></a>   
                     </h4>
                </div>
   
  </div>
 </body>
</html>