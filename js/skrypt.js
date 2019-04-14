/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function () {
  // js---

  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'Pomiar temperatury',
        borderColor: 'rgb(55, 39, 250)',
        data: [0, 10, 5, 2, 20, 30, 45],
        fill: false,
        A:[1]
      }]
    },

    // Configuration options go here
    options: {}
  });
  //js konies


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
    var i=0;
    var j;
    var k;
    $.ajax({
      async: true,   // this will solve the problem
      type: "GET",
      dataType : 'json',
      url: "zapytanie.php",
  	  data: {
        obiekt: obiekt,
        dzien: dzien,
        godzina: godzina
        },
      success: function (response1) {
		//alert("succes");
        //console.log(response1); // odpowiedź JSON z zapytanie.php
        //alert(chart.data.labels[0]);
        $.each(response1, function (key, data1) {
          data2=chart.data.datasets[0].data[i] =data1;
          label2=chart.data.labels[i]=key;
          console.log(label2);
          console.log(data2);
          i=i+1;
        })
        chart.update();
        },

      fail: function (blad) {
        alert("Wystąpił błąd");
        console.log(blad);
      }

    }); // koniec ajax
//    function getDateTimeFromTimestamp(unixTimeStamp) {
//     // var date = new Date(unixTimeStamp);
//
//      return (date.getFullYear()+'-'+  ('0' + (date.getMonth() + 1)).slice(-2) + '- '+'0' + date.getDate()).slice(-2) + ' ' + ('0' + date.getHours()).slice(-2) + ':' + ('0' + date.getMinutes()).slice(-2);
//    }

  }); //koniec  przycisk 1
}); /*Klamra zamykająca $(document).ready(function(){*/
