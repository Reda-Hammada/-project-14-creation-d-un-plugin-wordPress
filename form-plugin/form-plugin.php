<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php

/*ff

plugin name: Form contact 
plugin uri: github.com
author:Reda Hammada
author uri:https://github.com/reda-hammada
version: 0.1
*/

function form_contact(){
$contact = '';
$contact .= '<h2>Contact uc</h2>';
$contact .= '<form action="http://localhost/wordpress3/tanck-you/" method="post">';

$contact .= '<label for="">Name</label>';
$contact .= '<input type="text" name="Name" class="form-control""  >';

$contact .= '<label for="">Email</label>';
$contact .= '<input type="email" name="Email" class="form-control"  >';

$contact .= '<label for="">Subject</label>';
$contact .= '<input type="text" name="subject" class="form-control"  >';

$contact .= '<label for="">Message</label>';
$contact .= '<textarea  name="message" class="form-control"></textarea>';

$contact .= '</br><input type="submit" name="form_submit" class="btn btn-primary" value="submit">';
$contact .= '</form>';
return $contact;
}
add_shortcode('form', 'form_contact');

function form_captur(){
    if(isset($_POST["form_submit"])){

    $name = sanitize_text_field($_POST['Name']);
    $email = sanitize_text_field($_POST['Email']);
    $subjects= sanitize_text_field($_POST['subject']);
    $your_message = sanitize_textarea_field($_POST['message']);

    $to = 'ouailagzenay@gmail.com';
    $subject = $subjects;
    $message = $name. " - " .$email." - " .$your_message ;
    
  wp_mail($to , $subject , $message);
    }
}
add_action('wp_head' , 'form_captur');
?>

