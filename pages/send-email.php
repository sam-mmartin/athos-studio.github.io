<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "Contato - " . $name;

$myEmail = "projetos@athosarquitetura.net";//é necessário informar um e-mail do próprio domínio
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

$body .= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
$body .= '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">';
$body .= '<head><!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->';
  
$body .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="x-apple-disable-message-reformatting">';
$body .= '<!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><title></title>';
  
$body .= '<style type="text/css">body,p{margin:0}@media only screen and (min-width:620px){.u-row,.u-row .u-col-100{width:600px!important}.u-row .u-col{vertical-align:top}}@media (max-width:620px){.u-row-container{max-width:100%!important;padding-left:0!important;padding-right:0!important}.u-row .u-col{min-width:320px!important;max-width:100%!important;display:block!important}.u-row{width:calc(100% - 40px)!important}.u-col{width:100%!important}.u-col>div{margin:0 auto}}body{padding:0}table,td,tr{vertical-align:top;border-collapse:collapse}.ie-container table,.mso-container table{table-layout:fixed}*{line-height:inherit}a[x-apple-data-detectors=true]{color:inherit!important;text-decoration:none!important}table,td{color:#000}a{color:#00e;text-decoration:underline}@media (max-width:480px){#u_content_image_1 .v-src-width{width:auto!important}#u_content_image_1 .v-src-max-width{max-width:60%!important}#u_content_heading_1 .v-font-size{font-size:18px!important}#u_content_heading_2 .v-font-size{font-size:30px!important}#u_content_text_1 .v-container-padding-padding{padding:10px!important}}</style>';
 
$body .= '<!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->';

$body .= '</head><body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #000000;color: #000000">';
$body .= '<!--[if IE]><div class="ie-container"><![endif]--><!--[if mso]><div class="mso-container"><![endif]-->';
$body .= '<table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #000000;width:100%" cellpadding="0" cellspacing="0">';
$body .= '<tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">';
$body .= '<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #000000;"><![endif]-->';
    
$body .= '<div class="u-row-container" style="padding: 0px;background-color: transparent">';
$body .= '<div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">';
$body .= '<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">';
$body .= '<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->';
      
$body .= '<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->';
$body .= '<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">';
$body .= '<div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">';
$body .= '<!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->';
  
$body .= '<table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">';
$body .= '<tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">';
        
$body .= '<table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #000000;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">';
$body .= '<tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">';
$body .= '<span>&#160;</span></td></tr></tbody></table></td></tr></tbody></table>';

$body .= '<!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div>';
$body .= '<!--[if (mso)|(IE)]></td><![endif]--><!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]--></div></div></div>';

$body .= '<div class="u-row-container" style="padding: 0px;background-image: url(\'../assets/img/template-email/image-2.png\');background-repeat: no-repeat;background-position: center top;background-color: transparent">';
$body .= '<div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">';
$body .= '<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">';
$body .= '<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-image: url(\'../assets/img/template-email/image-2.png\');background-repeat: no-repeat;background-position: center top;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->';
      
$body .= '<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->';
$body .= '<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">';
$body .= '<div style="width: 100% !important;">';
$body .= '<!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->';
  
$body .= '<table id="u_content_image_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">';
$body .= '<tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">';
        
$body .= '<table width="100%" cellpadding="0" cellspacing="0" border="0">';
$body .= '<tr><td style="padding-right: 0px;padding-left: 0px;" align="center"><a href="https://athosarquitetura.net" target="_blank">';
$body .= '<img align="center" border="0" src="../assets/img/template-email/image-1.png" alt="Athos Arquitetura" title="Athos Arquitetura" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 47%;max-width: 272.6px;" width="272.6" class="v-src-width v-src-max-width"/>';
$body .= '</a></td></tr></table></td></tr></tbody></table>';

$body .= '<table id="u_content_heading_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">';
$body .= '<tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:80px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">';
        
$body .= '<h1 class="v-font-size" style="margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: \'Montserrat\',sans-serif; font-size: 22px;">';
$body .= '<strong>Contato com cliente 🙂</strong></h1></td></tr></tbody></table>';

$body .= '<table id="u_content_heading_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">';
$body .= '<tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">';
        
$body .= '<h1 class="v-font-size" style="margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: \'Montserrat\',sans-serif; font-size: 38px;">';
$body .= '<strong>'. $name .'</strong></h1></td></tr></tbody></table>';

$body .= '<table id="u_content_text_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">';
$body .= '<tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 60px;font-family:arial,helvetica,sans-serif;" align="left">';
        
$body .= '<div style="color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;"><p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px;">';
$body .= '<span style="line-height: 25.2px; font-family: \'Montserrat\', sans-serif; font-size: 18px;">Celular: '. $phone .'</span></span></p>';
$body .= '<p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px;">';
$body .= '<span style="line-height: 25.2px; font-family: \'Montserrat\', sans-serif; font-size: 18px;">E-mail: '. $email .'</span></span></p>';
$body .= '</div></td></tr></tbody></table>';

$body .= '<!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td><![endif]--><!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]--></div></div></div>';

$body .= '<div class="u-row-container" style="padding: 0px;background-color: transparent">';
$body .= '<div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">';
$body .= '<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">';
$body .= '<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->';
      
$body .= '<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->';
$body .= '<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">';
$body .= '<div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">';
$body .= '<!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->';
  
$body .= '<table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">';
$body .= '<tbody><tr><td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">';
        
$body .= '<h1 class="v-font-size" style="margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: \'Montserrat\',sans-serif; font-size: 22px;">';
$body .= $message .'</h1></td></tr></tbody></table>';

$body .= '<!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td><![endif]--><!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]--></div></div></div>';
$body .= '<!--[if (mso)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if mso]></div><![endif]--><!--[if IE]></div><![endif]--></body></html>';

$email_to = 'projetos@athosarquitetura.net';

$status = mail($email_to, $subject, $body, $headers);

if ($status) {
  $response = "E-mail enviado com sucesso!";
} else {
  $response = "Falha ao enviar o e-mail.";
}

header("Location: contact.php?status={$response}");
exit;
?>