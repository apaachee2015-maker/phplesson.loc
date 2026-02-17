<?php


class Validator {

    protected $errors = [];

    public function validate($data = [], $rules = [])
    {

        foreach ($data as $fieldname => $value) {

            if (in_array($fieldname, array_keys($rules)))
            {
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname],

                ]);
            }
        }
    }

    protected function check($field)
    {
        print_arr($field);
    }


    protected function required($value, $rule_value)
    {
        return empty(trim($value));
    }
}

