<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="\">Student Details</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="login">Login</a></li>
                    <li><a href="create">Create Account</a></li>
                    <li><a href="details">View Details</a></li>
                </ul>
            </div>
        </nav>
    </div>


    <div class="container content responsive">
        @section('content')
        @show
    </div>

    <div class="footer">
        <h3>This is footer!</h3>
        <p></p>
    </div>

</body>

</html>