<?php snippet('header'); ?>
<body>
  <!-- NAVIGATION -->
  <!-- WORKSHOP META -->
  <div class="mx-auto max-w-4xl text-gray-700 sm:px-8 px-12 sm:pb-20 pr-0 sm:pr-10 text-lg">
    <?php $content = $page->content(); ?>
    <div class="pb-6 pt-24">
      <img src="<?= $content
        ->projectcover()
        ->toFile()
        ->url() ?>" >
    </div>
    
    <div class="pt-6 pb-32">
      <div class="inline-block my-1 px-4 py-1 bg-gray-300 uppercase rounded-lg shadow-md">
        <div class="text-ex-dark Roboto text-sm tracking-wide">
          <?= ucfirst($content->title()) ?>
        </div>
      </div>
      <div class="ml-2 inline-block text-ex-dark Roboto text-sm tracking-wide pr-4 hyphenate pb-2">
        <?= $content->dateend()->toDate('dd.MM.YYYY') ?>
      </div>
      <div class="text-ex-dark Roboto text-bold text-xl sm:text-3xl uppercase py-2 pb-6">
        <a href="<?= $content->url() ?>" >
          <?= $content->theme() ?>
        </a>
      </div>
    <div class="text-lg pb-20"><?= $content->description() ?></div>
    
    <!-- PROJECTS / ACTIVITIES -->
    
    <?php $projects = $page->videoslots()->toStructure(); ?>
    
    <?php foreach ($projects as $project): ?>
      <!-- VIDEO -->
      
      <?php if (
        $project->format() == 'video' &&
        $project->link()->isNotEmpty()
      ): ?>
        <div class="py-6">
          <div class="aspect-w-16 aspect-h-9 ">
            <iframe src="<?= $project->link() ?>" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            <!-- <iframe src="<?= $project->link() ?>" width="1920" height="1080" scrolling="no" style="border:0px"></iframe>-->
          </div>
          <div class="Roboto text-bold text-2xl pt-4"><?= $project->title() ?></div>
          <div class="Roboto text-bold"><?= $project
            ->description()
            ->kt() ?></div>
        </div>
      <?php endif; ?>
      
      <!-- STATEMENT -->
       <?php if ($project->format() == 'statement'): ?>
        <div class="py-6">
          <div class="Roboto text-bold pb-6"><?= $project
            ->description()
            ->kt() ?></div>
          <div class=""><?= $project->participant()->title() ?></div>
        </div>
      <?php endif; ?>
      
      <!-- FOTO -->
       <?php if ($project->format() == 'photo'): ?>
        <div class="py-6">
          <div class="Roboto text-bold text-2xl"><?= $project->title() ?></div>
          <div class="Roboto text-bold pb-6"><?= $project
            ->description()
            ->kt() ?>
          </div>
          <?php $photos = $project->photo()->toFiles(); ?>
          <?php foreach ($photos as $photo): ?>
            <img class="py-4" src="<?= $photo->url() ?>">
            <div class="pl-4 text-xs"><?= $photo->caption() ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- MAKING-OF -->
      <?php if ($project->format() == 'making-of'): ?>
        <div class="">
          <div>making-of vorhanden</div>
        </div>
      <?php endif; ?>
      
      
      
 
      
    <?php endforeach; ?> <!-- projects as project -->


  <div class="max-w-4xl pt-20">
    <div class="Roboto text-bold text-2xl py-4">Teilnehmende</div>
  <img src="<?= $content
    ->groupphoto()
    ->toFile()
    ->url() ?>">
    <div class="pl-4 text-xs py-2 px-2"><?= $content
      ->groupphoto()
      ->toFile()
      ->caption() ?></div>
      
        <ul class="pt-2 pl-4 comma-list"> <!-- comma-list -->
        <!-- <?php foreach (
          $content->participants()->split()
          as $participant
        ): ?>
          <li class="mt-1 text-xs inline text-ex-dark Roboto tracking-wide hyphenate list-none">
            <?= page($participant)->title() ?></li>
        <?php endforeach; ?> -->
        </ul>
        </div>
    </div>
    </div>
  </div>
</body>
<?php snippet('footer'); ?>
