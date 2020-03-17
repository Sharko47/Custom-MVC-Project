<?php
$currentPage = 'firstweek';
require ('partials/nav_header.php');
?>
<div class="task_1_container">
    <h2>Task No 1</h2>
        <form action="firstweek.php" method="get">
        <input type="text" name="name" class="col" id="name" placeholder="Enter array with ','" >
        <input type="button" name="submit" class="col" id="submit" value="Submit">
        </form>
    
<h4>Output: </h4>
    <div class="task_1_output_container">
        <?php
            $array = [36,54,13,56,23,45];
            $len = countArrayElements($array);
            for ($i=0; $i < $len; $i++) { 
               if($array[$i]%2==0){
                   echo "<p id='even'>$array[$i]: Hello World</p>";
               }
               else{
                echo "<p id='odd'>$array[$i]: Hello World</p>";
               }
            }
            function countArrayElements($arr){
                $count = 0;
                foreach($arr as $a){
                    if(isset($a)){
                        $count++;
                    }
                    else{
                        break;
                    }
                }
                return $count;
                               
            }
        ?>
    </div>
</div>
<div class="task_1_container">
<h2>Task No 2</h2>
    <?php
        $arr1 = [2,5,1,3,6,7];
        $arr2 = [3,2,1,4];
        echo "&nbsp;<br>";
        echo "Given two Arrays are : a) ";
        for ($i=0; $i < countArrayElements($arr1); $i++) { 
                echo "$arr1[$i]";
        }
        echo "&nbsp;&nbsp;b) ";
        for ($i=0; $i < countArrayElements($arr2); $i++) { 
            echo "$arr2[$i]";
        }
        echo "&nbsp;<br>&nbsp;<br>";
        echo "Intersection of two Arrays: ";
        for ($i=0; $i < countArrayElements($arr1); $i++) { 
                for ($j=0; $j < countArrayElements($arr2); $j++) { 
                    if($arr1[$i]==$arr2[$j]){
                        echo "$arr1[$i]";
                    }
                }
        }
        echo "&nbsp;<br>";
        echo "Intersection of two Arrays Using Inbuilt Funtions: ";
        $intersectArray = array_unique(array_intersect($arr1,$arr2));
        for ($i=0; $i <= countArrayElements($intersectArray)+1; $i++) { 
                echo "$intersectArray[$i]";
        }

        echo "&nbsp;<br>&nbsp;<br>";
        echo "Union of two Arrays : ";
        $sorterArray1 = $arr1;
        $sorterArray2 = $arr2;
        sort($sorterArray1);
        sort($sorterArray2);

        printUnion($sorterArray1,$sorterArray2,countArrayElements($arr1),countArrayElements($arr2));

        function printUnion($arr1, $arr2, $m, $n){ 
            $i = 0; $j = 0; 
            while ($i < $m && $j < $n) 
            { 
                if ($arr1[$i] < $arr2[$j]) 
                    echo($arr1[$i++] . " "); 
                
                else if ($arr2[$j] < $arr1[$i]) 
                    echo($arr2[$j++] . " "); 
                
                else
                { 
                    echo($arr2[$j++] . " "); 
                    $i++; 
                } 
            } 
            
            //Print remaining elements 
            //of the larger array 
            while($i < $m) 
                echo($arr1[$i++] . " "); 
            
            while($j < $n) 
                echo($arr2[$j++] . " "); 
        } 


        echo "&nbsp;<br>";
        echo "Union of two Arrays using inbuilt funtions : ";
        
        $unionArray = array_unique(array_merge($arr1,$arr2));
        sort($unionArray);
        print_r($unionArray);
    
        echo "&nbsp;<br>&nbsp;<br>";
        echo "Concatenation of two Arrays: ";
        $concatenatedArray = array();
        $index = 0;
        for ($i=0; $i < countArrayElements($arr1); $i++) { 
            $concatenatedArray[$index++] = $arr1[$i];
        }
        for ($i=0; $i < countArrayElements($arr2); $i++) { 
            $concatenatedArray[$index++] = $arr2[$i];
        }
        for ($j=0; $j < countArrayElements($concatenatedArray); $j++) { 
            echo "$concatenatedArray[$j] ";
        }
        echo "&nbsp;<br>";
        echo "Concatenation of two Arrays using inbuilt functions : ";
        $concatenatedArray = array_merge($arr1,$arr2);
        for ($i=0; $i < countArrayElements($concatenatedArray); $i++) { 
                echo $concatenatedArray[$i]." ";
        }
    ?>
