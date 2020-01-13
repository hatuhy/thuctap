@extends('admin.layouts.main')
@section('title', 'Thông Tin Cá Nhân')
@section('content')
<div class="card1">
    <div class="card-header1">
        <div class="card-header-bar1">
            <a href="#" class="btn-message1"><span class="sr-only">Message</span></a>
            <a href="#" class="btn-menu1"><span class="sr-only">Menu</span></a>
        </div>
        <div class="avatar">
            <img width="80" class="rounded-circle" src="assets/admin/images/avatars/1.jpg" alt="">
        </div>

    </div>

    <div class="card-body1">
        <h2 class="name">John Smith</h2>
        <h4 class="job-title">Product Designer</h4>
        <div class="bio1">
            <p>1dfghj</p>
            <p>1fdghjkl;</p>
            <p>1fdghjkl;</p>
            <p>1fdghjkl;</p>
        </div>
        <div class="social-accounts1">
            <a href="#"><img
                    src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
                    alt=""><span class="sr-only">Dribbble</span></a>
            <a href="#"><img
                    src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
                    alt=""><span class="sr-only">Twitter</span></a>
            <a href="#"><img
                    src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
                    alt=""><span class="sr-only">Instagram</span></a>
        </div>
    </div>

    <div class="card-footer1">
        <div class="stats1">
            <div class="stat1">
                <span class="label">Following</span>
                <span class="value">56K</span>
            </div>
            <div class="stat1">
                <span class="label">Followers</span>
                <span class="value">940</span>
            </div>
            <div class="stat1">
                <span class="label">Likes</span>
                <span class="value">320</span>
            </div>
        </div>
    </div>
</div>

</body>

</html>
@endsection
