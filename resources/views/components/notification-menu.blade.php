<div class="nav-right-button">
    <ul class="user-action-wrap d-flex align-items-center">
        <li class="dropdown">
            @foreach($notifications as $notification)
                @if($notification->unread())
                    <span class="ball red ball-lg noti-dot"></span>
                @endif
            @endforeach
            <a class="nav-link dropdown-toggle dropdown--toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="la la-bell"></i>
            </a>
            <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="notificationDropdown">
                <h6 class="dropdown-header"><i class="la la-bell pr-1 fs-16"></i>Notifications</h6>
                <div class="dropdown-divider border-top-gray mb-0"></div>
                <div class="dropdown-item-list" id="notification">
                    @foreach($notifications as $notification)
                        <a class="dropdown-item" href="{{route('notifications.read',$notification->id)}}">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-body p-0 border-left-0">
                                    <h4 class="fs-14 fw-regular">{{$notification->data['title']}}</h4>
                                    <br>
                                    <h5 class="fs-14 fw-regular">{{$notification->data['body']}}</h5>
                                    <small class="meta d-block lh-24">
                                        <span>{{$notification->created_at->diffForHumans()}}</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a class="dropdown-item pb-1 border-bottom-0 text-center btn-text fw-regular" href="notifications.html">View All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
            </div>
        </li>
    </ul>
</div><!-- end nav-right-button -->
