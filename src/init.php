<?php

//affichage des erreurs

ini_set('display_errors',1);
ini_set('log_errors',1);
error_reporting(E_ALL);

//demarer une session
session_start();

//connexion bdd

$conn_bdd= mysqli_connect('localhost',
                        'root',
                        '',
                        'bdd_blog_restaurant');