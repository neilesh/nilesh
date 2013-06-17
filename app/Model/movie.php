<?php
class Movie extends AppModel {

   var $name = 'movie';  
    var $validate =array(
    'title' =>array(
               'alphaNumeric' =>array(
               'rule' => array('minLength',2),
               'required' => true,
               'message' => 'Enter should be minimum 2 only')              
               ),
    'genre' =>array(
               'alphaNumeric' =>array(
               'rule' => array('minLength',4),
               'required' => true,
               'message' => 'Enter should be minimum 4 only')              
               ),
   
           
    'rating' =>array(
               'alphaNumeric' =>array(
               'rule' => array('minLength',2),
               'required' => true,
               'message' => 'Enter should be minimum 4 only')              
               )
   
            );
  
}
?>