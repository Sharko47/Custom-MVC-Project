<?php
$currentPage = 'firstweek';
include ('nav_header.php');
?>
<div class="task_1_container">
    <h2>Task No 1</h2>
        <form method="GET">
        <input type="text" name="textName" class="col" id="textName" placeholder="Enter array with ','" >
        <input type="button" name="submit" class="col" id="submit" value="Submit Array">
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
        $arr1 = [1,2,3,6,3];
        $arr2 = [3,4,5,6];
        echo "Intersection of two Arrays: ";
        for ($i=0; $i < countArrayElements($arr1); $i++) { 
                for ($j=0; $j < countArrayElements($arr2); $j++) { 
                    if($arr1[$i]==$arr2[$j]){
                        echo "$arr1[$i]";
                    }
                }
        }
        echo "<br/>";
        echo "Union of two Arrays: ";
        
        for ($i=0; $i < countArrayElements($arr1); $i++) {
            $sameAppearanceCounter = 0; 
            for ($j=0; $j < countArrayElements($arr2); $j++) { 
                
                if($arr1[$i] == $arr2[$j] || $sameAppearanceCounter>0){
                    continue; 
                }else{
                    echo "$arr1[$i]";
                    $sameAppearanceCounter++;
                }   
                
            }
    }
        

    ?>
</div>
<div class="task_1_container">
<h2>Task No 3</h2>
<div class="task_1_output_container">
    <?php
    $num = 6;
        echo "&nbsp;<br>";
        echo "Pattern Printing: ";
        echo "&nbsp;<br>&nbsp;<br>";
        for ($i=0; $i < $num; $i++) { 
                for ($j=$num-$i; $j > 0; $j--) { 
                   print "&nbsp;";
                }
                for ($k=0; $k <= $i; $k++) { 
                    echo "&nbsp;$k&nbsp;";
                }
                echo "&nbsp;<br>";
        }
    ?>
</div>
</div>
<div class="task_1_container">
<h2>Task No 4</h2>
<div class="task_1_output_container">
    <?php
        $name = "I am in Hestabit now";
        $len = countCharacter($name);
        echo "&nbsp;<br>";
        echo "A) Reverse of [$name] is : ";
        for ($i=$len; $i>=0; $i--) { 
            echo "$name[$i]";
        }
        echo "<br>&nbsp;<br>";
        echo "B) Find Hestabit from the given string :";
        
        


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
<?php include ('footer.php')?>