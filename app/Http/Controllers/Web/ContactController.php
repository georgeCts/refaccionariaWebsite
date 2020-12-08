<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;
use Exception;
use View;
use Mail;

class ContactController extends Controller
{
    public function index() {
        $lstLocations = Location::where('deleted', false)->get();
        return View::make('contents.Contacto', ['lstLocations' => $lstLocations]);
    }

    public function sendMail(Request $request){
        $success        = true;
        $asunto         = 'Notificación de contacto.';

        if($request['mensaje'] != "" || !is_null($request['mensaje'])){
            $comentarios = $request['mensaje'];
        }

        $contenido =  "Buen día.<br><br>
                        &nbsp; &nbsp; &nbsp; 
                        Por medio de la presente se notifica que el cliente con nombre <strong>".$request['nombre']. "</strong>
                        ha solicitado contactarse con el con los siguientes datos: <br><br>
                     &nbsp; &nbsp; Email: ".$request['email']."<br>
                     &nbsp; &nbsp; Asunto: ".$request['asunto']."<br>
                     &nbsp; &nbsp; Mensaje: ".$comentarios."<br><br>";

        $data = array(
            'contenido' => $contenido,
            'titulo' => $asunto
        );
       
        try{
            $destinatarios = ['georgeluis.idem@gmail.com'];
            
            if(count($destinatarios) > 0) {
                Mail::send('email', $data, function($message) use ($destinatarios, $asunto) {
                    $message->from("hola@refaccionariasmadero.com.mx", $asunto);
                    $message->to($destinatarios)->subject($asunto);
                });

                return response()->json(['response' => 'success'], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error'=> $exception->getMessage()], 403);
        }

        return response()->json(['error'=> 'Ocurrió un error al mandar el correo.'], 403);
    }
}
