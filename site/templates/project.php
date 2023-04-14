<?php snippet('header'); ?>
<body>
  <?php snippet('banner'); ?>
  <!--
    <div class="max-w-sm pl-16 float-left fixed pt-16">
    <div class="-ml-4 -mb-4">
      <div class="pt-10 sm:pt-10 pb-10">
        <a href="<?= $site->url() ?>"><img class="max-h-screen w-full"src="<?= $site
  ->page('info')
  ->image()
  ->url() ?>">
      </div>
    </a>
    </div>
  </div> -->
   <div class="mx-auto max-w-4xl text-gray-700 px-6 sm:px-8 px-12 sm:pb-20 pr-0 sm:pr-10 text-lg">
  <?php $content = $page->content(); ?>
  <div class="py-12">
   <img src="<?= $content
     ->projectcover()
     ->toFile()
     ->url() ?>" >
  </div>
  <div class="pt-12 pb-32">
    <div class="inline-block  my-1 px-4 py-1 bg-gray-300 uppercase rounded-lg shadow-md">
      <div class="text-ex-dark Roboto text-sm tracking-wide">
        <?= ucfirst($content->title()) ?>
      </div>
    </div>
    <div class="ml-2 inline-block text-ex-dark Roboto text-sm tracking-wide pr-4 hyphenate pb-2">
      <?= $content->dateend()->toDate('dd.MM.YYYY') ?>
      </div>
    <div class="text-ex-dark Roboto text-bold text-xl sm:text-3xl uppercase py-2 pb-6">
      <a href="<?= $content->url() ?>" >
      <?= $content->theme() ?></a>
    </div>
    <?php $projects = $page->videoslots()->toStructure(); ?>
    <?php foreach ($projects as $project): ?>
      <div class="Roboto text-bold text-2xl"><?= $project->title() ?></div>
      <div><?= $project->description()->kt() ?></div>
      <div><?= $project->format() ?></div>
      <!-- if format = video: use link -->
      <?php $photos = $project->photo()->toFiles(); ?>
      <?php foreach ($photos as $photo): ?>
        <img class="max-h-80 mx-auto py-4" src="<?= $photo->url() ?>">
      <?php endforeach; ?>
      <?php if ($project->link()->isNotEmpty()): ?>
      <div class="aspect-w-16 aspect-h-9">
        <iframe src="<?= $project->link() ?>" width="1920" height="1080" scrolling="no" style="border:0px"></iframe>
      </div>
      <?php endif; ?>
    <?php endforeach; ?>


  <div class="max-w-4xl pt-20">
  <img src="<?= $content
    ->groupphoto()
    ->toFile()
    ->url() ?>">
        <ul class=""> <!-- comma-list -->
        <?php foreach ($content->participants()->split() as $participant): ?>
          <li class=" inline mx-6 text-ex-dark Roboto text-lg tracking-wide hyphenate">
            <?= page($participant)->title() ?></li>
        <?php endforeach; ?>
        </ul>
        </div>
    </div>
    </div>
  </div>
</body>
<?php snippet('footer'); ?>
