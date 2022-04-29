@extends('layouts.app')

@section('content')
<div class="container">

    <div class="slider">
        <ul class="slides">
          <li>
            <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- Tab content -->
      <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
      </div>
      
      <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
      </div>
      
      <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>

      </div>

</div>

<script>

    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</script>
@endsection
