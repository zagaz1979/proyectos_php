<?php

    //espacio de nombres
    namespace Zagaz\Notas\models;

    //Usar Database

    use PDO;
    use Zagaz\Notas\lib\Database;

    //Clase con herencia
    class Note extends Database{

        //Definir variables o atributos
        private string $uuid;

        //Definir el constructor
        public function __construct(private string $title, private string $content)
        {
            
            //Iniciar el constructor padre
            parent::__construct();

            //inicializar con un valor uuid
            $this->uuid = uniqid();

        }

        //Metodo de guardar
        public function save()
        {
            $query = $this->connect()->prepare("INSERT INTO notes(uuid, title, content, updated) VALUES(:uuid, :title, :content, NOW())");
            $query->execute(['uuid' => $this->uuid, 'title' => $this->title, 'content' => $this->content]);
        }

        //Método update
        public function update()
        {
            $query = $this->connect()->prepare("UPDATE notes SET title = :title, content = :content, updated = now() where uuid = :uuid");
            $query->execute(['title' => $this->title, 'uuid' => $this->uuid, 'content' => $this->content]);
        }

        //sin haber inicializado un objeto
        //Con static no tengo acceso a this
        public static function get($uuid)
        {
            $db = new Database();
            $query = $db->connect()->prepare("SELECT * FROM notes WHERE uuid = :uuid");
            $query->execute(['uuid' => $uuid]); 

            $note = Note::createFromArray($query->fetch(PDO::FETCH_ASSOC));

            return $note;
        }

        //Traer todos los datos
        public static function getAll()
        {
            
            $notes = [];

            $db = new Database();
            $query = $db->connect()->query("SELECT * FROM notes");

            while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                $note = Note::createFromArray($row);
                array_push($notes, $note);
            }


            return $notes;
        }  

        //Va a crear una nueva nota
        public static function createFromArray($arr):Note
        {
            $note = new Note($arr['title'], $arr['content']);
            $note->setUUID($arr['uuid']);

            return $note;
        }

        //Definir getter y setter
        public function getUUID()
        {
            return $this->uuid;
        }

        public function setUUID($value)
        {
            $this->uuid = $value;
        }

        public function getTitle(): string
        {
            return $this->title;
        }

        public function setTitle($value)
        {
            $this->title = $value;
        }

        public function getContent(): string
        {
            return $this->content;
        }

        public function setContent($value)
        {
            $this->content = $value;
        }



    }