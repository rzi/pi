/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function () {
  // js---

  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
<<<<<<< HEAD

=======
>>>>>>> 27/04
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
    var godzina;
    var godzina2;
    obiekt=2;

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
<<<<<<< HEAD
    var godzina2 = getTime();
=======
  var godzina2 = getTime();
>>>>>>> 27/04

  var timeControl = document.querySelector('input[type="time"]');
  timeControl.value = godzina;

<<<<<<< HEAD
    var timeControl2 = document.querySelector('input[type="time"].timepicker2');
=======
  var timeControl2 = document.querySelector('input[type="time"].timepicker2');
>>>>>>> 27/04
  timeControl2.value = godzina2;

  var dzien = teraz.getFullYear() + '-' + ((teraz.getMonth() < 9 ? '0' : '') + (teraz.getMonth() + 1)) + '-' + ((teraz.getDate() < 9 ? '0' : '') + teraz.getDate());

<<<<<<< HEAD
     var wczoraj = teraz.getFullYear() + '-' + ((teraz.getMonth() < 9 ? '0' : '') + (teraz.getMonth() + 1)) + '-' + ((teraz.getDate() < 9 ? '0' : '') + teraz.getDate()-1);
=======
  var wczoraj = teraz.getFullYear() + '-' + ((teraz.getMonth() < 9 ? '0' : '') + (teraz.getMonth() + 1)) + '-' + ((teraz.getDate() < 9 ? '0' : '') + teraz.getDate()-1);
>>>>>>> 27/04

  var dateControl = document.querySelector('input[type="date"]');
  dateControl.value = wczoraj;

<<<<<<< HEAD
    var dateControl2 = document.querySelector('input[type="date"].datepicker2');
  dateControl2.value = dzien;


=======
  var dateControl2 = document.querySelector('input[type="date"].datepicker2');
  dateControl2.value = dzien;

>>>>>>> 27/04
  $("#objektPomiarowy").click (function(){
    var sel = document.getElementById('objektPomiarowy');
    var x = document.getElementById("objektPomiarowy").selectedIndex;
    var y = document.getElementById("objektPomiarowy").options;
    //alert("Index: " + y[x].index );
    obiekt=y[x].index
  });
<<<<<<< HEAD
=======

>>>>>>> 27/04
  $('#timepicker1').change (function(){
    godzina=document.getElementById("timepicker1").value;
    godzina=godzina+":00";
  });
<<<<<<< HEAD
    $('#timepicker2').change (function(){
    godzina2=document.getElementById("timepicker2").value;
    godzina2=godzina2+":00";
  });
  $('#datepicker1').change (function(){
    wczoraj=document.querySelector('input[type="date"]').value;
  });
      $('#datepicker2').change (function(){
    dzien=document.querySelector('input[type="date"]').value;
  });
=======

  $('#timepicker2').change (function(){
    godzina2=document.getElementById("timepicker2").value;
    godzina2=godzina2+":00";
  });

  $('#datepicker1').change (function(){
    wczoraj=document.querySelector('input[type="date"]').value;
  });

  $('#datepicker2').change (function(){
    dzien=document.querySelector('input[type="date"]').value;
  });
  $("#przycisk2").click(function () {
  var j;
  for (j=0;j<1440;j++){
	   chart.data.labels.splice(j,1);
	   chart.data.datasets[0].data.splice (j,1);
  }
  chart.update();
  //alert("ccc");
  });

>>>>>>> 27/04
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
        wczoraj:wczoraj,
        dzien: dzien,
        godzina: godzina,
        godzina2: godzina2
        },
      success: function (response1) {
        $.each(response1, function (key, data1) {
          data2=chart.data.datasets[0].data[i] =data1;
          label2=chart.data.labels[i]=key;

<<<<<<< HEAD

=======
>>>>>>> 27/04
          // konwersja timestamp
          // Unixtimestamp
          var unixtimestamp = label2;

          // Months array
          //var months_arr = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

          // Convert timestamp to milliseconds
          var date = new Date(unixtimestamp*1000);

          // Year
          var year = date.getFullYear();

          // Month
         // var month = months_arr[date.getMonth()];
          var month = date.getMonth();
            month=month+1;
            if (month<10){
                month="0"+month;
            }
          // Day
          var day = date.getDate();

          // Hours
          var hours = date.getHours();

          // Minutes
          var minutes = "0" + date.getMinutes();

          // Seconds
          var seconds = "0" + date.getSeconds();

          // Display date time in MM-dd-yyyy h:m:s format
         // var convdataTime = year+'-'+month+'-'+day+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
          var convdataTime = year+'-'+month+'-'+day+' '+hours + ':' + minutes.substr(-2);

          label2=convdataTime;
          console.log(label2);
          console.log(data2);
          chart.data.labels[i]=label2;
          i=i+1;
        })
        chart.update();
        },
      fail: function (blad) {
        alert("Wystąpił błąd");
        console.log(blad);
      }
    }); // koniec ajax
  }); //koniec  przycisk 1
}); /*Klamra zamykająca $(document).ready(function(){*/
