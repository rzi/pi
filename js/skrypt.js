/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function () {
  var obiekt;

  var sel = document.getElementById('objektPomiarowy');
  obiekt=sel.value

  var teraz = new Date;

  function getTime() {
    var wynik = teraz.getHours() + ":" + teraz.getMinutes();

    // do sprawdzenia dodawanie 0 przed min jeśli <10
    if (teraz.getMinutes() < 10) {
      var wynik = teraz.getHours() + ":" + "0" + teraz.getMinutes();
      //alert("minuta: " + wynik);
    }
    return (wynik);
  }

  var godzina = getTime();
  //    alert("Jest godzina " + godzina);

  var timeControl = document.querySelector('input[type="time"]');
  timeControl.value = godzina;

  var dzien = teraz.getFullYear() + '-' + ((teraz.getMonth() < 9 ? '0' : '') + (teraz.getMonth() + 1)) + '-' + ((teraz.getDate() < 9 ? '0' : '') + teraz.getDate());

  var dateControl = document.querySelector('input[type="date"]');
  //    alert("Jest data: " + dzien);
  dateControl.value = dzien;

  $("#przycisk1").click(function () {
    //alert("przycisk1");
    $.ajax({
      async: true,   // this will solve the problem
      type: "GET",
      /*Informacja o tym, że dane będą wysyłane*/
      url: "zapytanie.php",
      /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
      data: {
        obiekt: obiekt,
        dzien: dzien,
        godzina: godzina

      },
      done: function () {
        /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania. */
        alert("wysłany ajax");
      },
      fail: function (blad) {
        alert("Wystąpił błąd");
        console.log(blad);
        /*Funkcja wyświetlająca informacje
                o ewentualnym błędzie w konsoli przeglądarki*/
      }
    });


  });

}); /*Klamra zamykająca $(document).ready(function(){*/
