<?php snippet('header'); ?>
<body>
  <?php snippet('banner'); ?>
   <div class="mx-auto max-w-4xl text-gray-700 px-6 sm:px-8 px-12 sm:pb-20 pr-0 sm:pr-10 text-lg">
  <?php $content = $page->content(); ?>
  <?= $content->title() ?>
  <?= $content->theme() ?>
  <?= $content->datestart() ?>
  <?= $content->dateend() ?>
  <img src="<?= $content
    ->groupphoto()
    ->toFile()
    ->url() ?>">
        <ul>
        <?php foreach ($content->participants()->split() as $participant): ?>
          <li class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12 ">
            <?= page($participant)->title() ?></li>
        <?php endforeach; ?>
        </ul>
          </div>
</body>
<?php snippet('footer'); ?>
