@extends('layouts.admin_app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Ultimi post</h1>
        <form class="form-group" action="{{ route('home.indexByCategory') }}" method="get">
          <div class="form-group">
            <label for="category_id">Filtra Posts per Categoria</label>
            <select class="form-control"name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
              @endforeach
            </select>
            <input class="form-control btn btn-success" type="submit" value="Filtra" />
          </div>
        </form>
        <table class="table">
          <thead>
            <tr>
              <th>Creato il</th>
              <th>Titolo</th>
              <th>Autore</th>
              <th>Content</th>
              <th>Nome Categoria</th>
              <th>Visualizza</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
              <tr>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ str_limit($post->content, 10, ' (...)') }}</td>
                <td>{{ $post->category->title }}</td>
                <td>
                  <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Visualizza</a>
                </td>
              </tr>
            @empty
              <h2>Non ci sono Post</h2>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
