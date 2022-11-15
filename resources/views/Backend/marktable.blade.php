<html>

<body>
         <div class="row user-table">

            <div class="col-md-12 col-sm-6 table-data">

                <table class="table table-striped">
                    <thead>
                       @foreach($v as $vs)
                        <tr>
                            
                            <th>{{$vs->smStudent->name}}</td>
    
                        </tr>

                        @endforeach
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
                
            </div>

        </div>
        