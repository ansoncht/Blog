<?php

namespace App\Models;

use CodeIgniter\Model;

    class BlogModel extends Model {
        protected $table = 'blog_post';
        protected $allowedFields = ['title', 'description', 'image', 'slug', 'tag'];
        public function __construct() {
            parent::__construct();
        }

        public function getPosts($slug = null) {
            if (!$slug) {
                return $this->orderBy('id', 'DESC')->findAll(5);
            } else {
                return $this->asArray()
                            ->where(['slug' => $slug])
                            ->first();
            }
        }

    }
