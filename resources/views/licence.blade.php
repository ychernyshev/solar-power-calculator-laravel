@extends('inc/default-starter')

@section('section')
  @include('inc.preview-nav')
  <div class="title m-b-md" style="position: relative; padding-top: 2rem; text-align: center;">
          <a href="/" class="underline-none text-light">Solar Power Calculator</a>
          <h2 style="position: absolute; bottom: -2rem; right: 0; font-size: 1.1rem" class="weight-600 text-upper text-light">Laravel edition</h2>
  </div>
  <h3 class="text-left w-100">MIT Licence</h3>
  <p class="text-left w-100">Copyright (c) 2026 Eugene</p>
  <p class="text-justify">Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:</p>
  <p class="text-justify w-100">The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.</p>
  <p class="text-justify">THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
    SOFTWARE.</p>
  <p class="text-left w-100">
    <a href="#" class="btn btn-outline-secondary">Third party licenses</a>
    <a href="https://github.com/ychernyshev/solar-power-calculator-laravel"
      style="font-weight: bold; text-decoration: none"
      class="links weight-600 text-upper text-light"
      target="_blank">
      Source code
    </a>
  </p>
@endsection