</div>
<div class="task_1_container">
<h2>Task No 3</h2>
<div class="task_1_output_container">
    <?php
    $num = $_GET['name'];
        echo "&nbsp;<br>";
        echo "Pattern Printing: ";
        echo "&nbsp;<br>&nbsp;<br>";
        printPattern($num);
        printPatternGoogleAnswer($num);
        function printPattern($num){
            for ($i=1; $i <= $num; $i++) { 
                for ($j=$num-$i; $j > 0; $j--) { 
                   print "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                for ($k=$i; $k <= $i*2-2+1; $k++) { 
                    echo "&nbsp;$k&nbsp;";
                }
                for ($m=$k-2; $m >= $i; $m--) { 
                    echo "&nbsp;$m&nbsp;";
                }   
                echo "&nbsp;<br>";
            }
        }
        function printPatternGoogleAnswer($num){
            echo "&nbsp;<br>";
            echo "Pattern Printing from Google : ";
            echo "&nbsp;<br>&nbsp;<br>";
            $counter = 0;
            $counter2 = 0; 
            $k = 0;
            for ($i=1; $i <= $num; $i++) { 
                    for ($j=1; $j <= $num-$i; $j++) { 
                    print "&nbsp;&nbsp;&nbsp;&nbsp;";
                    $counter++;
                    }
                    while ($k != 2*$i-1) {
                        if($counter<=$num-1){
                            $temp = $i + $k;
                            echo "&nbsp;$temp&nbsp;";
                            $counter++;
                        }
                        else{
                            ++$counter2;
                            $temp = $i+$k-2*$counter2;
                            echo "&nbsp;$temp&nbsp;";
                        }
                        ++$k;
                    }
                    $counter = $counter2 = $k = 0;   
                    echo "&nbsp;<br>";
            }
        }
        
    ?>  
</div>
</div>
<div class="task_1_container">
<h2>Task No 4</h2>
<div class="task_1_output_container">
    <?php
       $name = "I am in Hestabit now";
       echo "<br>&nbsp";
       echo "<p style='text-align:center'>Given String : $name</p>";
        $len = countCharacter($name);
        echo "&nbsp;<br>";
        echo "A) Reverse of [$name] is : ";
        reverseString($name,$len);
        
        
        
        function reverseString($string, $length){
            for ($i=$length; $i>=0; $i--) { 
                echo "$string[$i]";
            }
        }

        echo "<br>&nbsp;<br>";
        echo "B) Find Hestabit from the given string :";
        findHestabitInSentence($name,$len);
        
        

        function findHestabitInSentence($string,$length){
            $str = 'Hestabit';
            $count = 0;
            $tempCount = 0;
            $foundIndex = 0;
            
            for ($i=0; $i < $length; $i++) { 
                if($str[$count] == $string[$i]){
                    $count++;
                    $tempCount = $count;
                    if($foundIndex<1){
                        $foundIndex = $i;
                    }
                    continue;
                }else{
                    $count = 0;
                }
            }
            if($tempCount == countCharacter($str)){
                echo " Found String at index : $foundIndex";
            }else{
                echo " Not found";
            }
        }

        echo "<br>&nbsp;<br>";
        echo "C) Count the frequency of duplicate alphabets : ";

        findFrequencyOfDuplicateAlphabet($name,$len);


        function  findFrequencyOfDuplicateAlphabet($string,$length){
            
            $count = 0;
            for ($i=0; $i < $length; $i++) { 
                for ($j=0; $j < $length; $j++) {
                        if($string[$i]==$string[$j]){
                            $count++;
                        }
                }
                if(!($string[$i]==' ')){
                echo " $string[$i] => $count ";
                }
                $count = 0;
            }
            
        }
        echo "<br>&nbsp;<br>";
        echo "D) Now print the given string in this alphabetical order : ";
        printReverseAlphabeticalOrder($name,$len);

        function printReverseAlphabeticalOrder($string,$length){
            //I am in Hestabit now
            for ($i=0; $i < $length; $i++) {
               $ch = returnReverseCharacter(ord($string[$i]));
                echo "$ch";
            }
        }
        function returnReverseCharacter($charNumber){
            if($charNumber>=65 && $charNumber<=90){
                $charNumber = 90-($charNumber%65);
            }
            else if($charNumber >= 97 && $charNumber<=122){
                $charNumber = 122-($charNumber%97);
            }
            return chr($charNumber);
        }
        function countCharacter($string){
            $count = 0;
            while ($string!= '') {
                $string = substr($string,1);
                $count++;
            }
            return $count;
        }
    ?>
</div>
</div>
<?php require ('partials/footer.php')?>