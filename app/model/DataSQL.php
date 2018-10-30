<?php
namespace app\models;

//use app\models\Database;
use PDO; // importare la classe PDO per utilizzarla 

class DataSQL {


    private $conn;


    public function __construct($conn) {

        $this->conn = $conn;
        // $db = new Database;
        // $this->conn = $db->getConnection();
        // var_dump($this->conn);
    }
   
    


/*******************************************************************************************************|
* TOTAL POSTS                                                                                           |
* questo metodo verrà richiamato solo per la pagina posts/blog per creare la paginazione                |
* Otteniamo il numero totale in assoluto di tutti i post presenti nella tabella 'posts'                 |
* Lo scopo è quello di calcolare il numero di pagine per i post                                         |
* es. se abbiamo 30 post e vogliamo che vengano visualizzati 3 post ogni pagina                         |
* allora faremo 30post / 3 che ci darà 10 pagine. in questo modo potremo fare la paginazione            |
********************************************************************************************************/
public function totalUsers(){
    
    $sql = 'SELECT COUNT(*) FROM users';
    if ($res = $this->conn->query($sql)) {
        $rows = $res->fetchColumn();
        return $rows;
    }
}


/*******************************************************************************************************|
* PAGE POSTS                                                                                            |
* Facciamo una JOIN tra posts e users per ottenere tutti i posts con i dati dell' autore del post       |
* dalla tabella posts prendiamo [post_ID, title, datecreated, message]                                  |
* dalla tabella users prendiamo [user_email, user_name]                                                 |
* la relazione tra le tabelle posts e users è il campo posts.user_id e users.ID                         |
* in questo modo per ogni post abbiamo accesso ai dati dell'utente che ha scritto quel determinato post |                                              
********************************************************************************************************/
    /**
    * ALL USERS
    * 
    * Metodo `query()`: (http://php.net/manual/en/pdo.query.php) 
    * Il metodo `query()` di PDO esegue un'istruzione SQL di tipo SELECT  
    * e ritorna un oggetto PDOStatement del set di risultati.
    * Eseguendo un fetchAll sull' oggetto PDOStatement viene restituita
    * una matrice contenente tutte le righe del set di risultati
    *
    * @access private
    * @author Daniele Manzi
    * @return array di oggetti.
    */

    public function getpageUsers($postStart=0, $postForPage=5) {

        $sql = "SELECT * FROM users LIMIT $postStart, $postForPage";

        if ($stmt = $this->conn->query($sql)) 
        {
        
            if ($stmt->execute()) 
            {
               
                $users = $stmt->fetchAll(PDO::FETCH_OBJ); 
             

                return $users; // ritorna un array di oggetti
            } else {
                die("ERRORE");
            }
        }

    }






} // chiude classe