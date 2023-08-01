<?php

class Studenti
{

    private $hostname = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $db_name = "clickaccademy";

    public $connessione; /* undefine */

    public function __construct()
    {
        $this->connessione = new mysqli($this->hostname, $this->username, $this->password, $this->db_name);
        if (mysqli_connect_error()) {
            echo 'errore connessione' . mysqli_connect_error();
        } else {
            echo 'connessione ok';
        }
    }/* fine construttore */


    public function inserisciStudente($tuttiIdatiDelForm)
    {

        $nome = $this->connessione->real_escape_string($_POST['nome']);
        $cognome = $this->connessione->real_escape_string($_POST['cognome']);
        $email = $this->connessione->real_escape_string($_POST['email']);
        $password = $this->connessione->real_escape_string($_POST['password']);
        $indirizzo = $this->connessione->real_escape_string($_POST['indirizzo']);
        $citta = $this->connessione->real_escape_string($_POST['citta']);
        $codicePostale = $this->connessione->real_escape_string($_POST['codicePostale']);
        $frequenza = $this->connessione->real_escape_string($_POST['frequenza']);
        $saldo = $this->connessione->real_escape_string($_POST['saldo']);
        $categoria = $this->connessione->real_escape_string($_POST['categoria']);
        $avatar = $this->connessione->real_escape_string($_FILES['avatar']['name']);
        $tmp_name = ($_FILES['avatar']['tmp_name']);
        $folder = 'img/' . $avatar;

        /* if(isset($nome) && !empty($_POST['nome']){
            $queryNome="INSERT INTO studenti(nome)VALUES('$nome')";
            $sqlNome= $this->connessione->query($queryNome);
        }else{
            header('location:index.php?ErrorName')
        }
            if(isset($cognome) && !empty($_POST['cognome']){
                $queryCognome="INSERT INTO studenti(cognome) VALUES('$cognome);
                $sqlCognome= $this->connessione->query($queryCognome);
            }else{
                header('location:index.php?ErrorCognome');
            }

            && (isset($email) && !empty($_POST['email']))
            && (isset($password)) && !empty($_POST['password'])
            && (isset($indirizzo)) && !empty($_POST['indirizzo'])
            && (isset($citta) && !empty($_POST['citta']))
            && (isset($codicePostale) && !empty($_POST['codicePostale']))
            && (isset($frequenza) && !empty($_POST['frequenza']))
            && (isset($saldo) && !empty($_POST['saldo']))
        ){ */
        $query = "INSERT INTO studenti(nome,cognome,email,password,indirizzo,citta,codicePostale,frequenza,saldo,avatar,categoria) 
                VALUES('$nome','$cognome','$email','$password','$indirizzo','$citta','$codicePostale','$frequenza','$saldo','$folder','$categoria')";

        $sql = $this->connessione->query($query);
        if ($sql) {
            if (move_uploaded_file($tmp_name, $folder)) {
                header('location:index.php?msg1=ok');
            } else {
                echo 'Errore nel caricamento';
            }
        }

        /* } else {
            header('location:index.php?msg3=errore');
        } */
    } #fine metodo inserimento righe


    public function mostraFile()
    {

        $query = "SELECT * FROM studenti";
        $sql = $this->connessione->query($query);
        if ($sql->num_rows > 0) {
            $valori = array();
            while ($row = $sql->fetch_assoc()) {
                $valori[] = $row;
            }
            return $valori; /* qui è pieno dei dati di righe */
            /* echo json_encode($valori); */
        } else {
            echo 'errore';
        }
    } #fine mostra file

    public function cancellaDati($id)
    {
            /* if(isset($id)){
            echo $id['ID'];
        } */
            $query = "DELETE FROM studenti WHERE id = '$id' ";
            $sql = $this->connessione->query($query);
            if ($sql) {
                header('Location:index.php?daticancellati='.$id);
            } else {
                echo 'errore cancellazione';
            }
        } #fine cancella


    public function ModificaFile($id)
    {

        
            
           

            $nome = $this->connessione->real_escape_string($_POST['nome']);
            $cognome = $this->connessione->real_escape_string($_POST['cognome']);
            $email = $this->connessione->real_escape_string($_POST['email']);
            $password = $this->connessione->real_escape_string($_POST['password']);
            $indirizzo = $this->connessione->real_escape_string($_POST['indirizzo']);
            $citta = $this->connessione->real_escape_string($_POST['citta']);
            $codicePostale = $this->connessione->real_escape_string($_POST['codicePostale']);
            $frequenza = $this->connessione->real_escape_string($_POST['frequenza']);
            $saldo = $this->connessione->real_escape_string($_POST['saldo']);
            $categoria = $this->connessione->real_escape_string($_POST['categoria']);
            $avatar = $this->connessione->real_escape_string($_FILES['avatar']['name']);
            $tmp_name = ($_FILES['avatar']['tmp_name']);
            $folder = 'img/' . $avatar;

            /* Query */
            $query = 
            "UPDATE studenti 
            SET Nome = '$nome',
                Cognome = '$cognome', 
                Email = '$email', 
                Password = '$password', 
                Indirizzo = '$indirizzo', 
                Citta = '$citta', 
                CodicePostale = '$codicePostale',
                Frequenza = '$frequenza',
                Saldo = '$saldo',
                Avatar = '$folder'
            WHERE ID = '$id'";
            $sql = $this->connessione->query($query);
            if($sql){
                header('location:index.php?DatiModificati');
            }else{
                echo 'ERRORE MODIFICA';
            }

            
            
            
           
    
        
    }


    public function mostraRicerca($categoria)
    {

        $query = "SELECT * FROM studenti WHERE categoria = '$categoria'";
        $sql = $this->connessione->query($query);
        if ($sql->num_rows > 0) {
            $valori = array();/* qui è vuot */
            while ($row = $sql->fetch_assoc()) {
                $valori[] = $row;
            }
            return $valori;/* qui è pieno dei dati delle righe */
        }
    } //fine categoria



}

/* $prova = new Studenti();
echo json_encode($prova); */
