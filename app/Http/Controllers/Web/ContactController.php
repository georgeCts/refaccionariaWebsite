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

    public function sendMail(Request $request) {
        $asunto         = 'Notificación de contacto.';

        if($request['mensaje'] != "" || !is_null($request['mensaje'])){
            $comentarios = $request['mensaje'];
        }

        $contenido =  "Buen día.<br><br>
                        &nbsp; &nbsp; &nbsp; 
                        Por medio de la presente se notifica que el cliente con nombre <strong>".$request['nombre']. "</strong>
                        ha solicitado contactarse con el con los siguientes datos: <br><br>
                     &nbsp; &nbsp; Email: ".$request['correo']."<br>
                     &nbsp; &nbsp; Teléfono: ".$request['telefono']."<br>
                     &nbsp; &nbsp; Mensaje: ".$comentarios."<br><br>";

        $data = array(
            'contenido' => $contenido,
            'titulo' => $asunto
        );
       
        try{
            $destinatarios = ['boletin@maderorefaccionarias.com.mx'];
            
            if(count($destinatarios) > 0) {
                Mail::send('email', $data, function($message) use ($destinatarios, $asunto) {
                    $message->from("boletin@maderorefaccionarias.com.mx", $asunto);
                    $message->to($destinatarios)->subject($asunto);
                });

                return response()->json(['success' => 'true'], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error'=> $exception->getMessage()], 403);
        }

        return response()->json(['error'=> 'Ocurrió un error al mandar el correo.'], 403);
    }

    public function sendCV(Request $request) {
        $asunto         = 'Notificación de vacante.';

        $contenido =  "Buen día.<br><br>
                        &nbsp; &nbsp; &nbsp; 
                        Por medio de la presente se notifica que la persona con nombre <strong>".$request['name']. "</strong>
                        ha solicitado contactarse con el con los siguientes datos: <br><br>
                     &nbsp; &nbsp; Email: ".$request['email']."<br>
                     &nbsp; &nbsp; Teléfono: ".$request['phone_number']."<br><br>";

        $data = array(
            'contenido' => $contenido,
            'titulo' => $asunto
        );
       
        try{
            $destinatarios = ['rhumanos@maderorefaccionarias.com.mx', 'rh.aux@maderorefaccionarias.com.mx'];
            
            if(count($destinatarios) > 0) {
                Mail::send('email', $data, function($message) use ($destinatarios, $asunto, $request) {
                    $message->from("bolsadetrabajo@maderorefaccionarias.com.mx", $asunto);
                    $message->to($destinatarios)->subject($asunto);
                    $message->attach($request->cv_file, ['as' => 'cv.'.$request->file('cv_file')->extension()]);
                });

                return response()->json(['success' => 'true'], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error'=> $exception->getMessage()], 403);
        }

        return response()->json(['error'=> 'Ocurrió un error al mandar el correo.'], 403);
    }

    public function sendQuote(Request $request) {
        $asunto         = 'Notificación de cotización.';

        if($request['comentarios'] != "" || !is_null($request['comentarios'])){
            $comentarios = $request['comentarios'];
        }

        $contenido =  "Buen día.<br><br>
                        &nbsp; &nbsp; &nbsp;
                        Por medio de la presente se notifica que la persona con nombre <strong>".$request['name']. "</strong>
                        ha solicitado contactarse con el con los siguientes datos: <br><br>
                     &nbsp; &nbsp; Email: ".$request['email']."<br>
                     &nbsp; &nbsp; Teléfono: ".$request['phone_number']."<br>
                     &nbsp; &nbsp; Comentarios: ".$comentarios."<br><br>";

        $data = array(
            'contenido' => $contenido,
            'titulo' => $asunto
        );
       
        try{
            $destinatarios = ['mkt@maderorefaccionarias.com.mx'];
            
            if(count($destinatarios) > 0) {
                Mail::send('email', $data, function($message) use ($destinatarios, $asunto, $request) {
                    $message->from("cotizaciones@maderorefaccionarias.com.mx", $asunto);
                    $message->to($destinatarios)->subject($asunto);
                    $message->attach($request->cv_file, ['as' => 'cotizacion.'.$request->file('cv_file')->extension()]);
                });

                return response()->json(['success' => 'true'], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error'=> $exception->getMessage()], 403);
        }

        return response()->json(['error'=> 'Ocurrió un error al mandar el correo.'], 403);
    }

    public function sendSubscription(Request $request) {
        $asunto         = 'Notificación de suscripción.';

        $contenido =  "Buen día.<br><br>
                        &nbsp; &nbsp; &nbsp; 
                        La persona con nombre <strong>".$request['name']. "</strong>
                        ha solicitado suscribirse con el correo <strong>".$request['email']."</strong><br><br>";

        if(isset($request->state) && $request->state != "") {
            $contenidoExtra = "Estado: ".$request->state ."<br /><br />";
            $contenido      = $contenido . $contenidoExtra;
        }

        $data = array(
            'contenido' => $contenido,
            'titulo' => $asunto
        );
       
        try{
            $destinatarios = ['boletin@maderorefaccionarias.com.mx'];
            
            if(count($destinatarios) > 0) {
                Mail::send('email', $data, function($message) use ($destinatarios, $asunto) {
                    $message->from("boletin@maderorefaccionarias.com.mx", $asunto);
                    $message->to($destinatarios)->subject($asunto);
                });

                return response()->json(['success' => 'true'], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error'=> $exception->getMessage()], 403);
        }

        return response()->json(['error'=> 'Ocurrió un error al mandar el correo.'], 403);
    }
}
