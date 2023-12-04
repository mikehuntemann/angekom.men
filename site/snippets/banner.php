<?php if (
  $site
    ->page('banner')
    ->toggle()
    ->toBool() === true
): ?>
  <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
    <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
      <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
    </div>
    <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
      <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
    </div>
    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
      <p class="text-sm leading-6 text-gray-900">
        <strong class="font-semibold"><?= $site
          ->page('banner')
          ->eventtype() ?></strong>
        <svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
          <circle cx="1" cy="1" r="1" />
        </svg>
        <?= $site->page('banner')->bannertext() ?>
        <!--- $date->nearest() to automate? --->
        <?php $nextevent = $site->page('banner')->nextevent(); ?>
        <?= page($nextevent)
          ->content()
          ->datestart()
          ->toDate('dd. MMMM') ?>
      </p>
      <?php if (
        $site
          ->page('banner')
          ->actionbutton()
          ->toBool() === true
      ): ?>
      <a href="<?= $site
        ->page('banner')
        ->bannerurl() ?>" target="_blank" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
        <?= $site->page('banner')->bannerbutton() ?>
        <span aria-hidden="true">&rarr;</span>
      </a>
      <?php endif; ?>
    </div>
    <div class="flex flex-1 justify-end">
    </div>
  </div>
  
    <?php if (
      $site
        ->page('banner')
        ->showImage()
        ->toBool() === true
    ): ?>
  <div class="max-w-4xl mx-auto px-8 pt-0 pb-32">
    <div class="-ml-4 -mb-4">
      <div class="pt-20 sm:pt-10 ">
        <img class="max-h-screen w-full"src="<?= $site
          ->page('banner')
          ->projectCover()
          ->toFile()
          ->url() ?>">
      </div>
      <div class="flex justify-between sm:justify-start lg:justify-end ">
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-12 hyphenate pt-4 ">
        <?= $site
          ->page('banner')
          ->eventDescription()
          ->kt() ?>
        </div>
                <div class="text-ex-dark Roboto text-lg tracking-wide pr-12 hyphenate pt-4 ">
        <?= $site
          ->page('banner')
          ->eventLocation()
          ->kt() ?>
        </div>
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate pt-4 ">
        <?= $site
          ->page('banner')
          ->eventStreet()
          ->kt() ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php endif; ?>