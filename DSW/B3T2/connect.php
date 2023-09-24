<?php
class Conexao
{
    private $conection;

    //ConexÃ£o
    private function Con_AbrirConection()
    {
        try {
            $this-> conection = new PDO("mysql: host=localhost:8080; dbname=dsw", "root", "");
            $this-> conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this-> conection->exec("SET CHARACTER SET utf8");
            return $this->conection;
            //echo "Sucesso na conexão!";
        } catch (PDOException $e) {
            //echo "Falha na conexão:".$e->getMessage();
            return false;
        }
    }


    //Select
    public function Con_Select($query)
    {
        try {
            $con = $this->Con_AbrirConection();
            $con->exec("SET CHARACTER SET utf8");
            $res = $con->prepare($query);
            $res->execute();
            if ($res) {
                $res->setFetchMode(PDO::FETCH_ASSOC);
                $tab = $res->fetchAll();
                return $tab;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }
}
?>