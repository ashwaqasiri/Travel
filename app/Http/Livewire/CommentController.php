<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;

class CommentController extends Component
{
    public Comment $comment;
    public $newComment;
    public $reply;
    public $blog;
    public $comments = [];

    protected $rules = [
        'newComment' => 'string|required|max:1000',
      ];
    
    // protected $listeners = ['ShowComments' => 'mount'];  

    public function mount($id)
    {
      $this->blog = Blog::find($id);
      $this->comments = $this->blog->comments;
    }

    public function addComment()
    {
      if(Auth::check())
      {

        $this->validate();
        
        $createComment = Comment::create([
          'user_id' => Auth::user()->id,
          'blog_id' => $this->blog->id,
          'comment' => $this->newComment
        ]);
       
        $this->comments->push($createComment);
        $this->newComment = '';
        // $this->emit('ShowComments');
      }
      else {
        //guest
        return redirect(route('login'));
      }
    }

    public function render()
    { 
        return view('livewire.comment-controller');
    }
}
