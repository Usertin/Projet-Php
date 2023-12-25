<?php
    class SessionControl
    {
        public function __construct()
        {
            
        }
        public function isConnected()
        {
            session_start();
            if(isset($_SESSION["username"]) && isset($_SESSION["pwd"]))
                return true;
            else
                return false;
        }

        public function Deconnecter()
        {
            session_start();
            session_unset();
            session_destroy();
        }
    }
?>