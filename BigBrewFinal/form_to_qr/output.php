<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=
        , initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <script>

            function generateqr() {
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var subject = document.getElementById('subject').value;
                var message = document.getElementById('message').value;
        
                console.log('Name: ' + name + " " + email + " " + subject + " " + message);
        
                var url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Name:" +
                name + "%0a Email: " + email + " Subject: " + subject + " Message: " + message;
        
                var ifr = `<iframe src="${url}" height="200" width="200"></iframe>`;
        
                document.getElementById('qrcode').innerHTML = ifr;
            }
        
        </script>        
    </body>
</html>