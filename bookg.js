window.onload = function () {

    var url = document.location.href,
        params = url.split('?')[1],
        data = {}, tmp;

    tmp = params.split('=');
    data[tmp[0]] = tmp[1];

    var s = (data.n).split("%20");
    var y = "Book with " + s[0] + " " + s[1];

    document.getElementById('title1').innerHTML = y;
}

function confirm() {

    var url = document.location.href,
        params = url.split('?')[1],
        data = {}, tmp;

    tmp = params.split('=');
    data[tmp[0]] = tmp[1];

    var s = (data.n).split("%20");
    var n = parseInt(s[2]);
    var mdays = document.getElementById('input').value;
    if ((mdays + "n").length == 1)
        alert("Please enter the number of days");
    else {
        var days = parseInt(mdays);

        var cost = days * n;
        document.getElementById('display').style.display = "block";
        document.getElementById('display').innerHTML = "Pay Rs. " + cost;
    }
}

function Paid() {
    document.getElementById('main3').style.display = "block";
    document.getElementById('pay').innerHTML = "Guide booked successfully";
}