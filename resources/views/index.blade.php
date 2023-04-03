@foreach ($articles as $article)
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->body }}</p>
    </div>
@endforeach

@foreach ($evenements as $evenement)
    <div>
        <h2>{{ $evenement->title }}</h2>
        <p>{{ $evenement->body }}</p>
        <p>{{ $evenement->date }}</p>
    </div>
@endforeach

@foreach ($annonces as $annonce)
    <div>
        <h2>{{ $annonce->title }}</h2>
        <p>{{ $annonce->body }}</p>
        <a href="{{ asset('storage/'.$annonce->pdf) }}" target="_blank">{{ __('Voir le PDF') }}</a>
    </div>
@endforeach
