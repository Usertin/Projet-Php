<?php
    class controle
    {
        public function verifNul($val)
        {
            return !empty($val);
        }

        public function verifAlph($val)
        {
            $val = str_replace(" ","",$val);
            $val = str_replace(",","",$val);
            $val = str_replace("'","",$val);
            
            return ctype_alpha($val);
        }

        public function verifNum($val)
        {
            return ctype_digit(strval($val));
            
        }

        public function verifJour($jour)
        {
            if (($jour >0) && ($jour < 32))
                return true;
            else
                return false;
        }

        public function verifMois($mois)
        {
            if (($mois >0) && ($mois < 13))
                return true;
            else
                return false;
        }

        public function verifAnne($annee)
        {
            if ((strlen($annee)) == 4 && (is_numeric($annee)))
                return true;
            else
                return false;
        }

        public function nbTireés($dat)
        {
            $nb=0;
            for($i=0;$i<strlen($dat);$i++)
            {
                if ($dat[$i] == "-")
                    $nb++;
            }

            return $nb;
        }
    }
?>