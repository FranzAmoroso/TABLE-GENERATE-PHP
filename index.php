<?php 
/* #Head */
    /* Includiamo i dati del file studenti.php */
        include 'studenti.php';

    /* Diamo un valore alla classe Studenti del file esterno studenti.php incluso */
        $nuovoStudente = new Studenti();

    /* Inseriamo dei dati prendendo la funzione inserisciStidente() dalla classe Studenti appartenente al file esterno incluso 'studenti.php' */
        if (isset($_POST['invia'])) {
            $nuovoStudente->inserisciStudente($_POST);
        }

    /* Modifichiamo dei dati generando una tabella e prendendo la funzione ModificaFile($valoreId) dalla classe Studenti appartenente al file esterno incluso 'studenti.php' passandogli il valore preso nell'header tramite la Request */
        if (isset($_REQUEST['Modifica']) && !empty($_REQUEST['Modifica'])) {
            /* Valore ID preso dall'header */
            $valoreID = $_GET['Modifica'];




            if (isset($_REQUEST['BModifica']) && !empty($_GET['BModifica'])) {
                /* Trasferiamo il valore alla pagina studenti.php nella classe ModificaFile() */
                $nuovoStudente->ModificaFile($valoreID);
            }
        ?>

<!-- #Body -->
    <!-- Tabella Modifica -->
        <div class="FormModificaH" id="ModificaH">
            <div class="FMB" id="">

                <label for="FormModifica">
                    <h2>Modifica i Dati</h2>
                </label>
                <!-- Form Modifica Dati -->
                <form class="row g-3" action="" method="Post" enctype="multipart/form-data">

                    <!-- Modifica Nome -->
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="<?php   ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo '<p>*inserisci il nome</p>';
                        }
                        ?>

                        <!-- Modifica Cognome -->
                    </div>
                    <div class="col-md-6">
                        <label for="cognome" class="form-label">Cognome</label>
                        <input type="text" name="cognome" class="form-control" placeholder="<?php //echo $x['Nome']; 
                                                                                            ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo '<p>*inserisci il cognome</p>';
                        }
                        ?>
                    </div>

                    <!-- Modifica Email -->
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="<?php //echo $x['Cognome']; 
                                                                                            ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo '<p>*inserisci il E-mail</p>';
                        }
                        ?>
                    </div>

                    <!-- Modifica Password -->
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="<?php //echo $x['Password']; 
                                                                                                                        ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo '<p>*inserisci la Password</p>';
                        }
                        ?>
                    </div>

                    <!-- Modifica Indirizzo -->
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" name="indirizzo" class="form-control" placeholder="<?php //echo $x['Indirizzo']; 
                                                                                                ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo "<p>*inserisci l'indirizzo";
                        }
                        ?>
                    </div>

                    <!-- Modifica Cittä -->
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" name="citta" class="form-control" placeholder="<?php //echo $x['Citta']; 
                                                                                            ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo '<p>*inserisci la città di provenienza</p>';
                        }
                        ?>
                    </div>

                    <!-- Modifica CAP -->
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">CAP</label>
                        <input type="text" name="codicePostale" class="form-control" placeholder="<?php //echo $x['CodicePostale']; 
                                                                                                    ?>">
                        <?php
                        if (isset($_REQUEST['msg3'])) {
                            echo '<p>*inserisci il codice postale</p>';
                        }
                        ?>
                    </div>

                    <!-- Modifica Frequenza -->
                    <div class="col-md-6">
                        <label for="frequenza" class="form-label">Frequenza</label>
                        <select class="form-select" name="frequenza" aria-label="Default select example">
                            <option selected>Stato Studente</option>
                            <option value="frequenta">Frequenta</option>
                            <option value="nonFrequenta">Non Frequenta</option>
                        </select>
                    </div>

                    <!-- Modifica Saldamento -->
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="saldo" checked value="1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Saldato
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="saldo" value="0">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Da saldare
                            </label>
                        </div>
                    </div>

                    <!-- Modifica Categoria -->
                    <div class="col-md-6">
                        <label for="Categoria" class="form-label">Categoria</label>
                        <select class="form-select" name="categoria" aria-label="Default select example">
                            <option selected>Categoria</option>
                            <option value="U16">Under 16</option>
                            <option value="U18">Under 18</option>
                            <option value="D3">Terza divisione</option>
                            <option value="D2">Seconda divisione</option>
                            <option value="D1">Prima categoria</option>
                        </select>
                    </div>

                    <!-- Modifica Img -->
                    <div class="col-md-6">
                        <input type="file" name="avatar" class="formFile form-control">
                    </div>
                    <!-- Button Modifica -->
                    <div class="col-12">
                        <button type="submit" name="BModifica" id="BModifica2" class="btn btn-primary">Modifica</button>
                    </div>
                </form>
            </div>
        </div>

    <!-- Form Inserisci Dati -->
        <h1 class="effetto title">form inserimento dati</h1>

        <div class="effetto container">

            <!-- Form Inserisci Dati -->
            <form class="row g-3" action="" method="Post" enctype="multipart/form-data">

                <!-- INserisci Nome -->
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il nome</p>';
                    }
                    ?>
                </div>

                <!-- INserisci Cognome -->
                <div class="col-md-6">
                    <label for="cognome" class="form-label">Cognome</label>
                    <input type="text" name="cognome" class="form-control" id="cognome">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il cognome</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Email -->
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il E-mail</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci password -->
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci la Password</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Indirizzo -->
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="indirizzo" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo "<p>*inserisci l'indirizzo";
                    }
                    ?>
                </div>

                <!-- Inserisci Città -->
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" name="citta" class="form-control" id="inputCity">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci la città di provenienza</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Cap -->
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">CAP</label>
                    <input type="text" name="codicePostale" class="form-control" id="inputZip">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il codice postale</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Frequenza -->
                <div class="col-md-6">
                    <label for="frequenza" class="form-label">Frequenza</label>
                    <select class="form-select" name="frequenza" aria-label="Default select example">
                        <option selected>Stato Studente</option>
                        <option value="frequenta">Frequenta</option>
                        <option value="nonFrequenta">Non Frequenta</option>

                    </select>
                </div>

                <!-- Inserisci Saldamento -->
                <div class="col-md-6">
                    <label for="frequenza" class="form-label"></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="saldo" id="flexRadioDefault1" checked value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Saldato
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="saldo" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Da saldare
                        </label>
                    </div>
                </div>

                <!-- Inserisci Categoria -->
                <div class="col-md-6">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select" name="categoria" aria-label="Default select example">
                        <option selected>Categoria</option>
                        <option value="U16">under 16</option>
                        <option value="U18">Under 18</option>
                        <option value="D3">Terza divisione</option>
                        <option value="D2">Seconda divisione</option>
                        <option value="D1">Prima divisione</option>
                    </select>
                </div>

                <!-- Inserisci Img -->
                <div class="col-md-6">
                    <input type="file" name="avatar" class="formFile form-control" id="">
                </div>

                <!-- Invia Dati Form -->
                <div class="col-12">
                    <button type="submit" name="invia" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>



    <!-- Ricerca per Categoria -->
        <div class="effetto B3 container">
            <h1 class="title">Ricerca Dati</h1>
            <!-- Form Ricerca -->
            <form class="row g-3" action="" method="get">
                <!-- Ricerca per divisione -->
                <div class="col-md-6">
                    <label for="categoriaRicerca" class="title form-label">Ricerca per Categoria</label>
                    <select class="form-select" name="categoria" aria-label="Default select example">
                        <option selected>Categoria</option>
                        <option value="U16">under 16</option>
                        <option value="U18">Under 18</option>
                        <option value="D3">Terza divisione</option>
                        <option value="D2">Seconda divisione</option>
                        <option value="D1">Prima divisione</option>
                        <option value="ALL">Mostra tutto</option>
                    </select>
                </div>
                <!-- Ricerca per Città -->
                <!-- <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" name="cittaR" class="form-control" id="inputCity">
                    </div> -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cerca</button>
                </div>
            </form>
        </div>

    <!-- Messaggio dati Modificati -->
        <div class="effetto conteiner col-12">
            <?php
            if (isset($_REQUEST['DatiModificati']) && !empty($_REQUEST['DatiModificati'])) {
                echo '<p>dati Modificati con successo</p>';
            }
            ?>
        </div>
    <!-- Messaggio dati Inseriti -->
        <div class="effetto conteiner col-12">
            <?php
            if (isset($_REQUEST['msg1']) && !empty($_REQUEST['msg1'])) {
                echo '<p>dati inseriti con successo</p>';
            }
            ?>
        </div>
    <!-- Genera righe -->
        <?php
            if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
                if ($_GET['categoria'] == 'ALL') {
                    $mostraDati = $nuovoStudente->mostraFile();
                    if ($mostraDati == NULL) {
                        echo 'nessun dato da mostrare';
                    } else {  ?>
                        <div class="effetto container-md mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Cognome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Pass</th>
                                        <th scope="col">Indirizzo</th>
                                        <th scope="col">Città</th>
                                        <th scope="col">CodicePostale</th>
                                        <th scope="col">Frequenza</th>
                                        <th scope="col">Saldo</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Modifica / Cancella</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($mostraDati as $datisingoli) { ?>

                                        <tr>
                                            <td scope="row"><?php echo $datisingoli['ID'] ?></td>
                                            <td scope="row"><img src="<?php echo $datisingoli['avatar'] ?>" width="60"></td>
                                            <td scope="row"><?php echo $datisingoli['Nome'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Cognome'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Email'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Password'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Indirizzo'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Citta'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['CodicePostale'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Frequenza'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Saldo'] ?></td>
                                            <td scope="row"><?php echo $datisingoli['Categoria'] ?></td>
                                            <td scope="row">
                                                <a href="index.php?Modifica=<?php /* echo $datisingoli['ID'];  */ print_r($datisingoli);  ?>"><i id="BModifica" class="fa-solid fa-pen-to-square" name="Modifica" style="margin-left: 10px; margin-right:10px; color:blue;cursor: pointer;" data-val=""></i></a>
                                                <a href="index.php?Cancella=<?php echo ($datisingoli['ID']); ?>"><i class="fa-solid fa-trash-can" style="color: red;"></i><?php $datisingoli['ID'] ?></a>
                                            </td>
                                        </tr>


                                    <?php } ?>
                                </tbody>
                            </table>



                        <?php
                    }
                } else {
                    $categoriaDaMostrare = $_GET['categoria'];
                    /* $cittaRicerca = $_GET['cittaR']; */

                    $mostraDati = $nuovoStudente->mostraRicerca($categoriaDaMostrare);
                    if ($mostraDati == NULL) {
                        echo 'nessun dato da mostrare';
                    } else {  ?>
                            <div class="effetto container-md mt-5">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Cognome</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Pass</th>
                                            <th scope="col">Indirizzo</th>
                                            <th scope="col">Città</th>
                                            <th scope="col">CodicePostale</th>
                                            <th scope="col">Frequenza</th>
                                            <th scope="col">Saldo</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Modifica / Cancella</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($mostraDati as $datisingoli) { ?>

                                            <tr>
                                                <td scope="row"><?php echo $datisingoli['ID'] ?></td>
                                                <td scope="row"><img src="<?php echo $datisingoli['avatar'] ?>" width="60"></td>
                                                <td scope="row"><?php echo $datisingoli['Nome'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Cognome'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Email'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Password'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Indirizzo'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Citta'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['CodicePostale'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Frequenza'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Saldo'] ?></td>
                                                <td scope="row"><?php echo $datisingoli['Categoria'] ?></td>
                                                <td scope="row">
                                                    <a href="index.php?Modifica=<?php /* echo $datisingoli['ID'];  */ print_r($datisingoli);  ?>"><i id="BModifica" class="fa-solid fa-pen-to-square" style="margin-left: 10px; margin-right:10px; color:blue;cursor: pointer;" name="Modifica" data-val=""></i></a>
                                                    <a href="index.php?Cancella=<?php echo ($datisingoli['ID']); ?>"><i class="fa-solid fa-trash-can" style="color: red;"></i></a>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>


                    <?php
                    }
                }
            }
        ?>
    <!-- else Genera pag Normale -->
        <?php } else {
                
                /* Cancelliamo i dati riconoscendo l'ID prendendolo dell'header dandogli un valore,  prendendo la funzione cancellaDati($valoreId) dalla classe Studenti appartenente al file esterno incluso 'studenti.php' passandogli il valore riconosciuto nell'header tramite la Request */
                if (isset($_GET['Cancella']) && !empty($_GET['Cancella'])) {
                    $valoreId = $_GET['Cancella'];
                    $nuovoStudente->cancellaDati($valoreId);
                    }
                ?>

     <!-- Form Inserisci Dati -->
        <h1 class="title">form inserimento dati</h1>

        <div class="container">

            <!-- Form Inserisci Dati -->
            <form class="row g-3" action="" method="Post" enctype="multipart/form-data">

                <!-- INserisci Nome -->
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il nome</p>';
                    }
                    ?>
                </div>

                <!-- INserisci Cognome -->
                <div class="col-md-6">
                    <label for="cognome" class="form-label">Cognome</label>
                    <input type="text" name="cognome" class="form-control" id="cognome">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il cognome</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Email -->
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il E-mail</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci password -->
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci la Password</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Indirizzo -->
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="indirizzo" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo "<p>*inserisci l'indirizzo";
                    }
                    ?>
                </div>

                <!-- Inserisci Città -->
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" name="citta" class="form-control" id="inputCity">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci la città di provenienza</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Cap -->
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">CAP</label>
                    <input type="text" name="codicePostale" class="form-control" id="inputZip">
                    <?php
                    if (isset($_REQUEST['msg3'])) {
                        echo '<p>*inserisci il codice postale</p>';
                    }
                    ?>
                </div>

                <!-- Inserisci Frequenza -->
                <div class="col-md-6">
                    <label for="frequenza" class="form-label">Frequenza</label>
                    <select class="form-select" name="frequenza" aria-label="Default select example">
                        <option selected>Stato Studente</option>
                        <option value="frequenta">Frequenta</option>
                        <option value="nonFrequenta">Non Frequenta</option>

                    </select>
                </div>

                <!-- Inserisci Saldamento -->
                <div class="col-md-6">
                    <label for="frequenza" class="form-label"></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="saldo" id="flexRadioDefault1" checked value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Saldato
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="saldo" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Da saldare
                        </label>
                    </div>
                </div>

                <!-- Inserisci Categoria -->
                <div class="col-md-6">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select" name="categoria" aria-label="Default select example">
                        <option selected>Categoria</option>
                        <option value="U16">under 16</option>
                        <option value="U18">Under 18</option>
                        <option value="D3">Terza divisione</option>
                        <option value="D2">Seconda divisione</option>
                        <option value="D1">Prima divisione</option>
                    </select>
                </div>

                <!-- Inserisci Img -->
                <div class="col-md-6">
                    <input type="file" name="avatar" class="formFile form-control" id="">
                </div>

                <!-- Invia Dati Form -->
                <div class="col-12">
                    <button type="submit" name="invia" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>



    <!-- Ricerca per Categoria -->
        <div class="B3 container">
            <h1 class="title">Ricerca Dati</h1>
            <!-- Form Ricerca -->
            <form class="row g-3" action="" method="get">
                <!-- Ricerca per divisione -->
                <div class="col-md-6">
                    <label for="categoriaRicerca" class="title form-label">Ricerca per Categoria</label>
                    <select class="form-select" name="categoria" aria-label="Default select example">
                        <option selected>Categoria</option>
                        <option value="U16">under 16</option>
                        <option value="U18">Under 18</option>
                        <option value="D3">Terza divisione</option>
                        <option value="D2">Seconda divisione</option>
                        <option value="D1">Prima divisione</option>
                        <option value="ALL">Mostra tutto</option>
                    </select>
                </div>
                <!-- Ricerca per Città -->
                <!-- <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" name="cittaR" class="form-control" id="inputCity">
                    </div> -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cerca</button>
                </div>
            </form>
        </div>

    <!-- Messaggio dati Modificati -->
        <div class="conteiner col-12">
            <?php
            if (isset($_REQUEST['DatiModificati']) && !empty($_REQUEST['DatiModificati'])) {
                echo '<p>dati Modificati con successo</p>';
            }
            ?>
        </div>
    <!-- Messaggio dati Inseriti -->
        <div class="conteiner col-12">
            <?php
            if (isset($_REQUEST['msg1']) && !empty($_REQUEST['msg1'])) {
                echo '<p>dati inseriti con successo</p>';
            }
            ?>
        </div>
    <!-- Genera righe -->
                    <?php
                        if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
                            if ($_GET['categoria'] == 'ALL') {
                                $mostraDati = $nuovoStudente->mostraFile();
                                if ($mostraDati == NULL) {
                                    echo 'nessun dato da mostrare';
                                } else {  ?>
                                    <div class="container-md mt-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#ID</th>
                                                    <th scope="col">Avatar</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Cognome</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Pass</th>
                                                    <th scope="col">Indirizzo</th>
                                                    <th scope="col">Città</th>
                                                    <th scope="col">CodicePostale</th>
                                                    <th scope="col">Frequenza</th>
                                                    <th scope="col">Saldo</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Modifica / Cancella</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($mostraDati as $datisingoli) { ?>

                                                    <tr>
                                                        <td scope="row"><?php echo $datisingoli['ID'] ?></td>
                                                        <td scope="row"><img src="<?php echo $datisingoli['avatar'] ?>" width="60"></td>
                                                        <td scope="row"><?php echo $datisingoli['Nome'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Cognome'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Email'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Password'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Indirizzo'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Citta'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['CodicePostale'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Frequenza'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Saldo'] ?></td>
                                                        <td scope="row"><?php echo $datisingoli['Categoria'] ?></td>
                                                        <td scope="row">
                                                            <a href="index.php?Modifica=<?php
                                                                                        echo $datisingoli['ID'];
                                                                                        ?>"><i id="BModifica" class="fa-solid fa-pen-to-square" name="Modifica" style="margin-left: 10px; margin-right:10px; color:blue;cursor: pointer;" data-val=""></i><?php echo $datisingoli['ID'] ?></a>
                                                            <a href="index.php?Cancella=<?php echo $datisingoli['ID']; ?>"><i class="fa-solid fa-trash-can" style="color: red;"></i><?php $datisingoli['ID'] ?></a>
                                                        </td>
                                                    </tr>


                                                <?php } ?>
                                            </tbody>
                                        </table>



                                    <?php
                                }
                            } else {
                                $categoriaDaMostrare = $_GET['categoria'];
                                /* $cittaRicerca = $_GET['cittaR']; */

                                $mostraDati = $nuovoStudente->mostraRicerca($categoriaDaMostrare);
                                if ($mostraDati == NULL) {
                                    echo 'nessun dato da mostrare';
                                } else {  ?>
                                        <div class="container-md mt-5">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#ID</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Nome</th>
                                                        <th scope="col">Cognome</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Pass</th>
                                                        <th scope="col">Indirizzo</th>
                                                        <th scope="col">Città</th>
                                                        <th scope="col">CodicePostale</th>
                                                        <th scope="col">Frequenza</th>
                                                        <th scope="col">Saldo</th>
                                                        <th scope="col">Categoria</th>
                                                        <th scope="col">Modifica / Cancella</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($mostraDati as $datisingoli) { ?>

                                                        <tr>
                                                            <td scope="row"><?php echo $datisingoli['ID'] ?></td>
                                                            <td scope="row"><img src="<?php echo $datisingoli['avatar'] ?>" width="60"></td>
                                                            <td scope="row"><?php echo $datisingoli['Nome'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Cognome'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Email'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Password'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Indirizzo'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Citta'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['CodicePostale'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Frequenza'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Saldo'] ?></td>
                                                            <td scope="row"><?php echo $datisingoli['Categoria'] ?></td>
                                                            <td scope="row">
                                                                <a href="index.php?Modifica=<?php /* echo $datisingoli['ID'];  */ $datisingoli;  ?>"><i id="BModifica" class="fa-solid fa-pen-to-square" style="margin-left: 10px; margin-right:10px; color:blue;cursor: pointer;" name="Modifica" data-val=""></i></a>
                                                                <a href="index.php?Cancella=<?php echo $datisingoli['ID']; ?>"><i class="fa-solid fa-trash-can" style="color: red;"></i></a>
                                                            </td>
                                                        </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>


                                <?php
                                }
                            }
                        }
                        ?>

        <?php } 
    ?> 
    <!-- Pag -->
            <!doctype html>

                <html lang="it">

                    <head>
                        <!-- Style CCS -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                            <link rel="stylesheet" href="style2.css">
                        <!-- Required meta tags -->
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">

                        <!-- script esterno-->
                            <!-- <script src="script.js"></script> -->

                        <!-- script interno -->
                            <!-- <script>
                                
                                window.addEventListener("load", () => {
                                /* Prendiamo i tasti per gli Event */
                                let tastModifica = document.querySelectorAll("#BModifica");
                                let tableModifica = document.querySelectorAll("#ModificaH")
                                let tableModifica2 = document.querySelector("#FMB1")
                                let Body1 = document.querySelector(".container");
                                let Body2 = document.querySelector(".mt-5");
                                let Body3 = document.querySelector(".B3")
                                let title = document.querySelector(".title")




                                /* Riconosce di dare un Event a tutti i tasti */
                                for (let i = 0; i < tastModifica.length; i++) {
                                    tastModifica[i].addEventListener("click", Modifica);

                                }

                                function Modifica() {

                                    /* Riconosce di dare un Event(ApriTabella) ogni tasto aprendo una tabella */
                                    for (let i = 0; i < tableModifica.length; i++) {
                                        tableModifica[i].classList.toggle("FormModificaH")
                                    }

                                    fetch('DatiUtenti.php', {
                                            method: "POST",
                                            headers: {
                                                "Content-type": "application/json"
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            studenti = data;

                                            /* Mostra in console l'array */
                                            data.forEach(tastModifica => {
                                                console.log(tastModifica)
                                            })
                                            /* Mostra in console l'elemento */
                                            tastModifica.forEach(data => {
                                                console.log(data)
                                            })
                                            /*inseririamo tutti i dati del data base che noi richiediamo dentro l'object  */
                                            data.forEach(persona => {
                                                console.log('dati ricevuti: ', `${persona.ID}`);
                                            })



                                        })

                                    /* CSS Tabella apri e chiudi */
                                    tableModifica2.id = "";
                                    tableModifica2.classList.toggle("FMB")
                                    console.log("Modifica Dati");
                                    title.classList.toggle("effetto")
                                    Body1.classList.toggle("effetto");
                                    Body2.classList.toggle("effetto");
                                    Body3.classList.toggle("effetto");


                                    /* Riconosce che ogni tasto della tabella a un evento */
                                    let modificapersona = document.querySelector('#BModifica2');
                                    for (let i = 0; i < modificapersona.length; i++) {
                                        modificapersona[i].addEventListener("click", modificaPersona);
                                    }
                                    /* Riconosce l'ID ogni volta che Premiamo il Tasto Modifica nella tabella */
                                    function modificaPersona(data) {
                                        console.log('modifico persona: ', data)
                                    }

                                } //Fine Modifica

                                })
                                /* fecth method: post
                                Dati: id
                                (che adrà a modiificare i dati dell' id selezionato)
                                event.target ()(per recupare l'id) */
                            </script> -->

                        <!-- Bootstrap CSS -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                        <!-- Title PagWeb -->
                            <title>FORM INSERIMENTO DATI</title>
                    </head>

                    <body class="Body">
                        <!-- Tabella Modifica (script) -->
                            <div class="" id="ModificaH">
                                <div class="" id="FMB1">

                                    <label for="FormModifica">
                                        <h2>Modifica i Dati</h2>
                                    </label>
                                    <!-- Form Modifica Dati -->
                                    <form class="row g-3" action="" method="Post" enctype="multipart/form-data">

                                        <!-- Modifica Nome -->
                                        <div class="col-md-6">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" name="nome" class="form-control" placeholder="<?php /* echo $x['Nome']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo '<p>*inserisci il nome</p>';
                                            }
                                            ?>

                                            <!-- Modifica Cognome -->
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cognome" class="form-label">Cognome</label>
                                            <input type="text" name="cognome" class="form-control" placeholder="<?php /* echo $x['Cognome']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo '<p>*inserisci il cognome</p>';
                                            }
                                            ?>
                                        </div>

                                        <!-- Modifica Email -->
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="<?php /* echo $x['Email']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo '<p>*inserisci il E-mail</p>';
                                            }
                                            ?>
                                        </div>

                                        <!-- Modifica Password -->
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="<?php /* $x['Password']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo '<p>*inserisci la Password</p>';
                                            }
                                            ?>
                                        </div>

                                        <!-- Modifica Indirizzo -->
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" name="indirizzo" class="form-control" placeholder="<?php /* echo $x['Indirizzo']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo "<p>*inserisci l'indirizzo";
                                            }
                                            ?>
                                        </div>

                                        <!-- Modifica Cittä -->
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" name="citta" class="form-control" placeholder="<?php /* echo $x['Citta']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo '<p>*inserisci la città di provenienza</p>';
                                            }
                                            ?>
                                        </div>

                                        <!-- Modifica CAP -->
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">CAP</label>
                                            <input type="text" name="codicePostale" class="form-control" placeholder="<?php /* echo $x['CodicePostale']; */ ?>">
                                            <?php
                                            if (isset($_REQUEST['msg3'])) {
                                                echo '<p>*inserisci il codice postale</p>';
                                            }
                                            ?>
                                        </div>

                                        <!-- Modifica Frequenza -->
                                        <div class="col-md-6">
                                            <label for="frequenza" class="form-label">Frequenza</label>
                                            <select class="form-select" name="frequenza" aria-label="Default select example">
                                                <option selected>Stato Studente</option>
                                                <option value="frequenta">Frequenta</option>
                                                <option value="nonFrequenta">Non Frequenta</option>
                                            </select>
                                        </div>

                                        <!-- Modifica Saldamento -->
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="saldo" checked value="1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Saldato
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="saldo" value="0">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Da saldare
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Modifica Categoria -->
                                        <div class="col-md-6">
                                            <label for="Categoria" class="form-label">Categoria</label>
                                            <select class="form-select" name="categoria" aria-label="Default select example">
                                                <option selected>Categoria</option>
                                                <option value="U16">Under 16</option>
                                                <option value="U18">Under 18</option>
                                                <option value="D3">Terza divisione</option>
                                                <option value="D2">Seconda divisione</option>
                                                <option value="D1">Prima categoria</option>
                                            </select>
                                        </div>

                                        <!-- Modifica Img -->
                                        <div class="col-md-6">
                                            <input type="file" name="avatar" class="formFile form-control">
                                        </div>
                                        <!-- Button Modifica -->
                                        <div class="col-12">
                                            <button type="submit" name="BModifica" id="BModifica2" class="btn btn-primary">Modifica</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <!-- link script internet -->
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

                    </body>

                </html>
