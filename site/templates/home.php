<?php snippet('header') ?>
<body>

  <div class="max-w-4xl mx-auto px-8 pt-20">
    <div class="-ml-4 -mb-4">
      <div class="pt-20 sm:pt-10 ">
        <img class="max-h-screen w-full"src="<?= $site->page('info')->image()->url() ?>">
      </div>
    </div>
  </div>
  <div class="w-full">
  <img class="pt-16 pb-8 xl:px-24" src="../assets/png/logos.png">  
</div>
  <div class="order-2 sm:order-3 w-full pt-12">
    <div class="mx-auto max-w-4xl text-gray-700 px-6 sm:px-8 px-12 sm:pb-32 pr-0 sm:pr-10 text-lg">
      <!--- <div class="subpixel-antialiased -ml-2 text-white font-examen-headline-bold text-5xl sm:text-6xl tracking-widest text-bold pb-8">Info</div> --->
        <div class="grid sm:inline-flex">
          <div class="text-lg pr-4 px-20">
            <?= $site->page('info')->text()->kt() ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="order-3 sm:order-4 w-full pt-4 sm:pt-12">
    <div class="mx-auto max-w-4xl text-gray-200 px-6 sm:px-8 pt-8 pb-12 pr-0 sm:pr-10 text-lg ">
    <?php $videos = $site->page('videos')->videoslots()->toStructure() ?>
      <!---
      <div class="-ml-2 text-ex-dark font-examen-headline-bold text-5xl sm:text-6xl tracking-widest text-bold pt-4 sm:pt-20 pb-8">Beiträge</div>
      <div class="text-ex-dark Roboto text-lg sm:text-2xl tracking-wide pr-4 hyphenate"><?= $site->page('videos')->info()->kt() ?></div>
      --->
      <div class="py-12">
        <?php foreach ($videos as $video): ?>
          <div class="aspect-w-16 aspect-h-9">
            <iframe src="<?= $video->link() ?>" width="1920" height="1080" scrolling="no" style="border:0px"></iframe>
          </div>
          <div class="pt-12 pb-32">
            <div class="mx-12 inline-block  my-1 px-4 py-1 bg-gray-300 uppercase rounded-full shadow-md">
              <div class="text-ex-dark Roboto text-sm tracking-wide">
                <?= ucfirst($video->format()) ?>
              </div>
            </div>
            <div class="text-ex-dark Roboto text-bold text-xl sm:text-3xl text-bold uppercase pb-2 ml-12"><?= $video->title() ?></div>
            <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12"><?= $video->description()->kt() ?></div>
            <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate pt-4 "><?= $video->infobox()->kt() ?></div>
            
            <!--- <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate pb-2 ml-12"><?= $video->date()->toDate('Y/m/d') ?></div>
            <div class="text-ex-dark Roboto italic bold text-lg sm:text-2xl tracking-wide pr-4 hyphenate py-4"><a class="hover:underline" href="<?= $video->link() ?>" target="_blank">Video ansehen</a></div>
            --->
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>

</body>
<?php snippet('footer') ?>
