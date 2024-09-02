<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to My Portfolio</h1>
        <p>This is the home page of my static portfolio website.</p>
        <a href="{{ route('work.experiences') }}" class="btn btn-primary">Work Experiences</a>
        <a href="{{ route('projects') }}" class="btn btn-secondary">Projects</a>
    </div>
</body>
</html>
