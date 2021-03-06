@extends("website.master")

@section("title")
    Home
@endsection

@section("content")

{{--hero section slider--}}

<div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" id="heroSlider">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset("/")}}website/img/slider1.png" alt="" class="img-fluid w-100 h-600">
            <div class="my-carousel">
                <div class="carousel-caption my-caption">
                    <h3>Web Development Master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, obcaecati.</p>
                    <a href="" class="btn btn-light">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset("/")}}website/img/slider2.png" alt="" class="img-fluid w-100 h-600">
            <div class="my-carousel">
                <div class="carousel-caption my-caption">
                    <h3>Web Design Master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, obcaecati.</p>
                    <a href="" class="btn btn-light">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset("/")}}website/img/slider3.png" alt="" class="img-fluid w-100 h-600">
            <div class="my-carousel">
                <div class="carousel-caption my-caption">
                    <h3>Android Development Master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, obcaecati.</p>
                    <a href="" class="btn btn-light">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset("/")}}website/img/slider4.png" alt="" class="img-fluid w-100 h-600">
            <div class="my-carousel">
                <div class="carousel-caption my-caption">
                    <h3>AI Development Master</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, obcaecati.</p>
                    <a href="" class="btn btn-light">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset("/")}}website/img/slider5.png" alt="" class="img-fluid w-100 h-600">
            <div class="my-carousel">
                <div class="carousel-caption my-caption">
                    <h3>Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, obcaecati.</p>
                    <a href="" class="btn btn-light">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Latest Course Starts--}}

<section class="py-3 bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body bg-transparent border-0">
                    <h2 class="text-center text-uppercase fw-bold">Latest Courses</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            @foreach($courses as $course)
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{asset($course->image)}}" alt="" class="h-250">
                    <div class="card-body">
                        <h5><a href="{{route("website.course-detail" , ["id" => $course->id])}}" class="text-decoration-none text-black">{{$course->title}}</a></h5>
                        <h5></h5>
                        <p>Course Fee : Tk. {{$course->fee}}</p>
                        <hr/>
                        <a href="{{route("website.course-detail" , ["id" => $course->id])}}" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{--Our Instructor Starts--}}

<section class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="'card card-body border-0 text-center bg-transparent">
                    <h2 class="text-uppercase fw-bold text-white">Our Instructors</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            @foreach($teachers as $teacher)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{asset($teacher->image)}}" alt="" class="h-250">
                    <div class="card-body">
                        <h5>{{$teacher->name}}</h5>
                        <p>{{$teacher->designation}}</p>
                        <hr/>
                        <ul class="nav mx-auto">
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-github-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{--Student Review Starts--}}

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body border-0 bg-transparent">
                    <h2 class="text-uppercase text-center fw-bold">Students Review</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" id="customerReview">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#customerReview" data-bs-slide-to="0" class="active img-one"></li>
                        <li data-bs-target="#customerReview" data-bs-slide-to="1" class="img-two"></li>
                        <li data-bs-target="#customerReview" data-bs-slide-to="2" class="img-three"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset("/")}}/website/img/member1.png" alt="" class="member-image"/>
                            <div class="carousel-caption customer-caption">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                                <h3 class="text-color">- Olivia -</h3>
                                <p>Melbour, Aus</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset("/")}}/website/img/member2.png" alt="" class="member-image"/>
                            <div class="carousel-caption customer-caption">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                                <h3 class="text-color">- Olivia -</h3>
                                <p>Melbour, Aus</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset("/")}}/website/img/member3.png" alt="" class="member-image"/>
                            <div class="carousel-caption customer-caption">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                                <h3 class="text-color">- Olivia -</h3>
                                <p>Melbour, Aus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
