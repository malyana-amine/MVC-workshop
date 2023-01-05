<?php


include('databaseCon.php');

class jokes {
    private $id;
    private $joke;

    public function __construct( $joke)
    {
        $this->joke = $joke;

    }

    public function getjoke()
    {
        return $this->joke;
    }
    public function setjoke($joke): void
    {
        $this->joke = $joke;
    }


    public static function selectjoke() {
        
            $conn1=DbConnection::connect();
            $jk = $conn1->prepare('SELECT * FROM jokes');
            $jk->execute();
            $result = $jk->fetchAll(PDO::FETCH_ASSOC);
            $data = array();

            foreach( $result as $row){
                $data[] = $row ;
            }


             echo json_encode($data);
        }

    public function insertjoke(){

        $conn1=DbConnection::connect();
        $jk = $conn1->prepare("INSERT INTO `jokes`(`joke`) VALUES ('$this->joke')");
        $jk->execute();
    }





    public static function counter(){


        $conn1=DbConnection::connect();
        $jk = $conn1->prepare('SELECT * FROM jokes');
        $jk->execute();
        $result = $jk->fetchAll(PDO::FETCH_ASSOC);
        echo count($result);
        
    }

}