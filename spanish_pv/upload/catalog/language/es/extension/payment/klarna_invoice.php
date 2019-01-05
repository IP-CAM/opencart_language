<?php
// Text
$_['text_title']          = 'Factura Klarna - Pago en 14 d�as';
$_['text_terms_fee']      = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']   = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']     = 'La cuenta Klarna requiere alguna informaci�n adicional antes de poder procesar tu pedido.';
$_['text_male']           = 'Masculino';
$_['text_female']         = 'Femenino';
$_['text_year']           = 'A�o';
$_['text_month']          = 'Mes';
$_['text_day']            = 'D�a';
$_['text_comment']        = 'ID de la factura Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']        = 'G�nero';
$_['entry_pno']           = 'N�mero Personal';
$_['entry_dob']           = 'Fecha de nacimiento';
$_['entry_phone_no']      = 'Tel�fono';
$_['entry_street']        = 'Direcci�n';
$_['entry_house_no']      = 'No.';
$_['entry_house_ext']     = 'Ext.';
$_['entry_company']       = 'N�mero de Registro de la Organizaci�n/Empresa';

// Help
$_['help_pno']            = 'Introduce tu n�mero de la Seguridad Social aqu�.';
$_['help_phone_no']       = 'Introduce tu n�mero de tel�fono.';
$_['help_street']         = 'Ten en cuenta que la entrega s�lo puede tener lugar en la direcci�n registrada al pagar con Klarna.';
$_['help_house_no']       = 'Por favor, introduce el n�mero de tel�fono de casa.';
$_['help_house_ext']      = 'Por favor, introduce la extensi�n de tel�fono.';
$_['help_company']        = 'Por favor, introduce el n�mero de registro de tu organizaci�n/empresa';

// Error
$_['error_deu_terms']     = 'Tienes que aceptar la pol�tica de privacidad de Klarna (Datenschutz)';
$_['error_address_match'] = 'Las direcciones de facturaci�n y env�o deben coincidir si deseas utilizar Pagos Klarna';
$_['error_network']       = 'Se produjo un error al conectar con Klarna. Por favor, int�ntalo de nuevo m�s tarde.';
