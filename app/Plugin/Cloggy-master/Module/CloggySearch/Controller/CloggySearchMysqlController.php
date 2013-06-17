<?php

App::uses('CloggyAppController', 'Cloggy.Controller');

class CloggySearchMysqlController extends CloggyAppController {
    
    public $uses = array('CloggySearchFullText','CloggySearchLastUpdate');    
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->CloggySearchSchema = $this->Components->load('CloggySearchSchema');
        
        /*
         * disable security check for upload image
         */
        if ($this->request->params['action'] == 'delete_all_table') {
            $this->Components->disable('Security');
        }
    }    
    
    public function index() {  
        
        /*
         * setup pagination
         */
        $this->paginate = array(
            'limit' => 5,
            'order' => array('CloggySearchFullText.id' => 'desc')
        );
        
        $indexedTables = $this->paginate('CloggySearchFullText');
        $totalIndexed = $this->CloggySearchFullText->getTotal();
        $latestUpdate = $this->CloggySearchLastUpdate->getLatestUpdate('MysqlFullText','object_name');
                
        $this->set(compact('indexedTables','latestUpdate','totalIndexed'));
        $this->set('title_for_layout',__d('cloggy','Cloggy Search Management - MysqlFullText Search Engine'));
        
    }
    
    public function update() {
        
        //setup engine
        $this->CloggySearchSchema->engine('Mysql');
        
        //get schema
        $schema = $this->CloggySearchSchema->getSchema();                
        
        if ($schema) {
          
            //indexing data
            $this->CloggySearchFullText->updateIndex($schema);
            
        } else {
            $this->render('update_failed');
        }       
        
    }
    
    public function test() {
        
        if ($this->request->is('post')) {
            
            //use Sanitize utility
            App::uses('Sanitize', 'Utility');
            
            //use TextHelper & NumberHelper
            $this->helpers[] = 'Text';
            $this->helpers[] = 'Number';
            
            /*
             * sanitize query input
             */
            $query = Sanitize::clean($this->request->data['CloggySearch']['query'],array(
                'remove_html' => true,
                'encode' => true,
                'escape' => true
            ));     
            
            $results = $this->CloggySearchFullText->search($query);
            
            $this->set(compact('results','query'));
            $this->set('title_for_layout',__d('cloggy','Test MysqlFullText - Query: ').$query);
            
        } else {
            $this->set('title_for_layout',__d('cloggy','Test MysqlFullText'));
        }                
        
    }
    
    public function help() {        
        $this->set('title_for_layout',__d('cloggy','Cloggy Search - MysqlFullText Documentation'));        
    }
    
}