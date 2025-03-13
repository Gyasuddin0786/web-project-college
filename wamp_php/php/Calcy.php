<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcy</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <style>
        fieldset{
            width: fit-content;
            height: fit-content;
        }
    </style> -->
</head>
<body>
    <!-- <fieldset> -->
    <form action="Calcy.php">
    <div class="container">
        <div class="row">
            <div class="box">
                <label>Enter num-1</label>
                <div>
                    <input type="text" name="num1" class="number" id="n1">
                </div>
                <label>Enter num-2</label>
                <div>
                    <input type="text" name="num2" class="number" id="n2">
                </div>
                <label>Enter operator</label>
                <div>
                    <input type="text" name="operator" class="number" id="op">
                </div><br>
                <div>
                    <!-- <button type="button" id="button">Arithmetic</button> -->
                    <input type="submit" name="submit" value="Calculate" id="button">
                </div>
                <div>
                    <p id="p"></p>
                </div>
            </div>
        </div>
    </div>
    </form>
    </fieldset>
    <!-- <script>
        $(document).ready(function(){
            $("#button").click(function(){
                a = parseInt($("#n1").val());
                b = parseInt($("#n2").val());
                op = $("#op").val();
                sum = a + b;
                sub = a - b;
                mul = a * b;
                div = a / b;
                mod = a % b;

                if(op=='+'){
                    $("#p").html("Sum of is:"+sum);
                }
                else if(op=='-'){
                    $("#p").html("Sub of is:"+sub);

                }
                else if(op=='*'){
                    $("#p").html("Mul of is:"+mul);

                }

                else if(op=='/'){
                    $("#p").html("Div of is:"+div);

                }

                else if(op=='%'){
                    $("#p").html("Mod of is:"+mod);

                }
                else{
                    $("#p").html("Invalid your operator\n try again");
                }
            });
        });
    </script> -->
    <?php   
    echo "Num1 is:".$_REQUEST['num1']."<br>";
    echo "Num2 is:".$_REQUEST['num2']."<br>"; 
    echo "Operator is:".$_REQUEST['operator']."<br>";

    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;
    $mod = $num1 % $num2;

    if($operator=='+'){
        echo "Sum of is:".$sum."<br>";
    }

?>
</body>
</html>