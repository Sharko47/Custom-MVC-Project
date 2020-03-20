<?php

    $num = $_GET['number'];
        echo "&nbsp;<br>";
        echo "Pattern Printing: ";
        echo "&nbsp;<br>&nbsp;<br>";
        if($num<0){
            echo "Negative number is not allowed";
        }
        else if($num >10){
            echo "Enter number in the range of 1-10";
        }
        else{
            printPattern($num);
            printPatternGoogleAnswer($num);
        }
        
       
        function printPattern($num)
        {
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
        function printPatternGoogleAnswer($num)
        {
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
                    if ($counter<=$num-1) {
                        $temp = $i + $k;
                        echo "&nbsp;$temp&nbsp;";
                        $counter++;
                    } else {
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