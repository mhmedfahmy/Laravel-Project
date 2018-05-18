<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom box-shadow">
        <h1><a class="my-0 mr-md-auto font-weight-normal" href="{{ url('') }}">{{config('app.name')}}</a></h1>
        <nav class="mr-md-5">
          <a class="p-4 text-black-50" href="{{ url('about') }}">About</a>
          <a class="p-4 text-black-50" href="{{ url('services') }}">Services</a>
          <a class="p-4 text-black-50" href="{{ url('post') }}">Posts</a>
          <a class="p-4 text-black-50" href="{{ url('post\create') }}">Create Post</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>

      </div>
    