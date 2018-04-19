@extends('layouts.master')

@section('title', 'Clean Blog')

@section('content')

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">資訊管理系</h4>

                    <div id="filters-container" class="cbp-l-filters-button">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".general" class="cbp-filter-item">一般教室
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".computer" class="cbp-filter-item">電腦教室
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".topic" class="cbp-filter-item">專題教室
                            <div class="cbp-filter-counter"></div>
                        </div>

                    </div>

                    {{--501--}}
                    <div id="grid-container" class="cbp-l-grid-projects">
                        <ul>
                            @foreach($class as $class)
                            <li class="{{$class->typename}}">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/works/{{$class->photo}}" alt="" />
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                    <a href='{{ route('classtatus.index',$class->name)}}' class="cbp-l-caption-buttonLeft" > 查看借用情況 </a>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title">{{$class->name}}</div>
                                <div class="cbp-l-grid-projects-desc">{{$class->type}}</div>

                            </li>
                                @endforeach
                        </ul>
                    </div>

                    <div class="cbp-l-loadMore-button">
                        <a href="ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--<footer></footer>--}}
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>


    </body>

    </html>
@endsection