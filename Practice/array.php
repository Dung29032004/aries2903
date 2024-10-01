    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        //array
        //$foods = array("apple","orange","banana","coconut");
        // $foods[0] = "pineapple"; dau
        // array_push($foods, "pineapple","kiwi"); them cuoi
        // array_pop($foods); xoa cuoi
        // array_shift($foods); xoa dau
        //echo count($foods); dem
        // echo $foods[0]. "<br>";
        // echo $foods[1]. "<br>";
        // echo $foods[2]. "<br>";
        // echo $foods[3]. "<br>";
        // foreach($foods as $food){
        //     echo $food . "<br>";
        // }
        ?>
        <form action="" method="post">
            <label for="">Enter your country</label>
            <input type="text" name="country">
            <input type="submit">
        </form>
        <?php
        $capitals = array(  "USA"=>"Washington D.C",
                            "Japan" => "Kyoto");
        $capital = $capitals[$_POST["country"]];
        echo "The capital is {$capital}";
        //$capitals["USA"] = "Las Vegas"; thay cot 2
        //$capitals["China"] = "Beijing"; them dong
        //array_pop($capitals); xoa cuoi
        //array_shift($capitals); xoa dau
        //$keys = array_keys($capitals); hien cot dau
        //$values = array_values($capitals); hien cot hai
        //$capitals = array_flip($capitals); dao thu tu hai cot
        //$capitals = array_reverse($capitals); dao nguoc
        //echo count($capitals); dem
        // foreach($capitals as $key => $value){
        //     echo "{$key} = {$value} <br>";
        // }
        // foreach($values as $value){
        //     echo "{$value} <br>";
        // }
    ?>
</body>
</html>

