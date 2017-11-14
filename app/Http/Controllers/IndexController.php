<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;

class IndexController extends Controller
{
    public function index(Request $request, $opcion) {
        switch ($opcion) {
            case "crearTicket":
                return view('tickets/crear');
                break;
            case "controlTicket":
                return view('tickets/seguimiento');
                break;
            case "wizardAyuda":
                return view('ayuda/wizard');
                break;
            case "sobreEsto":
                return "Que es esto!";
                break;
        }
    }

    public function post (Request $request) {
        $asunto = $request->input('asunto');
        $body = $request->input('body');
        $requestParams = array(
            'UserLogin' => 'otrs-ws',
            //'CustomerUserLogin' => 'CustomerUserLogin',
            'Password' => 'jHksgQVqQCHD44N6',
            'Ticket' => array(
                'Title' => '(Desde agente): ' . $asunto,
                'Queue' => 'Nomina',
                'Type' => 'Consulta',
                'State' => 'new',
                'Priority' => '3 normal',
                'CustomerUser' => 'T20051096'
            ),
            'Article' => array(
                'SenderType' => 'customer',
                'Subject' => $asunto,
                'Body' => $body,
                'ContentType' => 'text/plain; charset=utf8',
                'TimeUnit' => '0'
            )
        );

        $client = new SoapClient('http://gestor.usac.edu.gt/otrs-web/GenericTicketConnectorSOAP.wsdl');
// var_dump($client->__getFunctions());
        $response = $client->TicketCreate($requestParams);

        print_r($response);
        print_r($request);
    }
}
