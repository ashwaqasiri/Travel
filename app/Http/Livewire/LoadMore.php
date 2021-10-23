<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class LoadMore extends Component
{
    public $amount = 4;

    public function mount()
    {
        $user = Auth::user();
        if ($user)
            $userBlog = Blog::where('user_id',$user->id)->take(4)->get();
        else
         return redirect(route('login'));
    }

    public function render()
    {
        $userBlog = Blog::where('user_id',Auth::id())->take($this->amount)->get();
        return view('livewire.load-more',compact('userBlog'));
    }

    public function load(){
        $this->amount += 6;
    }
}