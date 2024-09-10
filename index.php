<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fnum = $_POST ['fnum'];
        $snum = $_POST ['snum'];
        $operation = $_POST ['operator'];
        $result = null;

        if(is_numeric($fnum) && is_numeric($snum) && isset($operation)){
            $fnum = (float) $fnum;
            $snum = (float) $snum;

            switch($operation){
                case 'add':
                    $result = $fnum + $snum;
                    break;
                case 'minus':
                    $result = $fnum - $snum;
                    break;
                case 'multiply':
                    $result = $fnum * $snum;
                    break;
                case 'division':
                    if($snum == 0){
                        echo '<label for="snum" class="block text-red-700 text-sm font-bold mb-2">Error infinity</label>';
                    }else{
                        $result = $fnum / $snum;
                    }
                    break;
            }
        }else{
            echo '<label for="snum" class="block text-red-700 text-sm font-bold mb-2">Please enter a valid number</label>';
        }



    }else{
        
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
</head>



<body>
    <div class="flex w-full h-auto p-5 items-center bg-gray-500 flex-col">
        <h1 class="text-3xl text-center font-bold text-white"> Basic Calculator</h1>
        <div class="flex bg-white w-1/2 rounded">
            <form action="" method="POST" class="w-full max-w-md m-5">
                <div class="mb-4">
                    <label for="fnum" class="block text-gray-700 text-sm font-bold mb-2">First Number</label>
                    <input type="text" required name="fnum" class="bg-white border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="snum" class="block text-gray-700 text-sm font-bold mb-2">Second Number</label>
                    <input type="text" required name="snum" class="bg-white border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="operation" class="block text-gray-700 text-sm font-bold mb-2">Select Operator</label>
                    <div class="flex mb-4 flex-col">
                        <div>
                            <input type="radio" required value="add" id="sum" name="operator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="sum" class="ml-2 text-gray-700">Addition</label>
                        </div>
                        <div>
                            <input type="radio" value="minus" id="minus" name="operator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="minus" class="ml-2 text-gray-700">Subtraction</label>
                        </div>
                        <div>
                            <input type="radio" value="multiply" id="times" name="operator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="times" class="ml-2 text-gray-700">Multiplication</label>
                        </div>
                        <div>
                            <input type="radio" value="division" id="div" name="operator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="div" class="ml-2 text-gray-700">Division</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4 flex gap-2">
                    <label for="snum" class="block text-gray-700 text-sm font-bold mb-2">Total: </label>
                    <span class="block text-gray-700 text-sm font-bold mb-2">
                        <?php 
                            if(isset($result)){
                                echo "$result";
                            } 
                        ?>

                    </span>
                </div>
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 rounded sm:py-2 sm:px-4">
                    Enter
                </button>
            </form>
        </div>
    </div>

</body>
</html>

