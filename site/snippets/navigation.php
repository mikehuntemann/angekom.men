<nav class="flex fixed w-screen z-10 p-4 bg-white px-36">
  
  <div class="flex items-center flex-shrink-0 text-black mr-6">
    <div class="w-48 h-auto">
      <a href="<?= $site->url() ?>">
        <img src="<?= $site
          ->page('info')
          ->image()
          ->url() ?>">
      </a>
    </div>
    <!-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>-->
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-gray-300 hover:border-gray-300">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-lg lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-700 mr-4">
        Workshops
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-700 mr-4">
        Galerie
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-700">
        Videos
      </a>
    </div>
    
    <div>
      
      <!-- <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-black border-gray-700 hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a> -->
    </div>
    <?php snippet('banner'); ?> 
  </div>
 
</nav>
