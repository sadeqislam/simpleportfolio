<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Projects</h1>
        <ul class="list-group">
            @foreach($projects as $project)
                <li class="list-group-item">
                    <a href="{{ route('project.details', $project['id']) }}">{{ $project['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
