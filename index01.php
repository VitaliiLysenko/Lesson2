    <html>   
    <body>
    <from method="GET" >
        Login:<input type="text" name="login" >
        E-mail:<input type="text" name="email" >
        <input type="submit" value="Send">
    </from>
     <?php
    echo "<br/>login= ".$_GET['login'];
    echo "<br/>email= ".$_GET['email'];
?>
    </body>
    </html>


