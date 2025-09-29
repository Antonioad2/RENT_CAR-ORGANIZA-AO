<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Model\Reserve; // adapta se teu namespace for diferente

class ConfirmacaoReservaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reserve;

    /**
     * Criar nova instância do email
     */
    public function __construct(Reserve $reserve)
    {
        $this->reserve = $reserve;
    }

    /**
     * Construir o email
     */
    public function build()
    {
        return $this->subject('Confirmação da sua Reserva - ' . config('app.name'))
                    ->markdown('emails.reserves.confirmacao');
    }
}
