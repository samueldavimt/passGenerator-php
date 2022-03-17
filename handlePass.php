<?php

    class GeneratePass{

        protected $password = '';

        public function simpleSuffle($args){
            $letters = 'abcdefghijklmopkrstuvwxyz';
            $lowerUpper = 'ABCDEFGHIJKLMOPQRSTUVWXYZ' . $letters;
            $lowerEspecial = '!@$%&)(*#*(@&**@(<>:/' . $letters;
            $lowerUpperEspecial = '!@$%&)(*#*(@&**@(<>:/' . $lowerUpper;

            $words;
            $pass = '';
            $max = $args['lenght_password'];

            if(isset($args['upper_include']) && isset($args['especial_caracteres'])){
                $words = $lowerUpperEspecial;
            }elseif(isset($args['upper_include'])){
                $words = $lowerUpper;
            }elseif(isset($args['especial_caracteres'])){
                $words = $lowerEspecial;
            }else{
                $words = $letters;
            }

            for ($c=0;$c<$max;$c++){
                $rand = mt_rand(0,(strlen($words) - 1));
                $pass .= $words[$rand];
            }

            return $pass;
            
            
        }
        public function handlePass($args){
            $password = $this->simpleSuffle($args);
            return $password;           
        }
    }

    $generatePass = new GeneratePass();




?>