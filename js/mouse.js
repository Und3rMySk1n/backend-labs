window.onload = onWindowLoaded;

function onWindowLoaded()
{
    document.onmousemove = printMousePosition;
}

function printMousePosition()
{
    var posX = document.getElementById('positionX');
    var posY = document.getElementById('positionY');
    posX.innerText = "X: " + window.event.pageX;
    posY.innerText = "Y: " + window.event.pageY;
}