<?php
require_once '../../engine/class.email.php';


// Blokovat spam roboty vkladajici odkazy
foreach ($_POST as $col => $value) {
    if (preg_match('/(http(s?):\/\/)/i', $value)) {
        echo 'Nektere polozky obsahuji odkazy, ktere nejsou povolene. Formular zamitnut.';
        die();
    }
}


// Kontrola vyplnenych poli
if (empty($_POST['dite-jmeno'])) {
    echo 'Neni vyplnene jmeno ditete. Formular nebyl odeslan. <a href="javascript:history.go(-1);">ZPET</a>';
    die();
}
if (empty($_POST['dite-narozeni'])) {
    echo 'Neni vyplnene datum narozeni. Formular nebyl odeslan. <a href="javascript:history.go(-1);">ZPET</a>';
    die();
}
if (empty($_POST['zastupce-jmeno'])) {
    echo 'Neni vyplnene jmeno zastupce. Formular nebyl odeslan. <a href="javascript:history.go(-1);">ZPET</a>';
    die();
}
if (empty($_POST['zastupce-email'])) {
    echo 'Neni vyplnen kontaktni email. Formular nebyl odeslan. <a href="javascript:history.go(-1);">ZPET</a>';
    die();
}
if (empty($_POST['zastupce-telefon'])) {
    echo 'Neni vyplnen kontaktni telefon. Formular nebyl odeslan. <a href="javascript:history.go(-1);">ZPET</a>';
    die();
}


$emailHtml = '<html><head><meta charset="utf-8" /></head><body>';
$emailHtml .= '<p>Na webu BRĎO byla vyplněna přihláška:</p><br />';
foreach ($_POST as $col => $value) {
    $emailHtml .= '<p>';
    $emailHtml .= '<strong>' . $col . '</strong><br />';
    $emailHtml .= htmlspecialchars($value);
    $emailHtml .= '<br />';
    $emailHtml .= '</p>';
}
$emailHtml .= '</body></html>';

//novy mail
$mail = new Email("utf-8");
//prijemce
$mail->to[] = "BRĎO mail <brdo.praha@gmail.com>";
$mail->from = "BRĎO web <praha@brontosaurus.cz>";
//predmet
$mail->subject = "Přihláška z webu";
//text zpravy ve formatu html
$mail->setMessage("html", $emailHtml);
//text zpravy ve formatu plaintext - pokud je definovani i html, vytvori se jako alternativy
//poslani emailu
if ($mail->send()) {
    header("Location: prihlaska-odeslana.php");
    exit;
} else {
    echo "Omlouvame se, ale neco se nepovedlo, a tak se nepodarilo prihlasku odeslat. Zkuste to prosim znovu pozdeji. Pokud by se to nedarilo, napiste nam nebo zavolejte primo.";
}
