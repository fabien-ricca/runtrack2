<?php
    function leetSpeak($str){
        $change =[  'A' => '4',
                    'a' => '4',
                    'B' => '8',
                    'b' => '8',
                    'G' => '6',
                    'g' => '6',
                    'L' => '1',
                    'l' => '1',
                    'S' => '5',
                    's' => '5',
                    'T' => '7',
                    't' => '7'
                ];

        
        for ($i=0; isset($str[$i]); $i++){
            foreach ($change as $letter => $number){
                if ($str[$i] === $letter){
                    $str[$i] = $number;
                }
                
            }
        }
        return $str;
    }

    $str = "toto";
    echo leetSpeak($str);
?>