var Timer = 0;
var current_tile = null;
var seconds_since_card_select = 0;
var can_find = false;

function loadSettings() {
    curSize = document.getElementById("sizes").value;
    GameStart(curSize); 
}

function GameStart(size) {
    clearBoard();
    BuildBoard(size);

    var tiles = document.getElementsByClassName("Tile");
    console.log(tiles);
    var i;
    for (i = 0; i < tiles.length; i++) {
        var tile = tiles[i];
        tile.addEventListener('click', selectTileDelegate(tile), false);
    }

    var reset = document.getElementById("ResetButton");
    reset.setAttribute("onclick", "resetBoard();");
    BeginTimer(size);
}

function resetBoard() {
    let Tiles = document.getElementsByClassName("Tile");  
    for (let x of Tiles) {
        let curElement = x;
        curElement.style.backgroundImage = "url(Photos/"+ curElement.classList[1] + ".jpg)";
        curElement.style.height = "300px";
        curElement.style.width = "300px";
    }
    can_find = false;
}
  
function BuildBoard(size) {
    var GameGrid = document.getElementById("GameGrid");
    var newSize = size;
    size = size / 2;
    var offsetX = 0;
    var Pics = new Array(newSize*2);
    var start = 1;
    for (i = 0; i < newSize * 2; i+=2) {
        Pics[i] = start;
        Pics[i+1] = start;
        start++;
        console.log(Pics[i]);
        console.log(Pics[i+1]);
    }

    for (i = 1; i <= size; i++) {
        var curRow = "Row_" + i;
        var tblRow = document.createElement("tr");
        tblRow.id = curRow;

        for (k = 1; k <= 4; k++) {
            let curSquare = document.createElement("td");
            curSquare.id = "Tile:" + i + "|" + k;
            let curElement = document.createElement("div");
            var num = Math.floor((Math.random() * (Pics.length) ));
            var roll = Pics.splice(num, 1);
            curElement.className = "Tile " + roll;
            console.log(roll +"|" + num +"|" + k + "," + i);
            //curElement.textContent = roll;
            curSquare.style.border = "2px black solid";
            curSquare.style.padding = "0px";
            curElement.style.backgroundImage = "url(Photos/" + roll + ".jpg)";
            curElement.style.height = "300px";
            curElement.style.width = "300px";
            curSquare.appendChild(curElement);
            tblRow.appendChild(curSquare);
        }
      GameGrid.appendChild(tblRow);
    }
}
  
function selectSize(selectedSize) {
    let thisSize = selectedSize.value;
    curSize = thisSize;
}

function selectDifficulty(selectedDifficulty) {
    let Diff = selectedDifficulty.value;
    Timer = Number(Diff);
}
  
function clearBoard() {
    let gameGrid = document.getElementById("GameGrid");
    let Tiles = gameGrid.getElementsByTagName("tr");
  
    for (let x = Tiles.length - 1; x >= 0; x--) {
        let curElement = Tiles[x];
        gameGrid.removeChild(curElement);
    }
}

function BeginTimer(size) {
    let Diff = document.getElementById("Difficulty").value;
    Timer = Number(Diff);
    
    var x = setInterval(function() {
        document.getElementById("Timer").innerHTML = Timer;
        Timer--;

        // If the count down is finished, write some text
        if (Timer < 0) {
            clearInterval(x);
            //document.getElementById("Timer").innerHTML = "Times Up";
            can_find = true;
            BeginFindTimer(size);

            let Tiles = document.getElementsByClassName("Tile");  
            for (let x of Tiles) {
                let curElement = x;
                curElement.style.backgroundImage = "url(Photos/hidden.jpg)";
                curElement.style.height = "300px";
                curElement.style.width = "300px";
            }
        }
    }, 1000)
}

function BeginFindTimer(size) {
    if (size == 8) {
        Diff = 120;
    } else if (size == 10) {
        Diff = 150;
    } else {
        Diff = 180;
    }

    Timer = Number(Diff);
    
    var x = setInterval(function() {

        document.getElementById("Timer").innerHTML = Timer;
        Timer--;

        // If the count down is finished, write some text
        if (Timer < 0) {
          clearInterval(x);
          document.getElementById("Timer").innerHTML = "Times Up";
          
            let Tiles = document.getElementsByClassName("Tile");  
            for (let x of Tiles) {
                let curElement = x;
                curElement.style.backgroundImage = "url(Photos/"+ curElement.classList[1] + ".jpg)";
                curElement.style.height = "300px";
                curElement.style.width = "300px";
            }
        }
    }, 1000)
}

function selectTile(tile) {
    console.log("check");
    if (can_find) {
        if (current_tile != null) {
            var match = false;
            var tile_type = "";
            // check not the same card
            if (current_tile == tile) {
                current_tile = current_tile;
                return;
            } else {
                if (tile.classList[1] == current_tile.classList[1]) {
                    match = true;
                    tile_type = tile.classList[1];
                }
            }

            if (match) {
                current_tile.style.backgroundImage = "url(Photos/" + tile_type + ".jpg)";
                tile.style.backgroundImage = "url(Photos/" + tile_type + ".jpg)";
                current_tile = null;

                let tiles = document.getElementsByClassName("Tile");  
                all_tiles_matched = true;
                for (i = 0; i < tiles.length; i++) {
                    var tile = tiles[i];
                    console.log(tile.style.backgroundImage);
                    if (tile.style.backgroundImage == 'url("Photos/hidden.jpg")') {
                        all_tiles_matched = false;
                    }
                }

                if (all_tiles_matched) {
                    clearBoard();
                }
            } else {
                current_tile = null;
            }
        } else {
            current_tile = tile;
        }
    }
}

function selectTileDelegate(tile) {
    return function() {
        selectTile(tile);
    }
}