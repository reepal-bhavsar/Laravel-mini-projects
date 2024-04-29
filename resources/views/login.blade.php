@extends('index')
@section('content')
<h2>Students Login</h2>
<form action="studentLogin">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="pwd">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection