@extends('layout')

@section('content')

<!-- Banner -->
<section id="banner">
    <header>
        <h2>Howdy. This is Dopetrope.</h2>
        <p>A responsive template by HTML5 UP</p>
    </header>
</section>

<!-- Intro -->
<section id="intro" class="container">
    <div class="row">
        <div class="4u">
            <section class="first">
                <i class="icon featured fa-cog"></i>
                <header>
                    <h2>Ipsum consequat</h2>
                </header>
                <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
            </section>
        </div>
        <div class="4u">
            <section class="middle">
                <i class="icon featured alt fa-flash"></i>
                <header>
                    <h2>Magna etiam dolor</h2>
                </header>
                <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
            </section>
        </div>
        <div class="4u">
            <section class="last">
                <i class="icon featured alt2 fa-star"></i>
                <header>
                    <h2>Tempus adipiscing</h2>
                </header>
                <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
            </section>
        </div>
    </div>
    <footer>
        <ul class="actions">
            <li><a href="#" class="button big">Get Started</a></li>
            <li><a href="#" class="button alt big">Learn More</a></li>
        </ul>
    </footer>
</section>

@section('home_portfoio')

<!-- Main -->
<div id="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="12u">
                
                <!-- Portfolio -->
                    <section>
                        <header class="major">
                            <h2>My Portfolio</h2>
                        </header>
                        <div class="row">

                            @foreach ($portfolios as $portfolio)

                            <div class="4u">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                                    <header>
                                        <h3>{{$portfolio->title}}</h3>
                                    </header>
                                    <p>{{$portfolio->body}}</p>
                                    <footer>
                                        <a href="#" class="button alt">Find out more</a>
                                    </footer>
                                </section>
                            </div>
                            @endforeach
                            
                          
                        </div>
                        
                    </section>

            </div>
        </div>
        <div class="row">
            <div class="12u">

                <!-- Blog -->
                    <section>
                        <header class="major">
                            <h2>The Blog</h2>
                        </header>
                        <div class="row">
                            @php
                             $images=['images/blog1.jpg','images/blog2.jpg'];
                             $i=0;   
                            @endphp

                            @foreach ($blogs as $blog)

                            <div class="6u">
                                <section class="box">
                                <a href="#" class="image featured"><img src="{{$images[$i]}}" alt="" /></a>
                                    <header>
                                        <h3>{{$blog->title}}</h3>
                                        <p>{{$blog->created_at}}</p>
                                    </header>
                                        <p>{{$blog->body}}</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
                                            <li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>

                            @php
                                $i++;
                            @endphp   

                            @endforeach
                           
                        </div>
                    </section>
                
            </div>
        </div>
    </div>
</div>

    
@endsection
    
@endsection