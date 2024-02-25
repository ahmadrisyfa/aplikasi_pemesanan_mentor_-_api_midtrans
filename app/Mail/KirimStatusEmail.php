<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class KirimStatusEmail extends Mailable
{
    use Queueable, SerializesModels;
 
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $nama_lengkap,$email,$id;

    public function __construct($nama_lengkap,$email,$id)
    {
        $this->nama_lengkap = $nama_lengkap;
        $this->email = $email;
        $this->id = $id;


    }
    
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@gmail.com')    
                    ->view('kirim_email_status')
                    ->with(
                        [
                            'nama_lengkap' => $this->nama_lengkap, 
                            'email' => $this->email, 
                            'id' => $this->id, 

                            
                        ]
                    );
    }

}

