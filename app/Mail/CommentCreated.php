<?php

namespace App\Mail;

use App\Models\Article\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentCreated extends Mailable
{
    use Queueable, SerializesModels;

    public Comment $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function build(): self
    {
        return $this->view('emails.comment.created');
    }
}
