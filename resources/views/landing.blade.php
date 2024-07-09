<x-guest-layout>
   <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>-->

    <div class="">

<div class="bg-white">
    <!--
      Mobile menu
  
      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="hidden fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
  
      <div class="hidden fixed inset-0 z-40 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
          <div class="flex px-4 pb-2 pt-5">
            <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Links -->
          <div class="mt-2 hidden">
            <div class="border-b border-gray-200">
              <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-1" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-2" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
              </div>
            </div>

          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
            </div>
          </div>
  
    
        </div>
      </div>
    </div>
  
    <!-- Hero section -->
    <div class="relative bg-gray-900">
      <!-- Decorative image and overlay -->
      <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('imgs/mainbg.jpg') }}" alt="main background" class="h-full w-full object-cover object-center">
      </div>
      <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-10"></div>
  
      <!-- Navigation -->
    
  
      <div class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0">
        <h1 class=" font-SourceSans text-4xl font-bold text-duty  tracking-tight  lg:text-6xl">WELCOME TO DUTYFLOW</h1>
      
        <p class="mt-4 text-2xl text-gray-700">Discover insightful articles on productivity, healthy living, and personal organization. Join our community and start your journey towards a more organized and enjoyable lifestyle with DutyFlow.</p>
        <a href="#memberships" class="mt-8 inline-block rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-duty hover:text-white">See Memberships</a>
      </div>
    </div>
  
    <main>
      <!-- Category section -->
      <section id="memberships" aria-labelledby="category-heading" class="pt-24 sm:pt-12 xl:mx-auto xl:max-w-7xl xl:px-8">
        <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
        


          <div class="bg-white">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-base font-semibold leading-7 text-duty font-SourceSans">Memberships</h2>
                <p class="mt-2 text-4xl uppercase font-SourceSans font-bold tracking-tight text-gray-900 sm:text-4xl">Pricing plans for every Household</p>
              </div>
              <p class="mx-auto mt-2 max-w-2xl text-center text-lg leading-8 text-gray-600">Choose an affordable plan that’s packed with the best features for organizing your daily life, incorporating healthy habits, and ensuring a balanced lifestyle.</p>
              
              <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($memberships as $membership)
                <div class="rounded-3xl p-8 ring-2 ring-duty xl:p-10">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 id="tier-{{ Str::slug($membership->name) }}" class="text-lg font-semibold leading-8 text-gray-900">{{ $membership->name }}</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">{{ $membership->description }}</p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-4xl font-bold tracking-tight text-gray-900">${{ $membership->price }}</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                    </p>
                    <a href="#" aria-describedby="tier-{{ Str::slug($membership->name) }}" class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 text-duty ring-1 ring-inset ring-duty hover:ring-fun focus-visible:outline hover:bg-duty hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-duty">BUY PLAN</a>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
                        @foreach($membership->features as $feature)
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-fun" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
           
            
              </div>
            </div>
          </div>
          


        </div>
  
        <div class="mt-4 flow-root">
          <div class="-my-2">
        
          </div>
        </div>
  
        <div class="mt-6 px-4 sm:hidden">
          <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            Browse all categories
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </div>
      </section>
  
      <!-- Featured section -->
      <section aria-labelledby="social-impact-heading" class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
        <div class="relative overflow-hidden rounded-lg border-2 border-duty">
          <div class="absolute inset-0">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-01.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
         <div class="grid grid-cols-2">
            <div class="relative bg-duty bg-opacity-90 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                  <h2 id="social-impact-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Level Up Your Life 
                  </h2>
                  <p class="mt-3 text-xl text-white">Make your daily routine beautiful and organized. Download DutyFlow, share your productivity journey on social media, and watch as it garners more attention than life-changing announcements. Embrace the irony and find joy in a well-organized life. At least you’ll have a perfectly balanced and satisfying routine!</p>
                  <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto hover:bg-fun hover:text-white">Download Now!</a>
                </div>
              </div>
              <div class="relative  bg-white flex ">
                <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                  
                    <img src="{{ asset('imgs/1576.png') }}" alt="mockup" class=" w-1/2 m-auto">
                    
                </div>
              </div>
         </div>
        </div>
      </section>
  
      <!-- Collection section -->
      <section aria-labelledby="collection-heading" class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
        <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Recent Blog Posts</h2>

        <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
            @foreach($blogPosts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="group block">
                <div aria-hidden="true" class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                    <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-lg  font-semibold text-duty">{{ $post->title }}</h3>
                <p class="mt-2 text-sm text-gray-500">{{ Str::limit($post->content, 100) }}</p>
            </a>
            @endforeach
        </div>
    </section>

<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative isolate overflow-hidden  px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:py-32 " style="background-image: url({{ asset('imgs/mainbg.jpg') }}) ;background-size: 100%">
        <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-duty sm:text-4xl font-SourceSans">🚀 Don't Miss Out on the Launch! 🚀</h2>
        <p class="mx-auto mt-2 max-w-xl text-center text-lg leading-8 text-gray-900">Be the first to know when we go live! Subscribe now to get exclusive updates, insider previews, and a special launch-day discount. Join our community of innovators and be part of something extraordinary!"</p>
        <form class="mx-auto mt-10 flex max-w-md gap-x-4">
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-2 bg-white border-duty px-3.5 py-2 text-duty shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6" placeholder="Enter your email">
          <button type="submit" class="flex-none rounded-md  px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-fun focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white font-SourceSans text-white bg-duty">Notify me</button>
        </form>
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
          <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.2" />
          <defs>
            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
              <stop stop-color="#256f77" />
              <stop offset="1" stop-color="#E935C1" stop-opacity="0" />
            </radialGradient>
          </defs>
        </svg>
      </div>
    </div>
  </div>
  
      <!-- Featured section -->
      <section aria-labelledby="comfort-heading" class="hidden mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
          <div class="absolute inset-0">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
          <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
            <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
              <h2 id="comfort-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Simple productivity</h2>
              <p class="mt-3 text-xl text-white">Endless tasks, limited hours, a single piece of paper. Not really a haiku, but we're doing our best here. No kanban boards, burndown charts, or tangled flowcharts with our Focus system. Just the undeniable urge to fill empty circles.</p>
              <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop Focus</a>
            </div>
          </div>
        </div>
      </section>
    </main>
  
    <footer aria-labelledby="footer-heading" class="bg-gray-900">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    
  
        <div class="border-t border-gray-800 py-10">
          <p class="text-sm text-gray-400">Copyright &copy; 2021 DUTYFLOW</p>
        </div>
      </div>
    </footer>
  </div>
  
  
    </div>
</x-guest-layout>
