<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<div>
    <div class="mt-3 mb-3">
        <a class="w3-button w3-blue" href="{{ route('articles.create') }}">Add article</a>
    </div>
    @foreach($articles as $article)
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h1>{{ $article -> title }}</h1>
                    <h5 class="w3-padding-32">{{ $article -> description }}</h5>

                    <p class="w3-text-grey">{{ $article -> content }}</p>
                </div>

                <div class="w3-third w3-center">
                    <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
                </div>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
