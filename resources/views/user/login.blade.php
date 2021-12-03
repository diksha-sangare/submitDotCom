<x-layout>
    <div class="flex flex-wrap  xl:mt-24 mt-24 xl:mb-0 mb-20">
        <div class="xl:w-1/2 w-full  hidden lg:flex items-center justify-center bg-indigo-100 flex-1 h-screen">
            <div class="max-w-xs transform duration-200 hover:scale-110 cursor-pointer">
                <p class="xl:text-4xl text-md font-bold text-gray-600"> Submit.co</p>
                <p class="text-gray-600 xl:text-sm text-xs font-semibold no-underline">Where to get press coverage for your startup</p>
            </div>
        </div>
        <div class="xl:w-1/2 w-full mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-28 xl:px-24 xl:max-w-2xl">
            <h2 class="text-center text-4xl font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold" style="color:#00ccd2;">Sign In</h2>
            <form action="login" method="post">
                @csrf
                <div class="mt-8">
                    <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>
                    <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none" name="email" style="border-color:#00ccd2;" type="text" placeholder="eg. mike@gmail.com">
                </div>
                <div class="mt-8">
                    <div class="flex justify-between items-center">
                        <div class="text-sm font-bold text-gray-700 tracking-wide">Password</div>
                        <div><a class="text-xs font-display font-semibold
                                        cursor-pointer" style="color:#00ccd2;">Forgot Password?</a></div>
                    </div>
                    <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none " name="password" style="border-color:#00ccd2;" type="password" placeholder="Enter your password">
                </div>
                <div class="mt-10">
                    <button class=" text-gray-700 p-4 w-full rounded-full tracking-wide
                                font-bold font-display focus:outline-none  focus:shadow-outline hover:bg-blue-500
                                shadow-lg" style="background:#00FFF2;">
                        Sign In
                    </button>
                </div>
            </form>
            <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                Don't have an account ? <a class="cursor-pointer font-bold" style="color:#00ccd2;" href="register">Sign up</a>
            </div>
        </div>
    </div>
</x-layout>