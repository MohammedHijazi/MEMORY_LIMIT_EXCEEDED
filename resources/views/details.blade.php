@extends('layouts.main')

@section('body')
<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="question-main-bar mb-50px">
                    <div class="question-highlight">
                        <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                            <div class="media-body">
                                <h5 class="fs-20"><a href="question-details.html">{{$question->title}}</a></h5>
                                <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                    <div class="pr-3">
                                        <span>Asked</span>
                                        <span class="text-black">{{$question->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                <div class="tags">
                                    @foreach($tags as $tag)
                                        <a href="{{route('tag',$tag->id)}}" class="tag-link">{{$tag->name}}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div><!-- end media -->
                    </div><!-- end question-highlight -->
                    <div class="question d-flex">
                        <div class="votes votes-styled w-auto">
                            <div id="vote" class="upvotejs">
                                <form action="{{ route('q_upvote') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="vote" value="up">
                                    <input type="hidden" name="votable_id" value="{{$question->id}}">
                                    <button type="submit" class="upvote" data-toggle="tooltip" data-placement="right"></button>
                                </form>
                                    <!--<a  class="upvote upvote-on"  data-toggle="tooltip" data-placement="right" title="This question is useful"></a>-->
                                <span class="count">{{$qscore}}</span>
                                <form action="{{ route('q_upvote') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="vote" value="down">
                                    <input type="hidden" name="votable_id" value="{{$question->id}}">
                                    <button type="submit" class="downvote" data-toggle="tooltip" data-placement="right"></button>
                                </form>
                                    <!-- <a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>-->
                            </div>
                        </div><!-- end votes -->
                        <div class="question-post-body-wrap flex-grow-1">
                            <div class="question-post-body">
                                <p>{{$question->description}}</p>
                            </div><!-- end question-post-body -->
                            <div class="question-post-user-action">
                                <div class="post-menu">
                                    <div class="btn-group">
                                        <button class="btn dropdown-toggle after-none" type="button" id="shareDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
                                        <div class="dropdown-menu dropdown--menu dropdown--menu-2 mt-2" aria-labelledby="shareDropdownMenu">
                                            <div class="py-3 px-4">
                                                <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                <form action="#" class="copy-to-clipboard">
                                                    <span class="text-success-message">Link Copied!</span>
                                                    <input type="text" class="form-control form--control form-control-sm copy-input" value="https://disilab.com/q/66552850/15319675">
                                                    <div class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                        <a href="#" class="btn-text copy-btn">Copy link</a>
                                                        <ul class="social-icons social-icons-sm">
                                                            <li><a href="#" class="bg-8 text-white shadow-none" title="Share link to this question on Facebook"><i class="la la-facebook"></i></a></li>
                                                            <li><a href="#" class="bg-9 text-white shadow-none" title="Share link to this question on Twitter"><i class="la la-twitter"></i></a></li>
                                                            <li><a href="#" class="bg-dark text-white shadow-none" title="Share link to this question on DEV"><i class="lab la-dev"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- btn-group -->
                                    <a href="#" class="btn">Edit</a>
                                    <button class="btn">Follow</button>
                                </div><!-- end post-menu -->
                                <div class="media media-card user-media owner align-items-center">
                                    <a href="user-profile.blade.php" class="media-img d-block">
                                        <img src="{{asset('assets/images/img3.jpg')}}" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="#">{{$question->user->name}}</a></h5>
                                            <div class="stats fs-12 d-flex align-items-center lh-18">
                                                <span class="text-black pr-2">224,110</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span class="ball gold"></span>16</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span class="ball silver"></span>93</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span class="ball"></span>136</span>
                                            </div>
                                        </div>
                                        <small class="meta d-block text-right">
                                            <span class="text-black d-block lh-18">asked</span>
                                            <span class="d-block lh-18 fs-12">6 hours ago</span>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card user-media align-items-center">
                                    <a href="user-profile.blade.php" class="media-img d-block">
                                        <img src="images/img4.jpg" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.blade.php">Kevin Martin</a></h5>
                                            <div class="stats fs-12 d-flex align-items-center lh-18">
                                                <span class="text-black pr-2">6,514</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span class="ball gold"></span>3</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span class="ball silver"></span>35</span>
                                                <span class="pr-2 d-inline-flex align-items-center"><span class="ball"></span>48</span>
                                            </div>
                                        </div>
                                        <a href="revisions.html" class="meta d-block text-right fs-13 text-color">
                                            <span class="d-block lh-18">edited</span>
                                            <span class="d-block lh-18 fs-12">6 hours ago</span>
                                        </a>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end question-post-user-action -->
                            <div class="comments-wrap">
                                <ul class="comments-list">

                                </ul>
                                <div class="comment-form">
                                    <div class="comment-link-wrap text-center">
                                        <a class="collapse-btn comment-link" data-toggle="collapse" href="#addCommentCollapse" role="button" aria-expanded="false" aria-controls="addCommentCollapse" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add a comment</a>
                                    </div>
                                    <div class="collapse border-top border-top-gray mt-2 pt-3" id="addCommentCollapse">
                                        <form method="post" class="row pb-3">
                                            <div class="col-lg-12">
                                                <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                <div class="divider mb-2"><span></span></div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Name</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Email (Address never made public)</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Your email">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Website</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Website link">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Message</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control form--control form-control-sm fs-13" name="message" rows="5" placeholder="Your comment here..."></textarea>
                                                        <div class="d-flex flex-wrap align-items-center pt-2">
                                                            <div class="badge bg-gray border border-gray mr-3 fw-regular fs-13">[named hyperlinks] (https://example.com)</div>
                                                            <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                            <div class="mr-3 font-italic fs-13">_italic_</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                    <div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="getNewComments">
                                                            <label class="custom-control-label custom--control-label" for="getNewComments">Notify me of new comments vai email.</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="getNewPosts">
                                                            <label class="custom-control-label custom--control-label" for="getNewPosts">Notify me of new posts vai email.</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray" type="submit">Post Comment</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </form>
                                    </div><!-- end collapse -->
                                </div>
                            </div><!-- end comments-wrap -->
                        </div><!-- end question-post-body-wrap -->
                    </div><!-- end question -->
                    <div class="subheader d-flex align-items-center justify-content-between">
                        <div class="subheader-title">
                            <h3 class="fs-16">{{$question->answers()->count()}} Answers</h3>
                        </div><!-- end subheader-title -->
                        <div class="subheader-actions d-flex align-items-center lh-1">
                            <label class="fs-13 fw-regular mr-1 mb-0">Order by</label>
                            <div class="w-100px">
                                <select class="select-container">
                                    <option value="active">active</option>
                                    <option value="oldest">oldest</option>
                                    <option value="votes" selected="selected">votes</option>
                                </select>
                            </div>
                        </div><!-- end subheader-actions -->
                    </div><!-- end subheader -->
                    @foreach($answers as $answer)
                        @if($question->id == $answer->question_id)
                            <div class="answer-wrap d-flex">
                                <div class="votes votes-styled w-auto">
                                    <div id="vote2" class="upvotejs">
                                        <form action="{{ route('a_upvote') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="vote" value="up">
                                            <input type="hidden" name="votable_id" value="{{$answer->id}}">
                                            <button type="submit" class="upvote" data-toggle="tooltip" data-placement="right"></button>
                                        </form>
                                        <!--<a  class="upvote upvote-on"  data-toggle="tooltip" data-placement="right" title="This question is useful"></a>-->
                                        @foreach($ascores as $ascore)
                                            @if($ascore->votable_id == $answer->id)

                                              <span class="count">#</span>
                                            @endif
                                        @endforeach
                                        <form action="{{ route('a_upvote') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="vote" value="down">
                                            <input type="hidden" name="votable_id" value="{{$answer->id}}">
                                            <button type="submit" class="downvote" data-toggle="tooltip" data-placement="right"></button>
                                        </form>
                                    </div>
                                </div><!-- end votes -->
                                <div class="answer-body-wrap flex-grow-1">

                                            <div class="answer-body">
                                                <p>{{$answer->content}}</p>
                                            </div><!-- end answer-body -->

                                    <div class="question-post-user-action">
                                        <div class="post-menu">
                                            <div class="btn-group">
                                                <button class="btn dropdown-toggle after-none" type="button" id="shareDropdownMenuTwo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
                                                <div class="dropdown-menu dropdown--menu dropdown--menu-2 mt-2" aria-labelledby="shareDropdownMenuTwo">
                                                    <div class="py-3 px-4">
                                                        <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                        <form action="#" class="copy-to-clipboard">
                                                            <span class="text-success-message">Link Copied!</span>
                                                            <input type="text" class="form-control form--control form-control-sm copy-input" value="https://disilab.com/q/66552850/15319675">
                                                            <div class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                                <a href="#" class="btn-text copy-btn">Copy link</a>
                                                                <ul class="social-icons social-icons-sm">
                                                                    <li><a href="#" class="bg-8 text-white shadow-none" title="Share link to this question on Facebook"><i class="la la-facebook"></i></a></li>
                                                                    <li><a href="#" class="bg-9 text-white shadow-none" title="Share link to this question on Twitter"><i class="la la-twitter"></i></a></li>
                                                                    <li><a href="#" class="bg-dark text-white shadow-none" title="Share link to this question on DEV"><i class="lab la-dev"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- btn-group -->
                                            <a href="#" class="btn">Edit</a>
                                            <button class="btn">Follow</button>
                                        </div><!-- end post-menu -->
                                        <div class="media media-card user-media align-items-center">
                                            <a href="user-profile.blade.php" class="media-img d-block">
                                                <img src="images/img4.jpg" alt="avatar">
                                            </a>
                                            <div class="media-body d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="pb-1"><a href="#">{{$answer->user->name}}</a></h5>

                                                </div>
                                                <small class="meta d-block text-right">
                                                    <span class="text-black d-block lh-18">answered</span>
                                                    <span class="d-block lh-18 fs-12">8 hours ago</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                        <div class="media media-card user-media align-items-center">
                                            <div class="media-body d-flex align-items-center justify-content-end">
                                                <a href="revisions.html" class="meta d-block text-right fs-13 text-color">
                                                    <span class="d-block lh-18">edited</span>
                                                    <span class="d-block lh-18 fs-12">8 hours ago</span>
                                                </a>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end question-post-user-action -->

                                    <div class="comments-wrap">
                                        <ul class="comments-list">

                                        </ul>
                                        <div class="comment-form">
                                            <div class="comment-link-wrap text-center">
                                                <a class="collapse-btn comment-link" data-toggle="collapse" href="#addCommentCollapseTwo" role="button" aria-expanded="false" aria-controls="addCommentCollapseTwo" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add a comment</a>
                                            </div>
                                            <div class="collapse border-top border-top-gray mt-2 pt-3" id="addCommentCollapseTwo">
                                                <form method="post" class="row pb-3">
                                                    <div class="col-lg-12">
                                                        <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                        <div class="divider mb-2"><span></span></div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Name</label>
                                                            <div class="form-group">
                                                                <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Your name">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Email (Address never made public)</label>
                                                            <div class="form-group">
                                                                <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Your email">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Website</label>
                                                            <div class="form-group">
                                                                <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Website link">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <label class="fs-13 text-black lh-20">Message</label>
                                                            <div class="form-group">
                                                                <textarea class="form-control form--control form-control-sm fs-13" name="message" rows="5" placeholder="Your comment here..."></textarea>
                                                                <div class="d-flex flex-wrap align-items-center pt-2">
                                                                    <div class="badge bg-gray border border-gray mr-3 fw-regular fs-13">[named hyperlinks] (https://example.com)</div>
                                                                    <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                                    <div class="mr-3 font-italic fs-13">_italic_</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-12">
                                                        <div class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                            <div>
                                                                <div class="custom-control custom-checkbox fs-13">
                                                                    <input type="checkbox" class="custom-control-input" id="getNewCommentsTwo">
                                                                    <label class="custom-control-label custom--control-label" for="getNewCommentsTwo">Notify me of new comments vai email.</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox fs-13">
                                                                    <input type="checkbox" class="custom-control-input" id="getNewPostsTwo">
                                                                    <label class="custom-control-label custom--control-label" for="getNewPostsTwo">Notify me of new posts vai email.</label>
                                                                </div>
                                                            </div>
                                                            <button class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray" type="submit">Post Comment</button>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                </form>
                                            </div><!-- end collapse -->
                                        </div>
                                    </div><!-- end comments-wrap -->
                                </div><!-- end answer-body-wrap -->
                            </div><!-- end answer-wrap -->
                        @endif
                    @endforeach
                    <div class="subheader">
                        <div class="subheader-title">
                            <h3 class="fs-16">Your Answer</h3>
                        </div><!-- end subheader-title -->
                    </div><!-- end subheader -->
                    <div class="post-form">
                        <form action="{{route('answers.store')}}" method="post" class="pt-3">
                            @csrf
                            <input type="hidden" name="user_id" value="2">
                            <input type="hidden" name="question_id" value="{{$question->id}}">
                            <div class="input-box">
                                <label class="fs-14 text-black lh-20 fw-medium">Body</label>
                                <div class="form-group">
                                    <textarea class="form-control form--control form-control-sm fs-13 user-text-editor" name="content" rows="6" placeholder="Your answer here..."></textarea>
                                </div>
                            </div>

                            <button class="btn theme-btn theme-btn-sm" type="submit">Post Your Answer</button>
                        </form>
                    </div>
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Number Achievement</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">980k</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2">610k</span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3">650k</span>
                                        <p class="fs-14">Answer accepted</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">320k</span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="signup.html" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->



<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<!-- template js files -->

<script src="{{asset('assets/js/upvote.vanilla.js')}}"></script>
<script src="{{asset('assets/js/upvote-script.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-te-1.4.0.min.js')}}"></script>
<script src="{{asset('assets/js/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.multi-file.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@endsection
