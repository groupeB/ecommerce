<?php

class Utility {
 
    public static function get_current_id() {
        $_SESSION['id'] = 12; //C'est un bouchon il faut utiliser $_SESSION['id']; à faire par l'équipe authentification
        return $_SESSION['id'];
    }

}
