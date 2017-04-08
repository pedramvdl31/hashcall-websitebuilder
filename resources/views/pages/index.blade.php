@extends($layout)
@section('stylesheets')
@stop
@section('scripts')
@stop

@section('content')


<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Select a Template
            <small>Lists</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
        <a href="/LandingPage">
            <img class="img-responsive" src="/imgs/landing-page.jpg" alt="">
        </a>
        <h3>
            <a href="/LandingPage/">Landing Page</a>
        </h3>
        <p>A clean, functional landing page theme.</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="/FullWidthPics/">
            <img class="img-responsive" src="/imgs/full-width-pics.jpg" alt="">
        </a>
        <h3>
            <a href="/FullWidthPics">Full Width Pics</a>
        </h3>
        <p>Full width picture backgrounds.</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="/freelancer/">
            <img class="img-responsive" src="/imgs/freelancer.jpg" alt="">
        </a>
        <h3>
            <a href="/freelancer">Freelancer</a>
        </h3>
        <p>A one page freelancer theme.</p>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
        <a href="/agencyl/">
            <img class="img-responsive" src="/imgs/agency.jpg" alt="">
        </a>
        <h3>
            <a href="/agencyl/">Agency</a>
        </h3>
        <p>A one page freelancer theme.</p>
    </div>
</div>


<hr>

<!-- Pagination -->
<!-- <div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">&raquo;</a>
            </li>
        </ul>
    </div>
</div> -->
<!-- /.row -->
@stop