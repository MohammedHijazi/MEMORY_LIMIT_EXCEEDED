<?php

namespace App\Listeners;

use App\Events\QuestionAnswered;
use App\Models\User;
use App\Notifications\QuestionAnsweredNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class QuestionAnsweredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(QuestionAnswered $event)
    {
        $answer=$event->answer;
        $user=User::where('id',$answer->question->user_id)->first();
        $user->notify(new QuestionAnsweredNotification($answer));
    }
}
