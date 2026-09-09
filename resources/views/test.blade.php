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
    <div style="border: 2px solid #333; padding: 12px; margin: 16px 0; background: #f3f3f3;">
        <strong>Class hand-in update</strong><br>
        This Laravel project was updated for the assignment due 09/09/26 at 3:00 pm.
</div>
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
    <h2>Notes</h2>
    <ul>
        @foreach ($notes as $note)
            <li>{{ $note->title }} - {{ $note->body }}</li>
        @endforeach
</ul>
    <h2>Add a note</h2>
    <form method="POST" action="/notes">
    @csrf
    <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="body">Body</label>
        <textarea id="body name="body"></textarea>
</div>
<button type="submit">Save note</button>
</form>
</body>
</html>