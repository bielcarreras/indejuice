<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($init, $words, $appends = false){
        $sentence = $init . ": ";
        $i = 0;
        $len = count($words);

        foreach ($words as $key => $word) {


            if ($i == 0 ){
                $sentence .= "";
            } 
            
            else if ($i == $len - 1) {
                $sentence .= " and ";
            }
            
            else {

                $sentence .= ", ";


            }

            $newword =$word;
            $sentence .=$newword;

             if (isset($appends)) {

                if (!is_array($appends)) {
                    $sentence .= " " . $appends;
                  } else {
                    $sentence .= " " . $appends[$key];

                  }

            }
            $i++;
        }
        $sentence .= ".";
        $clean = str_replace(" .",".",$sentence);

        return str_replace(" ,",",",$clean);



    }