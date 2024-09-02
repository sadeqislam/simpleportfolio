<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Experiences</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Work Experiences</h1>
        @foreach($data as $experience)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $experience['company'] }}</h5>
                    <p class="card-text">{{ $experience['position'] }} ({{ $experience['duration'] }})</p>
                    <p class="card-text">{{ $experience['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
