<?php

    namespace Zagaz\Blog\model;

    class Post{

        public function __construct(private string $file)
        {
            //$this->getFileName();
        }

        public function getContent()
        {
            $stream = fopen($this->getFileName(), 'r');
            $content = fread($stream, filesize($this->getFileName()));

            echo $content;
        }

        public function getFileName()
        {
            //echo __DIR__;
            //echo 'src/' . $this->file;
            $dir = Url::getRootPath();
            $fileName = "{$dir}/entries/{$this->file}";

            return $fileName;
        }

        //Obtener todos los archivos
        public static function getPosts()
        {   

            $posts = [];

            //files me va a devolver un arreglo
            $files = scandir(Url::getRootPath() . '/entries');

            foreach ($files as $file) {
                if(strpos($file, '.md') > 0){
                    $post = new Post($file);
                    array_push($posts, $post);
                    //echo "<div> {$file} </div>";
                }
            }

            //print_r($posts);

            return $posts;

        }

        public function getUrl()
        {
            //la url ya no va a contener la extension .md
            $url = substr($this->file, 0, strpos($this->file, '.md'));
            
            //Remplazamos los espacios vacios y coocamos guion -
            $title = str_replace(' ', '-', $url);

            //return $title;
            return "http://localhost:8091/?posts={$title}";

        }

    }

?>