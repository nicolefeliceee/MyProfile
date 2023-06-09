<footer class="w-100 pb-4">
    <nav id="navbar" class="navbar mb-4 mt-0">
        <ul>
            <li><a class="nav-link {{ set_active('index') }}" href="{{ route('index') }}">Home</a></li>
            <li><a class="nav-link {{ set_active('about') }}" href="{{ route('about') }}">About</a></li>
            <li><a class="nav-link {{ set_active('resume') }}" href="{{ route('resume') }}">Resume</a></li>
            <li><a class="nav-link {{ set_active('project') }}" href="{{ route('project') }}">Project</a></li>
            <li><a class="nav-link {{ set_active(['galleries', 'gallery']) }}" href="{{ route('galleries') }}">Gallery</a></li>
            <li><a class="nav-link {{ set_active('contact') }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <hr>
    <div class="bottom-footer d-flex">
        <div class="left-footer">
            <p>© 2023 Nicole | All Right Reserved</p>
        </div>
        <div class="right-footer d-flex justify-content-between ms-auto">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="bi bi-envelope"></i></a>
            <a href="https://www.linkedin.com/in/nicole-felice-81aa171b6/"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/nicolefeliceee"><i class="bi bi-github"></i></a>
            <a href="https://www.instagram.com/nicolefelicee/"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</footer>
