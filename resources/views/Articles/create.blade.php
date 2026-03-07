<form method='post' action='{{ route("Produits.store") }}'>
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required value='{{ old("title") }}'><br><br>

    <label for="content">Content:</label>
    <textarea id="content" name="content" required value='{{ old("content") }}'></textarea><br><br>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required value='{{ old("author") }}'><br><br>

    <button type="submit">Create Article</button>