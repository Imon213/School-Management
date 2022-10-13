
<html>

<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title> Change password</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    @extends('Backend.admin')
    @section('content')
    <form>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="newPassword" name="npass" class="form-control" id="newPassword">
        </div>
        <div class="mb-3">
            <label for="conNewPassword" class="form-label">Confirm new password</label>
            <input type="conNewPassword" name="cpass" class="form-control" id="conNewPassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection
</body>

</html>