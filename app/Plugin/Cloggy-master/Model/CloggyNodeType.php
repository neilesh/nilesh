<?php

class CloggyNodeType extends CloggyAppModel {

    public $name = 'CloggyNodeType';
    public $useTable = 'node_types';
    public $belongsTo = array(
        'CloggyUser' => array(
            'className' => 'Cloggy.CloggyUser',
            'foreignKey' => 'user_id'
        )
    );
    public $hasMany = array(
        'CloggyNode' => array(
            'className' => 'Cloggy.CloggyNode',
            'foreignKey' => 'node_type_id',
            'dependent' => false
        )
    );

    /**
     * Check if type exists or not
     * @param string $name
     * @return boolean
     */
    public function isTypeExists($name) {

        $check = $this->find('count', array(
            'contain' => false,
            'conditions' => array('CloggyNodeType.node_type_name' => $name)
                ));

        return $check < 1 ? false : true;
    }

    /**
     * Generate node type
     * if exists then return node type id
     * if not exists then create and save it first
     * @param string $name
     * @param int $userId
     * @return int
     */
    public function generateType($name, $userId) {

        $check = $this->isTypeExists($name);
        if (!$check) {

            $this->create();
            $this->save(array(
                'CloggyNodeType' => array(
                    'user_id' => $userId,
                    'node_type_name' => $name,
                    'node_type_desc' => 'no desc',
                    'node_type_created' => date('c')
                )
            ));

            return $this->id;
        } else {
            $id = $this->getTypeIdByName($name);
            return $id;
        }
    }

    /**
     * Get node type id string
     * @param string $name
     * @return boolean
     */
    public function getTypeIdByName($name) {

        $data = $this->find('first', array(
            'contain' => false,
            'conditions' => array('CloggyNodeType.node_type_name' => $name),
            'fields' => array('CloggyNodeType.id')
                ));

        if (!empty($data)) {
            return $data['CloggyNodeType']['id'];
        } else {
            return false;
        }
    }

}