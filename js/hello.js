window.onload = onWindowLoaded;

function onWindowLoaded()
{
    var nameButton = document.getElementById('nameButton');
    nameButton.onclick = onNameButtonClicked;
}

function onNameButtonClicked()
{
    var nameField = document.getElementById('userName');
    var name = nameField.value;
    var headingText = document.getElementById('heading');
    if (name != '')
    {
        var newColor = getRandomColor();
        headingText.innerText = "JavaScript is greeting your, " + name + '!';
        headingText.setAttribute("style", newColor);
    }
}

function getRandomColor()
{
    var max = 256 * 256 * 256;
    var randomColorNum = Math.round(Math.random() * (max));
    var newAttr = "color: #" + randomColorNum.toString(16);
    return newAttr;
}
