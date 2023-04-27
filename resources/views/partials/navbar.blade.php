<div class="fullNavbar position-fixed">
    <h1><a href="index">Nicole Felice</a></h1>
    <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ set_active('index') }}" href="{{ route('index') }}">Home</a></li>
          <li><a class="nav-link {{ set_active('about') }}" href="{{ route('about') }}">About</a></li>
          <li><a class="nav-link {{ set_active('resume') }}" href="{{ route('resume') }}">Resume</a></li>
          <li><a class="nav-link {{ set_active('project') }}" href="{{ route('project') }}">Project</a></li>
          <li><a class="nav-link {{ set_active(['galleries', 'gallery']) }}" href="{{ route('galleries') }}">Gallery</a></li>
          <li><a class="nav-link {{ set_active('contact') }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</div>
