@extends('main')
@section('contain')
<h1 class="text-center">News</h1>
    <div class="row row row-cols-1 row-cols-md-3 d-flex justify-content-center bg-success p-2 text-black">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-md-2 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="img/Home.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    @endfor
    </div>

@endsection
