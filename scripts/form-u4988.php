<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.2.1.284
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario Cot EquipoAcc',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'mayra-najera@rimex.com.mx',
		'to' => 'mayra-najera@rimex.com.mx,rodolfo-salinas@rimex.com.mx'
	),
	'fields' => array(
		'custom_U5025' => array(
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Nombre\' es obligatorio.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Correo electrónico',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Correo electrónico\' es obligatorio.',
				'format' => 'El campo \'Correo electrónico\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U4991' => array(
			'type' => 'string',
			'label' => 'Empresa',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Empresa\' es obligatorio.'
			)
		),
		'custom_U5013' => array(
			'type' => 'string',
			'label' => 'Mensaje',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Mensaje\' es obligatorio.'
			)
		),
		'custom_U5049' => array(
			'type' => 'string',
			'label' => 'Teléfono móvil',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Teléfono móvil\' es obligatorio.'
			)
		)
	)
);

process_form($form);
?>
