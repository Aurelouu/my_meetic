$(document).ready(function () {
    function verif_nom(nom) {
        if (nom === ""){
            return false;
        }

        let regex = /(\d)+/;
        if (regex.test(nom)) {
            return false;
        }
        regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        if (regex.test(nom)) {
            return false;
        }
        return true;
        }

    function verif_mail(mail) {
        let regex = /(.)+(@)(.)+(\.)(.){2,}/;
        if (regex.test(mail)) {
            return true;
        }
        return false;
        }

    function verif_mdp(mdp) {
        let regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]){8,15}$/g;
        if (regex.test(mdp)) {
            return true;
        }
        return false;
    }
    function verif_ville(ville){
        let regex = /[!@#$%^&*()_+\=\[\]{};':"\\|,.<>\/?]/
        let regex1 = /[1234567890]/;
        return false;
    }
    return true;
});
    function verif_naissance(date){
        if (date === "");
        return false;
     }
    if (regex.test(date)){
    let regex = /(\d){2}(-){1}(\d){2}(-){1}(\d){4}/;
        }
        const jour = naissance.substr(0,2);
        const mois = naissance.substr(3,2);
        const annee = naissance.substr(6);

        naissance = annee + "-" + jour + "-" + mois;

        const maintenant = new Date();
        naissance = new Date (naissance);
        let age = date.getFullYear() - naissance.getFullYear();
        let mois = date.getMonth() - naissance.getMonth();
        if (m < 0) {
            age --;
        }
        if (age < 18){
            return false;
        }
        return true;











/* $(document).ready(function() {
    //console.log("test");
     function verif_nom(nom){
        let regex= /(\d)?/;
        if (regex.test(nom)) {
            return false;
        }
        regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        if (regex.test(nom)) {
            return false;
        }

        return true;
        }

     function verif_mail(mail){
         let regex=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2}))$/;
        if (regex.test(mail)){
            return true;
        }
        return false;
        }

        

    function verif_mdp(mdp){
        let regex=/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
        if (regex.test(mdp)){
            return true;
        }
        return false;
        }


    function verif_age(date){
         let maintenant = new Date();
         maintenant.getFullYear();
         var age = today.getFullYear() - "date_naissance".substr(0,4);
        if(maintenant.test(date)){
            return true;
        }
        return false;
        }
    

        $("#Inscrit").click(function(e) {
            e.preventDefault();

            if (!verif_nom($('#nom').val())) {
                $("#error-nom").removeClass("Hidden");
            }
            if (!verif_prenom($('#prenom').val())){
                $("#error-prenom").removeClass("Hidden1");
            }
            if (!verif_age($('#date').val())){
                $("#error-date").removeClass("Hidden2");
            }
            if(!verif_genre($('#Genre').val())){
                $("#error-Genre").removeClass("Hidden3");
            }
            if (!verif_ville($('#Ville').val())){
                $("#error-Ville").removeClass("Hidden4");
            }
            if (!verif_mail($('#mail').val())){
                $("#error-mail").removeClass("Hidden5");
            }
            if (!verif_mdp($('#mdp').val())){
                $("#error_motdepasse").removeClass("Hidden6");
            }
            if (!verif_Loisir($('#Loisir').val())){
                $("#error_Loisir").removeClass("Hidden7");
            }
            else{
                $("#Inscrit").click(function(e){
                }
            } */