<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <nav style="background-color:#00ccd2;" class="flex items-center justify-between flex-wrap bg-teal p-6 ">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <span class="font-semibold text-xl tracking-tight"><a href="#"><u>Submit.co</u></a></span>
        </div>

        <div class="w-full block flex-grow lg:flex lg:items-center  justify-center lg:w-auto">
            <div class="text-xl lg:flex-grow flex items-center justify-end ">
                <a href="#" class=" hover:bg-gray-500 hover:underline rounded-md py-2 px-2 hover:text-black   text-white mr-4">
                    Add a Publication
                </a>
                <a id="openBtn" href="#" style="background-color:#00FFF2;" class="  hover:underline rounded-md py-2 px-2 text-black mr-4">
                    Get Updates
                </a>
                </button>
                <a href="#" class="  hover:bg-red-100 hover:underline  rounded-md py-2 px-2 hover:text-black text-white ">
                    Powered by BetaList
                </a>
            </div>
        </div>
    </nav>
    <!--End Header-->
    <!--Make Model-->
    <div style="margin-left:55%;" id="modal" class=" modal-bg transition-opacity duration-500 opacity-0 pt-2 fixed w-1/2 h-full left-0 z-10 overflow-auto">
        <div class="modal-content relative m-auto bg-gray-100 w-1/2 shadow-lg">
            <div class="p-4 ">
                <span class="closeBtn float-right -mt-3 mr-6 text-lg font-bold hover:text-gray-500 no-underline cursor-pointer"></span>
                <input class=" ml-4 text-xl rounded-md px-10 py-2 placeholder-gray-500 ..." placeholder="jane@example.com">
                <div class="p-4">
                    <button class="rounded-md px-28 py-3 text-xl text-white bg-blue-400">
                        Notify Me
                    </button>
                </div>
            </div>



        </div>
    </div>
    <!-- End Make Model-->

    <!--Footer-->
    <script>
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