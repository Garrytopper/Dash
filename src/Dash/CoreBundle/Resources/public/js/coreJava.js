$(function(){
// Partie concernant la page d'accueil
// click pour faire apparaitre et disparaitre id="PortefeuilleHidden"
    $('#Portefeuille').on('click', function(){
        if ($('#PortefeuilleHidden').hasClass('hidden')) {
            $('#PortefeuilleHidden').removeClass('hidden');
        }
        else{
            $('#PortefeuilleHidden').addClass('hidden');
        }
    });
    $('#Stat').on('click', function(){
        if ($('#StatHidden').hasClass('hidden')) {
            $('#StatHidden').removeClass('hidden');
        }
        else{
            $('#StatHidden').addClass('hidden');
        };
    });
     $('#Aujourdhui').on('click', function(){
        if ($('#AujourdhuiHidden').hasClass('hidden')) {
            $('#AujourdhuiHidden').removeClass('hidden');
        }
        else{
            $('#AujourdhuiHidden').addClass('hidden');
        };
    });
     $('#DOuvert').on('click', function(){
        if ($('#dOuvert').hasClass('hidden')) {
            $('#dOuvert').removeClass('hidden');
        }
        else{
            $('#dOuvert').addClass('hidden');
        };
    });
     $('#DVendu').on('click', function(){
        if ($('#dVendu').hasClass('hidden')) {
            $('#dVendu').removeClass('hidden');
        }
        else{
            $('#dVendu').addClass('hidden');
        };
    });
     $('#DPerdu').on('click', function(){
        if ($('#dPerdu').hasClass('hidden')) {
            $('#dPerdu').removeClass('hidden');
        }
        else{
            $('#dPerdu').addClass('hidden');
        };
    });
  

// Partie concernant la liste des taches 
    $('#Dessin').on('click', function(){
        if ($('#DessinHidden').hasClass('hidden')) {
            $('#DessinHidden').removeClass('hidden');
        }
        else{
            $('#DessinHidden').addClass('hidden');
        };
    });

    $('#PlanT').on('click', function(){
        if ($('#PlanTHidden').hasClass('hidden')) {
            $('#PlanTHidden').removeClass('hidden');
        }
        else{
            $('#PlanTHidden').addClass('hidden');
        };
    });

    $('#Dmetre').on('click', function(){
        if ($('#DmetreHidden').hasClass('hidden')) {
            $('#DmetreHidden').removeClass('hidden');
        }
        else{
            $('#DmetreHidden').addClass('hidden');
        };
    });

    $('#Dpose').on('click', function(){
        if ($('#DposeHidden').hasClass('hidden')) {
            $('#DposeHidden').removeClass('hidden');
        }
        else{
            $('#DposeHidden').addClass('hidden');
        };
    });

    $('#Facture').on('click', function(){
        if ($('#FactureHidden').hasClass('hidden')) {
            $('#FactureHidden').removeClass('hidden');
        }
        else{
            $('#FactureHidden').addClass('hidden');
        };
    });

    $('#Rcheque').on('click', function(){
        if ($('#RchequeHidden').hasClass('hidden')) {
            $('#RchequeHidden').removeClass('hidden');
        }
        else{
            $('#RchequeHidden').addClass('hidden');
        };
    });

    $('#Autre').on('click', function(){
        if ($('#AutreHidden').hasClass('hidden')) {
            $('#AutreHidden').removeClass('hidden');
        }
        else{
            $('#AutreHidden').addClass('hidden');
        };
    });

    $('#App').on('click', function(){
        if ($('#AppHidden').hasClass('hidden')) {
            $('#AppHidden').removeClass('hidden');
        }
        else{
            $('#AppHidden').addClass('hidden');
        };
    });

    $('#Command').on('click', function(){
        if ($('#CommandHidden').hasClass('hidden')) {
            $('#CommandHidden').removeClass('hidden');
        }
        else{
            $('#CommandHidden').addClass('hidden');
        };
    });

});