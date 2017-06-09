@include('layouts.header')

{{-- <!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top animated fadeIn" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img id="logo" src="{{ asset('images/logo_white.png') }}" class="img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Start</a>
                </li>
                <li>
                    <a class="page-scroll" href="#download">Über uns</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Wohnungen</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Faaker See</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Kontakt</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav> --}}

<div class="custom-nav">
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        
        <div class="container">  
            <div class="row">

                <div class="col-12 logo">

                    <img id="logo" src="{{ asset('images/logo_white.png') }}" class="img-responsive center-block">
                </div>

                <div class="col-12">

                    <ul class="nav navbar-nav">

                        <li><a href="#">Start</a></li>
                        <li><a href="#">Über uns</a></li>
                        <li><a href="#">Unser Haus</a></li>
                        <li><a href="#">Faaker See</a></li>
                        <li><a href="#">Kontakt</a></li>

                    </ul>

                </div>

            </div>
            
        </div>

    </nav>

</div>


<!-- Intro Header -->
<header class="intro">
    <div class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
        </div>
    </div>

    <!-- Remeber to put all the content you want on top of the slider below the slider code -->

    <div class="title">
      <h1>This is Awesome</h1>
    </div>
</header>

<section id="form" class="content-section">
    <div class="form-section">
        <div class="containter">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    @if(Session::has('message'))
                        <div class="alert alert-info">
                          {{Session::get('message')}}
                        </div>
                    @endif

                    {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                    <div class="form-group">
                        {!! Form::label('Your Name') !!}
                        {!! Form::text('name', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Your name')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your E-mail Address') !!}
                        {!! Form::text('email', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Your e-mail address')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your Message') !!}
                        {!! Form::textarea('message', null, 
                            array('required', 
                                'class'=>'form-control', 
                                'placeholder'=>'Your message')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Contact Us!', 
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur voluptatum adipisci sint eius delectus eveniet expedita similique, illo asperiores necessitatibus ratione illum veniam sed veritatis maiores sunt et cum, molestiae earum eos dicta explicabo dignissimos? Eveniet reprehenderit nulla accusantium a, corrupti sapiente quaerat mollitia non architecto dolorem fugit quidem nemo aspernatur quam ut commodi autem veniam debitis sunt magni rem libero voluptatibus. Ullam non maiores modi laboriosam ab velit eum reprehenderit numquam distinctio voluptate sequi possimus aliquid quae animi eligendi a, atque sint voluptas fugit, ad ipsam blanditiis quod nesciunt! Voluptate, odio repudiandae architecto quidem commodi similique iusto magni voluptates!
            </div>
        </div>
    </div>
</section>
<!-- Download Section -->
<section id="download" class="content-section text-center">
    <div class="form-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur voluptatum adipisci sint eius delectus eveniet expedita similique, illo asperiores necessitatibus ratione illum veniam sed veritatis maiores sunt et cum, molestiae earum eos dicta explicabo dignissimos? Eveniet reprehenderit nulla accusantium a, corrupti sapiente quaerat mollitia non architecto dolorem fugit quidem nemo aspernatur quam ut commodi autem veniam debitis sunt magni rem libero voluptatibus. Ullam non maiores modi laboriosam ab velit eum reprehenderit numquam distinctio voluptate sequi possimus aliquid quae animi eligendi a, atque sint voluptas fugit, ad ipsam blanditiis quod nesciunt! Voluptate, odio repudiandae architecto quidem commodi similique iusto magni voluptates!
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')

