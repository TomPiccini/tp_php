<HTML>

<HEAD>
    <TITLE>Onzième script</TITLE>
</HEAD>

<BODY>
    <?PHP
    $nomjour = date('l');
    $datejour = date('j');
    $nommois = date('F');
    $year = date('Y');
    switch ($nomjour) {
        case "Monday":
            $nomjour = "Lundi";
            break;
        case "Tuesday":
            $nomjour = "Mardi";
            break;
        case "Wednesday":
            $nomjour = "Mercredi";
            break;
        case "Thursday":
            $nomjour = "Jeudi";
            break;
        case "Friday":
            $nomjour = "Vendredi";
            break;
        case "Saturday":
            $nomjour = "Samedi";
            break;
        case "Sunday":
            $nomjour = "Dimanche";
            break;
    }
    switch ($nommois) {
        case "January":
            $nommois = "Janvier";
            break;
        case "February":
            $nommois = "Février";
            break;
        case "March":
            $nommois = "Mars";
            break;
        case "April":
            $nommois = "Avril";
            break;
        case "May":
            $nommois = "Mai";
            break;
        case "June":
            $nommois = "Juin";
            break;
        case "July":
            $nommois = "Juillet";
            break;
        case "August":
            $nommois = "Août";
            break;
        case "September":
            $nommois = "Septembre";
            break;
        case "October":
            $nommois = "Octobre";
            break;
        case "November":
            $nommois = "November";
            break;
        case "December":
            $nommois = "Décembre";
            break;
    }
    if ($nomjour == 'Vendredi' && $nomjour != 'Dimanche') {
        $weekend = "C'est le début du week-end !";
    }
    if ($nomjour != 'Vendredi' && $nomjour == 'dimanche') {
        $weekend = "C'est la fin du week-end...";
    }
    if ($nomjour != 'Vendredi' && $nomjour != 'dimanche') {
        $weekend = "Ce n'est ni le début du week-end, ni la fin.";
    }

    echo "<center>Nous sommes le $nomjour $datejour $nommois $year. $weekend";
    ?>
</BODY>

</HTML>