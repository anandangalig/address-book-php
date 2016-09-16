<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";
    date_default_timezone_set("America/New_York");

    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('address_book.html.twig', array('existing_contacts' => Contact::getAll()));
    });

    $app->get('/delete_contacts', function() use($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete_contacts.html.twig');
    });

    $app->post('/create_contact', function() use($app) {
        $new_contact = new Contact($_POST['input_name'], $_POST['input_number'], $_POST['input_address']);
        $new_contact->save();
        return $app['twig']->render('create_contact.html.twig', array('newcontact' => $new_contact));
    });
    return $app;
 ?>
