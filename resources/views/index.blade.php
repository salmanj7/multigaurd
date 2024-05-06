<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <hr>
                        <div class="card-body">
                        @foreach($posts as $post)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <p class="card-text"><small class="text-muted">Posted on {{ $post->created_at }}</small></p>
                                    @if(Auth::guard('admin')->check())
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
