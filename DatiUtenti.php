<?php








 $hostname = "127.0.0.1";
$username = "root";
$password = "";
$DB = "clickaccademy";

$connessione = new mysqli($hostname, $username, $password, $DB);
if (mysqli_connect_error()) {
    echo 'errore';
}
$Select = "SELECT * FROM studenti";
$sql = $connessione->query($Select);
if ($sql->num_rows > 0) {
    $data = [];
    while ($row = $sql->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "non ci sono righe disponibbile";
}

    /* if(isset($id))
        echo $id;
    
echo json_encode($id) */;




                    
                



    
           
            


                
        /*  $queryM = "UPDATE studenti 
                    SET nome = '$nome', 
                        cognome = '$cognome', 
                        email ='$email, 
                    password = '$password', 
                        indirizzo ='$indirizzo', 
                        citta ='$citta', 
                        codicePostale ='$codicePostale',
                        frequenza = '$codicePostale',
                        saldo = '$saldo',
                        avatar = '$folder'
                    WHERE id = '$id'"; */
        
        

/*         
$sql = $connessione->query($query);
if($sql){
    echo 'Riusciuto';
} */
