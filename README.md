# README

## PHP Version change via Brew

`brew unlink php@8.2 && brew link --force --overwrite php@8.1`

## Local Dev

`php -S localhost:8000 kirby/router.php`

`npm run dev`
does not work, why?

## Calendar Plugin

<https://github.com/mzur/kirby-calendar-plugin>

strftime depricated in 8.1
`brew unlink php@8.1 && brew link --force --overwrite php@8.0`
