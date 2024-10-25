<!--Hecho por Guillermo Troya Albarrán-->
<?php
class Usuario{
    public $email;
    public $rol;

    /**
     * Summary of __construct
     * @return mixed
     */
    public function __construct($email, $rol){
        $this->email = $email;
        $this->rol = $rol;
    }
    
    public function getEmail(){
        return $this->email;

    }
    public function getRol(){
        return $this->rol;
    }
}


?>