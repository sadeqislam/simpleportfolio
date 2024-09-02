<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['name'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $project['name'] }}</h1>
        <p>{{ $project['description'] }}</p>
        <a href="{{ route('projects') }}" class="btn btn-secondary">Back to Projects</a>
    </div>
</body>
</html>
