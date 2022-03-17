<?php

    class GeneratePass{

        protected $password = '';

        public function simpleShuffle($args){
            $simple = 'abcdefghijklmopkrstuvwxyz12345678910';
            $lowerUpper = 'ABCDEFGHIJKLMOPQRSTUVWXYZ' . $simple;
            $lowerEspecial = '!@$%#_.&*' . $simple;
            $lowerUpperEspecial = '!@$%#_.&*' . $lowerUpper;

            $words = '';
            $pass = '';
            $max = $args['lenght_password'];

            if(isset($args['upper_include']) && isset($args['especial_caracteres'])){
                $words = $lowerUpperEspecial;
            }elseif(isset($args['upper_include'])){
                $words = $lowerUpper;
            }elseif(isset($args['especial_caracteres'])){
                $words = $lowerEspecial;
            }else{
                $words = $simple;
            }

            for ($c=0;$c<$max;$c++){
                $rand = rand(0,(strlen($words) - 1));
                $pass .= $words[$rand];
            }

            return $pass;
            
            
        }
        public function handlePass($args){
            $password = $this->simpleShuffle($args);
            return $password;           
        }
    }

    $generatePass = new GeneratePass();




?>