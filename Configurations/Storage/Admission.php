<?php
final class Admission extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->table('admission');
    }

    public function addAdmissionForm($data, $isDebug = false)
    {
        return $this->insert($data, $isDebug);
    }

    public function getAll()
    {
        return $this->select();
    }

    public function getAdmissionByID($admission)
    {
        $args = array(
            'where' => array(
                'AdmissionId' => $admission
            )
        );
        return $this->select($args);
    }
}
