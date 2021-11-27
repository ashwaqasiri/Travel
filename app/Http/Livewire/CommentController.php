<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;

class CommentController extends Component
{
    public $newComment;
    public $reply;
    public $blog;
    public $comments = [];
    public $replies;
    public $newReply;
    
    protected $listeners = ['ShowComments'];  

    public function mount($id)
    {
      $this->blog = Blog::find($id);
      $this->comments = $this->blog->comments;
    }

    public function addComment()
    {
      if(Auth::check())
      {
        $this->validate([
          'newComment' => 'string|required|max:1000',
        ]);

        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->blog_id = $this->blog->id;
        $comment->comment = $this->newComment;

        $this->blog->comments()->save($comment);
        $this->newComment = '';
        $this->emit('ShowComments');
      }else{
        //guest
        return redirect(route('login'));
      }
    }

    public function ShowComments()
    {
      $this->comments = $this->blog->comments;
    }

    public function addReply(Comment $comment){
      
      if(Auth::check())
      {
        $this->validate([
          'newReply' => 'string|required|max:1000',
        ]);

        Comment::create([
          'user_id' => Auth::id(),
          'parent_id' => $comment->id,
          'blog_id' => $this->blog->id,
          'comment' => $this->newReply,
          ]);

          $this->newReply = '';
          $this->emit('ShowComments');
      }else{
        //guest
        return redirect(route('login'));
      }
    }

    public function render()
    { 
        return view('livewire.comment-controller');
    }
}
