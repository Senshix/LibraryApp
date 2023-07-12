
      <div class="container">
        <h1>Books</h1>
      </div>
      @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            <img src={{$books->cover_image}} class="card-img-top" alt="Cover Image">
            <div class="card-body">
            <h5 class="card-title">{{$books->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$books->author}}</h6>
            <p class="card-text">{{$books->description}}</p>
            <p class="card-text">Published date {{$books->published_date}}</p>
            </div>
        </div>
      @endforeach
      @extends('layouts.navigation');
    