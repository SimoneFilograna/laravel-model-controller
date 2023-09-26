@extends("layouts.public")

@section("content")
    <main>
        <div class="container card-container">
            <div class="row row-cols-3 g-5 justify-content-center">

                @foreach ($movies as $singleMovie )
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$singleMovie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$singleMovie->original_title}}</h6>
                            <p class="card-text">Nazionalità: {{$singleMovie->nationality}}</p>
                            <p class="card-text">Data uscita: {{$singleMovie->date}}</p>
                            <p class="card-text vote"> Voto: <strong> {{$singleMovie->vote}}</strong></p>
                        </div>
                    </div>
                </div>
                    
                @endforeach

            </div>
        </div>
    </main>
@endsection