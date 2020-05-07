var guessVal = Math.floor(Math.random() * 99) + 1;
var passed = false;
var currGuesses = 0;
setInterval(timer, 1000);

var totalsecs = 0;
var totalmins = 0; 

function checkGuess() {
	var gameReporting = document.getElementById("gameReporting");
	var userGuessVal = document.getElementById("userGuess").value;

	var intGuessVal = parseInt(userGuessVal);

	var textResponse = "";

	if (isNaN(intGuessVal)) {
		window.alert("You did not enter a valid number, please retry!");
	} else {
		if (intGuessVal == guessVal) {
			passed = true;
		} else if (intGuessVal > guessVal) {
			textResponse = "Too high";
		} else {
			textResponse = "Too low";
		}
		if (passed) {
			gameReporting.innerHTML = "Congratulations! You have guessed correctly!<br>New game started.";
			totalsecs = 0;
			totalmins = 0;
			guessVal = Math.floor(Math.random() * 99) + 1;
		} else {
			gameReporting.innerHTML = textResponse + " | Guesses Left: " + (10 - currGuesses).toString();

			currGuesses++;

			if (!passed && currGuesses >= 10) {
				gameReporting.innerHTML = "Sorry you have lost! The correct number was: " + (guessVal).toString() + "<br>New game has started";
				totalsecs = 0;
				totalmins = 0;
				guessVal = Math.floor(Math.random() * 99) + 1;
			}
		}
	}
}

function convert(times){
    var string = times + "";
    if(string.length < 2) {
        return "0" + string;
    }
    else {
        return string;
    }   
}

function timer(){
	var minsL = document.getElementById("mins");
	var secsL = document.getElementById("secs");
	++totalsecs;
	secsL.innerHTML = convert(totalsecs%60);
	    
	if (totalsecs == 59) {
	  ++totalmins; 
	  minsL.innerHTML = convert(totalmins%60);
	}
}

