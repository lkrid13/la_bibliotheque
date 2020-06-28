<?php

namespace App\Controllers;

 /* *
 * cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le modèle et la vue
 *  &(gestion des droits d'accès).
 */

abstract class Controller {

    abstract public function execute(string $action);

    protected function render($vue, $param = []) {
        global $connect;
        global $login;
        //global $_POST;
//        var_dump($param);
//        die();
        extract($param);

        include 'App/vue/template.php';
    }

}
