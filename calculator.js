/* Funkcija za izracunavanje proizvoda prilikom klika */
$('.red').click(function (e) {
    /* Dobijanje teksta prilikom klika na celiju tabele */
    var $target = $(e.target);
    console.log($target.text());
    
    /* Racunanje proizvoda i prikaz bez osvjezavanja stranice */
    var $f1 = $target.text().substr(0,2);
    var $f2 = $target.text().slice(-2);
    
    /*
     * Odradio sam prikaz rezultata u php-u a na kraju ove funkcije sam stavio automatsko 
     * osvjezenje stranice jer php upisuje u bazu tek kad osvjezim stranicu, pa bez osvjezenja 
     * upise samo poslednji klik 
    
    var $result = $f1 * $f2;
    $('.rez').html($f1 + " X " + $f2 + " = " + $result );       // Prikaz rezultata bez osvjezenja 
    */
   
    /* Kreiranje kolacica za faktore pri mnozenju */
    createCookie("f1", $f1, "10");
    createCookie("f2", $f2, "10");
    
    location.reload();
});


/* Funkcija za kreiranje kolacica */
function createCookie(name, value, days) {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  } else {
   expires = "";
  }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}