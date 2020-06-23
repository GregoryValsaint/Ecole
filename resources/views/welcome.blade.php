<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Ecole Hoc</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
        <!-- Styles -->
        <style>
            html, body {
                background-color:#f7eccd;
                color: #343a40;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title > a{
                font-size: 84px;
                text-decoration: none;
            }

            .title > a:hover {
                color: #58547a;
            }

            a {
                color: #343a40;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links {
                margin-bottom: 50px;
                
            }

            a:hover > .nav-link {
                color: #58547a;
                font-size: 1em;
            }

            a > .nav-links{
                color: #343a40;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .speCss{
                color: #fff;
                text-decoration: none;
            }

            .add-spe {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            ul > a:hover > .speCss {
                color: #343a40;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bio-prof{
                font-size: 18px;
            }

            .form-row{
                align-items: center;
                display: flex;
                justify-content: center;
            }



            

            
        </style>
        
        <div class="content">
            <div class="title m-b-md">
                <a href="{{'/'}}">Ecole HOC</a> 
            </div>
           
            <div class="links">

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('specialite.index')}}">Spécialités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('professeur.index')}}">Professeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('specialite.create')}}">Ajouter une spécialité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('professeur.create')}}">Ajouter un professeur</a>
                </li>
            </ul>
            </div>
            @yield('contenu') 
                   
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>