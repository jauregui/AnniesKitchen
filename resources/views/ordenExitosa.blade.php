@extends('layouts.inicio')
@section('content')

<!--<div>
<h1>Tu orden fue realizada con &eacute;xito.</h1>
</div> -->


<div id="wrapper" contenteditable="true" spellcheck="false">
  <p>Tu orden</p>
  <p>fue realizada</p>
  <p>con &eacute;xito.</p>
</div>

<style>
@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:bold);


/* Global ------------------------------------------------------ */

html {
  height: 100%;
  font: 62.5%/1 "Lucida Sans Unicode","Lucida Grande",Verdana,Arial,Helvetica,sans-serif;
  background: url(http://s.cdpn.io/79/glow.png) no-repeat center center,
    url(http://s.cdpn.io/79/tilt-shift.jpg) no-repeat center center;
  background-size: auto, cover;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  background-color: hsla(30,20%,95%,.9);
}


/* Wrapper ------------------------------------------------------ */

#wrapper:focus {
  outline: none;
}


#wrapper p {
  font-size: 8em;
  margin: 0;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  text-shadow: rgba(0,0,0,0.1) 0 20px 80px;
  -webkit-transition: -webkit-transform .1s ease-in; /* only WebKit because of performance */
}


/* Hover ------------------------------------------------------ */

#wrapper:hover p {
  color: hsla(0,0%,0%,0);
  transform: rotate(6.5deg) rotateX(28deg) skewX(-4deg);
  -webkit-transition: -webkit-transform .1s ease-out; /* only WebKit because of performance */
}

#wrapper:hover p:nth-child(1) {
  font-size: 7em;
  text-shadow: #fff 0 0 10px, 
    #fff 0 4px 3px, #ddd 0 9px 3px,  #ccc 0 12px 1px, 
    rgba(0,0,0,0.2) 0 14px 5px, rgba(0,0,0,0.1) 0 20px 10px,
    rgba(0,0,100,0.2) 0 15px 80px;
  text-indent: 0.3em;
}

#wrapper:hover p:nth-child(2) {
  font-size: 8em;
  text-shadow: #fff 0 0 1px, 
    #eee 0 4px 3px, #ddd 0 9px 3px,  #ccc 0 12px 1px, 
    rgba(0,0,0,0.2) 0 14px 3px, rgba(0,0,0,0.1) 0 20px 10px,
    rgba(0,0,100,0.2) 0 15px 80px;
}

#wrapper:hover p:nth-child(3) {
  font-size: 9em;
  text-shadow: #fff 0 0 2px, 
    #fff 0 4px 5px, #ddd 0 9px 5px,  #ccc 0 12px 10px, 
    rgba(0,0,0,0.2) 0 14px 5px, rgba(0,0,0,0.1) 0 20px 10px,
    rgba(0,0,100,0.2) 0 15px 80px;
}


/* Middle ------------------------------------------------------ */

#wrapper p:nth-child(2):hover {
  text-shadow: #fff 0 -5px 1px, 
    #eee 0 -1px 3px, #ddd 0 4px 3px,  #ccc 0 7px 1px, 
    rgba(0,0,0,0.2) 0 15px 5px, rgba(0,0,0,0.1) 0 20px 10px,
    rgba(0,0,0,0.2) 0 15px 80px;
}

#wrapper p:nth-child(2):active {
  text-shadow: rgba(0,0,0,0.2) 0 14px 5px, rgba(0,0,0,0.1) 0 20px 10px,
    rgba(0,0,0,0.2) 0 15px 80px;
}

#wrapper p::selection {
  background-color: red;
}
</style>


@endsection