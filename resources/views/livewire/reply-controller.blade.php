<div>
    @foreach ($replies as $reply)
        <div class="bg-light p-4 rounded-55 ml-6 ">
            <a href="#" class="comment-meta-box__name mr-2">{{ $reply->user->name }}</a>
            <a href="#" class="comment-meta-box__date pl-8">
                {{ \Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}
            </a>
            <p class="comment-meta-box__text">{{ $reply->comment }}</p>
        </div>
    @endforeach
    <div x-data="{ open: false }">
        <button @click="open = ! open" class="btn btn--sm-2 text-electric-violet-2 text-left">
            <i class="fa fa-reply"></i> Reply</button>
        <div x-show="open" @click.outside="open = false">
            <input wire:model="newReply" class="form-control" placeholder="Leave a reply here"
                style="height: 100px; width:400px;" />
            <button wire:click="addReply" class="btn bg-yellow shadow--primary-4 btn--sm-2 rounded-55 text-white mt-2">
                Add reply</button>
        </div>
    </div>
</div>
