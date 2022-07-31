<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{

    function post($slug) {
        $model = new BlogModel();
        $data['post'] = $model->getPosts($slug);
        echo view('templates/header');
        echo view('blog/post', $data);
        echo view('templates/footer');
    }

    /**
     * @throws \ReflectionException
     */
    function create() {
        helper('form');
        $model = new BlogModel();
        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[100]',
            'description' => 'required',
        ])) {
            echo view('templates/header');
            echo view('blog/create');
            echo view('templates/footer');
        } else {
            $file = $this->request->getFile('image');
            $newName = $file->getRandomName();
            $file->move( "C:\wamp64\www\blog\images", $newName);
            $model->save(
                [
                    'title' => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    'slug' => url_title($this->request->getVar('title')),
                    'image' => $newName,
                    'tag' => $this->request->getVar('tag'),
                ]
            );

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'New Post has created');

            return redirect()->to('/');
        }
    }

    public function posts()
    {
        $model = new BlogModel();
        $data = [
            'title' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        echo view('templates/header');
        return view('/blog/posts', $data);
        echo view('templates/footer');
    }
}
