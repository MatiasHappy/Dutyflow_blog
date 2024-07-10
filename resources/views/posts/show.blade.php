<x-guest-layout>


        <div class="bg-white px-6 py-12 lg:px-8 m-auto">
           
            <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
                <h1 class="my-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $post->title }}</h1>
              <div class="post-meta ">  <p class="text-base pr-2 font-semibold leading-7 text-duty"> Author: {{$post->user->name}}</p>

              
                <p class="text-base font-semibold leading-7 text-duty pr-2">Published date: {{$post->created_at}}</p></div>
              
                <p class="mt-6 text-xl leading-8">{{ Str::limit($post->content, 200) }}</p>
                
                    <p class="mt-8">{{ $post->content }}</p>
        
                    <figure class="mt-16">
                        <img class="aspect-video rounded-xl bg-gray-50 object-cover" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                        <figcaption class="mt-4 flex gap-x-2 text-sm leading-6 text-gray-500">
                            <svg class="mt-0.5 h-5 w-5 flex-none text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
                            </svg>
                          
                        </figcaption>
                    </figure>
                    <p class="mt-10">{{ $post->content }}</p>
                </div>
               
               
            </div>
        </div>

    

</x-guest-layout>
