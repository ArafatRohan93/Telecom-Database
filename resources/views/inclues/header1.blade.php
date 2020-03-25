<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rohan Telecom</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <script type="text/javascript" scr="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" scr="{{url('js/jquery-3.1.0.js')}}"></script>
    <script type="text/javascript" scr="{{url('js/jquery-ui.js')}}"></script>
    <script type="text/javascript" scr="{{url('js/jquery-1.12.4.js')}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><h4>X Telecom Company</h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto" style="float:right">

        <li class="nav-item">
          <form action="{{url('/')}}" method="post">
           {{ csrf_field() }}
        <input type="submit"  value="Home" class="btn btn-primary"/>
        </form>
        </li>
        <li class="nav-item">
          <form action="{{url('/erd')}}" method="post">
           {{ csrf_field() }}
        <input type="submit"  value="About" class="btn btn-primary"/>
        </form>
        </li>

        <li class="nav-item">
          <form action="{{url('/welcome')}}" method="post">
           {{ csrf_field() }}
        <input type="submit"  value="Contact" class="btn btn-primary"/>
        </form>
        </li>

      </ul>
    </div>
  </nav>
