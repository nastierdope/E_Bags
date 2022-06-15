/**
 * Created by teodoroa&ilija on 06.22..
 */

window.onload = function () {
    var button = document.getElementById("previewButton");
    button.onclick = previewHandler;

}
function previewHandler() {
    var canvas = document.getElementById("prev");
    var context = canvas.getContext("2d");
    context.clearRect(0, 0, canvas.width, canvas.height);


    var selectObj = document.getElementById("shape");
    var index = selectObj.selectedIndex;
    var shape = selectObj[index].value;


    if (shape == "square") {
        for (var squares = 0; squares < 20; squares++) {
            drawSquare(canvas, context);
        }
    } else if (shape == "circle") {
        for (var circles = 0; circles < 20; circles++) {
            drawCircle(canvas, context);
        }
    }
    drawText(canvas,context);
}
    function drawSquare(canvas, context) {
        var shapeColor = document.getElementById("shapeColor").value;
        var w = Math.floor(Math.random() * 40);
        var x = Math.floor(Math.random() * canvas.width);
        var y = Math.floor(Math.random() * canvas.height);
        context.fillStyle = shapeColor;
        context.fillRect(x, y, w, w);
    }

    function drawCircle(canvas, context) {
        var shapeColor = document.getElementById("shapeColor").value;
        var radius = Math.floor(Math.random() * 40);
        var x = Math.floor(Math.random() * canvas.width);
        var y = Math.floor(Math.random() * canvas.height);
        var i = Math.floor(Math.random()*2);
        if (i == 1) {
            context.beginPath();
            context.arc(x, y, radius, 0, degreesToRadians(360), true);
            context.lineWidth = 8;
            context.strokeStyle = shapeColor;
            context.stroke();
        }
        else {
            context.beginPath();
            context.arc(x, y, radius, 0, degreesToRadians(360), true);
            context.fillStyle = shapeColor;
            context.fill();
        }
    }

    function degreesToRadians(degrees) {
        return (degrees * Math.PI) / 180;
    }

    function drawText(canvas, context) {
        var fColor = document.getElementById("fontColor").value;
        context.fillStyle = fColor;
        context.font = "bold italic 1em serif";
        context.align = "center";
        var obj = document.getElementById("text");
        var text = obj.value;
        if (text.length > 30) {
            var txt1 = text.substring(0,31);
            var txt = text.substring(31);
            context.fillText(txt1, 10, canvas.height / 3);
            context.fillText(txt, 10, 2 * canvas.height / 3);
        }
        context.fillText(text, 10, canvas.height / 2);
    }
