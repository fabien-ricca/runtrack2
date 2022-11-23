<?php 
    function len($str){         // Fonction pour compter le nombre de lettres
        for ($i=0; isset($str[$i]); $i++){
        }
        return $i;          
    }


    function split($str){    // Fonction pour split une str mot par mot
        $j = 0;                                 
        $temp="";                               // On créer une variable pour receboir les lettres
        for ($i=0; isset($str[$i]); $i++){      // On initie la boucle en itérant lettre par lettre
            if ($str[$i] != " "){               // si le caractère courant n'est pas un espace on ajoute la lettre à $temp
                $temp = $temp . $str[$i];             // On ajoute la lettre à $temp
            }
            else{                               // Sinon on ajoute $temp à l'index e ncours de $array
                $array[$j] = $temp;
                $j++;                           // On incrémente J pour passer à l'index suivant de $array
                $temp="";                       // On réinitialise $temp

            }
        }
        return $array;                          // On retourne le tableau
    }


    $str ="Je m'appelleme Padawan et j'aime La Vie bien";
    /*var_dump(split($str));*/
    

    function gras($a){     /////////////////// FONCTION POUR METTRE EN GRAS SI 1ERE LETTRE EN MAJUSCULE ///////////////////
        $strArray = (split($a));                                        // On split la phrase à modifier
        $alphabet =['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',             // On créer un tableau d'alphabet majuscule
                    'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                    'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
                     'Y', 'Z'];
        $newStr ="";                                                    // On créer la variable str qui sera retournée

        for ($i=0; isset($strArray[$i]); $i++){                         // On teste chaque mot
            for ($j=0; isset($alphabet[$j]); $j++){                     // On compare la première lettre à chaque lettre de l'alphabet Maj
                if ($strArray[$i][0] === $alphabet[$j]){                // Si elle y est
                    $strArray[$i] = '<b>' . $strArray[$i] . '</b>';         // Le mot est mit en gras
                }
                
            }
            $newStr .= $strArray[$i] . ' ';                             // On concatène la variable str avec le mot qui a été testé
            }
            return $newStr;                                                 // On retourne la variable str
        }

    /*echo gras($str);*/


    function plateforme($a){    
        $strArray = split($a);                                       
        $newStr ="";                                                   

        foreach($strArray as $str){
            $lenArray = len($str); 
            if ($str != ""){
                if(isset($str[$lenArray - 2]) === "m" && isset($str[$lenArray - 1]) === "e")
                    $str .= '_';
                    echo"test ";
            }
            $newStr .= $str . ' ';
        }

        
        return $newStr;   
    }
    echo plateforme($str);
?>