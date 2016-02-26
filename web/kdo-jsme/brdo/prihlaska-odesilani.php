<?php
require_once '../../engine/class.email.php';

$emailHtml = '<p>Na webu BRĎO byla vyplněna přihláška:</p><br />';

foreach ($_POST as $col => $value) {
    $emailHtml .= '<html><head><meta charset="utf-8" /></head><body>';
    $emailHtml .= '<p>';
    $emailHtml .= '<strong>' . $col . '</strong><br />';
    $emailHtml .= htmlspecialchars($value);
    $emailHtml .= '<br />';
    $emailHtml .= '</p>';
    $emailHtml .= '</body></html>';
}

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
