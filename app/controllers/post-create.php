<?php

require_once CORE . '/classes/Validator.php';

/** @var  Db $db */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        var_dump(mb_strlen('Привет', 'UTF-8'));
//        var_dump(strlen('Hello'));
        $fillable = ['title','excerpt', 'content'];
        $data = loadData($fillable);
        //dd($data);

        // validation
    $rules = [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 190
        ],
        'excerpt' => [
            'required' => true,
            'min' => 10,
            'max' => 190
        ],
        'content' => [
            'required' => true,
            'min' => 10,

        ],

    ];
        $validator = new Validator();
        $validation = $validator->validate($data, $rules);

        if ($validation->hasErrors()) {
           print_arr($validation->getErrors());
        } else {
            echo 'Success !';
        }

//        var_dump($validation->hasErrors());
      die;

//
//        if (empty($data['title']))
//        {
//            $errors['title'] = 'Title is required';
//        }
//        if (empty($data['content']))
//        {
//            $errors['content'] = 'Content is required';
//        }
//        if (empty($data['excerpt']))
//        {
//            $errors['excerpt'] = 'Excerpt is required';
//        }


        if  (empty($errors)) {
            if ($db->query("INSERT INTO posts (title, excerpt, content) VALUES (:title, :excerpt, :content)", $data))
            {
                echo 'OK !';
            }
            else
            {
                echo 'DateBase Error!';

            }



        }
}

$title = "My Blog:: Add New Post";

require_once VIEWS . '/post-create.tpl.php';

