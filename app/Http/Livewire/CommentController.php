<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;

class CommentController extends Component
{
    public $user;
    public $comment;
    public $reply;
    public $blog;
    public $comments = [];

    protected $rules = [
        'comment' => 'string|required|max:1000',
      ];

    public function mount($id)
    {
      $this->blog = Blog::find($id);
      $this->comments = $this->blog->comments;
    }

    public function addComment()
    {

      $this->validate([
        'comment' => 'required'
      ]);
      
      $newComment = Comment::create([
        'user_id' => Auth::user()->id,
        'blog_id' => $this->blog->id,
        'comment' => $this->comment
      ]);

      $this->comments->push($newComment);
      $this->comment = '';
    }

    public function render()
    { 
        return view('livewire.comment-controller');
    }
}
