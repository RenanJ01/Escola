<?php
class Conexao
{
    private $conection;

    //Conexão
    private function Con_AbrirConection()
    {
        try {
            $this->conection = mysqli_connect("localhost", "root", "", "dsw", "3306");
            $this->conection->set_charset("utf-8");
            if (!$this->conection) {
                die("Falha na conexão: " . mysqli_connect_error());
            }
            else{return $this->conection;}
            //echo "Sucesso na conexão!";
        } catch (Exception $e) {
            //echo "Falha na conexão:".$e->getMessage();
            return false;
        }
    }


    //Select
    public function Con_Select($query)
    {
        try {
            $con = $this->Con_AbrirConection();
            $res = mysqli_query($con, $query);
            mysqli_close($con);
            return mysqli_fetch_assoc($res);
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }

    public function Con_MultSelect($query)
    {
        try {
            $con = $this->Con_AbrirConection();
            $res = mysqli_query($con, $query);
            $data = array(); // Array para armazenar os resultados
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }
            mysqli_close($con);
            return $data; // Retorna um array de resultados
        } catch (Exception $e) {
            echo "Ocorreu um erro: " . $e->getMessage();
            return false;
        }
    }
}
?>