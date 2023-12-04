<?php $calendar = new Mzur\KirbyCalendar\Calendar($page->calendar()->yaml()); ?>

<?php dump($calendar); ?>

<?php snippet('calendar-div', [
  'calendar' => $calendar,
  'fields' => [
    'summary' => t('title'),
    'description' => t('description'),
  ],
]); ?>

