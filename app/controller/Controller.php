<?php

// namespace app\controller;

//use app\models\Users;
use app\models\DataSQL;
use app\models\DataJSON;


class Controller {

    private $layout = 'layout/index.tpl.php';

    private $dataClass;

    private $template;

  //  private $dataType;

    public function __construct() {
/*
        $os = array("sql", "json");

        if (in_array($datatype, $os)) {

            $this->dataType = $datatype; 
        }
      */
       
    }
   
    


/***********************************************************************************************************************|
* GETPOSTS          metodo = GET    route = posts/page/id                                                               |
* Otteniamo tutti i post di una pagina                                                                                  |     
* Se ci sono i post allora viene caricato anche il template della paginazione                                           |   
* Spiegazione Paginazione                                                                                               |
* 'page' è la il numero della pagina in cui ci troviamo                                                                 |
* 'postForPage' è il numero di post che ci sono per ogni pagina                                                         |
* 'postStart' è uguale al numero precedente del primo post della pagina in cui ci troviamo                              |
* Se ci troviamo nella pagina 3 {'currentPage'=3} e abbiamo deciso che ogni pagina deve avere 2 post{'postForPage'=2}   |
* allora il primo post della terza pagina deve essere il post numero 4{'postStart'=4}                                   |
* 1  2  3 pagine {'currentPage'}                                                                                        |
* 12 34 56 il numero dei post che visualizza se abbiamo impostato {'postForPage'=2}                                     |
* 0  2  4 sono i valori che ci servono per cominciare a contare i post da visualizzare {'postStart'}                    |
************************************************************************************************************************/

public function pageSQL($dataType, $currentPage=1, $conn){ 

    $this->dataClass = new DataSQL($conn);

    $totalPosts = $this->dataClass->totalUsers();

    if ( empty($totalPosts ) ) { 
  
        $this->content = View( compact('link', 'page') ); 

    } else {

        $postForPage = 5; // decidiamo quanti post caricare per pagina
        for ($i=0, $postStart=-$postForPage; $i<$currentPage; $postStart+=$postForPage, $i++);
        $users = $this->dataClass->getpageUsers($postStart, $postForPage); 
        $pageLast = ceil($totalPosts / $postForPage);
        $activeLink = 4;
        $files=['navbar', 'table-sql', 'pagination'];
     
        $this->template = _view("sql", $files, compact('dataType', 'totalPosts', 'postForPage', 'pageLast','currentPage', 'activeLink', 'users') );
    }
}







public function pageJSON($dataType, $currentPage=1){ 

    $this->dataClass = new DataJSON;
    $users = $this->dataClass->getDataFromJson();
    $totalPosts = count($users);

    if ( !empty($totalPosts ) ) { 

        $postForPage = 5; // decidiamo quanti post caricare per pagina

        for ($i=0, $postStart=-$postForPage; $i<$currentPage; $postStart+=$postForPage, $i++);
  
        $pageLast = ceil($totalPosts / $postForPage);

        $activeLink = 4;

        $files=['navbar', 'table-json', 'pagination'];
      
        $this->template = _view("json", $files, compact('dataType', 'postStart', 'totalPosts', 'postForPage', 'pageLast','currentPage', 'activeLink', 'users') );
        }
    }




   /** 
    * DISPLAY
    * Il metodo display è l'ultimo metodo che verrà richiamato
    * esso caricherà il LAYOUT generale che sarà quello di default per ogni pagina del sito.
    * Nella variabile '$layout' abbiamo l'indirizzo del file che contiene il LAYOUT per tutte le pagine
    * All' interno del LAYOUT andremo a inserire i TEMPLATE che non sono altro che variabili che
    * al loro interno contengono codice html e altre variabili php
    * @access public
    * @return null
    */
    public function display(){
      
        require $this->layout;  
    }



} // Chiude classe

