<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{config('app.name','laravel-app')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li>
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li>
              <a class="nav-link" href="/about">About</a>
            </li>
            <li>
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li>
                <a class="nav-link" href="/posts">Blog</a>
              </li>
          </ul>
          <ul class='navbar-nav nav-right'>
          <li><a class='nav-link' href='/posts/create'>Create Post</a></li>
          </ul>
          
        </div>
      </nav>