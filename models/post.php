<?php
    class post {
        public $id;
        public $author;
        public $content;

        public function __construct($id, $author, $content) {
            $this->id = $id;
            $this->author = $author;
            $this->content = $content;
        }

        public static function all() {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT * FROM posts');

            // we create a list of posts objects from the database results
            foreach($req->fetchAll() as $post) {
                $list[] = new post($post['id'], $post['author'], $post['content']);
            }
            return $list;
        }

        public static function find($id) {
            $db = Db::getInstance();
            // we make sure the $id is an integer
            $id = intval($id);
            $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
            // the query was prepared, now we replace the :id with out actual $id value
            $req->execute(array('id' => $id));
            $post = $req->fetch();

            return new post($post['id'], $post['author'], $post['content']);
        }
    }