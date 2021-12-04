<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    #modal {
      margin-left: 60%;
      margin-top: 70px;
      width: 700px;
      height: auto;

    }

    @media screen and (max-width: 653px) and (min-width: 320px) {
      #modal {
        margin-left: -93px;
        margin-top: 93px;
        width: 520px;
        height: auto;
      }
    }
  </style>
</head>

<nav style="background:#00ccd2;" class="flex items-center justify-between fixed flex-wrap  p-6  w-full z-10 top-0">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a class="text-white xl:w-full w-40 no-underline hover:text-white hover:no-underline" href="/">
        <span class="text-xl pl-2 font-bold"> Submit.co</span>
        <p class="text-white xl:text-sm text-xs font-semibold pl-2 no-underline  hover:text-white hover:no-underline">Where to get press coverage for your startup</p>

      </a>
    </div>

    <div class="block lg:hidden">
      <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
        @auth 

        <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
        
        <li class="mr-3">
					<a class="inline-block py-2 px-4 text-white xl:text-md  font-semibold hover:underline no-underline hover:bg-transparent rounded-md" href="publicationDetails">Publication</a>
				</li>
        <li class="mr-3">
					<a class="inline-block py-2 px-4 text-white xl:text-md  font-semibold hover:underline no-underline hover:bg-transparent rounded-md" href="dashboard">Dashboard</a>
				</li>
				<li class="mr-3">
					<a id="openBtn"  class="inline-block text-gray-600  no-underline font-semibold xl:text-md  xl:ml-0 ml-3 rounded-md  hover:underline py-2 px-4"
            style="background:#00FFF2;" href="#">Get Updates</a>
				</li>
        <li class="mr-3">

          <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
            @csrf
            <!--   <a class="inline-block py-2 px-4 text-white xl:text-md  font-semibold hover:underline no-underline hover:bg-transparent rounded-md" href="logout">Sign Out</a> -->
            <button type="submit">Log Out</button>
          </form>
        </li>
       
        @else
        <li class="mr-3">
					<a class="inline-block py-2 px-4 text-white xl:text-md  font-semibold hover:underline no-underline hover:bg-transparent rounded-md" href="login">Sign in / Sign up</a>
				</li>
        @endauth

      </ul>
    </div>

  </nav>

       <!--Make Model-->
  <!-- <div  id="modal" 
      class="mt-16 rounded-md modal-bg transition-opacity duration-500 opacity-0 pt-2 fixed w-1/2  left-0 z-10 overflow-auto">
        <div  class="modal-content relative rounded-md m-auto bg-gray-100 w-1/2 shadow-lg">
          <div class="p-4 ">
            <input style="border:3px solid #EFF0F0;box-shadow: inset 1px 1px 2px 0px rgb(0 0 0 / 2%);" class="w-full h-12 px-4 mb-2 text-base text-gray-300 placeholder-gray-400   rounded-md focus:outline-none" type="text" placeholder="jane@example.com" />
            <button class="w-full h-12 px-6 text-white uppercase font-bold transition-colors duration-150  rounded-md
              focus:shadow-outline hover:bg-indigo-800" style="background-image: linear-gradient(-180deg, #42AEE6 0%, #3199DE 100%);
              box-shadow: inset 1px 1px 2px 0px rgb(0 0 0 / 2%);">Notify Me</button>
          </div>
        </div>
  </div> -->
    <!-- End Make Model-->

  {{ $slot }}

  <!-- footer -->
  <footer class="border-t border-gray-300">
    <div class=" container flex flex-col flex-wrap px-4 py-16 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap  ">
      <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
        <a class="flex items-center justify-center text-4xl font-bold  md:justify-start " style="color:#00ccd2;">
          Submit.co
        </a>
        <p class="mt-2 text-sm text-justify text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at sequi cum, impedit fuga in placeat illo eum minima possimus est perferendis distinctio explicabo eos natus consequuntur blanditiis odio optio?
        </p>
        <div class="flex mt-4">
          <input type="text" class=" h-auto p-2 text-sm border border-grey-light round text-grey-dark " placeholder="Your email address" />
          <button class="h-auto p-3 text-xs text-white  rounded-md" style="background:#00ccd2;">
            Subscribe
          </button>
        </div>
        <div class="flex justify-center mt-4 lg:mt-2">
          <a>
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </div>
      </div>
      <div class="justify-between w-full mt-4 text-center lg:flex">
        <div class="w-full px-4 lg:w-1/3 md:w-1/2">
          <h2 class="mb-2 font-bold tracking-widest text-gray-900">
            Useful Links
          </h2>
          <ul class="mb-8 space-y-2 text-sm list-none">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Home</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">About Us</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Blogs</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="w-full px-4 lg:w-1/3 md:w-1/2">
          <h2 class="mb-2 font-bold tracking-widest text-gray-900">
            Useful Links
          </h2>
          <ul class="mb-8 space-y-2 text-sm list-none">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Home</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">About Us</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Blogs</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="w-full px-4 lg:w-1/3 md:w-1/2">
          <h2 class="mb-2 font-bold tracking-widest text-gray-900">
            Useful Links
          </h2>
          <ul class="mb-8 space-y-2 text-sm list-none">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Home</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">About Us</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Blogs</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex justify-center -mt-12">
      <p class="text-base text-gray-600">
        All rights reserved by @ company 2021
      </p>
    </div>
  </footer>


  <script>
    //Javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function() {
      document.getElementById("nav-content").classList.toggle("hidden");
    }

    var modal = document.querySelector("#modal");
    var openBtn = document.querySelector("#openBtn");
    var closeBtn = document.querySelector(".closeBtn");

    openBtn.onclick = function() {
      modal.classList.add('opacity-100');
      modal.classList.add('z-50');
    }

    closeBtn.onclick = function() {
      modal.classList.remove('opacity-100');
      modal.classList.remove('z-50');
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.classList.remove('opacity-100');
        modal.classList.remove('z-50');
      }
    }
  </script>
</body>


</html>