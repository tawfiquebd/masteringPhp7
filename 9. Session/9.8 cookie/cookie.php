<?php
// This cookie will show in /cookie/cookie.php
// we can select cookie path to where the cookie will work
// by default path is / that means root path. everywhere it accessible
// right now it will access only inside only in /cookie

//setcookie('mycookie','First cookie',time()+300,'/cookie');
//echo $_COOKIE['mycookie'];

// setrawcookie — Send a cookie without urlencoding the cookie value
//setrawcookie() is exactly the same as setcookie()
// except that the cookie value will not be automatically urlencoded
// when sent to the browser.
//setrawcookie('data2', rawurlencode('hello world'),time()+60);
//echo $_COOKIE['data2'];

// cookie data always url encoded by php
//setcookie('data','hello world',time()+300);
//echo $_COOKIE['data'];

// if we want to pass array in cookie it will give us error, we have to
// pass either php serialize() otherwise javascript friendly key value

//setcookie('array',array('hasan',24), time()+60); // it throw a fatal error

// Way 1: serialize . to print we have to unserialize first then loop throught it.
// note : sometimes serialize could throw error
//setcookie('array',serialize(array('hasan',24)), time()+60);
//
//foreach(unserialize($_COOKIE['array']) as $key=>$value){
//    echo $key." => ". $value ."<br/>";
//}

// Way 2: javascript friendly way
setcookie("array[id]",1,time()+60);
setcookie("array[name]",'hasan',time()+60);

foreach($_COOKIE['array'] as $key=>$value){
    echo $key." => ". $value ."<br/>";
}


// accessing php cookie data using javascript cookie library
?>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script>
    // alert(Cookies.get('data2'));

</script>