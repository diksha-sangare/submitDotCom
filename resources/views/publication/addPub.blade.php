<x-layout>

<!-- This is an example component -->
<div class="h-screen">
 
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<style>
		[x-cloak] {
			display: none;
		}

		#progressbar
        {
            margin-top:-120px;
            width:100%;
        }
        #progressbarInner
        {
            width:1000px;
        }
        #progressbarInnerSec
        {
            background-color: rgb(79, 176, 174);
        }
		

	
	</style>


<form action="publication" method="post">

@csrf

<div x-data="app()" x-cloak>
		<div class="max-w-full mx-auto mt-44 px-4 py-10 xl:pl-40 xl:pr-40 pl-10 pr-10">

			<div x-show.transition="step === 'complete'">
                <div class="bg-white rounded-lg p-10 flex items-center border shadow-lg justify-between">
                        <div class="w-full">
                            <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Thanks for submitting your site!</h2>

                            <div class="text-gray-600 mb-8 text-center">
                            Please give us a few days to get back to you.
                            </div>

                            <a href="/" style="background-color: rgb(79, 176, 174);color: rgb(255, 255, 255);"
                                class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                            >Visit Submit.co</a>
                        </div>
                    </div>
			</div>

			<div x-show.transition="step != 'complete'">	
				<!-- Top Navigation -->
				<div id="progressbar" >
					<div class="fixed flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex items-center ">
							<div id="progressbarInner" class="xl:ml-24 rounded-full bg-gray-700">
								<div  id="progressbarInnerSec" class=" rounded-full text-xs leading-none h-2 text-center " :style="'width: '+ parseInt(step / 9 * 100) +'%'"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Top Navigation -->

				<!-- Step Content -->
				<div class="py-10">	
                    <!-- 1 -->
					<div x-show.transition.in="step === 1" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >1</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your website's homepage URL ? *</label>
                                    <input type="text" required name="url"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="https://">
                                </div>
                            </div>
                        </div>
					</div>

                     <!-- 2 -->
					<div x-show.transition.in="step === 2" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >2</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: Direct link to your contact page </label>
                                    <input type="text"  name="directLink"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="https://">
                                </div>
                            </div>
                        </div>
					</div>

                     <!-- 3 -->
					<div x-show.transition.in="step === 3" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >3</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: What's your site's Twitter account?</label>
                                    <input type="text"  name="twitterUsername"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
					</div>

                     <!-- 4 -->
					<div x-show.transition.in="step === 4" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >4</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your email address? *</label>
                                    <span class="text-sm text-gray-600">This is just so we can reach you. We'll keep this private.</span>
                                    <input type="email" required name="email"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="name@example.com">
                                </div>
                            </div>
                        </div>
					</div>

                     <!-- 5 -->
					<div x-show.transition.in="step === 5" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >5</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your Twitter follower count?</label>
                                    <input type="text" required name="twitterFollower"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
					</div>


                        <!-- 6 -->
					<div x-show.transition.in="step === 6" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >6</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your  Alexa ranking?</label>
                                    <input type="text" required name="alexaRanking"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
					</div>


                        <!-- 7 -->
					<div x-show.transition.in="step === 7" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >7</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">What's your website categories?</label>
                                    <input type="text" required name="websiteCategories"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
					</div>


                     <!-- 8 -->
					<div x-show.transition.in="step === 8" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >8</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: What's your regions?</label>
                                    <input type="text"  name="regions"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
					</div>



                     <!-- 9 -->
					<div x-show.transition.in="step === 9" class="pt-36">
                        <div class="flex flex-wrap ">
                            <div class="xl:w-1/12 w-1/12 ">
                                <span class="w-fill flex " style="color:rgb(79, 176, 174);">
                                    <span class="ml-2 truncate" >9</span>
                                    <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                            <div class="xl:w-11/12 w-11/12 ">
                                <div class="mb-5">
                                    <label for="firstname" style="font-weight: unset;font-size: 20px;line-height: 28px;" class="font-bold mb-1 text-xl text-gray-700 block">Optional: What's your site platforms?</label>
                                    <input type="text"  name="platforms"
                                        class="w-full px-4 py-3 border-b  focus:outline-none " style="color: rgb(79, 176, 174);box-shadow: rgb(79 176 174 / 30%) 0px 1px;background-color: transparent !important;"
                                        placeholder="Type your answer here...">
                                </div>
                            </div>
                        </div>
					</div>


                  
					
                    

                    
				</div>
				<!-- / Step Content -->
			</div>
		</div>

		<!-- Bottom Navigation -->	
		<div class=" bottom-0 left-0 right-0 py-5 bg-white xl:mt-20 xl:mb-36" x-show="step != 'complete'">
			<div class="max-w-3xl mx-auto px-4">
				<div class="flex justify-between">
					<!-- <div class="w-1/2">
						<button style="background-color: rgb(79, 176, 174);color: rgb(255, 255, 255);"
							x-show="step > 1" @click="step--" class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
						>Previous</button>
					</div> -->

					<div class="w-1/2 text-right">
						<button style="background-color: rgb(79, 176, 174);color: rgb(255, 255, 255);"
							x-show="step < 9" @click="step++" class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
						>Next</button>

						<button type="submit" style="background-color: rgb(79, 176, 174);color: rgb(255, 255, 255);"
							@click="step = 'complete'" x-show="step === 9" class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
						>Complete</button>
					</div>
				</div>
			</div>
		</div>
	</div>




</form>


	<script>
		function app() {
			return {
				step: 1, 
			}
		}
	</script>


</x-layout>