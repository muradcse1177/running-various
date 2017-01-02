<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Brick Game</title>

    <style type="text/css">
        body {
            background-color: gray;
			text-align:center;
			margin-top:20px;
        }
        canvas {
            border: 5px solid green;
        }
    </style>

</head>

<body>


<canvas id="game" height="600px" width="800px" </canvas>

<script>
    var canvas = document.getElementById("game");
    // Get a 2D context for the canvas.
    var ctx = canvas.getContext("2d");

    var ballR = 20;
    var x = canvas.width /2;
    var y = canvas.height - 30;
    var dx = 3;
    var dy = -3;
    var moveH = 15;
    var moveW = 80;
    var moveX = (canvas.width - moveW) / 2;
    var rightKey = false;
    var leftKey = false;
    var brickRows = 3;
    var brickCol = 9;
    var brickW = 75;
    var brickH = 20;
    var bricks = [];

    for (c = 0; c < brickCol; c++) {
        bricks[c] = [];
        for (r = 0; r < brickRows; r++) {
            bricks[c][r] = {
                x: 0,
                y: 0,
                status: 1
            };
        }
    }

    function drawBall() {
        ctx.beginPath();
        ctx.arc(x, y, ballR, 0, Math.PI * 2);
        ctx.fillStyle = "red";
        ctx.fill();
        ctx.closePath();
    }

    function drawMove() {
        ctx.beginPath();
        ctx.rect(moveX, canvas.height - moveH, moveW, moveH);
        ctx.fillStyle = "blue";
        ctx.fill();
        ctx.closePath();
    }


    function collisionDetection() {
        for (c = 0; c < brickCol; c++) {
            for (r = 0; r < brickRows; r++) {
                var b = bricks[c][r];
                if (b.status == 1) {
                    if (x > b.x && x < b.x + brickW && y > b.y && y < b.y + brickH) {
                        dy = -dy;
                        b.status = 0;
                    }
                }
            }
        }
    }



    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawBall();
        drawMove();
        collisionDetection();

        if (x + dx > canvas.width - ballR || x + dx < ballR) {
            dx = -dx;
        }

        if (y + dy < ballR) {
            dy = -dy;
        } else if (y + dy > canvas.height - ballR) {
            if (x > moveX && x < moveX + moveW) {
                dy = -dy;
            } else {
                document.location.reload();
            }
        }
        function keyDown(e) {
            if (e.keyCode == 39) {
                rightKey = true;
            } else if (e.keyCode == 37) {
                leftKey = true;
            }
        }

        function keyUp(e) {
            if (e.keyCode == 39) {
                rightKey = false;
            } else if (e.keyCode == 37) {
                leftKey = false;
            }
        }

        document.addEventListener("keydown", keyDown, false);
        document.addEventListener("keyup", keyUp, false);


        if (rightKey && moveX < canvas.width - moveW) {
            moveX += 7;
        }
        else if (leftKey && moveX > 0) {
            moveX -= 7;
        }

        x += dx;
        y += dy;
    }

    setInterval(draw, 10);
</script>
</body>

</html>