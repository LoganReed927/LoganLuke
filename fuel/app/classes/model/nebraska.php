<?php

namespace Model;

class Nebraska
{
    private $field_values = array();
    private $isStored = false;
    const FILENAME = "nebraska.model";

    public function __construct($id = null){
        if ($id !== null) {
            if (is_array($id)) {
                $this->field_values = $id;
                $this->isStored = true;
            } elseif (file_exists(self::FILENAME)) {
                $data = unserialize(file_get_contents(self::FILENAME));
                if (isset($data[$id])) {
                    $this->field_values = $data[$id];
                    $this->isStored = true;
                }
            }
        }
    }

    public function save()
    {
        $data = array();
        if (file_exists(self::FILENAME)) {
            $data = unserialize(file_get_contents(self::FILENAME));
        }
        $data[$this->field_values['id']] = $this->field_values;
        file_put_contents(self::FILENAME, serialize($data));
        $this->isStored = true;
    }
}
