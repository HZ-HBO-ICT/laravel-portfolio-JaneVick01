<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="This is a home page">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bimage">
<!-- Top navigation -->
<div class="mytopnav">
    @yield('content')
</div>

<header>
    <img src="/images/pxl.jpg" width="1520" height="500" class="landfoto" alt="Mountain landscape">
</header>
<div class="indexprofile">
    <a href="http://localhost/myprofile.html">
        <img src="/images/src.jpg" width="200" height="250" class="profile" alt="My face">
    </a>
</div>

<main class="generaltext">

    <div class="mytext">
        <div class="container-articles">
            <article>
                <p class="subtitle">The ICT field suits me because...</p>
                <p>
                    I was always intrigued by the IT world. I will try my best to succeed in this programme even though I am a
                    beginner.
                    To be honest I tried coding a few easy applications for fun and just to get a glimpse of what awaits me.
                </p>
                <ul>
                    <p class="subtitle">What I have learned so far:</p>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li><a target="_blank" href="https://github.com/">Git</a></li>
                </ul>
            </article>

            <article>
                <p class="subtitle">The HBO-ICT programme suits me because...</p>
                <p>
                    Nowadays people use information technology everyday. The demand for this programme is high and it piqued my
                    interest.
                    I am willing to spend time and work on my current goal, which is to graduate from HZ university.
                </p>
            </article>

            <article class="article3">
                <h5 class="subtitle line">My motivation</h5>
                </br>
                <p>
                    My motivation mostly comes from the feeling of gratification after I successfully solve a problem.
                    Although I believe that motivation is more about having good discipline and good discipline is intertwined
                    with
                    good time management. I like working on different projects and I think that there is so much freedom of
                    what you can do with ICT. That is precisely why chose ICT.
                </p>
            </article>
        </div>
    </div>
</main>
</br>
<footer>
    Author: Viktória Žiaková
</footer>
</body>