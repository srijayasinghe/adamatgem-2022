<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="page-wrap d-flex flex-row align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                @if(\Auth::user()== true)

                <a href="/dashboard" class="btn btn-link">Back to Dashboard</a>
                
                @else
              

                <a href="/" class="btn btn-link">Back to Home</a>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>