<?php

namespace App\Notifications;

use App\Models\Answer;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QuestionAnsweredNotification extends Notification
{
    use Queueable;

    protected $answer;

    public function __construct(Answer $answer)
    {
        $this->answer=$answer;
    }


    public function via($notifiable)
    {
        $via=['database','broadcast'];
        if($notifiable->notify_email) {
            $via[] = 'mail';
        }
        return $via;
    }


//    public function toMail($notifiable)
//    {
//        return (new MailMessage)
//                    ->line('The introduction to the notification.')
//                    ->action('Notification Action', url('/'))
//                    ->line('Thank you for using our application!');
//    }

    public function toDatabase($notifiable){
        $answer = $this->answer;
        return[
          'title'=>'New answer on your question',
          'body'=>$answer->user->name . ' added new answer on '. $answer->question->title,
          'icon'=>'',
          'url'=>url('/questions/'.$answer->question_id),
        ];

    }
    public function toBroadcast($notifiable){
        $answer = $this->answer;
        return[
            'title'=>'New answer on your question',
            'body'=>$answer->user->name . ' added new answer on '. $answer->question->title,
            'icon'=>'',
            'url'=>url('/questions/'.$answer->question_id),
            'time'=>Carbon::now()->diffForHumans(),
        ];
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
