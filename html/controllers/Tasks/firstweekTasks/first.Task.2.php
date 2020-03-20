<?php
        $arr1 = extractArrayElements($_GET['arrayOne']);
        $arr2 = extractArrayElements($_GET['arrayTwo']);

        
        echo "&nbsp;<br>";
        echo "Given two Arrays are : a) ";


        for ($i=0; $i < countArrayElements($arr1); $i++) {
            echo $arr1[$i]." ";
        }

        echo "&nbsp;&nbsp;b) ";


        for ($i=0; $i < countArrayElements($arr2); $i++) {
            echo $arr2[$i]." ";
        }
        echo "&nbsp;<br>&nbsp;<br>";
        echo "Intersection of two Arrays: ";

        for ($i=0; $i < countArrayElements($arr1); $i++) {
            for ($j=0; $j < countArrayElements($arr2); $j++) {
                if ($arr1[$i]==$arr2[$j]) {
                    echo $arr1[$i]." ";
                }
            }
        }

        echo "&nbsp;<br>";
        echo "Intersection of two Arrays Using Inbuilt Funtions: ";

        $intersectArray = array_unique(array_intersect($arr1, $arr2));

        for ($i=0; $i <= countArrayElements($intersectArray)+1; $i++) {
            echo $intersectArray[$i]." ";
        }

        echo "&nbsp;<br>&nbsp;<br>";
        echo "Union of two Arrays : ";
        $sorterArray1 = $arr1;
        $sorterArray2 = $arr2;
        sort($sorterArray1);
        sort($sorterArray2);

        printUnion($sorterArray1, $sorterArray2, countArrayElements($arr1), countArrayElements($arr2));

        function printUnion($arr1, $arr2, $m, $n)
        {
            $i = 0;
            $j = 0;
            while ($i < $m && $j < $n) {
                if ($arr1[$i] < $arr2[$j]) {
                    echo($arr1[$i++] . " ");
                } elseif ($arr2[$j] < $arr1[$i]) {
                    echo($arr2[$j++] . " ");
                } else {
                    echo($arr2[$j++] . " ");
                    $i++;
                }
            }
            
            //Print remaining elements
            //of the larger array
            while ($i < $m) {
                echo($arr1[$i++] . " ");
            }
            
            while ($j < $n) {
                echo($arr2[$j++] . " ");
            }
        }


        echo "&nbsp;<br>";
        echo "Union of two Arrays using inbuilt funtions : ";
        
        $unionArray = array_unique(array_merge($arr1, $arr2));
        sort($unionArray);
        foreach ($unionArray as  $value) {
            echo $value." ";
        }
    
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

        $concatenatedArray = array_merge($arr1, $arr2);
        for ($i=0; $i < countArrayElements($concatenatedArray); $i++) {
            echo $concatenatedArray[$i]." ";
        }
    ?>