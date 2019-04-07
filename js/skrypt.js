/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function(){

    var teraz = new Date;
    function getTime() {
        var wynik = teraz.getHours() + ":" + teraz.getMinutes();

        // do sprawdzenia dodawanie 0 przed min jeśli <10
        if (teraz.getMinutes()<10) {
            alert("minuta: " + teraz.getMinutes());
            var wynik = teraz.getHours() + ":" + "0"+teraz.getMinutes();
            alert("minuta: " + wynik);
        }
        return(wynik);
    }

    var godzina=getTime();
    //    alert("Jest godzina " + godzina);


    var timeControl = document.querySelector('input[type="time"]');
    timeControl.value = godzina;

    var today = teraz.getFullYear() + '-' + ((teraz.getMonth() < 9 ? '0': '') + (teraz.getMonth()+1)) + '-' +  ((teraz.getDate()<9 ? '0': '')+ teraz.getDate()) ;


    var dateControl = document.querySelector('input[type="date"]');
    //    alert("Jest data: " + today);
    dateControl.value = today;


}); /*Klamra zamykająca $(document).ready(function(){*/
