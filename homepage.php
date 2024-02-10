<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
    <style>
* {
  box-sizing: border-box;
  scroll-behavior: smooth;
}
a{
    font-size: 40px;
    transition: ease-in-out all 300ms;
}

body {
  font-family: 'Poor Story', cursive;
  background: #1a1a1a; /* Dark background color */
  color: white; /* Text color */
}

.wrapper {
  width: 100%;
  padding: 0 2rem;
  text-align: center;
}
.polaroid {
  background: #fff;
  padding: 1rem;
  box-shadow: 0 0.2rem 1.2rem rgba(0,0,0,0.2);
  
}
.polaroid > img{
  max-width: 100%;
  height: auto;
}
.caption {
  font-size: 1.8rem;
  text-align: center;
  line-height: 2em;
  color: black;
}
.item {
  width: 30%;
  display: inline-block;
  margin-top: 2rem;
  filter: grayscale(100%);
}
.item .polaroid:before {
  content: '';
  position: absolute;
  z-index: -1;
  transition: all 0.35s;
}
.item:nth-of-type(4n+1) {
  transform: scale(0.8, 0.8) rotate(5deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n+1) .polaroid:before {
  transform: rotate(6deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  right: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0,0,0,0.4);
}
.item:nth-of-type(4n+2) {
  transform: scale(0.8, 0.8) rotate(-5deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n+2) .polaroid:before {
  transform: rotate(-6deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  left: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0,0,0,0.4);
}
.item:nth-of-type(4n+4) {
  transform: scale(0.8, 0.8) rotate(3deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n+4) .polaroid:before {
  transform: rotate(4deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  right: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0,0,0,0.3);
}
.item:nth-of-type(4n+3) {
  transform: scale(0.8, 0.8) rotate(-3deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n+3) .polaroid:before {
  transform: rotate(-4deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  left: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0,0,0,0.3);
}
.item:hover {
  filter: none;
  transform: scale(1, 1) rotate(0deg) !important;
  transition: all 0.35s;
}
.item:hover .polaroid:before {
  content: '';
  position: absolute;
  z-index: -1;
  transform: rotate(0deg);
  height: 90%;
  width: 90%;
  bottom: 0%;
  right: 5%;
  box-shadow: 0 1rem 3rem rgba(0,0,0,0.2);
  transition: all 0.35s;
}
section{
    width: 100%;
    height: 100vh;
}
.scroll-up-btn{
    margin: 3rem;
    padding: 10px;
}
a:hover{
    font-size: 50px;
}
.scroll-icon{
    font-size: 40px;
    
}
.scroll-icon a{
    text-decoration: none;
    color: black;
}
.return-link a{
    text-decoration: none;
    color: white;
    font-size: 20px;
}
video {
    width: 80%; /* Adjust the width as needed */
    max-width: 1200px; /* Set a maximum width if necessary */
    height: auto;
    display: block;
    margin: 0 auto; /* Center the video */
}
#playButton {
    background-color: #D04848;
    color: white;
    padding: 10px 20px;
    font-size: 15px;
    border: none;
    border-radius: 20px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin: 20px auto; /* Center the button */
    display: block;
}
#fullscreenButton{
  background-color: #D04848;
    color: white;
    padding: 10px 20px;
    font-size: 15px;
    border: none;
    border-radius: 20px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin: 20px auto; /* Center the button */
    display: block;
}
#scrollUp-icon{
  color: white;
}
.section2-scroll{
  text-decoration: none;
  color: white;
  font-size: 20px;

}
.section2-scroll:hover{
  font-size: 25px;
}
#section2{
}
.flip-message{
  color: black;
}



    /* Additional styles for the flip box */
    .flip-box-container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px; /* Adjust margin as needed */
        }

        .flip-box {
            width: 70%;
            perspective: 1000px;
            margin-top: 6rem;
        }

        .flip-box-inner {
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            position: relative;
            transform-style: preserve-3d;
            transform-origin: center center;
            transition: transform 0.5s;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        .flip-box-front,
        .flip-box-back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
        }

        .flip-box-front {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            box-shadow: 0 0.2rem 1.2rem rgba(0, 0, 0, 0.2);
        }

        .flip-box-back {
            transform: rotateY(180deg);
            background: #fff;
            box-shadow: 0 0.2rem 1.2rem rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        .flip-box img {
            max-width: 100%;
            max-height: 100%;
        }
        @media (max-width: 770px) {
            .flip-box-container {
                flex-direction: column;
                align-items: center;
            }

            .flip-box {
                width: 63%;
                margin-top: 20px;
            }
            #section2 {
                margin-bottom: 200px; /* Add margin to the bottom of section2 */
            }
            #fullscreenButton{
              font-size: 12px;
            }
            #playButton{
              font-size: 12px;
            }
  
        }

