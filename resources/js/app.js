require('./bootstrap');

require('alpinejs');


// window.Echo.private('answers').listen('.question.answered',function (event){
//     alert(`question answered ${event.answer.user_id}`)
// });

window.Echo.private(`App.Models.User.${userId}`)
    .notification(function (e){
        $('#notification').prepend(`
                        <a class="dropdown-item" href="#">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-body p-0 border-left-0">
                                    <h4 class="fs-14 fw-regular">${e.title}</h4>
                                    <br>
                                    <h5 class="fs-14 fw-regular">${e.body}</h5>
                                    <small class="meta d-block lh-24">
                                        <span>${e.time}</span>
                                    </small>
                                </div>
                            </div>
                        </a>`);
    })
