@extends('index')
@section('content')

<h2>Students List</h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($userData))
                <!-- Count if the array has any record and display the data into table -->
                @if(count($studentDeails))
                    @foreach($studentDeails as $key => $val)
                    <tr>
                        <td>{{$val['name']}}</td>
                        <td>{{$val['email']}}</td>
                        <td>{{$val['password']}}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td><i>No record !!!</i></td>
                    </tr>
                @endif
            @else
            <tr>
                <td><i>Login first !!!</i></td>
            </tr> 
            @endif
        </tbody>
    </table>
</div>

</body>

</html>

@endsection