.buttons{
  display: flex;
  margin: auto;
  width: 50%;

}
.flip-message{
  font-size: 20px;
  margin-top: 2rem;
}
    </style>
</head>
<body>
<div class="wrapper"id="section1">
<h2><p class="return-link"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg><br>Go Back</a></h2>
</div>
<section>
    <video width="100%" height="auto" >
        <source src="my-princess.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="buttons">
    <button id="playButton">Play Video</button>
    <button id="fullscreenButton">Fullscreen</button>
    </div>
    <div class="wrapper"id="section1">
<h2><p><a href="#section2" class="section2-scroll">Scroll down</a></h2>
</div>
</section>
<section id="section2">
        <div class="flip-box-container">
            <!-- Flip Box 1 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="flip1.jpg" alt="Image 1">
                    </div>
                    <div class="flip-box-back">
                    <h2 style="color: black;">"I"</h2>
                        <p class="flip-message">In the book of us, you're my favorite page,
A love story that grows with each passing age.
Your smile, a sunshine in my sky,
With you, every moment feels so high. <br><br>

Eyes that twinkle, like stars so bright,
With you, everything feels just right. <br>
In the quiet moments, our love stays,
A bond that lasts in countless ways. 

Hand in hand, through thick and thin,
Together, a journey we happily begin. <br><br>
You're the music in my daily rhyme,
A love that withstands the test of time. 

Together we create a world so sweet,
In your embrace, my heart finds its beat.
With gratitude and love so true,
I'm thankful for the "I" that is you. </p>
                       
                    </div>
                </div>
            </div>

            <!-- Flip Box 2 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="flip2.jpg" alt="Image 2">
                    </div>
                    <div class="flip-box-back">
                    <h2 style="color: black;">"Love"</h2>
                    <p class="flip-message">
Love is the melody in our shared song,
A harmony where we both belong.
In your eyes, a universe I find,
A connection that's wonderfully kind. <br><br>

Through ups and downs, our journey we weave,
In your love, I believe.
You're the sunshine in my cloudy sky,
With you, every moment, oh, how time flies. <br>

Love, a language only we both know,
In your presence, my heart does glow.
Hand in hand, facing what may be,
With you, love is my sweetest decree. <br><br>

You're the muse in my poet's pen,
In the vast sky, you're my moon, my den.
With love as our guide, we sail through,
Forever grateful for the love that is you.</p>
                    </div>
                </div>
            </div>

            <!-- Flip Box 3 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="flip3.jpg" alt="Image 3">
                    </div>
                    <div class="flip-box-back">
                    <h2 style="color: black;">"You"</h2>
                    <p class="flip-message">You are the canvas of my dreams,
Where love paints its vibrant themes.
In your gaze, a world unfolds,
A story of love, forever told. <br><br>

You're the melody in my heart's song,
In your embrace, I truly belong.
With every heartbeat, your name I hear,
You're the symphony I hold dear. <br>

You light up the darkest night,
In your love, everything feels right.
You're the answer to my silent plea,
In your love, I'm wild and free. <br><br>

You are the sunshine after rain,
In your presence, all troubles wane.
With you, every moment feels divine,
You, my love, forever mine.





</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 style="color: white; text-align: center;">I LOVE YOU MY PRINCESS</h2>
        <div class="wrapper"id="section">
<h2><p><a href="#section3" class="section2-scroll">Scroll down</a></h2>
</div>
    </section>
    <section id="section3">
    <div class="wrapper">
    <h2>Keep Scrolling Down</h2>
    <p>(Hover over the pictures to listen to recordings)</p>

    <div class="item" id="polariod1" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
                <div class="polaroid">
                    <img src="pic1.jpg">
                    <div class="caption">Eternal Bliss</div>
                </div>
            </div>
    
            <div class="item" id="polariod2" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic2.jpg">
    <div class="caption">Pure Passion</div>
  </div>
</div>

<div class="item" id="polariod3" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic3.jpg">
    <div class="caption">Endless Love</div>
  </div>
</div>
<div class="item" id="polariod4" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic4.jpg">
    <div class="caption">Sweet Embrace</div>
  </div>
</div>

<div class="item" id="polariod5" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic10.jpg">
    <div class="caption">True Connection</div>
  </div>
</div>

<div class="item" id="polariod6" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic6.jpg">
    <div class="caption">Blissful Union</div>
  </div>
</div>

<div class="item" id="polariod7" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic7.jpg">
    <div class="caption">Heart's Song</div>
  </div>
</div>

