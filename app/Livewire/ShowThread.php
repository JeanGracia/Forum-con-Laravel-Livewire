<?php

namespace App\Livewire;

use App\Models\Thread;
use App\Models\User;
use Livewire\Component;

class ShowThread extends Component
{
    public Thread $thread;
    public $body = '';

    public function postReply()
    {
        //validate
        $this->validate(['body' => 'required']);

        //create
        auth()->user()->replies()->create([
            'thread_id' => $this->thread->id,
            'body' => $this->body
        ]);

        //clear input field
        $this->body = '';
        //dd($this->body);
    }

    public function render()
    {
        return view('livewire.show-thread', [
            'replies' => $this->thread
                ->replies()
                ->whereNull('reply_id')//condición para listar solo las respuestas padres
                ->with('user', 'replies.user', 'replies.replies') //mejora de consulta y rendimiento
                ->get()
        ]);
    }
}
