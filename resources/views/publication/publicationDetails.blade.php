<x-layout>


<div class="container xl:mt-32 mx-auto xl:mb-32 mt-32 mb-32">
	<a href="publication" style="background-color: rgb(79, 176, 174);color: rgb(255, 255, 255);"
						 class=" w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
						>Add a publication</a>
		<table class="w-full  flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-white">
			@foreach ($publication as $publications )	
				<tr class="bg-blue-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
					<th class="p-3 text-left text-sm">URL</th>
					<th class="p-3 text-left text-sm">Submit page</th>
					<th class="p-3 text-left text-sm">Twitter Username</th>
					<th class="p-3 text-left text-sm">Followers</th>
					<th class="p-3 text-left text-sm">Alexa Rank</th>
					<th class="p-3 text-left text-sm">Categories</th>
					<th class="p-3 text-left text-sm">Regions</th>
					<th class="p-3 text-left text-sm">Platforms</th>
					<th class="p-3 text-left text-sm" width="110px">Actions</th>
				</tr>
				@endforeach						
                
			</thead>
			<tbody class="flex-1 sm:flex-none">
            
                @foreach ($publication as $publications )
                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->url }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->directLink }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->twitterUsername }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->twitterFollower }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->alexaRanking }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->websiteCategories }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->regions }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm">{{ $publications->platforms }}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-sm text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">
						@if (auth()->user()->id == $publications->user_id)  
							<form method="POST" action="/publication/{{ $publications->id }}">
                                            @csrf
                                            @method('DELETE')

                                <button class="text-xs text-red-400">Delete</button>
                            </form>
					 	@endif
                    </td>
				</tr>
                @endforeach

			
				
			</tbody>
		</table>
        {{ $publication->links() }}
	</div>
</x-layout>

<style>
     @media (min-width: 640px) {
        table {
        display: inline-table !important;
        }

        thead tr:not(:first-child) {
        display: none;
        }
    }

    td:not(:last-child) {
        border-bottom: 0;
    }

    th:not(:last-child) {
        border-bottom: 2px solid rgba(0, 0, 0, .1);
    }
</style>