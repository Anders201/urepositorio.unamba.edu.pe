<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Formulario;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class RepositorioMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $otrosDatos;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $otrosDatos)
    {
        $this->nombre = $nombre;
        $this->otrosDatos = $otrosDatos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('backend.email.observacion')
                    ->subject('Observaciones Repositorio Institucional de la UNAMBA')
                    ->with([
                        'nombre' => $this->nombre,
                        'otrosDatos' => $this->otrosDatos,
                    ]);        
    }
}
