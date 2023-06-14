<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Request Email</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="mt-5">Staff Registration Request Email</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Your registration request status:</h5>
                        <p class="card-text">{{ $requestStatus }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
