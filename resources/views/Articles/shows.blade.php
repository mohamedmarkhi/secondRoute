{{-- what to do --}}
<br>
{{ $unProduit['desi'] }}
    <p>id : {{ $unProduit->id }}</p>
    <p>title : {{ $unProduit->title }}</p>

    <p>content : {{ $unProduit->content }}</p>
    <p>author : {{ $unProduit->author }}</p>
    
{{ $unProduit['prix'] }}

@section('content')
    <h1>Show Article</h1>

   
    <p>created_at : {{ $unProduit->created_at }}</p>
    <p>updated_at : {{ $unProduit->updated_at }}</p>

    <a href="{{ route('articles.show', $unProduit->id) }}">Show</a>
    <a href="{{ route('articles.edit', $unProduit->id) }}">Edit</a>
    <form method="POST" action="{{ route('articles.destroy', $unProduit->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection


