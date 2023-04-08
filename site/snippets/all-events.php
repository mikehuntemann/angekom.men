<?php $calendar = new Mzur\KirbyCalendar\Calendar(
  page('calendar')
    ->calendar()
    ->yaml()
); ?>

<?php snippet('calendar-table', [
  'calendar' => $calendar,
  'fields' => [
    'summary' => t('title'),
    'description' => t('description'),
  ],
]); ?>
