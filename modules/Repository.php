<?php

    namespace Mods;

    use \FormationsQuery;

    class Repository {

        static function getAll() {
            die('la');
            /**
             * @TODO
             *
             * Mettre en place la requête Propel pour récupérer la liste de toutes les formations
             * à retourner dans la variable $formations (sous forme de tableau via la requête Propel).
             *
             */

            return $formations;
        }

        static function get($id) {
            /**
             * @TODO
             *
             * Mettre en place la requête Propel pour récupérer la formation correspondant à l'ID passé en paramètre
             * à retourner dans la variable $formation (sous forme de tableau via la requête Propel).
             *
             */

            return $formation;
        }

    }

?>
