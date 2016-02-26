<?php
/*
	// PRIKLAD POUZITI

	//novy mail v kodovani na windows-1250
	$mail = new Email("windows-1250");
	//prijemce
	$mail->to[] = "Martin Žaloudek <zaloudek@kabel1.cz>";
	//vysoká priorita
	$mail->priority = 1;
	//predmet
	$mail->subject = "Pokusná zprává -ìšèøžýááíé- /?:,<>";
	//text zpravy ve formatu html
	$mail->setMessage("html","<b>This is HTML text</b>");
	//text zpravy ve formatu plaintext - pokud je definovani i html, vytvori se jako alternativy
	$mail->setMessage("plain","This is plain text");
	//vlozeni priloh (nazevsouboru v mailu, obsah, mimetype)
	$mail->addAttachment("soubor.txt","toto je obsah prilohy","text/plain");
	$mail->addAttachment("soubor2.txt",str_repeat("ahoj", 1024),"text/plain");
	//poslani emailu
	$mail->send();
*/

class Email
{
	//	version: 08.03.29

	var $encoding = "utf-8";
	var $priority = 3;
	var $to = array();  //formát 'email@kde.cz' nebo 'Jmeno <email@kde.cz>'
	var $cc = array();  //formát 'email@kde.cz' nebo 'Jmeno <email@kde.cz>'
	var $bcc = array(); //formát 'email@kde.cz' nebo 'Jmeno <email@kde.cz>'
	var $reply = "";  //formát 'email@kde.cz' nebo 'Jmeno <email@kde.cz>'
	var $from = "PHP script <none@none.cz>"; //formát 'email@kde.cz' nebo 'Jmeno <email@kde.cz>'
	var $subject = "";
	var $_attachments = array();
	var $_bodyParts = array(); //obsahuje text zpravy ve formatech HTML a PLAIN

	//KONSTRUKTOR
	function Email ($encoding)
	{
		$this->encoding = $encoding;
	}

	//VLOZENI NOVEHO TELA ZPRAVY (HTML nebo PLAINTEXT)
	function setMessage ($type, $message)
	{
	    $type = trim(strtolower($type));
	    if (($type != "plain" && $type != "html") || $type == "")
			return false;

		$this->_bodyParts[$type] = array (
		    "type" => $type,
			"content" => $message
		);
	}

	//PRIDANI DALSI PRILOHY
	function addAttachment($filename, $content, $mimetype)
	{
	    if ($filename == "") return false;
	    $this->_attachments[] = array (
			"filename" => $filename,
			"content" => $content,
			"mimetype" => $mimetype
		);
	}

