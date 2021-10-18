<div>
       <!-- Comments Section Area -->
       <div class="comments-area bg-default-3 border-bottom border-default-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="comments-form section-title text-left mb-5 mb-md-7">
              <h2 class="section-title__heading">
                Comments
              </h2>
            </div>
            <ul class="list-unstyled">
              <!-- Single Comments -->
              @foreach($comments as $comment)
              <li class="comment-meta-box__single">
                <div class="comment-meta-box d-flex">
                  <div class="comment-meta-box__content">
                    <div class="comment-meta-box__user-info d-flex align-items-end justify-content-between mb-3">
                      <div class="comment-meta-box__details">
                        <a href="#" class="comment-meta-box__name">{{ $comment->user->name }}</a>
                        <a href="#" class="comment-meta-box__date pl-8">
                          {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                        </a>
                        <div class="comment-meta-box__date-time">
                          <!-- <a href="#" class="comment-meta-box__date">
                          {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                          </a> -->
                          <!-- <a href="" class="comment-meta-box__time"> 24 minutes ago</a> -->
                        </div>
                      </div>
                      <!-- <a class="btn-link comment-meta-box__reply-btn text-electric-violet-2" href="#">
                        <i
                                            class="fa fa-reply"></i> Reply</a> -->
                    </div>
                    <p class="comment-meta-box__text">{{ $comment->comment }}</p>
                  </div>
                </div>
                 <!-- sub-comment -->
                <!-- <ul class="list-unstyled sub-comment-meta-box">
                  <li class="comment-meta-box__single">
                    <div class="comment-meta-box d-flex">
                      <div class="comment-meta-box__author-img">
                        <img src="./image/png/user-img-2.png" alt="">
                      </div>
                      <div class="comment-meta-box__content">
                        <div class="comment-meta-box__user-info d-flex align-items-end justify-content-between mb-3">
                          <div class="comment-meta-box__details">
                            <a href="#" class="comment-meta-box__name">Jennifer Ashley</a>
                            <div class="comment-meta-box__date-time">
                              <a href="#" class="comment-meta-box__date">Jan 20, 2021 </a>|
                              <a href="" class="comment-meta-box__time"> 24 minutes ago</a>
                            </div>
                          </div>
                          <a class="btn-link comment-meta-box__reply-btn text-electric-violet-2" href="#">
                            <i class="fa fa-reply"></i> Reply</a>
                        </div>
                        <p class="comment-meta-box__text">OMG! I cannot believe that I have got a brand
                          new landing page after getting
                          Fastland. It
                          was super easy to create, edit and publish.</p>
                      </div>
                    </div>
                  </li>
                </ul> -->
                <!-- /  sub-comment -->
              </li>
              @endforeach
              <!--/ .Single Comments -->
            </ul>
          </div>
          <div class="col-xl-7 col-lg-7 mb-7 mb-lg-0">
            <div class="comments-form">
              <div class="section-title text-left mb-5 mb-md-7">
                <h2 class="section-title__heading">
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
                 
                    <button  wire:click.prevent="addComment" class="btn btn-primary shadow--primary-4 btn--lg-2 rounded-55 text-white">Send
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
