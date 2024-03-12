<?php

class Cartera
{
    private $clients = [];


    public function getClient($id)
    {
        foreach ($this->clients as $client) {
            if ($client->getId() == $id)
                return $client;
        }
        return new Empresa(null, null, null, null, null);
    }

   

    public function delete($id)
    {
       
    }

    public function update($datos)
    {
        
    }

   

    public function insert($datos)
    {

       
    }

    public function drawList()
    {
        $conn = mysqli_connect('localhost', 'root', '', "ap21");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = 'SELECT * From investment';
        $result = mysqli_query($conn, $query);

        echo '<table class="table table-striped">';
        echo '<tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="2">Actions</th>
            </tr>';
        while($value = $result->fetch_array(MYSQLI_ASSOC)){
            echo '<tr>';
            foreach($value as $element){
                echo '<td>' . $element . '</td>';
            }

            echo '</tr>';
        }
        echo '</table>';

        $result->close();
        mysqli_close($conn);
    }
}
?>