	function send()
	{
		//pokud neni zadny prijemce, tak konec
		if (count($this->to)==0 && count($this->cc)==0 && count($this->bcc)==0)
		    return true;

	    if (count($this->_bodyParts) == 0) //email musi obsahovat alespon prazdny obsah
	        $this->_bodyParts['plain'] = "";

		//to
		$to = "";
		$first = true;
		foreach ($this->to as $m)
		{
		    if (!$first) $to .= ", ";
		    $to .= $this->_emailConvert($m);
		    $first = false;
		}

		//subject
		if (trim($this->subject) != "")
			$subject = "=?".$this->encoding."?B?".base64_encode($this->subject)."?=";

		//zjisteni, zda pouzit multipart
		if (count($this->_attachments) > 0 || count($this->_bodyParts) > 1)
		    $multipart = true;
		else
		    $multipart = false;

		//hlavicky
		$mail  = "";
		$mail .= "MIME-Version: 1.0\n";
		$mail .= "X-Mailer: PHP\n";
		$mail .= "X-Priority: ".$this->priority."\n";
		$mail .= "X-Sender: ".$this->_emailConvert($this->from)."\n";
		$mail .= "From: ".$this->_emailConvert($this->from)."\n";
//		$mail .= "Return-Path: ".$this->_emailConvert($this->from)."\n";
		if (!empty($this->reply))
			$mail .= "Reply-To: ".$this->_emailConvert($this->reply)."\n";

		//copy - cc
		if (count($this->cc) > 0)
		{
			$mail .= "Cc: ";
			$first = true;
			foreach ($this->cc as $cc)
			{
			    if (!$first) $mail .= ", ";
			    $mail .= $this->_emailConvert($cc);
			    $first = false;
			}
			$mail .= "\n";
		}
		if (count($this->bcc) > 0)
		{
			//hidden copy - bcc
			$mail .= "Bcc: ";
			$first = true;
			foreach ($this->bcc as $bcc)
			{
			    if (!$first) $mail .= ", ";
			    $mail .= $this->_emailConvert($bcc);
			    $first = false;
			}
			$mail .= "\n";
		}

		if (!$multipart)
		{
			//jen obycejny email
			foreach ($this->_bodyParts as $part) //bude obsahovat jen jednu polozku
			{
//				$mail .= "Content-Disposition: inline\n";
				$mail .= "Content-Transfer-Encoding: base64\n";
				$mail .= "Content-Type: text/".$part['type']."; charset=\"".$this->encoding."\"\n\n";
				$mail .= chunk_split(base64_encode($part['content']))."\n";
			}
		}
		else
		{
		    //uvod multipart
			$boundary = strtoupper(md5(uniqid("bound_")));
			$mail .= "Content-Transfer-Encoding: 7bit\n";
			$mail .= "Content-Type: multipart/mixed; charset=\"".$this->encoding."\";\n"; //nebo multipart/related
			$mail .= "  boundary=\"$boundary\"\n\n";
			$mail .= "This is a multi-part message in MIME format.\n\n";

			//vypis textoveho obsahu
			if (count($this->_bodyParts) > 1)
			{
				//definice alternativ
	 			$mail .= "--".$boundary."\n";
				$mail .= "Content-Type: multipart/alternative;\n";
	 			$mail .= "  boundary=\"alt_".$boundary."\"\n\n";
				foreach ($this->_bodyParts as $part)
				{
				    //vypis vsech alternativ
		 			$mail .= "--alt_".$boundary."\n";
					$mail .= "Content-Type: text/".$part['type']."; charset=".$this->encoding."\n";
//	 				$mail .= "Content-Disposition: inline\n";
					$mail .= "Content-Transfer-Encoding: base64\n\n";
	 				$mail .= chunk_split(base64_encode($part['content']))."\n";
				}

				//konec alternative
	 			$mail .= "--alt_".$boundary."--\n\n";
			}
			else
			{
			    //pouze jeden format textove zpravy
				foreach ($this->_bodyParts as $part)
				{
		 			$mail .= "--".$boundary."\n";
					$mail .= "Content-Type: text/".$part['type']."; charset=".$this->encoding."\n";
//	 				$mail .= "Content-Disposition: inline\n";
					$mail .= "Content-Transfer-Encoding: base64\n\n";
	 				$mail .= chunk_split(base64_encode($part['content']))."\n";
				}
			}

			//vypis priloh
			foreach ($this->_attachments as $attch)
			{
	 			$mail .= "--".$boundary."\n";
				$mail .= "Content-Type: ".$attch['mimetype']."; name=\"".$attch['filename']."\"\n";
				$mail .= "Content-Transfer-Encoding: base64\n";
				$mail .= "Content-Description: =?".$this->encoding."?B?".base64_encode($attch['filename'])."?=\n";
				$mail .= "Content-Disposition: attachment; filename=\"".$attch['filename']."\"\n\n";
 				$mail .= chunk_split(base64_encode($attch['content']))."\n";
			}

			//konec multipart
 			$mail .= "--".$boundary."--\n\n";
		}
		return mail($to, $subject, "", $mail);
	}
	//convertuje nazvy u emaily do base64 (kvuli diakritice), format: 'jmeno <email@kde.com>'
	function _emailConvert($s)
	{
		$email = trim($s);
		$reg = "^([^<]*)<([^<>]+)>$"; //regularni vyraz pro format emailu
		if (!eregi ($reg, $s)) return $email;
		$nazev = trim(eregi_replace ($reg, "\\1", $s));
		$email = trim(eregi_replace ($reg, "\\2", $s));

		if ($nazev != "")
			$nazev = '=?'.$this->encoding.'?B?'.base64_encode($nazev).'?=';
		return $nazev.' <'.$email.'>';
	}
}

