<?php

namespace Users\Model;

class User
{

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $role;
    public $status;
    public $created_date;
    public $updated_date;

    public function toArray()
    {
        return (array) $this;
    }

    public function exchangeArray($row)
    {
        $this->id = isset($row['id']) ? $row['id'] : NULL;
        $this->first_name = isset($row['first_name']) ? $row['first_name'] : NULL;
        $this->last_name = isset($row['last_name']) ? $row['last_name'] : NULL;
        $this->email = isset($row['email']) ? $row['email'] : NULL;
        $this->role = isset($row['role']) ? $row['role'] : NULL;
        $this->status = isset($row['status']) ? $row['status'] : NULL;
        $this->created_date = isset($row['created_date']) ? $row['created_date'] : NULL;
        $this->updated_date = isset($row['updated_date']) ? $row['updated_date'] : NULL;
    }

    public function __construct($row = null)
    {
        if ($row != null) {
            $this->id = isset($row->id) ? $row->id : NULL;
            $this->first_name = isset($row->first_name) ? $row->first_name : NULL;
            $this->last_name = isset($row->last_name) ? $row->last_name : NULL;
            $this->email = isset($row->email) ? $row->email : NULL;
            $this->role = isset($row->username) ? $row->username : NULL;
            $this->status = isset($row->status) ? $row->status : NULL;
            $this->created_date = isset($row->created_date) ? $row->created_date : NULL;
            $this->updated_date = isset($row->updated_date) ? $row->updated_date : NULL;
        }
    }

}

