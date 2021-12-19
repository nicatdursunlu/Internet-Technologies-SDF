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

<div class="content-wrapper">
    <section class="content">
        <div class="card card-primary">

            <div class="w3-card-4">
                <div class="w3-container w3-brown">
                    <h2>Add Article</h2>
                </div>
                <form method="post" action="{{route('articles.store')}}" enctype="multipart/form-data" class="w3-container">
                    @csrf
                    <p>
                        <label class="w3-text-brown"><b>Title</b></label>
                        <input type="text" value= "{{old('title')}}" class="w3-input w3-border w3-sand" id="title" placeholder="Enter article title" name="title">
                        @error('title')
                        <div class="w3-text-red">{{$message}}</div>
                        @enderror
                    <p>
                        <label class="w3-text-brown"><b>Description</b></label>
                        <textarea class="w3-input w3-border w3-sand" id="description" placeholder="Enter article description" name="description" rows="5">{{old('description')}}</textarea>
                        @error('description')
                        <div class="w3-text-red">{{$message}}</div>
                        @enderror
                    <p>
                    <p>
                        <label class="w3-text-brown"><b>Content</b></label>
                        <textarea class="w3-input w3-border w3-sand" id="content" placeholder="Enter article" name="content" rows="10">{{old('content')}}</textarea>
                        @error('content')
                        <div class="w3-text-red">{{$message}}</div>
                        @enderror
                    <p></p>

                    <div class="card-footer">
                        <button type="submit" class="w3-btn w3-brown">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</body>
