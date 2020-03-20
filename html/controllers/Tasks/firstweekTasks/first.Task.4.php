<?php
       $name = $_GET['string'];
       echo "<br>&nbsp";
       echo "<p style='text-align:center'>Given String : $name</p>";
        $len = countCharacter($name);//Calling a function which resides in ReuasableFunctions.php
        echo "&nbsp;<br>";
        echo "A) Reverse of [$name] is : ";
        reverseString($name, $len);
        
        
        
        function reverseString($string, $length)
        {
            for ($i=$length; $i>=0; $i--) {
                echo "$string[$i]";
            }
        }

        echo "<br>&nbsp;<br>";
        echo "B) Find Hestabit from the given string :";
        findHestabitInSentence($name, $len);
        
        

        function findHestabitInSentence($string, $length)
        {
            $str = 'Hestabit';
            $count = 0;
            $tempCount = 0;
            $foundIndex = 0;
            
            for ($i=0; $i < $length; $i++) {
                if ($str[$count] == $string[$i]) {
                    $count++;
                    $tempCount = $count;
                    if ($foundIndex<1) {
                        $foundIndex = $i;
                    }
                    continue;
                } else {
                    $count = 0;
                }
            }
            if ($tempCount == countCharacter($str)) {
                echo " Found String at index : $foundIndex";
            } else {
                echo " Not found";
            }
        }

        echo "<br>&nbsp;<br>";
        echo "C) Count the frequency of duplicate alphabets : ";

        findFrequencyOfDuplicateAlphabet($name, $len);


        function findFrequencyOfDuplicateAlphabet($string, $length)
        {
            $count = 0;
            for ($i=0; $i < $length; $i++) {
                for ($j=0; $j < $length; $j++) {
                    if ($string[$i]==$string[$j]) {
                        $count++;
                    }
                }
                if (!($string[$i]==' ')) {
                    echo " $string[$i] => $count ";
                }
                $count = 0;
            }
        }
        echo "<br>&nbsp;<br>";
        echo "D) Now print the given string in this alphabetical order : ";
        printReverseAlphabeticalOrder($name, $len);

        function printReverseAlphabeticalOrder($string, $length)
        {
            
            for ($i=0; $i < $length; $i++) {
                $ch = returnReverseCharacter(ord($string[$i]));
                echo "$ch";
            }
        }
        function returnReverseCharacter($charNumber)
        {
            if ($charNumber>=65 && $charNumber<=90) {
                $charNumber = 90-($charNumber%65);
            } elseif ($charNumber >= 97 && $charNumber<=122) {
                $charNumber = 122-($charNumber%97);
            }
            return chr($charNumber);
        }
        
    ?>