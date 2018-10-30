<?php
namespace app\models;


class DataJSON {



    public function __construct() {

  
    }
   


    //---------------------------------------------------------------------------------------------------------------------------------------------------
    /**
     * GET DATA FROM JSON FILE 
     * 
     * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id volutpat 
     * orci. Etiam pharetra eget turpis non ultrices. Pellentesque vitae risus 
     * sagittis, vehicula massa eget, tincidunt ligula.
     *
     * @access private
     * @author Firstname Lastname
     * @global object $post
     * @param int $id Author ID
     * @param string $type Type of photo
     * @param int $width Photo width in px
     * @param int $height Photo height in px
     * @return object Photo
     */
    public function getDataFromJson(){


        $jsondata = file_get_contents('./public/data/sf.json');

        $data = json_decode($jsondata);

        return $data;
      
    }

   



} // chiude classe