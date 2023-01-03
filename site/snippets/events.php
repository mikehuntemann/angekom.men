  <div class="order-3 sm:order-4 w-full pt-4 sm:pt-12">
    <div class="mx-auto max-w-4xl text-gray-200 px-6 sm:px-8 pt-8 pb-12 pr-0 sm:pr-10 text-lg ">
        <?php $events = $site->page('events')->eventslots()->toStructure() ?>
        <div class="-ml-2 text-ex-dark font-examen-headline-bold text-5xl sm:text-6xl tracking-widest text-bold pt-4 sm:pt-20 pb-8">Events</div>
        <div class="text-ex-dark font-examen-text-regular text-lg sm:text-2xl tracking-wide pr-4 hyphenate"><?= $site->page('events')->info()->kt() ?></div>
        <!-- <div class="text-ex-dark font-examen-text-regular italic bold text-lg sm:text-2xl tracking-wide pr-4 hyphenate py-4">
          <a class="hover:underline" href="https://teamup.com/ks5voio8iwo8ufsem3" target="_blank">Zum Veranstaltungskalender</a>
        </div> -->
        <div class="py-12">
          <?php foreach ($events as $event): ?>
          <div class="pt-12">
            <div class="text-ex-dark font-examen-text-regular text-lg sm:text-xl tracking-wide pr-4 hyphenate pb-2">
              <?= $event->date()->toDate('d.m.Y') ?>, <?= $event->time() ?> Uhr
            </div>
            <div class="text-ex-dark font-examen-text-regular text-bold text-xl sm:text-3xl tracking-widest leading-7 text-bold uppercase pb-2"><?= $event->title() ?></div>
            <div class="text-ex-dark font-examen-text-regular text-lg sm:text-2xl tracking-wide pr-4 hyphenate"><?= $event->description()->kt() ?></div>
            <div class="text-ex-dark font-examen-text-regular text-lg sm:text-xl tracking-wide pr-4 hyphenate pt-4"><?= $event->infobox()->kt() ?></div>
            <div class="text-ex-dark font-examen-text-regular italic bold text-lg sm:text-2xl tracking-wide pr-4 hyphenate py-4"><a class="hover:underline" href="<?= $event->location() ?>" target="_blank">Veranstaltung beitreten</a></div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>