<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>
    
    <main>
        <div class="main-container">
            <h1 class="page-title">Movies</h1>
        
            <div class="cards-container">

                @foreach ($movies as $movie)
                    <div class="card-wrapper">
                        <div class="movie-info">
                            <dl class="title-wrapper">
                                <dt>Titolo: </dt>
                                <dd class="title">
                                    {{-- {{$movie['title']}} per stampare dal db posso usare o la sintassi degli array associativi --}}
                                    {{-- oppure posso usare la sintassi della programmazione ad oggetti quindi accedendoci come se fosse un'istanza --}}
                                    {{$movie->title}} 
                                </dd>

                                <dt>Titolo originale: </dt>
                                <dd class="original-title">
                                    {{$movie->original_title}} 
                                </dd>
                            </dl>

                            {{-- <dl class="orginal-title-wrapper">
                                <dt>Titolo originale: </dt>
                                <dd class="original-title">
                                    {{$movie->original_title}} 
                                </dd>
                            </dl> --}}
                
                            <dl class="nationality-wrapper">
                                <dt>Nazionalità: </dt>
                                <dd class="nationality">
                                    {{$movie->nationality}} 
                                </dd>
                            </dl>

                            <dl class="release-wrapper">
                                <dt>Data di uscita:</dt>
                                <dd class="release-date">
                                    {{$movie->date}}
                                </dd>
                            </dl>
                
                            <dl class="vote-wrapper">
                                <dt>Voto:</dt>
                                <dd class="vote">
                                    {{$movie->vote}} 
                                </dd>
                            </dl>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </main>
</body>
</html>

