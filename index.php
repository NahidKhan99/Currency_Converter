<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter </title>
    <style>
        body{
            padding:0px;
            margin:0px;
        }
        h1{
            background-color:blue;
            color: white;
            text-align: center;
            font-size: 45px;
            padding: 10px;
        }
        div{

            background-color:#75c7c7;
            width: 400px;
            margin-left:500px;
            margin-top:100px;
            padding-bottom:20px;
        }
        p{
            background-color:red;
            font-size:35px;
            text-align:center;
            color:white;
            font-weight:bold;
        }
        label{
            font-wight:bold;
            font-size:28px;

        }
        form{
            margin-left:50px;
        }
        select{
            width:230px;
            height:35px;
            font-size:20px;
            font-weight:bold;
        }
        input[type=number]{
            width:220px;
            height:30px;
            font-size:18px;
            font-weight:bold;
        }
        input[type=submit]{
            margin-left:90px;
            font-size:24px;
        }
    </style>
</head>
<body>
    <h1>Currency Converter </h1>
    <div>
        <p>Currency Converter</p>
        <form action= "index.php" method="post">
            <label for="">Select Your Currency</label><br>
            <select name="currency">
                <option selected hidden>Select Your Currency</option>
                <option value="Dollar To Taka">Dollar To Taka</option>
                <option value="Taka To Dollar">Taka To Dollar</option>
                <option value="Euro To Taka">Euro To Taka</option>
                <option value="Taka To Euro">Taka To Euro</option>
                <option value="Pound To Taka">Pound To Taka</option>
                <option value="Taka To Pound">Taka To Pound</option>
                <option value="Rupee To Taka">Rupee To Taka</option>
                <option value="Taka To Rupee">Taka To Rupee</option>
                <option value="Saudi Riyal To Taka">Saudi Riyal To Taka</option>
                <option value="Taka To Saudi Riyal">Taka To Saudi Riyal</option>
            </select> <br> <br>
            <label for="">Enter Amount</label> <br>
            <input type="Number" name="amount" placeholder="Enter Amount" required> <br>
            <h2>
                <?php
                
                    if(isset($_POST['submit'])){
                    $currency=$_POST['currency'];
                    $amount=$_POST['amount'];

                    if($currency=='Dollar To Taka'){
                        //1 Dolar = 84.55 tk
                        echo $amount." Dollar" ." = ";
                        echo $amount*84.55;
                         echo " Taka";                  
                     }
                     if($currency=='Taka To Dollar'){
                         // 1 Taka = 1 /84.55 dollar
                         echo $amount." Taka" ." = ";
                         echo $amount/84.55;
                         echo "Dollar";
                      }

                      if ($currency=='Euro To Taka'){
                          // 1 Euro = 101 tk
                          echo $amount." Euro" ." = ";
                          echo $amount*101;
                          echo 'Taka';
                      }
                      if($currency=='Taka To Euro'){
                        // 1 Taka = 1 /101 Euro
                        echo $amount." Taka" ." = ";
                        echo $amount/101;
                        echo "Euro";
                     }
                     if ($currency=='Pound To Taka'){
                        // 1 Pound = 110.60 tk
                        echo $amount." Pound" ." = ";
                        echo $amount*110.60;
                        echo 'Taka';
                    }
                    if($currency=='Taka To Pound'){
                        // 1 Taka = 1 /110.60 Pound
                        echo $amount." Taka" ." = ";
                        echo $amount/101;
                        echo "Pound";
                     }
                     if ($currency=='Rupee To Taka'){
                        // 1 Rupee = 1.13 tk
                        echo $amount." Rupee" ." = ";
                        echo $amount*1.13;
                        echo 'Taka';
                    }
                    if($currency=='Taka To Rupee'){
                        // 1 Taka = 1 /1.13 Pound
                        echo $amount." Taka" ." = ";
                        echo $amount/1.13;
                        echo "Rupee";
                     }
                     if($currency=='Saudi Riyal To Taka'){
                        //1 Saudi Riyal  = 23 tk
                        echo $amount." Saudi Riyal " ." = ";
                        echo $amount*23;
                         echo " Taka";                  
                     }
                     if($currency=='Taka To Saudi Riyal '){
                         // 1 Taka = 1 /23 Saudi Riyal 
                         echo $amount." Taka" ." = ";
                         echo $amount/23;
                         echo "Saudi Riyal ";
                      }

                      //We can add more currencies like these
                    }

                ?>
            </h2>
            <input type="submit" name="submit" value="Convert">
        </form>

    </div>
</body>
</html>