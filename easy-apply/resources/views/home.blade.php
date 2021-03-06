<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
    <title>Easy-apply</title>
</head>

<body>
    <section class="background">
        <header>
            <div>
                @include('partials/navbar')
                <section class="header-content">
                    <div class="header-content__desc">
                        <h1>Titre</h1>
                        <div></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus mi orci, vitae gravida
                            enim tristique vitae. Sed vehicula enim a urna iaculis convallis. Aliquam facilisis ante
                            magna, ac feugiat tellus convallis at. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Aenean luctus mi orci, vitae gravida enim tristique vitae. Sed vehicula enim a urna
                            iaculis convallis. Aliquam facilisis ante magna, ac feugiat</p>
                    </div>
                    <div class="header-content__image">
                        <img src="img/people.png" alt="people holding phones">
                    </div>
                </section>
                <section class="buttons">
                    <div>
                        <div>
                            <a href="#">
                                <div class="testImg">
                                    <div class="circ"></div>
                                    Créer un profil recruteur
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="testImg">
                                    <div class="circ"></div>
                                    Créer un profil recruteur
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </header>
    </section>
    <section class="video">
        <h2 class="title-blue">Comment ça marche ?</h2>
        <div></div>
    </section>
    @include('partials/footer')
</body>

</html>
