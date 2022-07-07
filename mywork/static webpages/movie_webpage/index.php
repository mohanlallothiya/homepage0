<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bg-container d-flex flex-column div">
        <div id="carouselExampleIndicators" class="carousel slide car" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/nemo-c1-img.png" class="d-block w-100 image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/nemo-c2-img.png" class="d-block w-100 image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/nemo-c3-img.png" class="d-block w-100 image" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="d-flex flex-row justify-content-between ">
            <h1 class="h1">Finding Nemo</h1>
            <button class="btn watch">Watch Now</button>
        </div>
        <p class="p1">A clown fish, is overly cautious with his son, Nemo who has a
            foreshortened fin. When Nemo swims too close to the surface to prove
            himself, he is caught by a diver, and horrified Marlin must set out to
            find him. A blue reef fish named Dory joins Marlin and complicates the
            encounters with sharks, jellyfish, and a host of ocean dangers.
            Meanwhile, Nemo plots his escape from a dentist's fish tank.</p>
        <h1 class="h2">Similar Movies</h1>
        <div class="d-flex flex-row justify-content-between image">
            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/finding-dory-img.png" class="im" />
            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/bugslife-img.png" class="im" />
            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/ratatouille-movie-img.png" class="im" />
        </div>
    </div>

</body>

</html>