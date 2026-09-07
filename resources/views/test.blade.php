<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test</title>
</head>
<body>
    <h1>My Laravel Test Project</h1>
    <p>Hello, {{ $name }}!</p>
    <p>This value was passed from the route into Blade view.</p>
    <p>I am learning Laravel with git</p>
    <p>Today I am learning {{ $topic }}</p>
    @if ($isLearning)
    <p>Learning mode is active.</p>
    @else
    <p>Learning mode is inactive.</p>
    @endif
    <h2>Skills so far</h2>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
</ul>
</body>
</html>