<div>
       <!-- Comments Section Area -->
       <div class="comments-area bg-default-6 border-bottom border-default-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="comments-form section-title text-left mb-5 mb-md-7">
              <h2 class="section-title__sub-heading header-color">
                Comments
              </h2>
            </div>
            <ul class="list-unstyled">
            @if(count($comments))
              <!-- Single Comments -->
              @foreach($comments as $comment)
              <li class="comment-meta-box__single">
                <div class="comment-meta-box d-flex">
                  <div class="comment-meta-box__content">
                    <div class="comment-meta-box__user-info d-flex align-items-end justify-content-between mb-3">
                      <div class="comment-meta-box__details">
                        <a href="#" class="comment-meta-box__name mr-2">{{ $comment->user->name }}</a>
                        <a href="#" class="comment-meta-box__date pl-8">
                          {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                        </a>
                      </div>
                    </div>
                    <p class="comment-meta-box__text">{{ $comment->comment }}</p>
                    @livewire('reply-controller',['id' => $comment->id])
                    {{-- <div x-data="{ open: false }">
                      <button @click="open = ! open" class="btn btn--sm-2 text-electric-violet-2 text-left">
                      <i class="fa fa-reply"></i> Reply</button>
                      <div x-show="open" @click.outside="open = false">
                        <input wire:model="newRelpy" class="form-control" placeholder="Leave a reply here"  style="height: 100px; width:400px;"/>
                        <button wire:click="addReply({{$comment->id}})" class="btn bg-yellow shadow--primary-4 btn--sm-2 rounded-55 text-white mt-2">
                           Add reply</button>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </li>
              @endforeach
              <!--/ .Single Comments -->
            @else
            <p class="section-title__sub-heading header-color">
              No Comments Yet..
            </p>
            @endif
            </ul>
          </div>
          <div class="col-xl-7 col-lg-7 mb-7 mb-lg-0">
            <div class="comments-form">
              <div class="section-title text-left mb-5 mb-md-7">
                <h2 class="section-title__sub-heading header-color">
                  Share your response
                </h2>
              </div>
              <form class="contact-form">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-floating">
                      <textarea wire:model="newComment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" style="height: 100px"></textarea>
                      <label for="floatingTextarea3">Type your comment.. </label>
                    </div>
                  </div>
                  <div class="col-lg-12">
                 
                    <button  wire:click.prevent="addComment" class="btn bg-yellow shadow--primary-4 btn--lg-2 rounded-55 text-white mt-6">Send
                      Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ .Comments Section Area -->
</div>
