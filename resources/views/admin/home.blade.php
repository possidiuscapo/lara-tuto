<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet laravel</title>
</head>

<body>
    <div>
        <h1>Bienvenu tous le monde</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi quaerat blanditiis ducimus voluptatum?
            Deleniti, dicta! Incidunt minima asperiores soluta natus dicta quibusdam blanditiis eos dolorum harum
            provident laboriosam officiis, quia accusantium? Dolores tempora earum suscipit et assumenda at, itaque
            consequuntur dolorem quis, dolorum ex veniam? Quisquam nesciunt doloremque voluptatibus nisi ut quae animi
            deleniti sunt, modi impedit eos, laboriosam deserunt explicabo aut inventore at provident consequatur
            aperiam veritatis enim doloribus, ab vel! Voluptate inventore quasi accusantium, saepe rem est? A alias
            ullam doloribus facilis aspernatur laborum, atque perspiciatis iure quas, deleniti eligendi tempora qui
            fugiat, voluptas labore eos voluptate dolore quod quibusdam animi repellat officia voluptatum. Corporis
            soluta veniam optio laboriosam delectus sint tempore voluptate accusamus sunt a nulla explicabo, inventore,
            nam fugiat odit est dolorum maiores sapiente incidunt perferendis. Aspernatur assumenda consectetur iste
            odio impedit dignissimos amet ipsa distinctio accusantium eveniet animi exercitationem, numquam illum, quas
            voluptatem dolor hic!</p>
    </div>

    <pre>
        </pre>
    <section>
        <h2>Liste des article</h2>
        @if (count($articles) > 0)
            @foreach($articles as $articles)
            <article>
                <h3>{{ $articles['title'] }}</h3>
                <p>
                    {{ $articles['description'] }}
                </p>
                {{-- <a href="{{url('/article')}}"> voir details</a> --}}
                <a href="{{route('detail', $articles['id'])}}"> voir details</a>
            </article>
            @endforeach
        @else
        <p>
            Pas d'article pour le moment....
        </p>
        @endif
    </section>

</body>

</html>
