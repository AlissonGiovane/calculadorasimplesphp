<?php
    $num = "";
    $resultado = "";
    $cookie_nome1 = "num";
    $cookie_valor1 = "";
    $cookie_nome2 = "op";
    $cookie_valor2 = "";

    if(isset($_POST['display'])){
        $num = $_POST['display'];
    }else{
        $num = "";
    }

    if(isset($_POST['submit'])){
        $num = $_POST['display'] . $_POST['submit'];
    }else{
        $num = "";
    }

    if(isset($_POST['op'])){
        $cookie_valor1 = $_POST['display'];
        setcookie($cookie_nome1,$cookie_valor1, time() + (86400 * 30), "/");

        $cookie_valor2 = $_POST['op'];
        setcookie($cookie_nome2,$cookie_valor2, time() + (86400 * 30), "/");
        $num = "";
    }

    if(isset($_POST['igual'])){
        $num = $_POST['display'];
        echo $_COOKIE['op'];
        echo $_COOKIE['num'];
        echo $num;

       
    switch($_COOKIE['op']){
   case "+":
     $result = $_COOKIE['num'] + $num;
     break;
   case "/":
     $result = $_COOKIE['num'] / $num;
     break;
   case "-":
     $result = $_COOKIE['num'] - $num;
     break;
   case "x":
     $result = $_COOKIE['num'] * $num;
     break;
     case "C":
    $num = "";
    break;
  }

        $num = $resultado;
    }
?>

<html>

    <head>
        <title>Calculadora simples</title>
    </head>

    <body>
        <center>
            <form action="#" method="post" >
                <table border="1">

                    <tr>
                        <td colspan="4">
                            <input type="text" name="display" value=<?php echo $num; ?>>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" value="7"/>
                            <input type="submit" name="submit" value="8"/>
                            <input type="submit" name="submit" value="9"/>
                            <input type="submit" name="op" value="/"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" value="4"/>
                            <input type="submit" name="submit" value="5"/>
                            <input type="submit" name="submit" value="6"/>
                            <input type="submit" name="op" value="+"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" value="1"/>
                            <input type="submit" name="submit" value="2"/>
                            <input type="submit" name="submit" value="3"/>
                            <input type="submit" name="op" value="-"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" value="0"/>
                            <input type="submit" name="clear" value="C"/>
                            <input type="submit" name="igual" value="="/>
                            <input type="submit" name="op" value="x"/>
                        </td>
                    </tr>
                    
                </table>
            <form>
        </center>
    </body>

</html>