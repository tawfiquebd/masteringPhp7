<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax Test</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <style>
        body {
            padding-top: 100px;
        }
        .data-trigger {
            padding: 50px 0px;
        }
        .data-value {
            padding: 50px 10px;
            background: rgb(242, 242, 242);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 data-trigger">
            <h4>Trigger</h4>
            <form action="">
                <input type="button" id="send" value="Send Data" />
            </form>
        </div>
        <div class="col-md-8 data-value">
            <pre id="result"></pre>
        </div>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>

    // process/send data to server by ajax
    function sendData(){
        let params = {
            "key1":"Value 1",
            "key2":"Value 2"
        }
        let queryString = formatParams(params);
        let xhr = new XMLHttpRequest();     //  javascript object
        // server side request to data.php // GET method
        // method httpVerb: GET // true for asynchronous mode
        // xhr.open("GET", "data.php?foo=bar&hello=world", true);
        // POST method
        // xhr.open("POST", "data.php", true);

        xhr.open("GET", "data.php?"+queryString, true);
        // DELETE method
        // xhr.open("DELETE", "data.php?id=22", true);
        // content type
        xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
        );
        // get/check server response
        xhr.onreadystatechange = function(){
            // request complete = 4
            // valid response = 200
            if(this.readyState === 4 && this.status === 200){
                // console.log(this.responseText); // showing response in console
                document.getElementById('result').innerHTML = this.response;

                var response = JSON.parse(this.responseText);
                console.log(response.result);
            }
        }

        // get method
        // xhr.send();
        // post method
        // xhr.send("foo=bar&hello=world"); // passing data

        // for PUT/DELETE
        xhr.send();
    }

    function formatParams(data){
        // convert query string
        return new URLSearchParams(data).toString();

        // return Object.keys(data).map(function(key){
        //     return key + "=" + encodeURIComponent(data[key])
        // }).join('&');
    }

    document.getElementById('send').addEventListener('click',function(){
        sendData();

    });
</script>
</html>
