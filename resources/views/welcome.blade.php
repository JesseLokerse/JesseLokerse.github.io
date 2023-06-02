<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="vieuwport" content="device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>
    <meta name="author" content="Jesse Lokerse">
    <meta name="keywords" content="Blog, Overzicht blogs, Artikelen, Wie ben ik">
    <link rel="stylesheet" href="./CSS/styles.css">

</head>

<body>

<header>
    <nav>

        <div class = "boven">
            <img class = "hz-logo"
                 src = "https://play-lh.googleusercontent.com/GwSgqhv0Nour7T0tp5QK_3aMjRy7s15-6kacqv0Y1I13PKTkPdZmha8gBDVv4ZD8hmY"
                 width = "50" height = "50" alt = "hz logo" align = "left">
            <a class='nav-text' href = "./"><strong>Home,</strong></a>
            <a class='nav-text' href = "./profile"><strong>Profiel,</strong></a>
            <a class='nav-text' href = "./dashboard"><strong>Dashboard,</strong></a>
            <a class='nav-text' href = "./faq"><strong>FAQ,</strong></a>
            <a class='nav-text' href = "./blog"><strong>Blog, </strong></a>
            <a class='nav-text' href = "./facts"><strong>Random Facts</strong></a>
            <br>
            <br>
        </div>
    </nav>
    <div class = "nav">
        <article class = "vertikaal">
            <br>

            <img src = "https://stream1.hz.nl/live/hz-logo.png" width="140" height="35" align="left">
            <br>
            <br>
            <br>
            <a class='nav-text' href = "https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"><strong>Onderwijs
                    en examenregeling</strong></a>
            <br>
            <br>
            <a class='nav-text' href = ""><strong>Uitvoeringsregeling</strong></a>
            <br>
            <br>
            <a class='nav-text' href = "https://learn.hz.nl/my/"><strong>Learn</strong></a>
            <br>
            <br>
            <a class='nav-text' href = "https://teams.microsoft.com/_?culture=nl-nl&country=NL&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school/conversations/Algemeen?threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel"><strong>Teams</strong></a>
            <br>
            <br>
            <a class='nav-text' href = "https://hz.osiris-student.nl/#/voortgang/"><strong>Vooruitgang</strong></a>
            <br>
            <br>
            <a class='nav-text' href = "https://github.com/HZ-HBO-ICT"><strong>GitHub</strong></a>
            <br>
            <br>
            <button class='popup' id='random-fact-button' onclick="change_message()"><strong>Did you know?</strong>
              <span class="popuptext" id="myPopup">ARandomFactThatIsVerryLongYouKNow</span> 
            </button>

</div>
        </article>
    </div>


</header>

<main>
    <br>
    <div class = "main">
        <article class = "profile-text">
            <br>
            <h1>HBO ICT</h1>
            <h2 class="text">Waarom past de HBO ICT studie bij mij?</h2>
            <p>Ik denk dat de studie HBO ICT bij mij past omdat mijn interesses bij computers ligt, en dan vooral
                bij de software.</p>
            <p>Het lijkt mij erg leuk om te kunnen programeren en coderen.</p>
            <p>Ook ben ik na de middelbare school, waar ik veel moest leren, toe aan een studie die meer gefocust</p>
            <p>is op doen dan op leren.</p>
            <p>Toen kwam ik de HBO ICT studie tegen op de hz, en daar was weinig leerwerk, en meer doewerk.</p>
            <p>Wat ook meespeelt is dat er in de ICT veel geld te verdienen valt, en dat er ook veel banen
                beschikbaar
                zijn. </p>
            <img alt="plaatje van de w&h vragen" src = "https://d2k0ddhflgrk1i.cloudfront.net/_processed_/0/3/csm_questions-1328465_1920_d16ada3553.png" height="300, width=300">
        </article>
    </div>



    <div class = "twee">

        <article class = "profile-text">
            <br>
            <h1>Waarom is dit de juiste opleiding voor mij?</h1>
            <ul>-Mijn intresse ligt bij ICT.</ul>
            <ul>-De studie is lekker dicht bij waardoor de reistijd relatief laag is.</ul>
            <ul>-Ik hou van gamen en ik vind het interresant om te leren hoe deze games gemaakt worden.</ul>
            <ul>-Ik vinde het leuk om met computters te werken en te begrijpen hoe computers denken.</ul>
        </article>
    </div>
    <div class = "twee">
        <article class = "profile-text">
            <br>
            <br>
            <h2>Op de site van de HZ staat meer informatie over de opleiding.</h2>
            <ul>
                <li>
                    <p>klik <a href = "https://hz.nl/opleidingen/hbo-ict">hier</a> om naar de site te gaan.</p>
                </li>
            </ul>
        </article>

    </div>

    <div class = "twee">
        <article class = "profile-text">
            <br>
            <p>Socials:<img class="logo" alt = "plaatje van instagram" src = "https://www.webzies.nl/wp-content/uploads/2020/08/instagram-logo-png-cute-10.png" width = 50, height = 50> </p>
            <a class = "socials" href:"https://www.instagram.com/jesse_lokerse/"> IG:jesse_lokerse</a>

        </article>
    </div>
    <script src="./JS/randomFact.js" defer></script>
</main>
