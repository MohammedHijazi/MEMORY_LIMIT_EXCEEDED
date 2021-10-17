@extends('layouts.main')



<!-- ================================
         START QUESTION AREA
================================= -->
@section('body')
<section class="question-area pt-80px pb-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 pr-0">
                <div class="sidebar pb-45px position-sticky top-0">
                    <ul class="generic-list-item generic-list-item-highlight fs-15">
                        <li class="lh-26"><a href="#"><i class="la la-home mr-1 text-black"></i> Home</a></li>
                        <li class="lh-26 active"><a href="#"><i class="la la-globe mr-1 text-black"></i> Questions</a></li>
                        <li class="lh-26"><a href="#"><i class="la la-tags mr-1 text-black"></i> Tags</a></li>
                        <li class="lh-26"><a href="#"><i class="la la-user mr-1 text-black"></i> Users</a></li>
                    </ul>
                </div><!-- end sidebar -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-7 px-0">
                <div class="question-main-bar border-left border-left-gray pb-50px">
                    <div class="filters pb-4 pl-3 d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <h3 class="fs-18 fw-medium">Search results for "{{$query}}"</h3>
                            <p class="pt-1 fs-14 fw-medium lh-20">{{$questions->count()}}</p>
                        </div>
                    </div><!-- end filters -->
                    @foreach($questions as $question)
                        <div class="questions-snippet border-top border-top-gray">
                            <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                                <div class="votes text-center votes-2">
                                    <div class="vote-block">
                                        <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                        <span class="vote-text d-block fs-13 lh-18">votes</span>
                                    </div>
                                    <div class="answer-block answered my-2">
                                        <span class="answer-counts d-block lh-20 fw-medium">3</span>
                                        <span class="answer-text d-block fs-13 lh-18">answers</span>
                                    </div>
                                    <div class="view-block">
                                        <span class="view-counts d-block lh-20 fw-medium">12</span>
                                        <span class="view-text d-block fs-13 lh-18">views</span>
                                    </div>
                                </div>

                                <div class="media-body">
                                    <h5 class="mb-2 fw-medium"><a href="{{route('questions.show',$question->id)}}">{{$question->title}}</a></h5>
                                    <p class="mb-2 truncate lh-20 fs-15">{{$question->description}}</p>
                                    <div class="tags">
                                        @foreach($question->tags()->pluck('name')->toArray() as $tag)
                                            <a href="#" class="tag-link">{{$tag}}</a>
                                        @endforeach
                                    </div>

                                    <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                        <a href="#" class="media-img d-block">
                                            <img src="{{asset('assets/images/img3.jpg')}}" alt="avatar">
                                        </a>
                                        <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                            <div>

                                                <h5 class="pb-1"><a href="{{route('profile',$question->user->id)}}">{{$question->user->name}}</a></h5>

                                                <div class="stats fs-12 d-flex align-items-center lh-18">
                                                    <span class="text-black pr-2" title="Reputation score">224</span>
                                                    <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                                    <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                                    <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                                </div>
                                            </div>
                                            <small class="meta d-block text-right">
                                                <span class="text-black d-block lh-18">asked</span>
                                                <span class="d-block lh-18 fs-12">6 hours ago</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end media -->

                        </div><!-- end questions-snippet -->
                    @endforeach

                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-7 -->

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
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@endsection












