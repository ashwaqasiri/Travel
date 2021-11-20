<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Component
{
    public Comment $saveComment;
    public $comment ;
    public $newReply;

    protected $rules = [
        'newReply' => 'string|required|max:1000',
      ];

    protected $listeners = ['ShowComment'];  

    public function mount($id)
    {
      $this->comment = Comment::find($id);
      $this->replies = $this->comment->replies;
    }

    public function addReply()
    {
        if(Auth::check())
      {
        $this->validate();
        Comment::create([
        'user_id' => Auth::id(),
        'parent_id' => $this->comment->id,
        'blog_id' => $this->comment->blog->id,
        'comment' => $this->newReply,
        ]);

        // $this->emit('saved');
        $this->newReply = '';
        $this->emit('ShowComment');
      }else{
        //guest
        return redirect(route('login'));
      }
    }

    public function ShowComment(){
      
      $this->replies = $this->comment->replies;
    }

    public function render()
    {
        return view('livewire.reply-controller');
    }
}
