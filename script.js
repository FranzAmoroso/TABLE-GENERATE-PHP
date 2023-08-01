window.addEventListener("load", () => {
  /* Prendiamo i tasti per gli Event */
  let tastModifica = document.querySelectorAll("#BModifica");
  let tableModifica = document.querySelectorAll("#ModificaH");
  let tableModifica2 = document.querySelector("#FMB1");
  let Body1 = document.querySelector(".container");
  let Body2 = document.querySelector(".mt-5");
  let Body3 = document.querySelector(".B3");
  let title = document.querySelector(".title");



  /* Riconosce di dare un Event a tutti i tasti e successivamente avviamo la function Modifica */
  for (let i = 0; i < tastModifica.length; i++) {
    tastModifica[i].addEventListener("click", Modifica);
  }



  function Modifica() {

    /* Riconosce di dare un Event(ApriTabella) ogni tasto aprendo una tabella */
    for (let i = 0; i < tableModifica.length; i++) {
      tableModifica[i].classList.toggle("FormModificaH");
    }
/* Prendiamo i dati con il fetch dal file php DatiUtenti.php */
    fetch("DatiUtenti.php", {
      method: "POST",
      headers: {
        "Content-type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);

        /* Mostra in console l'array */
        data.forEach((tastModifica) => {
          
          console.log(tastModifica);
        });
        /* Mostra in console l'elemento */
        tastModifica.forEach((data) => {
          
          console.log(`${data.ID}`);
        });
        /*inseririamo tutti i dati del data base che noi richiediamo dentro l'object  */
        data.forEach((persona) => {
          console.log("dati ricevuti: ", `${persona.ID}`);
        });
      });

    /* CSS Tabella apri e chiudi */
    tableModifica2.id = "";
    tableModifica2.classList.toggle("FMB");
    console.log("Modifica Dati");
    title.classList.toggle("effetto");
    Body1.classList.toggle("effetto");
    Body2.classList.toggle("effetto");
    Body3.classList.toggle("effetto");

    /* Riconosce che ogni tasto della tabella a un evento */
    let modificapersona = document.querySelector("#BModifica2");
    for (let i = 0; i < modificapersona.length; i++) {
      modificapersona[i].addEventListener("click", modificaPersona);
    }
    /* Riconosce l'ID ogni volta che Premiamo il Tasto Modifica nella tabella */
    function modificaPersona(data) {
      console.log("modifico persona: ", data);
    }
  } //Fine function Modifica
});
