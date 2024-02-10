<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <title>My Princess</title>
    <style>
        h1,
p {
	font-family: 'Poor Story', cursive;
}

p{
	text-indent: 50px;
}

h1 {
	font-weight: 200;
}

body {
	margin: 0px;
    background-color: #121212; /* Dark background color */
}

.container {
	position: relative;
	width: 100%;
	height: 100vh;
	overflow: hidden;
}

.heart {
	position: absolute;
	left: 50%;
	top: 50%;
	text-align: center;
	transform: translate(-50%, -50%);
	transiton: transform 2s;
	z-index: 1;
}

.heart > img {
	width: 50px;
	height: auto;
}

.message {
            padding: 20px;
            background-color: #eee;
            min-width: 400px;
            height: 75%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
            overflow: hidden;
            animation-name: openmsg;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-play-state: paused;
            animation-fill-mode: forwards;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            border-radius: 5px;
            text-align: justify; /* Added justification */
        }



.heart > img:hover {
	animation-name: beat;
	animation-duration: 2s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
	animation-play-state: running;
}

#messageState {}

@keyframes beat {
	0% {
		width: 50px;
	}
	25% {
		width: 58px;
	}
	30% {
		width: 50px;
	}
	50% {
		width: 45px;
	}
	60% {
		width: 50px;
	}
	75% {
		width: 58px;
	}
	100% {
		width: 50px;
	}
}

@keyframes openmsg {
	0% {
		height: 0px;
		padding: 0px 20px;
	}
	100% {
		height: 75%;
		padding: 20px 20px;
	}
}

@keyframes heartMove {
	0% {
		top: 50%
	}
	100% {
		top: 85%;
		transform: translate(-50%, 0);
	}
}

.openNor {
	animation-direction: normal;
	animation-play-state: running;
}

.closeNor {
	animation-direction: reverse;
	animation-play-state: running;
}

.no-anim {
	animation: none;
}

.closed {
	height: 0px;
	padding: 0px 20px;
}

.bottom {
	bottom: 5px;
}

.openHer {
	animation-name: heartMove;
	animation-duration: 2s;
	animation-timing-function: linear;
	animation-play-state: running;
	animation-fill-mode: forwards;
}

.closeHer {
	animation-name: heartMove;
	animation-duration: 2s;
	animation-timing-function: linear;
	animation-play-state: running;
	animation-direction: reverse;
	animation-fill-mode: forwards;
}

.beating > img {
	animation-name: beat;
	animation-duration: 2s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
	animation-play-state: running;
}
@media only screen and (max-width: 768px) {
            .message {
                min-width: 80%;
                padding: 10px;
            }

            .container {
                overflow: visible;
            }

            a {
                display: block;
                /* Make the link a block element in mobile view */
                margin: 1rem auto;
                /* Adjust margin for better spacing */
            }
        }

.openedHer {
	top: 85%;
	transform: translate(-50%, 0);
}
.instruction-text {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            color: #fff;
			font-family: 'Poor Story', cursive;

}
.bottom-text {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
    color: #fff;
}
a{
    margin-top: 3rem ;
    color: #000;
    text-decoration: none;
    border-radius: 20px 20px;
    padding: 12px 12px;
    border: solid black 2px;
    transition: ease-in-out 300ms;
	font-family: 'Poor Story', cursive;

}
a:hover{
    color: white;
    background-color: #D04848;
    box-shadow: 5px 10px rgba(0, 0, 0, 0.7);
}

    </style>
</head>
<body>

<div class="container">
	<label>
        
	<div class="heart">
		<img src="https://upload.wikimedia.org/wikipedia/commons/4/42/Love_Heart_SVG.svg"></img>
	</div>
	<input id="messageState" type="checkbox" style="display:none"/>
	</label>
	<div class="message">
		<h1>My Dearest, Princess</h1>
		<p>

As I sit down to pour my heart out to you, I realize that mere words can hardly encapsulate the depth of my feelings for you. Yet, I'll do my best to express what you mean to me.
From the moment our paths intertwined, you've been the melody to my song, the light that brightens my darkest days, and the compass guiding me through life's uncertainties. Your presence in my life has painted it with hues of love, compassion, and boundless joy. With you, every moment feels like a cherished memory in the making. Whether it's the quiet moments we share, lost in each other's embrace, or the laughter that fills the air when we're together, every second spent by your side feels like a blessing. Your smile has the power to light up even the gloomiest of days, and your laughter is the sweetest melody to my ears. Your kindness knows no bounds, and your heart is as vast and beautiful as the universe itself. In your eyes, I find solace, understanding, and an unwavering love that knows no limits. With you, I've discovered the true meaning of companionship, support, and unconditional acceptance. <br><br>Our journey, though marked by physical distance, is a testament to the strength of our love. I know that navigating a long-distance relationship is no easy feat, but I want you to know that every mile between us only strengthens my conviction that what we share is extraordinary. Despite the challenges, our love remains unwavering. The miles may separate us, but our hearts beat as one. I cherish the late-night calls, the handwritten letters, and the virtual dates that bridge the gap between us. And through it all, I believe that our love is strong enough to weather any storm. You are my rock, my anchor, and my sanctuary, and I am endlessly thankful for your presence in my life. As we navigate the complexities of a long-distance relationship, I find comfort in knowing that our love is resilient, enduring, and worth every sacrifice. So here's to us, to our love story that transcends miles and defies the odds. May our hearts remain forever intertwined, and may our love continue to grow stronger with each new dawn.

With all my love and devotion.

</p>
<br>
            <div class="bottom-text">
        <a href="homepage.php">Watch Video</a>
    </div>
	</div>
    <div class="instruction-text">
        Press the heart icon
    </div>
	 <audio id="myAudio" src="myprincess.mp3" preload="auto"></audio>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $("#messageState").on("change", (x) => {
	$(".message").removeClass("openNor").removeClass("closeNor");
	if ($("#messageState").is(":checked")) {
		$(".message").removeClass("closed").removeClass("no-anim").addClass("openNor");
		$(".heart").removeClass("closeHer").removeClass("openedHer").addClass("openHer");
		$(".container").stop().animate({"backgroundColor": "#f48fb1"}, 2000);
		console.log("Abrindo");
	} else {
		$(".message").removeClass("no-anim").addClass("closeNor");
		$(".heart").removeClass("openHer").removeClass("openedHer").addClass("closeHer");
		$(".container").stop().animate({"backgroundColor": "#fce4ec"}, 2000);
		console.log("fechando");
	}
});

$(".message").on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
	console.log("Animation End");
	if ($(".message").hasClass("closeNor"))
		$(".message").addClass("closed");
	$(".message").removeClass("openNor").removeClass("closeNor").addClass("no-anim");
});

$(".heart").on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
	console.log("Animation End");
	if (!$(".heart").hasClass("closeHer"))
		$(".heart").addClass("openedHer").addClass("beating");
	else
		$(".heart").addClass("no-anim").removeClass("beating");
	$(".heart").removeClass("openHer").removeClass("closeHer");
});

$("#messageState").on("click", function() {
            if ($(this).is(":checked")) {
                playAudio();
            } else {
                stopAudio();
            }
        });

        function playAudio() {
            var audio = document.getElementById("myAudio");
            audio.play();
        }

        function stopAudio() {
            var audio = document.getElementById("myAudio");
            audio.pause();
            audio.currentTime = 0;
        }


</script>
</body>
</html>