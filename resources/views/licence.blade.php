@extends('inc/default-starter')

@section('section')
  @include('inc.preview-nav')
  <div class="title m-b-md" style="position: relative; padding-top: 2rem; text-align: center;">
          <a href="/" class="underline-none text-c-light" style="a:href ">Solar Power Calculator</a>
          <h2 style="position: absolute; bottom: -2rem; right: 0; font-size: 1.1rem" class="weight-600 text-upper text-c-light">Laravel edition</h2>
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
      <a class="btn btn-outline-secondary text-c-light text-upper"
      data-bs-toggle="collapse" href="#collapseExample"
      role="button" aria-expanded="false" aria-controls="collapseExample">
        Third party licenses
      </a>
      <a href="https://github.com/ychernyshev/solar-power-calculator-laravel"
        style="font-weight: bold; text-decoration: none"
        class="links weight-600 text-upper text-c-light ml-5"
        target="_blank">
        Source code
      </a>
    </p>

    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        {{-- Corousell --}}
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            @foreach ($licences as $licence)
              {{-- <button type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0+{{ $licence->id }}"
              class="active"
              aria-current="true"
              aria-label="Slide {{ $licence->id }}"></button> --}}
              <button type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="{{ $licence->id }}"
              aria-label="Slide {{ $licence->id }}"></button>
            @endforeach


            {{-- <button type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2+"
            aria-label="Slide 3"></button>
            <button type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"></button> --}}
          </div>
          <div class="carousel-inner">
            @foreach ($licences as $licence)
              <div class="carousel-item active text-left">
                <h3>Bootstrap</h3>
                <h5>{{ $licence->type }} License</h5>
                <p>Copyright (c) {{ $licence->year }} {{ $licence->vendor }}</p>
                <p style="text-align: justify">Permission is hereby granted, free of charge, to any person obtaining a copy
                of this software and associated documentation files (the "Software"), to deal
                in the Software without restriction, including without limitation the rights
                to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                copies of the Software, and to permit persons to whom the Software is
                furnished to do so, subject to the following conditions:</p>
                <p style="text-align: justify">The above copyright notice and this permission notice shall be included in all
                copies or substantial portions of the Software.</p>
                <p style="text-align: justify">THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                SOFTWARE.</p>
              </div>
            @endforeach

            {{-- <div class="carousel-item text-left">
              <h3>Bootswatch</h3>
              <h5>MIT License</h5>
              <p>Copyright (c) 2013 Thomas Park</p>
              <p style="text-align: justify">Permission is hereby granted, free of charge, to any person obtaining a copy
              of this software and associated documentation files (the "Software"), to deal
              in the Software without restriction, including without limitation the rights
              to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
              copies of the Software, and to permit persons to whom the Software is
              furnished to do so, subject to the following conditions:</p>
              <p style="text-align: justify">The above copyright notice and this permission notice shall be included in all
              copies or substantial portions of the Software.</p>
              <p style="text-align: justify">THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
              IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
              FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
              AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
              LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
              OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
              SOFTWARE.</p>
            </div>
            <div class="carousel-item text-left">
              <h3>Bootstrap Icons</h3>
              <h5>MIT License</h5>
              <p>Copyright (c) 2019-2025 The Bootstrap Authors</p>
              <p style="text-align: justify">Permission is hereby granted, free of charge, to any person obtaining a copy
              of this software and associated documentation files (the "Software"), to deal
              in the Software without restriction, including without limitation the rights
              to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
              copies of the Software, and to permit persons to whom the Software is
              furnished to do so, subject to the following conditions:</p>
              <p style="text-align: justify">The above copyright notice and this permission notice shall be included in all
              copies or substantial portions of the Software.</p>
              <p style="text-align: justify">THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
              IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
              FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
              AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
              LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
              OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
              SOFTWARE.</p>
            </div>
            <div class="carousel-item text-left">
              <h3>Font Awesome Free</h3>
              <h5 style="text-decoration: dashed">Font Awesome Free License</h5>
              <p>------------------------------------</p>
              <p style="text-align: justify">Font Awesome Free is free, open source, and GPL friendly. You can use it for
              commercial projects, open source projects, or really almost whatever you want.</p>
              <h5>MIT License</h5>
              <p>Copyright (c) 2022 Fonticons, Inc.</p>
              <p style="text-align: justify">Permission is hereby granted, free of charge, to any person obtaining a copy
              of this software and associated documentation files (the "Software"), to deal
              in the Software without restriction, including without limitation the rights
              to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
              copies of the Software, and to permit persons to whom the Software is
              furnished to do so, subject to the following conditions:</p>
              <p style="text-align: justify">The above copyright notice and this permission notice shall be included in all
              copies or substantial portions of the Software.</p>
              <p style="text-align: justify">THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
              IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
              FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
              AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
              LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
              OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
              SOFTWARE.</p> --}}
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        {{-- end Corousell --}}
      </div>
    </div>
@endsection
