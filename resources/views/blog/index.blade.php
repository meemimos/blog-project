@extends('layouts.main')

@section('content')

<!-- Page Content -->

    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                @foreach($posts as $post)
                    <h2>
                        <a href="#">{{ $post->title }}</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">mimos</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> 2 min ago</p>

                    @if($post->image_url)
                        <hr>
                        <img class="img-responsive" src="{{ $post->image_url }}" alt="">
                    @endif

                    <hr>
                    <p>{{ $post->excerpt }}</p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                @endforeach


                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            @include('layouts.sidebar')

        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->
@endsection