<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php to javascript data exchange by json</title>
</head>
<body>
    <h3>Php to javascript data exchange</h3>
    <button type="submit" id="button">Show Something</button>
    <?php
    // php to javascript data exchange by json

    $data = array(
        "first name"=>"john",   // if first name has space then
//        "firstname"=>"john",
        "lastname"=>"doe",
        "email"=>"john@doe.com"
    );

    ?>


<script>
    let data = <?php echo json_encode($data) ; ?>;
    document.getElementById("button").addEventListener("click",function(){
        alert(data["email"]);  // we can use property as an array
        console.log(data);
    });
</script>
</body>
</html>
