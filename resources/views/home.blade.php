@extends("layouts.public")

@section("content")
    <main>
        <div class="container card-container">
            <div class="row row-cols-3">

                @foreach ($movies as $singleMovie )
                <div class="col">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">{{$singleMovie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$singleMovie->original_title}}</h6>
                            <p class="card-text">Nazionalità: {{$singleMovie->nationality}}</p>
                            <p class="card-text">Data uscita: {{$singleMovie->date}}</p>
                            <p class="card-text">Voto: {{$singleMovie->vote}}</p>
                        </div>
                    </div>
                </div>
                    
                @endforeach

            </div>
        </div>
    </main>
@endsection