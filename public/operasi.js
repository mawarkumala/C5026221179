function tambah()
{
    var bilangan1 = parseInt (document.getElementById("bil1").value) ;
    var bilangan2 = parseInt (document.getElementById("bil2").value) ; //method yg mengembalikan value
    var hasilnya = document.getElementById("hasil").value ; //return object

    hasilnya.innerHTML = bilangan1 + bilangan2;
}

function kali()
{
    var bilangan1 = document.getElementById("bil1").value ;
    var bilangan2 = document.getElementById("bil2").value ; //method yg mengembalikan value
    var hasilnya = document.getElementById("hasil").value ; //return object

    hasilnya.innerHTML = bilangan1 * bilangan2;
} 
