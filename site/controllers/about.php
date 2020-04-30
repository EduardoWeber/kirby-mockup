<?php
return function($kirby, $pages, $page) {
    $response = "";
    if($kirby->request()->is('POST') && get('submit')) {
        
        $response = "Teste";

        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'text'  => get('text'),
            'destination-email' => get('destination-email')
        ];

        try {
            $kirby->email([
                'from'     => 'yourcontactform@yourcompany.com',
                'replyTo'  => $data['email'],
                'to'       => $data['destination-email'],
                'subject'  => esc($data['name']) . ' sent you a message from your contact form',
                'body'=> esc($data['text']),
              ]);
            
            $response = "Email sent!";
        } catch (Exception $error) {
            $response = 'There was an error sending the email: ' . $error->getMessage();
        }

    }

    return [
        'response' => $response
    ];
};

?>