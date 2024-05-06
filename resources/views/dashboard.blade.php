<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            You are logged in!
                        </div>

                        <hr>
                        <h3><a href="{{ Auth::guard('admin')->check() ? route('posts.index') : route('customerposts.index') }}">Go to All Posts</a></h3>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
