<?php
    class postsController {
        public function index() {
        //we store all the posts in a variable
        $posts = post::all();
        require_once('views/posts/index.php');
        }

        public function show(){
            // we expect a url from ?controller=posts&action=shjow&id=x
            // iwhout an id we just redirect to the error page as we need the post id to find it in the database
            if (!isset($_GET['id']))
                return call('pages', 'error');

            // we use the given id to get ther right post
            $post = post::find($_GET['id']);
            require_once('views/posts/show.php');
        }
    }
    ?>