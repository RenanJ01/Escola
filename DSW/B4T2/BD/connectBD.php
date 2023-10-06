<?php
class Connect
{
    private $conection;

    //Conexão
    private function Con_Open()
    {
        try {
            $this->conection = mysqli_connect("localhost", "root", "", "dsw", "3306");
            $this->conection->set_charset("utf8");
            if (!$this->conection) {
                die("Falha na conexão: " . mysqli_connect_error());
            }
            else{
                return $this->conection;
            }
            //echo "Sucesso na conexão!";
        } catch (Exception $e) {
            //echo "Falha na conexão:".$e->getMessage();
            return false;
        }
    }


    //Select
    public function Con_Query($consulta)
    {
        try {
            $con = $this->Con_Open();
            $res = mysqli_query($con, $consulta);
            mysqli_close($con);
            return mysqli_fetch_assoc($res);
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }

}

?>