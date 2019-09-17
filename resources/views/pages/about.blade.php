@extends('pages.template', ['title'=>'About'])

@section('contenu')
    <div class="container">
        <h2>What is Laracarte?</h2>
        <p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">laramap.com</a> </p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning"> <strong><i class="fa fa-exclamation-triangle" aria-hidden ="true" ></i> This app has been built by<a href="https://twitter.com/etsmo">@etsmo</a> for learning purpose.</strong></p>
        </div>
    </div>
        <p>Feel free to help to improve the <a href="https://github.com/Abrangao/projet_abrangao.git">source code </a></p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the wibsite by which Laracarte was inspired</p>
        <p>More info <a href="https://laramap.com/p/about">here.</a> </p>


        <hr>
        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other section</p>

        <ul>
            <li>Laravel </li>
            <li>BootStrap</li>
            <li>Amazon 3</li>

        </ul>
    </div>

@stop
