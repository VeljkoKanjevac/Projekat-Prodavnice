<?php

    class Input
    {
        private $input;

        public function __construct($assocArray)
        {
            $this -> input = $assocArray;
        }

        public function checkInput()
        {
            $inputsNumber = count($this -> input);
            $correctInputs = 0;
            foreach($this->input as $inputName => $inputValue)
            {
                if(isset($inputValue) && !empty($inputValue))
                {
                    $correctInputs++;
                }
            }
            if($correctInputs === $inputsNumber)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

