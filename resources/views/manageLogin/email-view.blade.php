<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Email</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="mt-5">Forget Password for e-Munakahat (Mohon Daftar Nikah)</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text">Your password has been reset.</p>
                        <h5 class="card-title">Your new temporary password:</h5>
                        <p class="card-text">{{ $newPassword }}</p>
                        <p class="card-text">Remember to change your password.</p>
                        <p class="card-text">You can reset your password using the link below:</p>
                        <a href="{{ route('change-password.get') }}" class="btn btn-primary">Reset Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
