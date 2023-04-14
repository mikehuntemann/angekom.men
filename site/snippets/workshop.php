<?php $workshops = $site
  ->page('workshops')
  ->children()
  ->listed(); ?>
<!--- <?php dump($workshops); ?> -->
<?php foreach ($workshops as $workshop): ?>
  <!-- <?php dump($workshop); ?> -->
  
  <div class="mx-auto max-w-4xl text-gray-200 px-6 sm:px-8 pt-8 pb-12 pr-0 sm:pr-10 text-lg ">
    <div class="py-12">
      <div>
        <a href="<?= $workshop->url() ?>"><?= $workshop
  ->projectcover()
  ->toFile() ?></a>
      </div>
      <div class="pt-12 pb-32">
        <div class="ml-12 inline-block  my-1 px-4 py-1 bg-gray-300 uppercase rounded-lg shadow-md">
          <div class="text-ex-dark Roboto text-sm tracking-wide">
            <?= ucfirst($workshop->title()) ?>
          </div>
        </div>
        <div class="ml-2 inline-block text-ex-dark Roboto text-sm tracking-wide pr-4 hyphenate pb-2">
          <?= $workshop->dateend()->toDate('dd.MM.YYYY') ?>
          </div>
        <div class="text-ex-dark Roboto text-bold text-xl sm:text-3xl text-bold uppercase py-2 ml-12">
          <a href="<?= $workshop->url() ?>" >
          <?= $workshop->theme() ?></a>
        </div>
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12">
          <?= $workshop->intro()->kt() ?>
        </div>
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12 pt-4">
          <a href="<?= $workshop->url() ?>" class="text-blue-700 text-sm tracking-wide pr-4 hyphenate pb-2">
          Mehr erfahren..</a>
        </div>
        <!--
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate pt-4 "><?= $workshop
          ->infobox()
          ->kt() ?></div>
        </div>
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12 ">videoslots: <?= $workshop->videoslots() ?></div>
 
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12 ">info: <?= $workshop->info() ?></div>
        <div class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12 ">participants:</div>
        <ul>
        <?php foreach ($workshop->participants()->split() as $participant): ?>
          <li class="text-ex-dark Roboto text-lg tracking-wide pr-4 hyphenate mx-12 "><?= page(
            $participant
          )->title() ?></li>
        <?php endforeach; ?>
        </ul>
          -->
      </div> <!-- class="pt-12 pb-32" -->
    </div> <!-- class="py-12" -->
  </div> <!-- class="mx-auto max-w-4xl text-gray-200 px-6 sm:px-8 pt-8 pb-12 pr-0 sm:pr-10 text-lg "> -->
      
  
   
      
<?php endforeach; ?>
<!---
<?php $people = $site->page('team')->children(); ?>
  <?php foreach ($people as $person): ?>
    <?php dump($person->content()); ?>
<?php endforeach; ?>
  -->

