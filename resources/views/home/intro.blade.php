<div class="container-fluid intro">

        <div class="row">
            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach ($slides as $slide)
                        
                        <div class="item">
                            <img src="/storage/{{ $slide->image }}">
                            <div class="carousel-caption">
                                <h3>{{ $slide->caption }}</h3>
                            </div>
                        </div>

                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div><!-- intro -->