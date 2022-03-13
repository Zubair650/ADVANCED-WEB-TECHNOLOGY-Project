                @include('Medical.bootstrap')

               
               
                <div class="container p-4">
                <div class="row">
                <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>Disease's Information
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Medicine</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                        @csrf
                        @foreach($user as $item)
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->medicine }}</td>
                                <td>{{ $item->details }}</td>
                        </div> 
                      
                        @endforeach
                
            </div>
            </div>
            </div>
