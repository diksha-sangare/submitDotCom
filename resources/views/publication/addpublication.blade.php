<x-layout>



<div class="bg-grey-lighter  min-h-screen flex flex-col xl:mt-32 xl:mb-32">
            <div class="container max-w-4xl mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded border shadow-md text-black w-full">
                    <h1 style="color:rgb(79, 176, 174);" class="mb-8 text-3xl text-center font-bold">Add Publication</h1>
            <form action="publication" method="post">
                @csrf

                <!-- 1 -->
                <div class="flex flex-wrap pt-7">
                    <div class="xl:w-1/12 w-1/12 ">
                        <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                            <span class="ml-2 truncate" >1</span>
                            <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </div>
                    <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your website's homepage URL ? *</label>
                                    <input type="text" required name="url"
                                        class="w-full px-4 py-3 border-b focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="https://">
                                </div>
                    </div>
                </div>

                <!-- 2 -->
				    <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >2</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: Direct link to your contact page </label>
                                    <input type="text"  name="directLink"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="https://">
                                </div>
                            </div>
                        </div>
                     <!-- 3 -->
                     <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >3</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: What's your site's Twitter account?</label>
                                    <input type="text"  name="twitterUsername"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
                     <!-- 4 -->
					 <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >4</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your email address? *</label>
                                    <span class="text-sm text-gray-600">This is just so we can reach you. We'll keep this private.</span>
                                    <input type="email" required name="email"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="name@example.com">
                                </div>
                            </div>
                        </div>

                     <!-- 5 -->
					 <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >5</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your Twitter follower count?</label>
                                    <input type="text" required name="twitterFollower"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >6</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your  Alexa ranking?</label>
                                    <input type="text" required name="alexaRanking"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>


                        <!-- 7 -->
                        <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >7</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your website categories?</label>
                                    <input type="text" required name="websiteCategories"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>


                     <!-- 8 -->
                     <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >8</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: What's your regions?</label>
                                    <input type="text"  name="regions"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>


                     <!-- 9 -->
					 <div class="flex flex-wrap mt-5">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >9</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 xl:pr-32">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 16px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: What's your site platforms?</label>
                                    <input type="text"  name="platforms"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>

               
                
                <div class="mt-10">
                    <button type="submit" style="background-color: rgb(79, 176, 174);color: rgb(255, 255, 255);"
						 class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
						>Complete</button>
                </div>
            </form>
                   
                </div>

            </div>
        </div>






</x-layout>