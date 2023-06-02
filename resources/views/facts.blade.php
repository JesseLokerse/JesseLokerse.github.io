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
    <script src="./JS/randomFact.js" defer></script>

</head>

<body onload="startSctipt();">

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
            <a class='nav-text' href = "./blog"><strong>Blog</strong></a>
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
</div>
        </article>
    </div>


</header>

<main>
    <br>
    <div class = "main">
        <article class = "profile-text">
        <form id='factType'>
            <input type="radio" class='inputboxStyle1' id="randomFact" name="inputbox" value="randomFact">
            <label class='inputboxStyle1'>Random fact</label><br>
            <input type="radio" class='inputboxStyle1' id="factOfTheDay" name="inputbox" value="factOfTheDay">
            <label class='inputboxStyle1'>Fact of the day</label><br>
            <input type="button" class='buttonStyle1'name="button" value="Click to show/hide fact" onClick="testResults(this.form)">
        </form>
            <button class='popup' id='random-fact-button'><strong>Generate random fact.</strong>
              <span class="popuptext" id="myPopup">ARandomFactThatIsVerryLongYouKNow</span> 
            </button>
        </article>
    </div>


    <div class = "twee">
        <article class = "profile-text">
            <br>
            <p>Socials:<img class="logo" alt = "plaatje van instagram" src = "https://www.webzies.nl/wp-content/uploads/2020/08/instagram-logo-png-cute-10.png" width = 50, height = 50> </p>
            <a class = "socials" href:"https://www.instagram.com/jesse_lokerse/"> IG:jesse_lokerse</a>

        </article>
    </div>
</main>
