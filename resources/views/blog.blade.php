<!DOCTYPE html>
<html>
<head>
    <title>Liste des articles</title>
</head>
<body>

<h1>Liste des articles</h1>

<ul>
    @foreach ($articles as $article)
        <li>
            <h2>{{ $article['titre'] }}</h2>
            <p>{{ $article['contenu'] }}</p>

            @if($article['publie'])
                <p><em>Publié le {{ $article['date_publication'] }}</em></p>
            @else
                <p><em>Non publié</em></p>
            @endif
        </li>
    @endforeach
</ul>

</body>
</html>