<div class="item" id="polariod8" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic8.jpg">
    <div class="caption">Forever Yours</div>
  </div>
</div>

<div class="item" id="polariod9" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic9.jpg">
    <div class="caption">Love Blooms</div>
  </div>
</div>

<div class="item" id="polariod10" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic11.jpg">
    <div class="caption">Joyful Bond</div>
  </div>
</div>

<div class="item" id="polariod11" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic12.jpg">
    <div class="caption">Soulful Harmony</div>
  </div>
</div>

<div class="item" id="polariod12" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic13.jpg">
    <div class="caption">Infinite Affection</div>
  </div>
</div>

<div class="item" id="polariod13" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic14.jpg">
    <div class="caption">Tender Moments</div>
  </div>
</div>

<div class="item" id="polariod14" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic15.jpg">
    <div class="caption">Blissful Unity</div>
  </div>
</div>

<div class="item" id="polariod15" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic16.jpg">
    <div class="caption">Love Spark</div>
  </div>
</div>

<div class="item" id="polariod16" onmouseover="playAudio(this)" onmouseout="pauseAudio(this)" onclick="playAudio(this)">
  <div class="polaroid"><img src="pic5.jpg">
    <div class="caption">Cherished Togetherness</div>
  </div>
</div>


<h2><p class="scroll-icon"><a href="#section1" id="scrollUp-icon">↑</a></p>The Scrolling ends here
        
    </h2>

      <audio id="hoverAudio1" src="Rec1.mp3"></audio>
      <audio id="hoverAudio2" src="Rec2.mp3"></audio>
      <audio id="hoverAudio3" src="Rec3.mp3"></audio>
<audio id="hoverAudio4" src="Rec4.mp3"></audio>
<audio id="hoverAudio5" src="Rec5.mp3"></audio>
<audio id="hoverAudio6" src="Rec6.mp3"></audio>
<audio id="hoverAudio7" src="Rec7.mp3"></audio>
<audio id="hoverAudio8" src="Rec8.mp3"></audio>
<audio id="hoverAudio9" src="Rec9.mp3"></audio>
<audio id="hoverAudio10" src="Rec10.mp3"></audio>
<audio id="hoverAudio11" src="Rec11.mp3"></audio>
<audio id="hoverAudio12" src="Rec12.mp3"></audio>
<audio id="hoverAudio13" src="Rec13.mp3"></audio>
<audio id="hoverAudio14" src="Rec14.mp3"></audio>
<audio id="hoverAudio15" src="Rec15.mp3"></audio>
<audio id="hoverAudio16" src="Rec16.mp3"></audio>


   
    </section>



</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var video = document.querySelector("video");
        var playButton = document.getElementById("playButton");
        var fullscreenButton = document.getElementById("fullscreenButton");

        playButton.addEventListener("click", function() {
            if (video.paused) {
                video.play();
                playButton.textContent = "Pause Video";
            } else {
                video.pause();
                playButton.textContent = "Play Video";
            }
        });

        fullscreenButton.addEventListener("click", function() {
            toggleFullscreen(video); // Pass the video element as an argument
        });

        // Update the button text based on video state
        video.addEventListener("play", function() {
            playButton.textContent = "Pause Video";
        });

        video.addEventListener("pause", function() {
            playButton.textContent = "Play Video";
        });
    });

    function toggleFullscreen(video) {
        if (!document.fullscreenElement) {
            // If the document is not currently in fullscreen
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.mozRequestFullScreen) { // Firefox
                video.mozRequestFullScreen();
            } else if (video.webkitRequestFullscreen) { // Chrome, Safari and Opera
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) { // IE/Edge
                video.msRequestFullscreen();
            }
        } else {
            // If the document is currently in fullscreen, exit fullscreen
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) { // Firefox
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) { // Chrome, Safari and Opera
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { // IE/Edge
                document.msExitFullscreen();
            }
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Add event listeners to all polaroid items
        var polaroidItems = document.querySelectorAll('.item');
        polaroidItems.forEach(function (item) {
            item.addEventListener('mouseover', playAudio);
            item.addEventListener('mouseout', pauseAudio);
        });
    });

    function playAudio(event) {
        var audioId = event.currentTarget.id.replace('polariod', 'hoverAudio');
        var hoverAudio = document.getElementById(audioId);

        if (hoverAudio) {
            hoverAudio.play();
        }
    }

    function pauseAudio(event) {
        var audioId = event.currentTarget.id.replace('polariod', 'hoverAudio');
        var hoverAudio = document.getElementById(audioId);

        if (hoverAudio) {
            hoverAudio.pause();
            hoverAudio.currentTime = 0;
        }
    }
</script>
</body>
</html>