<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Las Tejas</title>

    <!-- Bootstrap core CSS -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->

    <style>

    /*!<link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */

@font-face {
    font-family: 'FontAwesome';
    src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
    src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
    font-weight: normal;
    font-style: normal
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.fa-lg {
    font-size: 1.33333333em;
    line-height: .75em;
    vertical-align: -15%
}

.fa-2x {
    font-size: 2em
}

.fa-3x {
    font-size: 3em
}

.fa-4x {
    font-size: 4em
}

.fa-5x {
    font-size: 5em
}

.fa-fw {
    width: 1.28571429em;
    text-align: center
}

.fa-ul {
    padding-left: 0;
    margin-left: 2.14285714em;
    list-style-type: none
}

.fa-ul>li {
    position: relative
}

.fa-li {
    position: absolute;
    left: -2.14285714em;
    width: 2.14285714em;
    top: .14285714em;
    text-align: center
}

.fa-li.fa-lg {
    left: -1.85714286em
}

.fa-border {
    padding: .2em .25em .15em;
    border: solid .08em #eee;
    border-radius: .1em
}

.fa-pull-left {
    float: left
}

.fa-pull-right {
    float: right
}

.fa.fa-pull-left {
    margin-right: .3em
}

.fa.fa-pull-right {
    margin-left: .3em
}

.pull-right {
    float: right
}

.pull-left {
    float: left
}

.fa.pull-left {
    margin-right: .3em
}

.fa.pull-right {
    margin-left: .3em
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8)
}

@-webkit-keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}

@keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}

.fa-rotate-90 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}

.fa-rotate-180 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}

.fa-rotate-270 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg)
}

.fa-flip-horizontal {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    -webkit-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    transform: scale(-1, 1)
}

.fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
    -webkit-transform: scale(1, -1);
    -ms-transform: scale(1, -1);
    transform: scale(1, -1)
}

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
    filter: none
}

.fa-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle
}

.fa-stack-1x,
.fa-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center
}

.fa-stack-1x {
    line-height: inherit
}

.fa-stack-2x {
    font-size: 2em
}

.fa-inverse {
    color: #fff
}

.fa-glass:before {
    content: "\f000"
}

.fa-music:before {
    content: "\f001"
}

.fa-search:before {
    content: "\f002"
}

.fa-envelope-o:before {
    content: "\f003"
}

.fa-heart:before {
    content: "\f004"
}

.fa-star:before {
    content: "\f005"
}

.fa-star-o:before {
    content: "\f006"
}

.fa-user:before {
    content: "\f007"
}

.fa-film:before {
    content: "\f008"
}

.fa-th-large:before {
    content: "\f009"
}

.fa-th:before {
    content: "\f00a"
}

.fa-th-list:before {
    content: "\f00b"
}

.fa-check:before {
    content: "\f00c"
}

.fa-remove:before,
.fa-close:before,
.fa-times:before {
    content: "\f00d"
}

.fa-search-plus:before {
    content: "\f00e"
}

.fa-search-minus:before {
    content: "\f010"
}

.fa-power-off:before {
    content: "\f011"
}

.fa-signal:before {
    content: "\f012"
}

.fa-gear:before,
.fa-cog:before {
    content: "\f013"
}

.fa-trash-o:before {
    content: "\f014"
}

.fa-home:before {
    content: "\f015"
}

.fa-file-o:before {
    content: "\f016"
}

.fa-clock-o:before {
    content: "\f017"
}

.fa-road:before {
    content: "\f018"
}

.fa-download:before {
    content: "\f019"
}

.fa-arrow-circle-o-down:before {
    content: "\f01a"
}

.fa-arrow-circle-o-up:before {
    content: "\f01b"
}

.fa-inbox:before {
    content: "\f01c"
}

.fa-play-circle-o:before {
    content: "\f01d"
}

.fa-rotate-right:before,
.fa-repeat:before {
    content: "\f01e"
}

.fa-refresh:before {
    content: "\f021"
}

.fa-list-alt:before {
    content: "\f022"
}

.fa-lock:before {
    content: "\f023"
}

.fa-flag:before {
    content: "\f024"
}

.fa-headphones:before {
    content: "\f025"
}

.fa-volume-off:before {
    content: "\f026"
}

.fa-volume-down:before {
    content: "\f027"
}

.fa-volume-up:before {
    content: "\f028"
}

.fa-qrcode:before {
    content: "\f029"
}

.fa-barcode:before {
    content: "\f02a"
}

.fa-tag:before {
    content: "\f02b"
}

.fa-tags:before {
    content: "\f02c"
}

.fa-book:before {
    content: "\f02d"
}

.fa-bookmark:before {
    content: "\f02e"
}

.fa-print:before {
    content: "\f02f"
}

.fa-camera:before {
    content: "\f030"
}

.fa-font:before {
    content: "\f031"
}

.fa-bold:before {
    content: "\f032"
}

.fa-italic:before {
    content: "\f033"
}

.fa-text-height:before {
    content: "\f034"
}

.fa-text-width:before {
    content: "\f035"
}

.fa-align-left:before {
    content: "\f036"
}

.fa-align-center:before {
    content: "\f037"
}

.fa-align-right:before {
    content: "\f038"
}

.fa-align-justify:before {
    content: "\f039"
}

.fa-list:before {
    content: "\f03a"
}

.fa-dedent:before,
.fa-outdent:before {
    content: "\f03b"
}

.fa-indent:before {
    content: "\f03c"
}

.fa-video-camera:before {
    content: "\f03d"
}

.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
    content: "\f03e"
}

.fa-pencil:before {
    content: "\f040"
}

.fa-map-marker:before {
    content: "\f041"
}

.fa-adjust:before {
    content: "\f042"
}

.fa-tint:before {
    content: "\f043"
}

.fa-edit:before,
.fa-pencil-square-o:before {
    content: "\f044"
}

.fa-share-square-o:before {
    content: "\f045"
}

.fa-check-square-o:before {
    content: "\f046"
}

.fa-arrows:before {
    content: "\f047"
}

.fa-step-backward:before {
    content: "\f048"
}

.fa-fast-backward:before {
    content: "\f049"
}

.fa-backward:before {
    content: "\f04a"
}

.fa-play:before {
    content: "\f04b"
}

.fa-pause:before {
    content: "\f04c"
}

.fa-stop:before {
    content: "\f04d"
}

.fa-forward:before {
    content: "\f04e"
}

.fa-fast-forward:before {
    content: "\f050"
}

.fa-step-forward:before {
    content: "\f051"
}

.fa-eject:before {
    content: "\f052"
}

.fa-chevron-left:before {
    content: "\f053"
}

.fa-chevron-right:before {
    content: "\f054"
}

.fa-plus-circle:before {
    content: "\f055"
}

.fa-minus-circle:before {
    content: "\f056"
}

.fa-times-circle:before {
    content: "\f057"
}

.fa-check-circle:before {
    content: "\f058"
}

.fa-question-circle:before {
    content: "\f059"
}

.fa-info-circle:before {
    content: "\f05a"
}

.fa-crosshairs:before {
    content: "\f05b"
}

.fa-times-circle-o:before {
    content: "\f05c"
}

.fa-check-circle-o:before {
    content: "\f05d"
}

.fa-ban:before {
    content: "\f05e"
}

.fa-arrow-left:before {
    content: "\f060"
}

.fa-arrow-right:before {
    content: "\f061"
}

.fa-arrow-up:before {
    content: "\f062"
}

.fa-arrow-down:before {
    content: "\f063"
}

.fa-mail-forward:before,
.fa-share:before {
    content: "\f064"
}

.fa-expand:before {
    content: "\f065"
}

.fa-compress:before {
    content: "\f066"
}

.fa-plus:before {
    content: "\f067"
}

.fa-minus:before {
    content: "\f068"
}

.fa-asterisk:before {
    content: "\f069"
}

.fa-exclamation-circle:before {
    content: "\f06a"
}

.fa-gift:before {
    content: "\f06b"
}

.fa-leaf:before {
    content: "\f06c"
}

.fa-fire:before {
    content: "\f06d"
}

.fa-eye:before {
    content: "\f06e"
}

.fa-eye-slash:before {
    content: "\f070"
}

.fa-warning:before,
.fa-exclamation-triangle:before {
    content: "\f071"
}

.fa-plane:before {
    content: "\f072"
}

.fa-calendar:before {
    content: "\f073"
}

.fa-random:before {
    content: "\f074"
}

.fa-comment:before {
    content: "\f075"
}

.fa-magnet:before {
    content: "\f076"
}

.fa-chevron-up:before {
    content: "\f077"
}

.fa-chevron-down:before {
    content: "\f078"
}

.fa-retweet:before {
    content: "\f079"
}

.fa-shopping-cart:before {
    content: "\f07a"
}

.fa-folder:before {
    content: "\f07b"
}

.fa-folder-open:before {
    content: "\f07c"
}

.fa-arrows-v:before {
    content: "\f07d"
}

.fa-arrows-h:before {
    content: "\f07e"
}

.fa-bar-chart-o:before,
.fa-bar-chart:before {
    content: "\f080"
}

.fa-twitter-square:before {
    content: "\f081"
}

.fa-facebook-square:before {
    content: "\f082"
}

.fa-camera-retro:before {
    content: "\f083"
}

.fa-key:before {
    content: "\f084"
}

.fa-gears:before,
.fa-cogs:before {
    content: "\f085"
}

.fa-comments:before {
    content: "\f086"
}

.fa-thumbs-o-up:before {
    content: "\f087"
}

.fa-thumbs-o-down:before {
    content: "\f088"
}

.fa-star-half:before {
    content: "\f089"
}

.fa-heart-o:before {
    content: "\f08a"
}

.fa-sign-out:before {
    content: "\f08b"
}

.fa-linkedin-square:before {
    content: "\f08c"
}

.fa-thumb-tack:before {
    content: "\f08d"
}

.fa-external-link:before {
    content: "\f08e"
}

.fa-sign-in:before {
    content: "\f090"
}

.fa-trophy:before {
    content: "\f091"
}

.fa-github-square:before {
    content: "\f092"
}

.fa-upload:before {
    content: "\f093"
}

.fa-lemon-o:before {
    content: "\f094"
}

.fa-phone:before {
    content: "\f095"
}

.fa-square-o:before {
    content: "\f096"
}

.fa-bookmark-o:before {
    content: "\f097"
}

.fa-phone-square:before {
    content: "\f098"
}

.fa-twitter:before {
    content: "\f099"
}

.fa-facebook-f:before,
.fa-facebook:before {
    content: "\f09a"
}

.fa-github:before {
    content: "\f09b"
}

.fa-unlock:before {
    content: "\f09c"
}

.fa-credit-card:before {
    content: "\f09d"
}

.fa-feed:before,
.fa-rss:before {
    content: "\f09e"
}

.fa-hdd-o:before {
    content: "\f0a0"
}

.fa-bullhorn:before {
    content: "\f0a1"
}

.fa-bell:before {
    content: "\f0f3"
}

.fa-certificate:before {
    content: "\f0a3"
}

.fa-hand-o-right:before {
    content: "\f0a4"
}

.fa-hand-o-left:before {
    content: "\f0a5"
}

.fa-hand-o-up:before {
    content: "\f0a6"
}

.fa-hand-o-down:before {
    content: "\f0a7"
}

.fa-arrow-circle-left:before {
    content: "\f0a8"
}

.fa-arrow-circle-right:before {
    content: "\f0a9"
}

.fa-arrow-circle-up:before {
    content: "\f0aa"
}

.fa-arrow-circle-down:before {
    content: "\f0ab"
}

.fa-globe:before {
    content: "\f0ac"
}

.fa-wrench:before {
    content: "\f0ad"
}

.fa-tasks:before {
    content: "\f0ae"
}

.fa-filter:before {
    content: "\f0b0"
}

.fa-briefcase:before {
    content: "\f0b1"
}

.fa-arrows-alt:before {
    content: "\f0b2"
}

.fa-group:before,
.fa-users:before {
    content: "\f0c0"
}

.fa-chain:before,
.fa-link:before {
    content: "\f0c1"
}

.fa-cloud:before {
    content: "\f0c2"
}

.fa-flask:before {
    content: "\f0c3"
}

.fa-cut:before,
.fa-scissors:before {
    content: "\f0c4"
}

.fa-copy:before,
.fa-files-o:before {
    content: "\f0c5"
}

.fa-paperclip:before {
    content: "\f0c6"
}

.fa-save:before,
.fa-floppy-o:before {
    content: "\f0c7"
}

.fa-square:before {
    content: "\f0c8"
}

.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
    content: "\f0c9"
}

.fa-list-ul:before {
    content: "\f0ca"
}

.fa-list-ol:before {
    content: "\f0cb"
}

.fa-strikethrough:before {
    content: "\f0cc"
}

.fa-underline:before {
    content: "\f0cd"
}

.fa-table:before {
    content: "\f0ce"
}

.fa-magic:before {
    content: "\f0d0"
}

.fa-truck:before {
    content: "\f0d1"
}

.fa-pinterest:before {
    content: "\f0d2"
}

.fa-pinterest-square:before {
    content: "\f0d3"
}

.fa-google-plus-square:before {
    content: "\f0d4"
}

.fa-google-plus:before {
    content: "\f0d5"
}

.fa-money:before {
    content: "\f0d6"
}

.fa-caret-down:before {
    content: "\f0d7"
}

.fa-caret-up:before {
    content: "\f0d8"
}

.fa-caret-left:before {
    content: "\f0d9"
}

.fa-caret-right:before {
    content: "\f0da"
}

.fa-columns:before {
    content: "\f0db"
}

.fa-unsorted:before,
.fa-sort:before {
    content: "\f0dc"
}

.fa-sort-down:before,
.fa-sort-desc:before {
    content: "\f0dd"
}

.fa-sort-up:before,
.fa-sort-asc:before {
    content: "\f0de"
}

.fa-envelope:before {
    content: "\f0e0"
}

.fa-linkedin:before {
    content: "\f0e1"
}

.fa-rotate-left:before,
.fa-undo:before {
    content: "\f0e2"
}

.fa-legal:before,
.fa-gavel:before {
    content: "\f0e3"
}

.fa-dashboard:before,
.fa-tachometer:before {
    content: "\f0e4"
}

.fa-comment-o:before {
    content: "\f0e5"
}

.fa-comments-o:before {
    content: "\f0e6"
}

.fa-flash:before,
.fa-bolt:before {
    content: "\f0e7"
}

.fa-sitemap:before {
    content: "\f0e8"
}

.fa-umbrella:before {
    content: "\f0e9"
}

.fa-paste:before,
.fa-clipboard:before {
    content: "\f0ea"
}

.fa-lightbulb-o:before {
    content: "\f0eb"
}

.fa-exchange:before {
    content: "\f0ec"
}

.fa-cloud-download:before {
    content: "\f0ed"
}

.fa-cloud-upload:before {
    content: "\f0ee"
}

.fa-user-md:before {
    content: "\f0f0"
}

.fa-stethoscope:before {
    content: "\f0f1"
}

.fa-suitcase:before {
    content: "\f0f2"
}

.fa-bell-o:before {
    content: "\f0a2"
}

.fa-coffee:before {
    content: "\f0f4"
}

.fa-cutlery:before {
    content: "\f0f5"
}

.fa-file-text-o:before {
    content: "\f0f6"
}

.fa-building-o:before {
    content: "\f0f7"
}

.fa-hospital-o:before {
    content: "\f0f8"
}

.fa-ambulance:before {
    content: "\f0f9"
}

.fa-medkit:before {
    content: "\f0fa"
}

.fa-fighter-jet:before {
    content: "\f0fb"
}

.fa-beer:before {
    content: "\f0fc"
}

.fa-h-square:before {
    content: "\f0fd"
}

.fa-plus-square:before {
    content: "\f0fe"
}

.fa-angle-double-left:before {
    content: "\f100"
}

.fa-angle-double-right:before {
    content: "\f101"
}

.fa-angle-double-up:before {
    content: "\f102"
}

.fa-angle-double-down:before {
    content: "\f103"
}

.fa-angle-left:before {
    content: "\f104"
}

.fa-angle-right:before {
    content: "\f105"
}

.fa-angle-up:before {
    content: "\f106"
}

.fa-angle-down:before {
    content: "\f107"
}

.fa-desktop:before {
    content: "\f108"
}

.fa-laptop:before {
    content: "\f109"
}

.fa-tablet:before {
    content: "\f10a"
}

.fa-mobile-phone:before,
.fa-mobile:before {
    content: "\f10b"
}

.fa-circle-o:before {
    content: "\f10c"
}

.fa-quote-left:before {
    content: "\f10d"
}

.fa-quote-right:before {
    content: "\f10e"
}

.fa-spinner:before {
    content: "\f110"
}

.fa-circle:before {
    content: "\f111"
}

.fa-mail-reply:before,
.fa-reply:before {
    content: "\f112"
}

.fa-github-alt:before {
    content: "\f113"
}

.fa-folder-o:before {
    content: "\f114"
}

.fa-folder-open-o:before {
    content: "\f115"
}

.fa-smile-o:before {
    content: "\f118"
}

.fa-frown-o:before {
    content: "\f119"
}

.fa-meh-o:before {
    content: "\f11a"
}

.fa-gamepad:before {
    content: "\f11b"
}

.fa-keyboard-o:before {
    content: "\f11c"
}

.fa-flag-o:before {
    content: "\f11d"
}

.fa-flag-checkered:before {
    content: "\f11e"
}

.fa-terminal:before {
    content: "\f120"
}

.fa-code:before {
    content: "\f121"
}

.fa-mail-reply-all:before,
.fa-reply-all:before {
    content: "\f122"
}

.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
    content: "\f123"
}

.fa-location-arrow:before {
    content: "\f124"
}

.fa-crop:before {
    content: "\f125"
}

.fa-code-fork:before {
    content: "\f126"
}

.fa-unlink:before,
.fa-chain-broken:before {
    content: "\f127"
}

.fa-question:before {
    content: "\f128"
}

.fa-info:before {
    content: "\f129"
}

.fa-exclamation:before {
    content: "\f12a"
}

.fa-superscript:before {
    content: "\f12b"
}

.fa-subscript:before {
    content: "\f12c"
}

.fa-eraser:before {
    content: "\f12d"
}

.fa-puzzle-piece:before {
    content: "\f12e"
}

.fa-microphone:before {
    content: "\f130"
}

.fa-microphone-slash:before {
    content: "\f131"
}

.fa-shield:before {
    content: "\f132"
}

.fa-calendar-o:before {
    content: "\f133"
}

.fa-fire-extinguisher:before {
    content: "\f134"
}

.fa-rocket:before {
    content: "\f135"
}

.fa-maxcdn:before {
    content: "\f136"
}

.fa-chevron-circle-left:before {
    content: "\f137"
}

.fa-chevron-circle-right:before {
    content: "\f138"
}

.fa-chevron-circle-up:before {
    content: "\f139"
}

.fa-chevron-circle-down:before {
    content: "\f13a"
}

.fa-html5:before {
    content: "\f13b"
}

.fa-css3:before {
    content: "\f13c"
}

.fa-anchor:before {
    content: "\f13d"
}

.fa-unlock-alt:before {
    content: "\f13e"
}

.fa-bullseye:before {
    content: "\f140"
}

.fa-ellipsis-h:before {
    content: "\f141"
}

.fa-ellipsis-v:before {
    content: "\f142"
}

.fa-rss-square:before {
    content: "\f143"
}

.fa-play-circle:before {
    content: "\f144"
}

.fa-ticket:before {
    content: "\f145"
}

.fa-minus-square:before {
    content: "\f146"
}

.fa-minus-square-o:before {
    content: "\f147"
}

.fa-level-up:before {
    content: "\f148"
}

.fa-level-down:before {
    content: "\f149"
}

.fa-check-square:before {
    content: "\f14a"
}

.fa-pencil-square:before {
    content: "\f14b"
}

.fa-external-link-square:before {
    content: "\f14c"
}

.fa-share-square:before {
    content: "\f14d"
}

.fa-compass:before {
    content: "\f14e"
}

.fa-toggle-down:before,
.fa-caret-square-o-down:before {
    content: "\f150"
}

.fa-toggle-up:before,
.fa-caret-square-o-up:before {
    content: "\f151"
}

.fa-toggle-right:before,
.fa-caret-square-o-right:before {
    content: "\f152"
}

.fa-euro:before,
.fa-eur:before {
    content: "\f153"
}

.fa-gbp:before {
    content: "\f154"
}

.fa-dollar:before,
.fa-usd:before {
    content: "\f155"
}

.fa-rupee:before,
.fa-inr:before {
    content: "\f156"
}

.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
    content: "\f157"
}

.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
    content: "\f158"
}

.fa-won:before,
.fa-krw:before {
    content: "\f159"
}

.fa-bitcoin:before,
.fa-btc:before {
    content: "\f15a"
}

.fa-file:before {
    content: "\f15b"
}

.fa-file-text:before {
    content: "\f15c"
}

.fa-sort-alpha-asc:before {
    content: "\f15d"
}

.fa-sort-alpha-desc:before {
    content: "\f15e"
}

.fa-sort-amount-asc:before {
    content: "\f160"
}

.fa-sort-amount-desc:before {
    content: "\f161"
}

.fa-sort-numeric-asc:before {
    content: "\f162"
}

.fa-sort-numeric-desc:before {
    content: "\f163"
}

.fa-thumbs-up:before {
    content: "\f164"
}

.fa-thumbs-down:before {
    content: "\f165"
}

.fa-youtube-square:before {
    content: "\f166"
}

.fa-youtube:before {
    content: "\f167"
}

.fa-xing:before {
    content: "\f168"
}

.fa-xing-square:before {
    content: "\f169"
}

.fa-youtube-play:before {
    content: "\f16a"
}

.fa-dropbox:before {
    content: "\f16b"
}

.fa-stack-overflow:before {
    content: "\f16c"
}

.fa-instagram:before {
    content: "\f16d"
}

.fa-flickr:before {
    content: "\f16e"
}

.fa-adn:before {
    content: "\f170"
}

.fa-bitbucket:before {
    content: "\f171"
}

.fa-bitbucket-square:before {
    content: "\f172"
}

.fa-tumblr:before {
    content: "\f173"
}

.fa-tumblr-square:before {
    content: "\f174"
}

.fa-long-arrow-down:before {
    content: "\f175"
}

.fa-long-arrow-up:before {
    content: "\f176"
}

.fa-long-arrow-left:before {
    content: "\f177"
}

.fa-long-arrow-right:before {
    content: "\f178"
}

.fa-apple:before {
    content: "\f179"
}

.fa-windows:before {
    content: "\f17a"
}

.fa-android:before {
    content: "\f17b"
}

.fa-linux:before {
    content: "\f17c"
}

.fa-dribbble:before {
    content: "\f17d"
}

.fa-skype:before {
    content: "\f17e"
}

.fa-foursquare:before {
    content: "\f180"
}

.fa-trello:before {
    content: "\f181"
}

.fa-female:before {
    content: "\f182"
}

.fa-male:before {
    content: "\f183"
}

.fa-gittip:before,
.fa-gratipay:before {
    content: "\f184"
}

.fa-sun-o:before {
    content: "\f185"
}

.fa-moon-o:before {
    content: "\f186"
}

.fa-archive:before {
    content: "\f187"
}

.fa-bug:before {
    content: "\f188"
}

.fa-vk:before {
    content: "\f189"
}

.fa-weibo:before {
    content: "\f18a"
}

.fa-renren:before {
    content: "\f18b"
}

.fa-pagelines:before {
    content: "\f18c"
}

.fa-stack-exchange:before {
    content: "\f18d"
}

.fa-arrow-circle-o-right:before {
    content: "\f18e"
}

.fa-arrow-circle-o-left:before {
    content: "\f190"
}

.fa-toggle-left:before,
.fa-caret-square-o-left:before {
    content: "\f191"
}

.fa-dot-circle-o:before {
    content: "\f192"
}

.fa-wheelchair:before {
    content: "\f193"
}

.fa-vimeo-square:before {
    content: "\f194"
}

.fa-turkish-lira:before,
.fa-try:before {
    content: "\f195"
}

.fa-plus-square-o:before {
    content: "\f196"
}

.fa-space-shuttle:before {
    content: "\f197"
}

.fa-slack:before {
    content: "\f198"
}

.fa-envelope-square:before {
    content: "\f199"
}

.fa-wordpress:before {
    content: "\f19a"
}

.fa-openid:before {
    content: "\f19b"
}

.fa-institution:before,
.fa-bank:before,
.fa-university:before {
    content: "\f19c"
}

.fa-mortar-board:before,
.fa-graduation-cap:before {
    content: "\f19d"
}

.fa-yahoo:before {
    content: "\f19e"
}

.fa-google:before {
    content: "\f1a0"
}

.fa-reddit:before {
    content: "\f1a1"
}

.fa-reddit-square:before {
    content: "\f1a2"
}

.fa-stumbleupon-circle:before {
    content: "\f1a3"
}

.fa-stumbleupon:before {
    content: "\f1a4"
}

.fa-delicious:before {
    content: "\f1a5"
}

.fa-digg:before {
    content: "\f1a6"
}

.fa-pied-piper-pp:before {
    content: "\f1a7"
}

.fa-pied-piper-alt:before {
    content: "\f1a8"
}

.fa-drupal:before {
    content: "\f1a9"
}

.fa-joomla:before {
    content: "\f1aa"
}

.fa-language:before {
    content: "\f1ab"
}

.fa-fax:before {
    content: "\f1ac"
}

.fa-building:before {
    content: "\f1ad"
}

.fa-child:before {
    content: "\f1ae"
}

.fa-paw:before {
    content: "\f1b0"
}

.fa-spoon:before {
    content: "\f1b1"
}

.fa-cube:before {
    content: "\f1b2"
}

.fa-cubes:before {
    content: "\f1b3"
}

.fa-behance:before {
    content: "\f1b4"
}

.fa-behance-square:before {
    content: "\f1b5"
}

.fa-steam:before {
    content: "\f1b6"
}

.fa-steam-square:before {
    content: "\f1b7"
}

.fa-recycle:before {
    content: "\f1b8"
}

.fa-automobile:before,
.fa-car:before {
    content: "\f1b9"
}

.fa-cab:before,
.fa-taxi:before {
    content: "\f1ba"
}

.fa-tree:before {
    content: "\f1bb"
}

.fa-spotify:before {
    content: "\f1bc"
}

.fa-deviantart:before {
    content: "\f1bd"
}

.fa-soundcloud:before {
    content: "\f1be"
}

.fa-database:before {
    content: "\f1c0"
}

.fa-file-pdf-o:before {
    content: "\f1c1"
}

.fa-file-word-o:before {
    content: "\f1c2"
}

.fa-file-excel-o:before {
    content: "\f1c3"
}

.fa-file-powerpoint-o:before {
    content: "\f1c4"
}

.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
    content: "\f1c5"
}

.fa-file-zip-o:before,
.fa-file-archive-o:before {
    content: "\f1c6"
}

.fa-file-sound-o:before,
.fa-file-audio-o:before {
    content: "\f1c7"
}

.fa-file-movie-o:before,
.fa-file-video-o:before {
    content: "\f1c8"
}

.fa-file-code-o:before {
    content: "\f1c9"
}

.fa-vine:before {
    content: "\f1ca"
}

.fa-codepen:before {
    content: "\f1cb"
}

.fa-jsfiddle:before {
    content: "\f1cc"
}

.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
    content: "\f1cd"
}

.fa-circle-o-notch:before {
    content: "\f1ce"
}

.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
    content: "\f1d0"
}

.fa-ge:before,
.fa-empire:before {
    content: "\f1d1"
}

.fa-git-square:before {
    content: "\f1d2"
}

.fa-git:before {
    content: "\f1d3"
}

.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
    content: "\f1d4"
}

.fa-tencent-weibo:before {
    content: "\f1d5"
}

.fa-qq:before {
    content: "\f1d6"
}

.fa-wechat:before,
.fa-weixin:before {
    content: "\f1d7"
}

.fa-send:before,
.fa-paper-plane:before {
    content: "\f1d8"
}

.fa-send-o:before,
.fa-paper-plane-o:before {
    content: "\f1d9"
}

.fa-history:before {
    content: "\f1da"
}

.fa-circle-thin:before {
    content: "\f1db"
}

.fa-header:before {
    content: "\f1dc"
}

.fa-paragraph:before {
    content: "\f1dd"
}

.fa-sliders:before {
    content: "\f1de"
}

.fa-share-alt:before {
    content: "\f1e0"
}

.fa-share-alt-square:before {
    content: "\f1e1"
}

.fa-bomb:before {
    content: "\f1e2"
}

.fa-soccer-ball-o:before,
.fa-futbol-o:before {
    content: "\f1e3"
}

.fa-tty:before {
    content: "\f1e4"
}

.fa-binoculars:before {
    content: "\f1e5"
}

.fa-plug:before {
    content: "\f1e6"
}

.fa-slideshare:before {
    content: "\f1e7"
}

.fa-twitch:before {
    content: "\f1e8"
}

.fa-yelp:before {
    content: "\f1e9"
}

.fa-newspaper-o:before {
    content: "\f1ea"
}

.fa-wifi:before {
    content: "\f1eb"
}

.fa-calculator:before {
    content: "\f1ec"
}

.fa-paypal:before {
    content: "\f1ed"
}

.fa-google-wallet:before {
    content: "\f1ee"
}

.fa-cc-visa:before {
    content: "\f1f0"
}

.fa-cc-mastercard:before {
    content: "\f1f1"
}

.fa-cc-discover:before {
    content: "\f1f2"
}

.fa-cc-amex:before {
    content: "\f1f3"
}

.fa-cc-paypal:before {
    content: "\f1f4"
}

.fa-cc-stripe:before {
    content: "\f1f5"
}

.fa-bell-slash:before {
    content: "\f1f6"
}

.fa-bell-slash-o:before {
    content: "\f1f7"
}

.fa-trash:before {
    content: "\f1f8"
}

.fa-copyright:before {
    content: "\f1f9"
}

.fa-at:before {
    content: "\f1fa"
}

.fa-eyedropper:before {
    content: "\f1fb"
}

.fa-paint-brush:before {
    content: "\f1fc"
}

.fa-birthday-cake:before {
    content: "\f1fd"
}

.fa-area-chart:before {
    content: "\f1fe"
}

.fa-pie-chart:before {
    content: "\f200"
}

.fa-line-chart:before {
    content: "\f201"
}

.fa-lastfm:before {
    content: "\f202"
}

.fa-lastfm-square:before {
    content: "\f203"
}

.fa-toggle-off:before {
    content: "\f204"
}

.fa-toggle-on:before {
    content: "\f205"
}

.fa-bicycle:before {
    content: "\f206"
}

.fa-bus:before {
    content: "\f207"
}

.fa-ioxhost:before {
    content: "\f208"
}

.fa-angellist:before {
    content: "\f209"
}

.fa-cc:before {
    content: "\f20a"
}

.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
    content: "\f20b"
}

.fa-meanpath:before {
    content: "\f20c"
}

.fa-buysellads:before {
    content: "\f20d"
}

.fa-connectdevelop:before {
    content: "\f20e"
}

.fa-dashcube:before {
    content: "\f210"
}

.fa-forumbee:before {
    content: "\f211"
}

.fa-leanpub:before {
    content: "\f212"
}

.fa-sellsy:before {
    content: "\f213"
}

.fa-shirtsinbulk:before {
    content: "\f214"
}

.fa-simplybuilt:before {
    content: "\f215"
}

.fa-skyatlas:before {
    content: "\f216"
}

.fa-cart-plus:before {
    content: "\f217"
}

.fa-cart-arrow-down:before {
    content: "\f218"
}

.fa-diamond:before {
    content: "\f219"
}

.fa-ship:before {
    content: "\f21a"
}

.fa-user-secret:before {
    content: "\f21b"
}

.fa-motorcycle:before {
    content: "\f21c"
}

.fa-street-view:before {
    content: "\f21d"
}

.fa-heartbeat:before {
    content: "\f21e"
}

.fa-venus:before {
    content: "\f221"
}

.fa-mars:before {
    content: "\f222"
}

.fa-mercury:before {
    content: "\f223"
}

.fa-intersex:before,
.fa-transgender:before {
    content: "\f224"
}

.fa-transgender-alt:before {
    content: "\f225"
}

.fa-venus-double:before {
    content: "\f226"
}

.fa-mars-double:before {
    content: "\f227"
}

.fa-venus-mars:before {
    content: "\f228"
}

.fa-mars-stroke:before {
    content: "\f229"
}

.fa-mars-stroke-v:before {
    content: "\f22a"
}

.fa-mars-stroke-h:before {
    content: "\f22b"
}

.fa-neuter:before {
    content: "\f22c"
}

.fa-genderless:before {
    content: "\f22d"
}

.fa-facebook-official:before {
    content: "\f230"
}

.fa-pinterest-p:before {
    content: "\f231"
}

.fa-whatsapp:before {
    content: "\f232"
}

.fa-server:before {
    content: "\f233"
}

.fa-user-plus:before {
    content: "\f234"
}

.fa-user-times:before {
    content: "\f235"
}

.fa-hotel:before,
.fa-bed:before {
    content: "\f236"
}

.fa-viacoin:before {
    content: "\f237"
}

.fa-train:before {
    content: "\f238"
}

.fa-subway:before {
    content: "\f239"
}

.fa-medium:before {
    content: "\f23a"
}

.fa-yc:before,
.fa-y-combinator:before {
    content: "\f23b"
}

.fa-optin-monster:before {
    content: "\f23c"
}

.fa-opencart:before {
    content: "\f23d"
}

.fa-expeditedssl:before {
    content: "\f23e"
}

.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
    content: "\f240"
}

.fa-battery-3:before,
.fa-battery-three-quarters:before {
    content: "\f241"
}

.fa-battery-2:before,
.fa-battery-half:before {
    content: "\f242"
}

.fa-battery-1:before,
.fa-battery-quarter:before {
    content: "\f243"
}

.fa-battery-0:before,
.fa-battery-empty:before {
    content: "\f244"
}

.fa-mouse-pointer:before {
    content: "\f245"
}

.fa-i-cursor:before {
    content: "\f246"
}

.fa-object-group:before {
    content: "\f247"
}

.fa-object-ungroup:before {
    content: "\f248"
}

.fa-sticky-note:before {
    content: "\f249"
}

.fa-sticky-note-o:before {
    content: "\f24a"
}

.fa-cc-jcb:before {
    content: "\f24b"
}

.fa-cc-diners-club:before {
    content: "\f24c"
}

.fa-clone:before {
    content: "\f24d"
}

.fa-balance-scale:before {
    content: "\f24e"
}

.fa-hourglass-o:before {
    content: "\f250"
}

.fa-hourglass-1:before,
.fa-hourglass-start:before {
    content: "\f251"
}

.fa-hourglass-2:before,
.fa-hourglass-half:before {
    content: "\f252"
}

.fa-hourglass-3:before,
.fa-hourglass-end:before {
    content: "\f253"
}

.fa-hourglass:before {
    content: "\f254"
}

.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
    content: "\f255"
}

.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
    content: "\f256"
}

.fa-hand-scissors-o:before {
    content: "\f257"
}

.fa-hand-lizard-o:before {
    content: "\f258"
}

.fa-hand-spock-o:before {
    content: "\f259"
}

.fa-hand-pointer-o:before {
    content: "\f25a"
}

.fa-hand-peace-o:before {
    content: "\f25b"
}

.fa-trademark:before {
    content: "\f25c"
}

.fa-registered:before {
    content: "\f25d"
}

.fa-creative-commons:before {
    content: "\f25e"
}

.fa-gg:before {
    content: "\f260"
}

.fa-gg-circle:before {
    content: "\f261"
}

.fa-tripadvisor:before {
    content: "\f262"
}

.fa-odnoklassniki:before {
    content: "\f263"
}

.fa-odnoklassniki-square:before {
    content: "\f264"
}

.fa-get-pocket:before {
    content: "\f265"
}

.fa-wikipedia-w:before {
    content: "\f266"
}

.fa-safari:before {
    content: "\f267"
}

.fa-chrome:before {
    content: "\f268"
}

.fa-firefox:before {
    content: "\f269"
}

.fa-opera:before {
    content: "\f26a"
}

.fa-internet-explorer:before {
    content: "\f26b"
}

.fa-tv:before,
.fa-television:before {
    content: "\f26c"
}

.fa-contao:before {
    content: "\f26d"
}

.fa-500px:before {
    content: "\f26e"
}

.fa-amazon:before {
    content: "\f270"
}

.fa-calendar-plus-o:before {
    content: "\f271"
}

.fa-calendar-minus-o:before {
    content: "\f272"
}

.fa-calendar-times-o:before {
    content: "\f273"
}

.fa-calendar-check-o:before {
    content: "\f274"
}

.fa-industry:before {
    content: "\f275"
}

.fa-map-pin:before {
    content: "\f276"
}

.fa-map-signs:before {
    content: "\f277"
}

.fa-map-o:before {
    content: "\f278"
}

.fa-map:before {
    content: "\f279"
}

.fa-commenting:before {
    content: "\f27a"
}

.fa-commenting-o:before {
    content: "\f27b"
}

.fa-houzz:before {
    content: "\f27c"
}

.fa-vimeo:before {
    content: "\f27d"
}

.fa-black-tie:before {
    content: "\f27e"
}

.fa-fonticons:before {
    content: "\f280"
}

.fa-reddit-alien:before {
    content: "\f281"
}

.fa-edge:before {
    content: "\f282"
}

.fa-credit-card-alt:before {
    content: "\f283"
}

.fa-codiepie:before {
    content: "\f284"
}

.fa-modx:before {
    content: "\f285"
}

.fa-fort-awesome:before {
    content: "\f286"
}

.fa-usb:before {
    content: "\f287"
}

.fa-product-hunt:before {
    content: "\f288"
}

.fa-mixcloud:before {
    content: "\f289"
}

.fa-scribd:before {
    content: "\f28a"
}

.fa-pause-circle:before {
    content: "\f28b"
}

.fa-pause-circle-o:before {
    content: "\f28c"
}

.fa-stop-circle:before {
    content: "\f28d"
}

.fa-stop-circle-o:before {
    content: "\f28e"
}

.fa-shopping-bag:before {
    content: "\f290"
}

.fa-shopping-basket:before {
    content: "\f291"
}

.fa-hashtag:before {
    content: "\f292"
}

.fa-bluetooth:before {
    content: "\f293"
}

.fa-bluetooth-b:before {
    content: "\f294"
}

.fa-percent:before {
    content: "\f295"
}

.fa-gitlab:before {
    content: "\f296"
}

.fa-wpbeginner:before {
    content: "\f297"
}

.fa-wpforms:before {
    content: "\f298"
}

.fa-envira:before {
    content: "\f299"
}

.fa-universal-access:before {
    content: "\f29a"
}

.fa-wheelchair-alt:before {
    content: "\f29b"
}

.fa-question-circle-o:before {
    content: "\f29c"
}

.fa-blind:before {
    content: "\f29d"
}

.fa-audio-description:before {
    content: "\f29e"
}

.fa-volume-control-phone:before {
    content: "\f2a0"
}

.fa-braille:before {
    content: "\f2a1"
}

.fa-assistive-listening-systems:before {
    content: "\f2a2"
}

.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
    content: "\f2a3"
}

.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
    content: "\f2a4"
}

.fa-glide:before {
    content: "\f2a5"
}

.fa-glide-g:before {
    content: "\f2a6"
}

.fa-signing:before,
.fa-sign-language:before {
    content: "\f2a7"
}

.fa-low-vision:before {
    content: "\f2a8"
}

.fa-viadeo:before {
    content: "\f2a9"
}

.fa-viadeo-square:before {
    content: "\f2aa"
}

.fa-snapchat:before {
    content: "\f2ab"
}

.fa-snapchat-ghost:before {
    content: "\f2ac"
}

.fa-snapchat-square:before {
    content: "\f2ad"
}

.fa-pied-piper:before {
    content: "\f2ae"
}

.fa-first-order:before {
    content: "\f2b0"
}

.fa-yoast:before {
    content: "\f2b1"
}

.fa-themeisle:before {
    content: "\f2b2"
}

.fa-google-plus-circle:before,
.fa-google-plus-official:before {
    content: "\f2b3"
}

.fa-fa:before,
.fa-font-awesome:before {
    content: "\f2b4"
}

.fa-handshake-o:before {
    content: "\f2b5"
}

.fa-envelope-open:before {
    content: "\f2b6"
}

.fa-envelope-open-o:before {
    content: "\f2b7"
}

.fa-linode:before {
    content: "\f2b8"
}

.fa-address-book:before {
    content: "\f2b9"
}

.fa-address-book-o:before {
    content: "\f2ba"
}

.fa-vcard:before,
.fa-address-card:before {
    content: "\f2bb"
}

.fa-vcard-o:before,
.fa-address-card-o:before {
    content: "\f2bc"
}

.fa-user-circle:before {
    content: "\f2bd"
}

.fa-user-circle-o:before {
    content: "\f2be"
}

.fa-user-o:before {
    content: "\f2c0"
}

.fa-id-badge:before {
    content: "\f2c1"
}

.fa-drivers-license:before,
.fa-id-card:before {
    content: "\f2c2"
}

.fa-drivers-license-o:before,
.fa-id-card-o:before {
    content: "\f2c3"
}

.fa-quora:before {
    content: "\f2c4"
}

.fa-free-code-camp:before {
    content: "\f2c5"
}

.fa-telegram:before {
    content: "\f2c6"
}

.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
    content: "\f2c7"
}

.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
    content: "\f2c8"
}

.fa-thermometer-2:before,
.fa-thermometer-half:before {
    content: "\f2c9"
}

.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
    content: "\f2ca"
}

.fa-thermometer-0:before,
.fa-thermometer-empty:before {
    content: "\f2cb"
}

.fa-shower:before {
    content: "\f2cc"
}

.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
    content: "\f2cd"
}

.fa-podcast:before {
    content: "\f2ce"
}

.fa-window-maximize:before {
    content: "\f2d0"
}

.fa-window-minimize:before {
    content: "\f2d1"
}

.fa-window-restore:before {
    content: "\f2d2"
}

.fa-times-rectangle:before,
.fa-window-close:before {
    content: "\f2d3"
}

.fa-times-rectangle-o:before,
.fa-window-close-o:before {
    content: "\f2d4"
}

.fa-bandcamp:before {
    content: "\f2d5"
}

.fa-grav:before {
    content: "\f2d6"
}

.fa-etsy:before {
    content: "\f2d7"
}

.fa-imdb:before {
    content: "\f2d8"
}

.fa-ravelry:before {
    content: "\f2d9"
}

.fa-eercast:before {
    content: "\f2da"
}

.fa-microchip:before {
    content: "\f2db"
}

.fa-snowflake-o:before {
    content: "\f2dc"
}

.fa-superpowers:before {
    content: "\f2dd"
}

.fa-wpexplorer:before {
    content: "\f2de"
}

.fa-meetup:before {
    content: "\f2e0"
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto
}

    /*!<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 * Bootstrap v4.0.0-beta.2 (https://getbootstrap.com)
 * Copyright 2011-2017 The Bootstrap Authors
 * Copyright 2011-2017 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #868e96;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #868e96;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    --font-family-monospace: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}

@media print {
    *,
    ::after,
    ::before {
        text-shadow: none!important;
        box-shadow: none!important
    }
    a,
    a:visited {
        text-decoration: underline
    }
    abbr[title]::after {
        content: " (" attr(title) ")"
    }
    pre {
        white-space: pre-wrap!important
    }
    blockquote,
    pre {
        border: 1px solid #999;
        page-break-inside: avoid
    }
    thead {
        display: table-header-group
    }
    img,
    tr {
        page-break-inside: avoid
    }
    h2,
    h3,
    p {
        orphans: 3;
        widows: 3
    }
    h2,
    h3 {
        page-break-after: avoid
    }
    .navbar {
        display: none
    }
    .badge {
        border: 1px solid #000
    }
    .table {
        border-collapse: collapse!important
    }
    .table td,
    .table th {
        background-color: #fff!important
    }
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #ddd!important
    }
}

*,
::after,
::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent
}

@-ms-viewport {
    width: device-width
}

article,
aside,
dialog,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex="-1"]:focus {
    outline: 0!important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: .5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[data-original-title],
abbr[title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

dl,
ol,
ul {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: .5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

dfn {
    font-style: italic
}

b,
strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects
}

a:hover {
    color: #0056b3;
    text-decoration: underline
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus,
a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus {
    outline: 0
}

code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    -ms-overflow-style: scrollbar
}

figure {
    margin: 0 0 1rem
}

img {
    vertical-align: middle;
    border-style: none
}

svg:not(:root) {
    overflow: hidden
}

[role=button],
a,
area,
button,
input:not([type=range]),
label,
select,
summary,
textarea {
    -ms-touch-action: manipulation;
    touch-action: manipulation
}

table {
    border-collapse: collapse
}

caption {
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #868e96;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: .5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

button,
input,
optgroup,
select,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,
input {
    overflow: visible
}

button,
select {
    text-transform: none
}

[type=reset],
[type=submit],
button,
html [type=button] {
    -webkit-appearance: button
}

[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner,
button::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=checkbox],
input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=date],
input[type=datetime-local],
input[type=month],
input[type=time] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=search]::-webkit-search-cancel-button,
[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item
}

template {
    display: none
}

[hidden] {
    display: none!important
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit
}

.h1,
h1 {
    font-size: 2.5rem
}

.h2,
h2 {
    font-size: 2rem
}

.h3,
h3 {
    font-size: 1.75rem
}

.h4,
h4 {
    font-size: 1.5rem
}

.h5,
h5 {
    font-size: 1.25rem
}

.h6,
h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.small,
small {
    font-size: 80%;
    font-weight: 400
}

.mark,
mark {
    padding: .2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: 5px
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #868e96
}

.blockquote-footer::before {
    content: "\2014 \00A0"
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: .25rem;
    transition: all .2s ease-in-out;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: .5rem;
    line-height: 1
}

.figure-caption {
    font-size: 90%;
    color: #868e96
}

code,
kbd,
pre,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}

code {
    padding: .2rem .4rem;
    font-size: 90%;
    color: #bd4147;
    background-color: #f8f9fa;
    border-radius: .25rem
}

a>code {
    padding: 0;
    color: inherit;
    background-color: inherit
}

kbd {
    padding: .2rem .4rem;
    font-size: 90%;
    color: #fff;
    background-color: #212529;
    border-radius: .2rem
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700
}

pre {
    display: block;
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 90%;
    color: #212529
}

pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    background-color: transparent;
    border-radius: 0
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width:576px) {
    .container {
        max-width: 540px
    }
}

@media (min-width:768px) {
    .container {
        max-width: 720px
    }
}

@media (min-width:992px) {
    .container {
        max-width: 960px
    }
}

@media (min-width:1200px) {
    .container {
        max-width: 1140px
    }
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.no-gutters {
    margin-right: 0;
    margin-left: 0
}

.no-gutters>.col,
.no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0
}

.col,
.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%
}

.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none
}

.col-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%
}

.col-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%
}

.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}

.col-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%
}

.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%
}

.col-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%
}

.col-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%
}

.col-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%
}

.col-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%
}

.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    -ms-flex-order: -1;
    order: -1
}

.order-1 {
    -ms-flex-order: 1;
    order: 1
}

.order-2 {
    -ms-flex-order: 2;
    order: 2
}

.order-3 {
    -ms-flex-order: 3;
    order: 3
}

.order-4 {
    -ms-flex-order: 4;
    order: 4
}

.order-5 {
    -ms-flex-order: 5;
    order: 5
}

.order-6 {
    -ms-flex-order: 6;
    order: 6
}

.order-7 {
    -ms-flex-order: 7;
    order: 7
}

.order-8 {
    -ms-flex-order: 8;
    order: 8
}

.order-9 {
    -ms-flex-order: 9;
    order: 9
}

.order-10 {
    -ms-flex-order: 10;
    order: 10
}

.order-11 {
    -ms-flex-order: 11;
    order: 11
}

.order-12 {
    -ms-flex-order: 12;
    order: 12
}

.offset-1 {
    margin-left: 8.333333%
}

.offset-2 {
    margin-left: 16.666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.333333%
}

.offset-5 {
    margin-left: 41.666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.333333%
}

.offset-8 {
    margin-left: 66.666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.333333%
}

.offset-11 {
    margin-left: 91.666667%
}

@media (min-width:576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }
    .col-sm-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }
    .col-sm-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }
    .col-sm-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }
    .col-sm-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }
    .col-sm-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }
    .col-sm-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }
    .col-sm-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }
    .col-sm-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }
    .col-sm-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }
    .col-sm-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }
    .col-sm-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }
    .col-sm-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }
    .col-sm-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }
    .order-sm-first {
        -ms-flex-order: -1;
        order: -1
    }
    .order-sm-1 {
        -ms-flex-order: 1;
        order: 1
    }
    .order-sm-2 {
        -ms-flex-order: 2;
        order: 2
    }
    .order-sm-3 {
        -ms-flex-order: 3;
        order: 3
    }
    .order-sm-4 {
        -ms-flex-order: 4;
        order: 4
    }
    .order-sm-5 {
        -ms-flex-order: 5;
        order: 5
    }
    .order-sm-6 {
        -ms-flex-order: 6;
        order: 6
    }
    .order-sm-7 {
        -ms-flex-order: 7;
        order: 7
    }
    .order-sm-8 {
        -ms-flex-order: 8;
        order: 8
    }
    .order-sm-9 {
        -ms-flex-order: 9;
        order: 9
    }
    .order-sm-10 {
        -ms-flex-order: 10;
        order: 10
    }
    .order-sm-11 {
        -ms-flex-order: 11;
        order: 11
    }
    .order-sm-12 {
        -ms-flex-order: 12;
        order: 12
    }
    .offset-sm-0 {
        margin-left: 0
    }
    .offset-sm-1 {
        margin-left: 8.333333%
    }
    .offset-sm-2 {
        margin-left: 16.666667%
    }
    .offset-sm-3 {
        margin-left: 25%
    }
    .offset-sm-4 {
        margin-left: 33.333333%
    }
    .offset-sm-5 {
        margin-left: 41.666667%
    }
    .offset-sm-6 {
        margin-left: 50%
    }
    .offset-sm-7 {
        margin-left: 58.333333%
    }
    .offset-sm-8 {
        margin-left: 66.666667%
    }
    .offset-sm-9 {
        margin-left: 75%
    }
    .offset-sm-10 {
        margin-left: 83.333333%
    }
    .offset-sm-11 {
        margin-left: 91.666667%
    }
}

@media (min-width:768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }
    .col-md-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }
    .col-md-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }
    .col-md-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }
    .col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }
    .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }
    .col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }
    .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }
    .col-md-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }
    .col-md-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }
    .col-md-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }
    .col-md-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }
    .col-md-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }
    .col-md-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }
    .order-md-first {
        -ms-flex-order: -1;
        order: -1
    }
    .order-md-1 {
        -ms-flex-order: 1;
        order: 1
    }
    .order-md-2 {
        -ms-flex-order: 2;
        order: 2
    }
    .order-md-3 {
        -ms-flex-order: 3;
        order: 3
    }
    .order-md-4 {
        -ms-flex-order: 4;
        order: 4
    }
    .order-md-5 {
        -ms-flex-order: 5;
        order: 5
    }
    .order-md-6 {
        -ms-flex-order: 6;
        order: 6
    }
    .order-md-7 {
        -ms-flex-order: 7;
        order: 7
    }
    .order-md-8 {
        -ms-flex-order: 8;
        order: 8
    }
    .order-md-9 {
        -ms-flex-order: 9;
        order: 9
    }
    .order-md-10 {
        -ms-flex-order: 10;
        order: 10
    }
    .order-md-11 {
        -ms-flex-order: 11;
        order: 11
    }
    .order-md-12 {
        -ms-flex-order: 12;
        order: 12
    }
    .offset-md-0 {
        margin-left: 0
    }
    .offset-md-1 {
        margin-left: 8.333333%
    }
    .offset-md-2 {
        margin-left: 16.666667%
    }
    .offset-md-3 {
        margin-left: 25%
    }
    .offset-md-4 {
        margin-left: 33.333333%
    }
    .offset-md-5 {
        margin-left: 41.666667%
    }
    .offset-md-6 {
        margin-left: 50%
    }
    .offset-md-7 {
        margin-left: 58.333333%
    }
    .offset-md-8 {
        margin-left: 66.666667%
    }
    .offset-md-9 {
        margin-left: 75%
    }
    .offset-md-10 {
        margin-left: 83.333333%
    }
    .offset-md-11 {
        margin-left: 91.666667%
    }
}

@media (min-width:992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }
    .col-lg-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }
    .col-lg-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }
    .col-lg-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }
    .col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }
    .col-lg-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }
    .col-lg-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }
    .col-lg-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }
    .col-lg-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }
    .col-lg-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }
    .col-lg-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }
    .col-lg-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }
    .col-lg-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }
    .col-lg-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }
    .order-lg-first {
        -ms-flex-order: -1;
        order: -1
    }
    .order-lg-1 {
        -ms-flex-order: 1;
        order: 1
    }
    .order-lg-2 {
        -ms-flex-order: 2;
        order: 2
    }
    .order-lg-3 {
        -ms-flex-order: 3;
        order: 3
    }
    .order-lg-4 {
        -ms-flex-order: 4;
        order: 4
    }
    .order-lg-5 {
        -ms-flex-order: 5;
        order: 5
    }
    .order-lg-6 {
        -ms-flex-order: 6;
        order: 6
    }
    .order-lg-7 {
        -ms-flex-order: 7;
        order: 7
    }
    .order-lg-8 {
        -ms-flex-order: 8;
        order: 8
    }
    .order-lg-9 {
        -ms-flex-order: 9;
        order: 9
    }
    .order-lg-10 {
        -ms-flex-order: 10;
        order: 10
    }
    .order-lg-11 {
        -ms-flex-order: 11;
        order: 11
    }
    .order-lg-12 {
        -ms-flex-order: 12;
        order: 12
    }
    .offset-lg-0 {
        margin-left: 0
    }
    .offset-lg-1 {
        margin-left: 8.333333%
    }
    .offset-lg-2 {
        margin-left: 16.666667%
    }
    .offset-lg-3 {
        margin-left: 25%
    }
    .offset-lg-4 {
        margin-left: 33.333333%
    }
    .offset-lg-5 {
        margin-left: 41.666667%
    }
    .offset-lg-6 {
        margin-left: 50%
    }
    .offset-lg-7 {
        margin-left: 58.333333%
    }
    .offset-lg-8 {
        margin-left: 66.666667%
    }
    .offset-lg-9 {
        margin-left: 75%
    }
    .offset-lg-10 {
        margin-left: 83.333333%
    }
    .offset-lg-11 {
        margin-left: 91.666667%
    }
}

@media (min-width:1200px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }
    .col-xl-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }
    .col-xl-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }
    .col-xl-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }
    .col-xl-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }
    .col-xl-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }
    .col-xl-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }
    .col-xl-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }
    .col-xl-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }
    .col-xl-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }
    .col-xl-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }
    .col-xl-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }
    .col-xl-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }
    .col-xl-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }
    .order-xl-first {
        -ms-flex-order: -1;
        order: -1
    }
    .order-xl-1 {
        -ms-flex-order: 1;
        order: 1
    }
    .order-xl-2 {
        -ms-flex-order: 2;
        order: 2
    }
    .order-xl-3 {
        -ms-flex-order: 3;
        order: 3
    }
    .order-xl-4 {
        -ms-flex-order: 4;
        order: 4
    }
    .order-xl-5 {
        -ms-flex-order: 5;
        order: 5
    }
    .order-xl-6 {
        -ms-flex-order: 6;
        order: 6
    }
    .order-xl-7 {
        -ms-flex-order: 7;
        order: 7
    }
    .order-xl-8 {
        -ms-flex-order: 8;
        order: 8
    }
    .order-xl-9 {
        -ms-flex-order: 9;
        order: 9
    }
    .order-xl-10 {
        -ms-flex-order: 10;
        order: 10
    }
    .order-xl-11 {
        -ms-flex-order: 11;
        order: 11
    }
    .order-xl-12 {
        -ms-flex-order: 12;
        order: 12
    }
    .offset-xl-0 {
        margin-left: 0
    }
    .offset-xl-1 {
        margin-left: 8.333333%
    }
    .offset-xl-2 {
        margin-left: 16.666667%
    }
    .offset-xl-3 {
        margin-left: 25%
    }
    .offset-xl-4 {
        margin-left: 33.333333%
    }
    .offset-xl-5 {
        margin-left: 41.666667%
    }
    .offset-xl-6 {
        margin-left: 50%
    }
    .offset-xl-7 {
        margin-left: 58.333333%
    }
    .offset-xl-8 {
        margin-left: 66.666667%
    }
    .offset-xl-9 {
        margin-left: 75%
    }
    .offset-xl-10 {
        margin-left: 83.333333%
    }
    .offset-xl-11 {
        margin-left: 91.666667%
    }
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

.table td,
.table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #e9ecef
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e9ecef
}

.table tbody+tbody {
    border-top: 2px solid #e9ecef
}

.table .table {
    background-color: #fff
}

.table-sm td,
.table-sm th {
    padding: .3rem
}

.table-bordered {
    border: 1px solid #e9ecef
}

.table-bordered td,
.table-bordered th {
    border: 1px solid #e9ecef
}

.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, .05)
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 0, 0, .075)
}

.table-primary,
.table-primary>td,
.table-primary>th {
    background-color: #b8daff
}

.table-hover .table-primary:hover {
    background-color: #9fcdff
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #9fcdff
}

.table-secondary,
.table-secondary>td,
.table-secondary>th {
    background-color: #dddfe2
}

.table-hover .table-secondary:hover {
    background-color: #cfd2d6
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #cfd2d6
}

.table-success,
.table-success>td,
.table-success>th {
    background-color: #c3e6cb
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}

.table-info,
.table-info>td,
.table-info>th {
    background-color: #bee5eb
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #abdde5
}

.table-warning,
.table-warning>td,
.table-warning>th {
    background-color: #ffeeba
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #ffe8a1
}

.table-danger,
.table-danger>td,
.table-danger>th {
    background-color: #f5c6cb
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #f1b0b7
}

.table-light,
.table-light>td,
.table-light>th {
    background-color: #fdfdfe
}

.table-hover .table-light:hover {
    background-color: #ececf6
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ececf6
}

.table-dark,
.table-dark>td,
.table-dark>th {
    background-color: #c6c8ca
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #b9bbbe
}

.table-active,
.table-active>td,
.table-active>th {
    background-color: rgba(0, 0, 0, .075)
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, .075)
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, .075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #212529;
    border-color: #32383e
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #e9ecef
}

.table-dark {
    color: #fff;
    background-color: #212529
}

.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #32383e
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, .05)
}

.table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, .075)
}

@media (max-width:575px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }
    .table-responsive-sm.table-bordered {
        border: 0
    }
}

@media (max-width:767px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }
    .table-responsive-md.table-bordered {
        border: 0
    }
}

@media (max-width:991px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }
    .table-responsive-lg.table-bordered {
        border: 0
    }
}

@media (max-width:1199px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }
    .table-responsive-xl.table-bordered {
        border: 0
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar
}

.table-responsive.table-bordered {
    border: 0
}

.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.form-control::-webkit-input-placeholder {
    color: #868e96;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #868e96;
    opacity: 1
}

.form-control::-ms-input-placeholder {
    color: #868e96;
    opacity: 1
}

.form-control::placeholder {
    color: #868e96;
    opacity: 1
}

.form-control:disabled,
.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1
}

select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 2px)
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-file,
.form-control-range {
    display: block
}

.col-form-label {
    padding-top: calc(.375rem + 1px);
    padding-bottom: calc(.375rem + 1px);
    margin-bottom: 0;
    line-height: 1.5
}

.col-form-label-lg {
    padding-top: calc(.5rem + 1px);
    padding-bottom: calc(.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5
}

.col-form-label-sm {
    padding-top: calc(.25rem + 1px);
    padding-bottom: calc(.25rem + 1px);
    font-size: .875rem;
    line-height: 1.5
}

.col-form-legend {
    padding-top: .375rem;
    padding-bottom: .375rem;
    margin-bottom: 0;
    font-size: 1rem
}

.form-control-plaintext {
    padding-top: .375rem;
    padding-bottom: .375rem;
    margin-bottom: 0;
    line-height: 1.5;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0
}

.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm,
.input-group-lg>.form-control-plaintext.form-control,
.input-group-lg>.form-control-plaintext.input-group-addon,
.input-group-lg>.input-group-btn>.form-control-plaintext.btn,
.input-group-sm>.form-control-plaintext.form-control,
.input-group-sm>.form-control-plaintext.input-group-addon,
.input-group-sm>.input-group-btn>.form-control-plaintext.btn {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm,
.input-group-sm>.form-control,
.input-group-sm>.input-group-addon,
.input-group-sm>.input-group-btn>.btn {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.input-group-sm>.input-group-btn>select.btn:not([size]):not([multiple]),
.input-group-sm>select.form-control:not([size]):not([multiple]),
.input-group-sm>select.input-group-addon:not([size]):not([multiple]),
select.form-control-sm:not([size]):not([multiple]) {
    height: calc(1.8125rem + 2px)
}

.form-control-lg,
.input-group-lg>.form-control,
.input-group-lg>.input-group-addon,
.input-group-lg>.input-group-btn>.btn {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.input-group-lg>.input-group-btn>select.btn:not([size]):not([multiple]),
.input-group-lg>select.form-control:not([size]):not([multiple]),
.input-group-lg>select.input-group-addon:not([size]):not([multiple]),
select.form-control-lg:not([size]):not([multiple]) {
    height: calc(2.875rem + 2px)
}

.form-group {
    margin-bottom: 1rem
}

.form-text {
    display: block;
    margin-top: .25rem
}

.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px
}

.form-row>.col,
.form-row>[class*=col-] {
    padding-right: 5px;
    padding-left: 5px
}

.form-check {
    position: relative;
    display: block;
    margin-bottom: .5rem
}

.form-check.disabled .form-check-label {
    color: #868e96
}

.form-check-label {
    padding-left: 1.25rem;
    margin-bottom: 0
}

.form-check-input {
    position: absolute;
    margin-top: .25rem;
    margin-left: -1.25rem
}

.form-check-inline {
    display: inline-block;
    margin-right: .75rem
}

.form-check-inline .form-check-label {
    vertical-align: middle
}

.valid-feedback {
    display: none;
    margin-top: .25rem;
    font-size: .875rem;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    width: 250px;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(40, 167, 69, .8);
    border-radius: .2rem
}

.custom-select.is-valid,
.form-control.is-valid,
.was-validated .custom-select:valid,
.was-validated .form-control:valid {
    border-color: #28a745
}

.custom-select.is-valid:focus,
.form-control.is-valid:focus,
.was-validated .custom-select:valid:focus,
.was-validated .form-control:valid:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
}

.custom-select.is-valid~.valid-feedback,
.custom-select.is-valid~.valid-tooltip,
.form-control.is-valid~.valid-feedback,
.form-control.is-valid~.valid-tooltip,
.was-validated .custom-select:valid~.valid-feedback,
.was-validated .custom-select:valid~.valid-tooltip,
.was-validated .form-control:valid~.valid-feedback,
.was-validated .form-control:valid~.valid-tooltip {
    display: block
}

.form-check-input.is-valid+.form-check-label,
.was-validated .form-check-input:valid+.form-check-label {
    color: #28a745
}

.custom-control-input.is-valid~.custom-control-indicator,
.was-validated .custom-control-input:valid~.custom-control-indicator {
    background-color: rgba(40, 167, 69, .25)
}

.custom-control-input.is-valid~.custom-control-description,
.was-validated .custom-control-input:valid~.custom-control-description {
    color: #28a745
}

.custom-file-input.is-valid~.custom-file-control,
.was-validated .custom-file-input:valid~.custom-file-control {
    border-color: #28a745
}

.custom-file-input.is-valid~.custom-file-control::before,
.was-validated .custom-file-input:valid~.custom-file-control::before {
    border-color: inherit
}

.custom-file-input.is-valid:focus,
.was-validated .custom-file-input:valid:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
}

.invalid-feedback {
    display: none;
    margin-top: .25rem;
    font-size: .875rem;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    width: 250px;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(220, 53, 69, .8);
    border-radius: .2rem
}

.custom-select.is-invalid,
.form-control.is-invalid,
.was-validated .custom-select:invalid,
.was-validated .form-control:invalid {
    border-color: #dc3545
}

.custom-select.is-invalid:focus,
.form-control.is-invalid:focus,
.was-validated .custom-select:invalid:focus,
.was-validated .form-control:invalid:focus {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
}

.custom-select.is-invalid~.invalid-feedback,
.custom-select.is-invalid~.invalid-tooltip,
.form-control.is-invalid~.invalid-feedback,
.form-control.is-invalid~.invalid-tooltip,
.was-validated .custom-select:invalid~.invalid-feedback,
.was-validated .custom-select:invalid~.invalid-tooltip,
.was-validated .form-control:invalid~.invalid-feedback,
.was-validated .form-control:invalid~.invalid-tooltip {
    display: block
}

.form-check-input.is-invalid+.form-check-label,
.was-validated .form-check-input:invalid+.form-check-label {
    color: #dc3545
}

.custom-control-input.is-invalid~.custom-control-indicator,
.was-validated .custom-control-input:invalid~.custom-control-indicator {
    background-color: rgba(220, 53, 69, .25)
}

.custom-control-input.is-invalid~.custom-control-description,
.was-validated .custom-control-input:invalid~.custom-control-description {
    color: #dc3545
}

.custom-file-input.is-invalid~.custom-file-control,
.was-validated .custom-file-input:invalid~.custom-file-control {
    border-color: #dc3545
}

.custom-file-input.is-invalid~.custom-file-control::before,
.was-validated .custom-file-input:invalid~.custom-file-control::before {
    border-color: inherit
}

.custom-file-input.is-invalid:focus,
.was-validated .custom-file-input:invalid:focus {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
}

.form-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center
}

.form-inline .form-check {
    width: 100%
}

@media (min-width:576px) {
    .form-inline label {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0
    }
    .form-inline .form-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0
    }
    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }
    .form-inline .form-control-plaintext {
        display: inline-block
    }
    .form-inline .input-group {
        width: auto
    }
    .form-inline .form-check {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        margin-top: 0;
        margin-bottom: 0
    }
    .form-inline .form-check-label {
        padding-left: 0
    }
    .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: .25rem;
        margin-left: 0
    }
    .form-inline .custom-control {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0
    }
    .form-inline .custom-control-indicator {
        position: static;
        display: inline-block;
        margin-right: .25rem;
        vertical-align: text-bottom
    }
    .form-inline .has-feedback .form-control-feedback {
        top: 0
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

.btn:focus,
.btn:hover {
    text-decoration: none
}

.btn.focus,
.btn:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.btn.disabled,
.btn:disabled {
    opacity: .65
}

.btn:not([disabled]):not(.disabled).active,
.btn:not([disabled]):not(.disabled):active {
    background-image: none
}

a.btn.disabled,
fieldset[disabled] a.btn {
    pointer-events: none
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc
}

.btn-primary.focus,
.btn-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.btn-primary.disabled,
.btn-primary:disabled {
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:not([disabled]):not(.disabled).active,
.btn-primary:not([disabled]):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.btn-secondary {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96
}

.btn-secondary:hover {
    color: #fff;
    background-color: #727b84;
    border-color: #6c757d
}

.btn-secondary.focus,
.btn-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(134, 142, 150, .5)
}

.btn-secondary.disabled,
.btn-secondary:disabled {
    background-color: #868e96;
    border-color: #868e96
}

.btn-secondary:not([disabled]):not(.disabled).active,
.btn-secondary:not([disabled]):not(.disabled):active,
.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #666e76;
    box-shadow: 0 0 0 .2rem rgba(134, 142, 150, .5)
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus,
.btn-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-success.disabled,
.btn-success:disabled {
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not([disabled]):not(.disabled).active,
.btn-success:not([disabled]):not(.disabled):active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430;
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b
}

.btn-info.focus,
.btn-info:focus {
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.btn-info.disabled,
.btn-info:disabled {
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not([disabled]):not(.disabled).active,
.btn-info:not([disabled]):not(.disabled):active,
.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f;
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.btn-warning {
    color: #111;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: #111;
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning.focus,
.btn-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.btn-warning.disabled,
.btn-warning:disabled {
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not([disabled]):not(.disabled).active,
.btn-warning:not([disabled]):not(.disabled):active,
.show>.btn-warning.dropdown-toggle {
    color: #111;
    background-color: #d39e00;
    border-color: #c69500;
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger.focus,
.btn-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.btn-danger.disabled,
.btn-danger:disabled {
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not([disabled]):not(.disabled).active,
.btn-danger:not([disabled]):not(.disabled):active,
.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d;
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.btn-light {
    color: #111;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: #111;
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light.focus,
.btn-light:focus {
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.btn-light.disabled,
.btn-light:disabled {
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not([disabled]):not(.disabled).active,
.btn-light:not([disabled]):not(.disabled):active,
.show>.btn-light.dropdown-toggle {
    color: #111;
    background-color: #dae0e5;
    border-color: #d3d9df;
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark.focus,
.btn-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.btn-dark.disabled,
.btn-dark:disabled {
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not([disabled]):not(.disabled).active,
.btn-dark:not([disabled]):not(.disabled):active,
.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.btn-outline-primary {
    color: #007bff;
    background-color: transparent;
    background-image: none;
    border-color: #007bff
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary.focus,
.btn-outline-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent
}

.btn-outline-primary:not([disabled]):not(.disabled).active,
.btn-outline-primary:not([disabled]):not(.disabled):active,
.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.btn-outline-secondary {
    color: #868e96;
    background-color: transparent;
    background-image: none;
    border-color: #868e96
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96
}

.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(134, 142, 150, .5)
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #868e96;
    background-color: transparent
}

.btn-outline-secondary:not([disabled]):not(.disabled).active,
.btn-outline-secondary:not([disabled]):not(.disabled):active,
.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
    box-shadow: 0 0 0 .2rem rgba(134, 142, 150, .5)
}

.btn-outline-success {
    color: #28a745;
    background-color: transparent;
    background-image: none;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success.focus,
.btn-outline-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not([disabled]):not(.disabled).active,
.btn-outline-success:not([disabled]):not(.disabled):active,
.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-outline-info {
    color: #17a2b8;
    background-color: transparent;
    background-image: none;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info.focus,
.btn-outline-info:focus {
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not([disabled]):not(.disabled).active,
.btn-outline-info:not([disabled]):not(.disabled):active,
.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.btn-outline-warning {
    color: #ffc107;
    background-color: transparent;
    background-image: none;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #fff;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning.focus,
.btn-outline-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not([disabled]):not(.disabled).active,
.btn-outline-warning:not([disabled]):not(.disabled):active,
.show>.btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #ffc107;
    border-color: #ffc107;
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.btn-outline-danger {
    color: #dc3545;
    background-color: transparent;
    background-image: none;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger.focus,
.btn-outline-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not([disabled]):not(.disabled).active,
.btn-outline-danger:not([disabled]):not(.disabled):active,
.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.btn-outline-light {
    color: #f8f9fa;
    background-color: transparent;
    background-image: none;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light.focus,
.btn-outline-light:focus {
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not([disabled]):not(.disabled).active,
.btn-outline-light:not([disabled]):not(.disabled):active,
.show>.btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.btn-outline-dark {
    color: #343a40;
    background-color: transparent;
    background-image: none;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark.focus,
.btn-outline-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not([disabled]):not(.disabled).active,
.btn-outline-dark:not([disabled]):not(.disabled):active,
.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    background-color: transparent
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent
}

.btn-link.focus,
.btn-link:focus {
    border-color: transparent;
    box-shadow: none
}

.btn-link.disabled,
.btn-link:disabled {
    color: #868e96
}

.btn-group-lg>.btn,
.btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.btn-group-sm>.btn,
.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block+.btn-block {
    margin-top: .5rem
}

input[type=button].btn-block,
input[type=reset].btn-block,
input[type=submit].btn-block {
    width: 100%
}

.fade {
    opacity: 0;
    transition: opacity .15s linear
}

.fade.show {
    opacity: 1
}

.collapse {
    display: none
}

.collapse.show {
    display: block
}

tr.collapse.show {
    display: table-row
}

tbody.collapse.show {
    display: table-row-group
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height .35s ease
}

.dropdown,
.dropup {
    position: relative
}

.dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: .25rem
}

.dropup .dropdown-menu {
    margin-top: 0;
    margin-bottom: .125rem
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: 0;
    border-right: .3em solid transparent;
    border-bottom: .3em solid;
    border-left: .3em solid transparent
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0
}

.dropdown-item:focus,
.dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa
}

.dropdown-item.active,
.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #868e96;
    background-color: transparent
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: .5rem 1.5rem;
    margin-bottom: 0;
    font-size: .875rem;
    color: #868e96;
    white-space: nowrap
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle
}

.btn-group-vertical>.btn,
.btn-group>.btn {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto
}

.btn-group-vertical>.btn:hover,
.btn-group>.btn:hover {
    z-index: 2
}

.btn-group-vertical>.btn.active,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn:focus,
.btn-group>.btn.active,
.btn-group>.btn:active,
.btn-group>.btn:focus {
    z-index: 2
}

.btn-group .btn+.btn,
.btn-group .btn+.btn-group,
.btn-group .btn-group+.btn,
.btn-group .btn-group+.btn-group,
.btn-group-vertical .btn+.btn,
.btn-group-vertical .btn+.btn-group,
.btn-group-vertical .btn-group+.btn,
.btn-group-vertical .btn-group+.btn-group {
    margin-left: -1px
}

.btn-toolbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0
}

.btn-group>.btn:first-child {
    margin-left: 0
}

.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn:last-child:not(:first-child),
.btn-group>.dropdown-toggle:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group>.btn-group {
    float: left
}

.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
    border-radius: 0
}

.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.btn+.dropdown-toggle-split {
    padding-right: .5625rem;
    padding-left: .5625rem
}

.btn+.dropdown-toggle-split::after {
    margin-left: 0
}

.btn-group-sm>.btn+.dropdown-toggle-split,
.btn-sm+.dropdown-toggle-split {
    padding-right: .375rem;
    padding-left: .375rem
}

.btn-group-lg>.btn+.dropdown-toggle-split,
.btn-lg+.dropdown-toggle-split {
    padding-right: .75rem;
    padding-left: .75rem
}

.btn-group-vertical {
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: center;
    justify-content: center
}

.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
    width: 100%
}

.btn-group-vertical>.btn+.btn,
.btn-group-vertical>.btn+.btn-group,
.btn-group-vertical>.btn-group+.btn,
.btn-group-vertical>.btn-group+.btn-group {
    margin-top: -1px;
    margin-left: 0
}

.btn-group-vertical>.btn:not(:first-child):not(:last-child) {
    border-radius: 0
}

.btn-group-vertical>.btn:first-child:not(:last-child) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn:last-child:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
    border-radius: 0
}

.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

[data-toggle=buttons]>.btn input[type=checkbox],
[data-toggle=buttons]>.btn input[type=radio],
[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
[data-toggle=buttons]>.btn-group>.btn input[type=radio] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%
}

.input-group .form-control {
    position: relative;
    z-index: 2;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0
}

.input-group .form-control:active,
.input-group .form-control:focus,
.input-group .form-control:hover {
    z-index: 3
}

.input-group .form-control,
.input-group-addon,
.input-group-btn {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center
}

.input-group .form-control:not(:first-child):not(:last-child),
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child) {
    border-radius: 0
}

.input-group-addon,
.input-group-btn {
    white-space: nowrap
}

.input-group-addon {
    padding: .375rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.input-group-addon.form-control-sm,
.input-group-sm>.input-group-addon,
.input-group-sm>.input-group-btn>.input-group-addon.btn {
    padding: .25rem .5rem;
    font-size: .875rem;
    border-radius: .2rem
}

.input-group-addon.form-control-lg,
.input-group-lg>.input-group-addon,
.input-group-lg>.input-group-btn>.input-group-addon.btn {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    border-radius: .3rem
}

.input-group-addon input[type=checkbox],
.input-group-addon input[type=radio] {
    margin-top: 0
}

.input-group .form-control:not(:last-child),
.input-group-addon:not(:last-child),
.input-group-btn:not(:first-child)>.btn-group:not(:last-child)>.btn,
.input-group-btn:not(:first-child)>.btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:not(:last-child)>.btn,
.input-group-btn:not(:last-child)>.btn-group>.btn,
.input-group-btn:not(:last-child)>.dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group-addon:not(:last-child) {
    border-right: 0
}

.input-group .form-control:not(:first-child),
.input-group-addon:not(:first-child),
.input-group-btn:not(:first-child)>.btn,
.input-group-btn:not(:first-child)>.btn-group>.btn,
.input-group-btn:not(:first-child)>.dropdown-toggle,
.input-group-btn:not(:last-child)>.btn-group:not(:first-child)>.btn,
.input-group-btn:not(:last-child)>.btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.form-control+.input-group-addon:not(:first-child) {
    border-left: 0
}

.input-group-btn {
    position: relative;
    -ms-flex-align: stretch;
    align-items: stretch;
    font-size: 0;
    white-space: nowrap
}

.input-group-btn>.btn {
    position: relative
}

.input-group-btn>.btn+.btn {
    margin-left: -1px
}

.input-group-btn>.btn:active,
.input-group-btn>.btn:focus,
.input-group-btn>.btn:hover {
    z-index: 3
}

.input-group-btn:first-child>.btn+.btn {
    margin-left: 0
}

.input-group-btn:not(:last-child)>.btn,
.input-group-btn:not(:last-child)>.btn-group {
    margin-right: -1px
}

.input-group-btn:not(:first-child)>.btn,
.input-group-btn:not(:first-child)>.btn-group {
    z-index: 2;
    margin-left: 0
}

.input-group-btn:not(:first-child)>.btn-group:first-child,
.input-group-btn:not(:first-child)>.btn:first-child {
    margin-left: -1px
}

.input-group-btn:not(:first-child)>.btn-group:active,
.input-group-btn:not(:first-child)>.btn-group:focus,
.input-group-btn:not(:first-child)>.btn-group:hover,
.input-group-btn:not(:first-child)>.btn:active,
.input-group-btn:not(:first-child)>.btn:focus,
.input-group-btn:not(:first-child)>.btn:hover {
    z-index: 3
}

.custom-control {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    min-height: 1.5rem;
    padding-left: 1.5rem;
    margin-right: 1rem
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.custom-control-input:checked~.custom-control-indicator {
    color: #fff;
    background-color: #007bff
}

.custom-control-input:focus~.custom-control-indicator {
    box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-control-input:active~.custom-control-indicator {
    color: #fff;
    background-color: #b3d7ff
}

.custom-control-input:disabled~.custom-control-indicator {
    background-color: #e9ecef
}

.custom-control-input:disabled~.custom-control-description {
    color: #868e96
}

.custom-control-indicator {
    position: absolute;
    top: .25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #ddd;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%
}

.custom-checkbox .custom-control-indicator {
    border-radius: .25rem
}

.custom-checkbox .custom-control-input:checked~.custom-control-indicator {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E")
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-indicator {
    background-color: #007bff;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")
}

.custom-radio .custom-control-indicator {
    border-radius: 50%
}

.custom-radio .custom-control-input:checked~.custom-control-indicator {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
}

.custom-controls-stacked {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column
}

.custom-controls-stacked .custom-control {
    margin-bottom: .25rem
}

.custom-controls-stacked .custom-control+.custom-control {
    margin-left: 0
}

.custom-select {
    display: inline-block;
    max-width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
    background-size: 8px 10px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.custom-select[multiple] {
    height: auto;
    background-image: none
}

.custom-select:disabled {
    color: #868e96;
    background-color: #e9ecef
}

.custom-select::-ms-expand {
    opacity: 0
}

.custom-select-sm {
    height: calc(1.8125rem + 2px);
    padding-top: .375rem;
    padding-bottom: .375rem;
    font-size: 75%
}

.custom-file {
    position: relative;
    display: inline-block;
    max-width: 100%;
    height: calc(2.25rem + 2px);
    margin-bottom: 0
}

.custom-file-input {
    min-width: 14rem;
    max-width: 100%;
    height: calc(2.25rem + 2px);
    margin: 0;
    opacity: 0
}

.custom-file-input:focus~.custom-file-control {
    box-shadow: 0 0 0 .075rem #fff, 0 0 0 .2rem #007bff
}

.custom-file-control {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 5;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.custom-file-control:lang(en):empty::after {
    content: "Choose file..."
}

.custom-file-control::before {
    position: absolute;
    top: -1px;
    right: -1px;
    bottom: -1px;
    z-index: 6;
    display: block;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0 .25rem .25rem 0
}

.custom-file-control:lang(en)::before {
    content: "Browse"
}

.nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: .5rem 1rem
}

.nav-link:focus,
.nav-link:hover {
    text-decoration: none
}

.nav-link.disabled {
    color: #868e96
}

.nav-tabs {
    border-bottom: 1px solid #ddd
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #ddd
}

.nav-tabs .nav-link.disabled {
    color: #868e96;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #ddd #ddd #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills .nav-link {
    border-radius: .25rem
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff
}

.nav-fill .nav-item {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center
}

.nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem
}

.navbar>.container,
.navbar>.container-fluid {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.navbar-brand {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap
}

.navbar-brand:focus,
.navbar-brand:hover {
    text-decoration: none
}

.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: .5rem;
    padding-bottom: .5rem
}

.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-align: center;
    align-items: center
}

.navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    background: 0 0;
    border: 1px solid transparent;
    border-radius: .25rem
}

.navbar-toggler:focus,
.navbar-toggler:hover {
    text-decoration: none
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width:575px) {
    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:576px) {
    .navbar-expand-sm {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }
    .navbar-expand-sm .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }
    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }
    .navbar-expand-sm .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }
    .navbar-expand-sm .navbar-toggler {
        display: none
    }
    .navbar-expand-sm .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

@media (max-width:767px) {
    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:768px) {
    .navbar-expand-md {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }
    .navbar-expand-md .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }
    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }
    .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }
    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }
    .navbar-expand-md .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }
    .navbar-expand-md .navbar-toggler {
        display: none
    }
    .navbar-expand-md .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

@media (max-width:991px) {
    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:992px) {
    .navbar-expand-lg {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }
    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }
    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }
    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }
    .navbar-expand-lg .navbar-toggler {
        display: none
    }
    .navbar-expand-lg .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

@media (max-width:1199px) {
    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:1200px) {
    .navbar-expand-xl {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }
    .navbar-expand-xl .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }
    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }
    .navbar-expand-xl .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }
    .navbar-expand-xl .navbar-toggler {
        display: none
    }
    .navbar-expand-xl .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

.navbar-expand {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: .5rem;
    padding-left: .5rem
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: -ms-flexbox!important;
    display: flex!important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-expand .dropup .dropdown-menu {
    top: auto;
    bottom: 100%
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, .5)
}

.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0, 0, 0, .7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, .3)
}

.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show>.nav-link {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, .5);
    border-color: rgba(0, 0, 0, .1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, .5)
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-text a:focus,
.navbar-light .navbar-text a:hover {
    color: rgba(0, 0, 0, .9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:focus,
.navbar-dark .navbar-brand:hover {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, .5)
}

.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255, 255, 255, .75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, .25)
}

.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show>.nav-link {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, .5);
    border-color: rgba(255, 255, 255, .1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, .5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:focus,
.navbar-dark .navbar-text a:hover {
    color: #fff
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem
}

.card>hr {
    margin-right: 0;
    margin-left: 0
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card-title {
    margin-bottom: .75rem
}

.card-subtitle {
    margin-top: -.375rem;
    margin-bottom: 0
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link:hover {
    text-decoration: none
}

.card-link+.card-link {
    margin-left: 1.25rem
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, .03);
    border-bottom: 1px solid rgba(0, 0, 0, .125)
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0
}

.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0, 0, 0, .03);
    border-top: 1px solid rgba(0, 0, 0, .125)
}

.card-footer:last-child {
    border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
}

.card-header-tabs {
    margin-right: -.625rem;
    margin-bottom: -.75rem;
    margin-left: -.625rem;
    border-bottom: 0
}

.card-header-pills {
    margin-right: -.625rem;
    margin-left: -.625rem
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem
}

.card-img {
    width: 100%;
    border-radius: calc(.25rem - 1px)
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px)
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(.25rem - 1px);
    border-bottom-left-radius: calc(.25rem - 1px)
}

.card-deck {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column
}

.card-deck .card {
    margin-bottom: 15px
}

@media (min-width:576px) {
    .card-deck {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px
    }
    .card-deck .card {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
    }
}

.card-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column
}

.card-group .card {
    margin-bottom: 15px
}

@media (min-width:576px) {
    .card-group {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap
    }
    .card-group .card {
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0
    }
    .card-group .card+.card {
        margin-left: 0;
        border-left: 0
    }
    .card-group .card:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    .card-group .card:first-child .card-img-top {
        border-top-right-radius: 0
    }
    .card-group .card:first-child .card-img-bottom {
        border-bottom-right-radius: 0
    }
    .card-group .card:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    .card-group .card:last-child .card-img-top {
        border-top-left-radius: 0
    }
    .card-group .card:last-child .card-img-bottom {
        border-bottom-left-radius: 0
    }
    .card-group .card:only-child {
        border-radius: .25rem
    }
    .card-group .card:only-child .card-img-top {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }
    .card-group .card:only-child .card-img-bottom {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }
    .card-group .card:not(:first-child):not(:last-child):not(:only-child) {
        border-radius: 0
    }
    .card-group .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
    .card-group .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
        border-radius: 0
    }
}

.card-columns .card {
    margin-bottom: .75rem
}

@media (min-width:576px) {
    .card-columns {
        -webkit-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        column-gap: 1.25rem
    }
    .card-columns .card {
        display: inline-block;
        width: 100%
    }
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: .25rem
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #868e96;
    content: "/"
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: none
}

.breadcrumb-item.active {
    color: #868e96
}

.pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem
}

.page-item.active .page-link {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.page-item.disabled .page-link {
    color: #868e96;
    pointer-events: none;
    background-color: #fff;
    border-color: #ddd
}

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #ddd
}

.page-link:focus,
.page-link:hover {
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #ddd
}

.pagination-lg .page-link {
    padding: .75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.pagination-sm .page-link {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: .2rem;
    border-bottom-left-radius: .2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: .2rem;
    border-bottom-right-radius: .2rem
}

.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 10rem
}

.badge-primary {
    color: #fff;
    background-color: #007bff
}

.badge-primary[href]:focus,
.badge-primary[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #0062cc
}

.badge-secondary {
    color: #fff;
    background-color: #868e96
}

.badge-secondary[href]:focus,
.badge-secondary[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #6c757d
}

.badge-success {
    color: #fff;
    background-color: #28a745
}

.badge-success[href]:focus,
.badge-success[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1e7e34
}

.badge-info {
    color: #fff;
    background-color: #17a2b8
}

.badge-info[href]:focus,
.badge-info[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #117a8b
}

.badge-warning {
    color: #111;
    background-color: #ffc107
}

.badge-warning[href]:focus,
.badge-warning[href]:hover {
    color: #111;
    text-decoration: none;
    background-color: #d39e00
}

.badge-danger {
    color: #fff;
    background-color: #dc3545
}

.badge-danger[href]:focus,
.badge-danger[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #bd2130
}

.badge-light {
    color: #111;
    background-color: #f8f9fa
}

.badge-light[href]:focus,
.badge-light[href]:hover {
    color: #111;
    text-decoration: none;
    background-color: #dae0e5
}

.badge-dark {
    color: #fff;
    background-color: #343a40
}

.badge-dark[href]:focus,
.badge-dark[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1d2124
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: .3rem
}

@media (min-width:576px) {
    .jumbotron {
        padding: 4rem 2rem
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0
}

.alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: .75rem 1.25rem;
    color: inherit
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff
}

.alert-primary hr {
    border-top-color: #9fcdff
}

.alert-primary .alert-link {
    color: #002752
}

.alert-secondary {
    color: #464a4e;
    background-color: #e7e8ea;
    border-color: #dddfe2
}

.alert-secondary hr {
    border-top-color: #cfd2d6
}

.alert-secondary .alert-link {
    color: #2e3133
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb
}

.alert-success hr {
    border-top-color: #b1dfbb
}

.alert-success .alert-link {
    color: #0b2e13
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert-info hr {
    border-top-color: #abdde5
}

.alert-info .alert-link {
    color: #062c33
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert-warning hr {
    border-top-color: #ffe8a1
}

.alert-warning .alert-link {
    color: #533f03
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert-danger hr {
    border-top-color: #f1b0b7
}

.alert-danger .alert-link {
    color: #491217
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe
}

.alert-light hr {
    border-top-color: #ececf6
}

.alert-light .alert-link {
    color: #686868
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca
}

.alert-dark hr {
    border-top-color: #b9bbbe
}

.alert-dark .alert-link {
    color: #040505
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }
    to {
        background-position: 0 0
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }
    to {
        background-position: 0 0
    }
}

.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem
}

.progress-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    background-color: #007bff
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite
}

.media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start
}

.media-body {
    -ms-flex: 1;
    flex: 1
}

.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit
}

.list-group-item-action:focus,
.list-group-item-action:hover {
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef
}

.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, .125)
}

.list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.list-group-item:focus,
.list-group-item:hover {
    text-decoration: none
}

.list-group-item.disabled,
.list-group-item:disabled {
    color: #868e96;
    background-color: #fff
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0
}

.list-group-flush:last-child .list-group-item:last-child {
    border-bottom: 0
}

.list-group-item-primary {
    color: #004085;
    background-color: #b8daff
}

a.list-group-item-primary,
button.list-group-item-primary {
    color: #004085
}

a.list-group-item-primary:focus,
a.list-group-item-primary:hover,
button.list-group-item-primary:focus,
button.list-group-item-primary:hover {
    color: #004085;
    background-color: #9fcdff
}

a.list-group-item-primary.active,
button.list-group-item-primary.active {
    color: #fff;
    background-color: #004085;
    border-color: #004085
}

.list-group-item-secondary {
    color: #464a4e;
    background-color: #dddfe2
}

a.list-group-item-secondary,
button.list-group-item-secondary {
    color: #464a4e
}

a.list-group-item-secondary:focus,
a.list-group-item-secondary:hover,
button.list-group-item-secondary:focus,
button.list-group-item-secondary:hover {
    color: #464a4e;
    background-color: #cfd2d6
}

a.list-group-item-secondary.active,
button.list-group-item-secondary.active {
    color: #fff;
    background-color: #464a4e;
    border-color: #464a4e
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb
}

a.list-group-item-success,
button.list-group-item-success {
    color: #155724
}

a.list-group-item-success:focus,
a.list-group-item-success:hover,
button.list-group-item-success:focus,
button.list-group-item-success:hover {
    color: #155724;
    background-color: #b1dfbb
}

a.list-group-item-success.active,
button.list-group-item-success.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb
}

a.list-group-item-info,
button.list-group-item-info {
    color: #0c5460
}

a.list-group-item-info:focus,
a.list-group-item-info:hover,
button.list-group-item-info:focus,
button.list-group-item-info:hover {
    color: #0c5460;
    background-color: #abdde5
}

a.list-group-item-info.active,
button.list-group-item-info.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba
}

a.list-group-item-warning,
button.list-group-item-warning {
    color: #856404
}

a.list-group-item-warning:focus,
a.list-group-item-warning:hover,
button.list-group-item-warning:focus,
button.list-group-item-warning:hover {
    color: #856404;
    background-color: #ffe8a1
}

a.list-group-item-warning.active,
button.list-group-item-warning.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb
}

a.list-group-item-danger,
button.list-group-item-danger {
    color: #721c24
}

a.list-group-item-danger:focus,
a.list-group-item-danger:hover,
button.list-group-item-danger:focus,
button.list-group-item-danger:hover {
    color: #721c24;
    background-color: #f1b0b7
}

a.list-group-item-danger.active,
button.list-group-item-danger.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe
}

a.list-group-item-light,
button.list-group-item-light {
    color: #818182
}

a.list-group-item-light:focus,
a.list-group-item-light:hover,
button.list-group-item-light:focus,
button.list-group-item-light:hover {
    color: #818182;
    background-color: #ececf6
}

a.list-group-item-light.active,
button.list-group-item-light.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca
}

a.list-group-item-dark,
button.list-group-item-dark {
    color: #1b1e21
}

a.list-group-item-dark:focus,
a.list-group-item-dark:hover,
button.list-group-item-dark:focus,
button.list-group-item-dark:hover {
    color: #1b1e21;
    background-color: #b9bbbe
}

a.list-group-item-dark.active,
button.list-group-item-dark.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5
}

.close:focus,
.close:hover {
    color: #000;
    text-decoration: none;
    opacity: .75
}

button.close {
    padding: 0;
    background: 0 0;
    border: 0;
    -webkit-appearance: none
}

.modal-open {
    overflow: hidden
}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0
}

.modal.fade .modal-dialog {
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    transition: transform .3s ease-out, -webkit-transform .3s ease-out;
    -webkit-transform: translate(0, -25%);
    transform: translate(0, -25%)
}

.modal.show .modal-dialog {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0)
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
    pointer-events: none
}

.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem;
    outline: 0
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: .5
}

.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #e9ecef;
    border-top-left-radius: .3rem;
    border-top-right-radius: .3rem
}

.modal-header .close {
    padding: 15px;
    margin: -15px -15px -15px auto
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 15px
}

.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 15px;
    border-top: 1px solid #e9ecef
}

.modal-footer>:not(:first-child) {
    margin-left: .25rem
}

.modal-footer>:not(:last-child) {
    margin-right: .25rem
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width:576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 30px auto
    }
    .modal-sm {
        max-width: 300px
    }
}

@media (min-width:992px) {
    .modal-lg {
        max-width: 800px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: .9
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 5px;
    height: 5px
}

.tooltip .arrow::before {
    position: absolute;
    border-color: transparent;
    border-style: solid
}

.tooltip.bs-tooltip-auto[x-placement^=top],
.tooltip.bs-tooltip-top {
    padding: 5px 0
}

.tooltip.bs-tooltip-auto[x-placement^=top] .arrow,
.tooltip.bs-tooltip-top .arrow {
    bottom: 0
}

.tooltip.bs-tooltip-auto[x-placement^=top] .arrow::before,
.tooltip.bs-tooltip-top .arrow::before {
    margin-left: -3px;
    content: "";
    border-width: 5px 5px 0;
    border-top-color: #000
}

.tooltip.bs-tooltip-auto[x-placement^=right],
.tooltip.bs-tooltip-right {
    padding: 0 5px
}

.tooltip.bs-tooltip-auto[x-placement^=right] .arrow,
.tooltip.bs-tooltip-right .arrow {
    left: 0
}

.tooltip.bs-tooltip-auto[x-placement^=right] .arrow::before,
.tooltip.bs-tooltip-right .arrow::before {
    margin-top: -3px;
    content: "";
    border-width: 5px 5px 5px 0;
    border-right-color: #000
}

.tooltip.bs-tooltip-auto[x-placement^=bottom],
.tooltip.bs-tooltip-bottom {
    padding: 5px 0
}

.tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow,
.tooltip.bs-tooltip-bottom .arrow {
    top: 0
}

.tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow::before,
.tooltip.bs-tooltip-bottom .arrow::before {
    margin-left: -3px;
    content: "";
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.tooltip.bs-tooltip-auto[x-placement^=left],
.tooltip.bs-tooltip-left {
    padding: 0 5px
}

.tooltip.bs-tooltip-auto[x-placement^=left] .arrow,
.tooltip.bs-tooltip-left .arrow {
    right: 0
}

.tooltip.bs-tooltip-auto[x-placement^=left] .arrow::before,
.tooltip.bs-tooltip-left .arrow::before {
    right: 0;
    margin-top: -3px;
    content: "";
    border-width: 5px 0 5px 5px;
    border-left-color: #000
}

.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: .25rem
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem
}

.popover .arrow {
    position: absolute;
    display: block;
    width: .8rem;
    height: .4rem
}

.popover .arrow::after,
.popover .arrow::before {
    position: absolute;
    display: block;
    border-color: transparent;
    border-style: solid
}

.popover .arrow::before {
    content: "";
    border-width: .8rem
}

.popover .arrow::after {
    content: "";
    border-width: .8rem
}

.popover.bs-popover-auto[x-placement^=top],
.popover.bs-popover-top {
    margin-bottom: .8rem
}

.popover.bs-popover-auto[x-placement^=top] .arrow,
.popover.bs-popover-top .arrow {
    bottom: 0
}

.popover.bs-popover-auto[x-placement^=top] .arrow::after,
.popover.bs-popover-auto[x-placement^=top] .arrow::before,
.popover.bs-popover-top .arrow::after,
.popover.bs-popover-top .arrow::before {
    border-bottom-width: 0
}

.popover.bs-popover-auto[x-placement^=top] .arrow::before,
.popover.bs-popover-top .arrow::before {
    bottom: -.8rem;
    margin-left: -.8rem;
    border-top-color: rgba(0, 0, 0, .25)
}

.popover.bs-popover-auto[x-placement^=top] .arrow::after,
.popover.bs-popover-top .arrow::after {
    bottom: calc((.8rem - 1px) * -1);
    margin-left: -.8rem;
    border-top-color: #fff
}

.popover.bs-popover-auto[x-placement^=right],
.popover.bs-popover-right {
    margin-left: .8rem
}

.popover.bs-popover-auto[x-placement^=right] .arrow,
.popover.bs-popover-right .arrow {
    left: 0
}

.popover.bs-popover-auto[x-placement^=right] .arrow::after,
.popover.bs-popover-auto[x-placement^=right] .arrow::before,
.popover.bs-popover-right .arrow::after,
.popover.bs-popover-right .arrow::before {
    margin-top: -.8rem;
    border-left-width: 0
}

.popover.bs-popover-auto[x-placement^=right] .arrow::before,
.popover.bs-popover-right .arrow::before {
    left: -.8rem;
    border-right-color: rgba(0, 0, 0, .25)
}

.popover.bs-popover-auto[x-placement^=right] .arrow::after,
.popover.bs-popover-right .arrow::after {
    left: calc((.8rem - 1px) * -1);
    border-right-color: #fff
}

.popover.bs-popover-auto[x-placement^=bottom],
.popover.bs-popover-bottom {
    margin-top: .8rem
}

.popover.bs-popover-auto[x-placement^=bottom] .arrow,
.popover.bs-popover-bottom .arrow {
    top: 0
}

.popover.bs-popover-auto[x-placement^=bottom] .arrow::after,
.popover.bs-popover-auto[x-placement^=bottom] .arrow::before,
.popover.bs-popover-bottom .arrow::after,
.popover.bs-popover-bottom .arrow::before {
    margin-left: -.8rem;
    border-top-width: 0
}

.popover.bs-popover-auto[x-placement^=bottom] .arrow::before,
.popover.bs-popover-bottom .arrow::before {
    top: -.8rem;
    border-bottom-color: rgba(0, 0, 0, .25)
}

.popover.bs-popover-auto[x-placement^=bottom] .arrow::after,
.popover.bs-popover-bottom .arrow::after {
    top: calc((.8rem - 1px) * -1);
    border-bottom-color: #fff
}

.popover.bs-popover-auto[x-placement^=bottom] .popover-header::before,
.popover.bs-popover-bottom .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 20px;
    margin-left: -10px;
    content: "";
    border-bottom: 1px solid #f7f7f7
}

.popover.bs-popover-auto[x-placement^=left],
.popover.bs-popover-left {
    margin-right: .8rem
}

.popover.bs-popover-auto[x-placement^=left] .arrow,
.popover.bs-popover-left .arrow {
    right: 0
}

.popover.bs-popover-auto[x-placement^=left] .arrow::after,
.popover.bs-popover-auto[x-placement^=left] .arrow::before,
.popover.bs-popover-left .arrow::after,
.popover.bs-popover-left .arrow::before {
    margin-top: -.8rem;
    border-right-width: 0
}

.popover.bs-popover-auto[x-placement^=left] .arrow::before,
.popover.bs-popover-left .arrow::before {
    right: -.8rem;
    border-left-color: rgba(0, 0, 0, .25)
}

.popover.bs-popover-auto[x-placement^=left] .arrow::after,
.popover.bs-popover-left .arrow::after {
    right: calc((.8rem - 1px) * -1);
    border-left-color: #fff
}

.popover-header {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    color: inherit;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: .5rem .75rem;
    color: #212529
}

.carousel {
    position: relative
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-item {
    position: relative;
    display: none;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease, -webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block
}

.carousel-item-next,
.carousel-item-prev {
    position: absolute;
    top: 0
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
    -webkit-transform: translateX(0);
    transform: translateX(0)
}

@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.active.carousel-item-right,
.carousel-item-next {
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
    .active.carousel-item-right,
    .carousel-item-next {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }
}

.active.carousel-item-left,
.carousel-item-prev {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
    .active.carousel-item-left,
    .carousel-item-prev {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }
}

.carousel-control-next,
.carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5
}

.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-next-icon,
.carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: transparent no-repeat center center;
    background-size: 100% 100%
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 10px;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, .5)
}

.carousel-indicators li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: ""
}

.carousel-indicators li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: ""
}

.carousel-indicators .active {
    background-color: #fff
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

.align-baseline {
    vertical-align: baseline!important
}

.align-top {
    vertical-align: top!important
}

.align-middle {
    vertical-align: middle!important
}

.align-bottom {
    vertical-align: bottom!important
}

.align-text-bottom {
    vertical-align: text-bottom!important
}

.align-text-top {
    vertical-align: text-top!important
}

.bg-primary {
    background-color: #007bff!important
}

a.bg-primary:focus,
a.bg-primary:hover {
    background-color: #0062cc!important
}

.bg-secondary {
    background-color: #868e96!important
}

a.bg-secondary:focus,
a.bg-secondary:hover {
    background-color: #6c757d!important
}

.bg-success {
    background-color: #28a745!important
}

a.bg-success:focus,
a.bg-success:hover {
    background-color: #1e7e34!important
}

.bg-info {
    background-color: #17a2b8!important
}

a.bg-info:focus,
a.bg-info:hover {
    background-color: #117a8b!important
}

.bg-warning {
    background-color: #ffc107!important
}

a.bg-warning:focus,
a.bg-warning:hover {
    background-color: #d39e00!important
}

.bg-danger {
    background-color: #dc3545!important
}

a.bg-danger:focus,
a.bg-danger:hover {
    background-color: #bd2130!important
}

.bg-light {
    background-color: #f8f9fa!important
}

a.bg-light:focus,
a.bg-light:hover {
    background-color: #dae0e5!important
}

.bg-dark {
    background-color: #343a40!important
}

a.bg-dark:focus,
a.bg-dark:hover {
    background-color: #1d2124!important
}

.bg-white {
    background-color: #fff!important
}

.bg-transparent {
    background-color: transparent!important
}

.border {
    border: 1px solid #e9ecef!important
}

.border-0 {
    border: 0!important
}

.border-top-0 {
    border-top: 0!important
}

.border-right-0 {
    border-right: 0!important
}

.border-bottom-0 {
    border-bottom: 0!important
}

.border-left-0 {
    border-left: 0!important
}

.border-primary {
    border-color: #007bff!important
}

.border-secondary {
    border-color: #868e96!important
}

.border-success {
    border-color: #28a745!important
}

.border-info {
    border-color: #17a2b8!important
}

.border-warning {
    border-color: #ffc107!important
}

.border-danger {
    border-color: #dc3545!important
}

.border-light {
    border-color: #f8f9fa!important
}

.border-dark {
    border-color: #343a40!important
}

.border-white {
    border-color: #fff!important
}

.rounded {
    border-radius: .25rem!important
}

.rounded-top {
    border-top-left-radius: .25rem!important;
    border-top-right-radius: .25rem!important
}

.rounded-right {
    border-top-right-radius: .25rem!important;
    border-bottom-right-radius: .25rem!important
}

.rounded-bottom {
    border-bottom-right-radius: .25rem!important;
    border-bottom-left-radius: .25rem!important
}

.rounded-left {
    border-top-left-radius: .25rem!important;
    border-bottom-left-radius: .25rem!important
}

.rounded-circle {
    border-radius: 50%!important
}

.rounded-0 {
    border-radius: 0!important
}

.clearfix::after {
    display: block;
    clear: both;
    content: ""
}

.d-none {
    display: none!important
}

.d-inline {
    display: inline!important
}

.d-inline-block {
    display: inline-block!important
}

.d-block {
    display: block!important
}

.d-table {
    display: table!important
}

.d-table-row {
    display: table-row!important
}

.d-table-cell {
    display: table-cell!important
}

.d-flex {
    display: -ms-flexbox!important;
    display: flex!important
}

.d-inline-flex {
    display: -ms-inline-flexbox!important;
    display: inline-flex!important
}

@media (min-width:576px) {
    .d-sm-none {
        display: none!important
    }
    .d-sm-inline {
        display: inline!important
    }
    .d-sm-inline-block {
        display: inline-block!important
    }
    .d-sm-block {
        display: block!important
    }
    .d-sm-table {
        display: table!important
    }
    .d-sm-table-row {
        display: table-row!important
    }
    .d-sm-table-cell {
        display: table-cell!important
    }
    .d-sm-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }
    .d-sm-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media (min-width:768px) {
    .d-md-none {
        display: none!important
    }
    .d-md-inline {
        display: inline!important
    }
    .d-md-inline-block {
        display: inline-block!important
    }
    .d-md-block {
        display: block!important
    }
    .d-md-table {
        display: table!important
    }
    .d-md-table-row {
        display: table-row!important
    }
    .d-md-table-cell {
        display: table-cell!important
    }
    .d-md-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }
    .d-md-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media (min-width:992px) {
    .d-lg-none {
        display: none!important
    }
    .d-lg-inline {
        display: inline!important
    }
    .d-lg-inline-block {
        display: inline-block!important
    }
    .d-lg-block {
        display: block!important
    }
    .d-lg-table {
        display: table!important
    }
    .d-lg-table-row {
        display: table-row!important
    }
    .d-lg-table-cell {
        display: table-cell!important
    }
    .d-lg-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }
    .d-lg-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media (min-width:1200px) {
    .d-xl-none {
        display: none!important
    }
    .d-xl-inline {
        display: inline!important
    }
    .d-xl-inline-block {
        display: inline-block!important
    }
    .d-xl-block {
        display: block!important
    }
    .d-xl-table {
        display: table!important
    }
    .d-xl-table-row {
        display: table-row!important
    }
    .d-xl-table-cell {
        display: table-cell!important
    }
    .d-xl-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }
    .d-xl-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

.d-print-block {
    display: none!important
}

@media print {
    .d-print-block {
        display: block!important
    }
}

.d-print-inline {
    display: none!important
}

@media print {
    .d-print-inline {
        display: inline!important
    }
}

.d-print-inline-block {
    display: none!important
}

@media print {
    .d-print-inline-block {
        display: inline-block!important
    }
}

@media print {
    .d-print-none {
        display: none!important
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden
}

.embed-responsive::before {
    display: block;
    content: ""
}

.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-21by9::before {
    padding-top: 42.857143%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.flex-row {
    -ms-flex-direction: row!important;
    flex-direction: row!important
}

.flex-column {
    -ms-flex-direction: column!important;
    flex-direction: column!important
}

.flex-row-reverse {
    -ms-flex-direction: row-reverse!important;
    flex-direction: row-reverse!important
}

.flex-column-reverse {
    -ms-flex-direction: column-reverse!important;
    flex-direction: column-reverse!important
}

.flex-wrap {
    -ms-flex-wrap: wrap!important;
    flex-wrap: wrap!important
}

.flex-nowrap {
    -ms-flex-wrap: nowrap!important;
    flex-wrap: nowrap!important
}

.flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse!important;
    flex-wrap: wrap-reverse!important
}

.justify-content-start {
    -ms-flex-pack: start!important;
    justify-content: flex-start!important
}

.justify-content-end {
    -ms-flex-pack: end!important;
    justify-content: flex-end!important
}

.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important
}

.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important
}

.justify-content-around {
    -ms-flex-pack: distribute!important;
    justify-content: space-around!important
}

.align-items-start {
    -ms-flex-align: start!important;
    align-items: flex-start!important
}

.align-items-end {
    -ms-flex-align: end!important;
    align-items: flex-end!important
}

.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important
}

.align-items-baseline {
    -ms-flex-align: baseline!important;
    align-items: baseline!important
}

.align-items-stretch {
    -ms-flex-align: stretch!important;
    align-items: stretch!important
}

.align-content-start {
    -ms-flex-line-pack: start!important;
    align-content: flex-start!important
}

.align-content-end {
    -ms-flex-line-pack: end!important;
    align-content: flex-end!important
}

.align-content-center {
    -ms-flex-line-pack: center!important;
    align-content: center!important
}

.align-content-between {
    -ms-flex-line-pack: justify!important;
    align-content: space-between!important
}

.align-content-around {
    -ms-flex-line-pack: distribute!important;
    align-content: space-around!important
}

.align-content-stretch {
    -ms-flex-line-pack: stretch!important;
    align-content: stretch!important
}

.align-self-auto {
    -ms-flex-item-align: auto!important;
    align-self: auto!important
}

.align-self-start {
    -ms-flex-item-align: start!important;
    align-self: flex-start!important
}

.align-self-end {
    -ms-flex-item-align: end!important;
    align-self: flex-end!important
}

.align-self-center {
    -ms-flex-item-align: center!important;
    align-self: center!important
}

.align-self-baseline {
    -ms-flex-item-align: baseline!important;
    align-self: baseline!important
}

.align-self-stretch {
    -ms-flex-item-align: stretch!important;
    align-self: stretch!important
}

@media (min-width:576px) {
    .flex-sm-row {
        -ms-flex-direction: row!important;
        flex-direction: row!important
    }
    .flex-sm-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }
    .flex-sm-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }
    .flex-sm-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }
    .flex-sm-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }
    .flex-sm-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }
    .flex-sm-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }
    .justify-content-sm-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }
    .justify-content-sm-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }
    .justify-content-sm-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }
    .justify-content-sm-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }
    .justify-content-sm-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }
    .align-items-sm-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }
    .align-items-sm-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }
    .align-items-sm-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }
    .align-items-sm-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }
    .align-items-sm-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }
    .align-content-sm-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }
    .align-content-sm-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }
    .align-content-sm-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }
    .align-content-sm-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }
    .align-content-sm-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }
    .align-content-sm-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }
    .align-self-sm-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }
    .align-self-sm-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }
    .align-self-sm-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }
    .align-self-sm-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }
    .align-self-sm-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }
    .align-self-sm-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

@media (min-width:768px) {
    .flex-md-row {
        -ms-flex-direction: row!important;
        flex-direction: row!important
    }
    .flex-md-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }
    .flex-md-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }
    .flex-md-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }
    .flex-md-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }
    .flex-md-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }
    .flex-md-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }
    .justify-content-md-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }
    .justify-content-md-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }
    .justify-content-md-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }
    .justify-content-md-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }
    .justify-content-md-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }
    .align-items-md-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }
    .align-items-md-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }
    .align-items-md-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }
    .align-items-md-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }
    .align-items-md-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }
    .align-content-md-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }
    .align-content-md-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }
    .align-content-md-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }
    .align-content-md-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }
    .align-content-md-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }
    .align-content-md-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }
    .align-self-md-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }
    .align-self-md-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }
    .align-self-md-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }
    .align-self-md-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }
    .align-self-md-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }
    .align-self-md-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

@media (min-width:992px) {
    .flex-lg-row {
        -ms-flex-direction: row!important;
        flex-direction: row!important
    }
    .flex-lg-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }
    .flex-lg-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }
    .flex-lg-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }
    .flex-lg-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }
    .flex-lg-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }
    .flex-lg-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }
    .justify-content-lg-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }
    .justify-content-lg-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }
    .justify-content-lg-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }
    .justify-content-lg-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }
    .justify-content-lg-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }
    .align-items-lg-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }
    .align-items-lg-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }
    .align-items-lg-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }
    .align-items-lg-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }
    .align-items-lg-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }
    .align-content-lg-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }
    .align-content-lg-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }
    .align-content-lg-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }
    .align-content-lg-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }
    .align-content-lg-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }
    .align-content-lg-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }
    .align-self-lg-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }
    .align-self-lg-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }
    .align-self-lg-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }
    .align-self-lg-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }
    .align-self-lg-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }
    .align-self-lg-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

@media (min-width:1200px) {
    .flex-xl-row {
        -ms-flex-direction: row!important;
        flex-direction: row!important
    }
    .flex-xl-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }
    .flex-xl-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }
    .flex-xl-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }
    .flex-xl-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }
    .flex-xl-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }
    .flex-xl-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }
    .justify-content-xl-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }
    .justify-content-xl-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }
    .justify-content-xl-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }
    .justify-content-xl-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }
    .justify-content-xl-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }
    .align-items-xl-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }
    .align-items-xl-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }
    .align-items-xl-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }
    .align-items-xl-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }
    .align-items-xl-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }
    .align-content-xl-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }
    .align-content-xl-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }
    .align-content-xl-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }
    .align-content-xl-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }
    .align-content-xl-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }
    .align-content-xl-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }
    .align-self-xl-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }
    .align-self-xl-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }
    .align-self-xl-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }
    .align-self-xl-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }
    .align-self-xl-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }
    .align-self-xl-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

.float-left {
    float: left!important
}

.float-right {
    float: right!important
}

.float-none {
    float: none!important
}

@media (min-width:576px) {
    .float-sm-left {
        float: left!important
    }
    .float-sm-right {
        float: right!important
    }
    .float-sm-none {
        float: none!important
    }
}

@media (min-width:768px) {
    .float-md-left {
        float: left!important
    }
    .float-md-right {
        float: right!important
    }
    .float-md-none {
        float: none!important
    }
}

@media (min-width:992px) {
    .float-lg-left {
        float: left!important
    }
    .float-lg-right {
        float: right!important
    }
    .float-lg-none {
        float: none!important
    }
}

@media (min-width:1200px) {
    .float-xl-left {
        float: left!important
    }
    .float-xl-right {
        float: right!important
    }
    .float-xl-none {
        float: none!important
    }
}

.position-static {
    position: static!important
}

.position-relative {
    position: relative!important
}

.position-absolute {
    position: absolute!important
}

.position-fixed {
    position: fixed!important
}

.position-sticky {
    position: -webkit-sticky!important;
    position: sticky!important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports ((position:-webkit-sticky) or (position:sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    border: 0
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
    -webkit-clip-path: none;
    clip-path: none
}

.w-25 {
    width: 25%!important
}

.w-50 {
    width: 50%!important
}

.w-75 {
    width: 75%!important
}

.w-100 {
    width: 100%!important
}

.h-25 {
    height: 25%!important
}

.h-50 {
    height: 50%!important
}

.h-75 {
    height: 75%!important
}

.h-100 {
    height: 100%!important
}

.mw-100 {
    max-width: 100%!important
}

.mh-100 {
    max-height: 100%!important
}

.m-0 {
    margin: 0!important
}

.mt-0,
.my-0 {
    margin-top: 0!important
}

.mr-0,
.mx-0 {
    margin-right: 0!important
}

.mb-0,
.my-0 {
    margin-bottom: 0!important
}

.ml-0,
.mx-0 {
    margin-left: 0!important
}

.m-1 {
    margin: .25rem!important
}

.mt-1,
.my-1 {
    margin-top: .25rem!important
}

.mr-1,
.mx-1 {
    margin-right: .25rem!important
}

.mb-1,
.my-1 {
    margin-bottom: .25rem!important
}

.ml-1,
.mx-1 {
    margin-left: .25rem!important
}

.m-2 {
    margin: .5rem!important
}

.mt-2,
.my-2 {
    margin-top: .5rem!important
}

.mr-2,
.mx-2 {
    margin-right: .5rem!important
}

.mb-2,
.my-2 {
    margin-bottom: .5rem!important
}

.ml-2,
.mx-2 {
    margin-left: .5rem!important
}

.m-3 {
    margin: 1rem!important
}

.mt-3,
.my-3 {
    margin-top: 1rem!important
}

.mr-3,
.mx-3 {
    margin-right: 1rem!important
}

.mb-3,
.my-3 {
    margin-bottom: 1rem!important
}

.ml-3,
.mx-3 {
    margin-left: 1rem!important
}

.m-4 {
    margin: 1.5rem!important
}

.mt-4,
.my-4 {
    margin-top: 1.5rem!important
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem!important
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem!important
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem!important
}

.m-5 {
    margin: 3rem!important
}

.mt-5,
.my-5 {
    margin-top: 3rem!important
}

.mr-5,
.mx-5 {
    margin-right: 3rem!important
}

.mb-5,
.my-5 {
    margin-bottom: 3rem!important
}

.ml-5,
.mx-5 {
    margin-left: 3rem!important
}

.p-0 {
    padding: 0!important
}

.pt-0,
.py-0 {
    padding-top: 0!important
}

.pr-0,
.px-0 {
    padding-right: 0!important
}

.pb-0,
.py-0 {
    padding-bottom: 0!important
}

.pl-0,
.px-0 {
    padding-left: 0!important
}

.p-1 {
    padding: .25rem!important
}

.pt-1,
.py-1 {
    padding-top: .25rem!important
}

.pr-1,
.px-1 {
    padding-right: .25rem!important
}

.pb-1,
.py-1 {
    padding-bottom: .25rem!important
}

.pl-1,
.px-1 {
    padding-left: .25rem!important
}

.p-2 {
    padding: .5rem!important
}

.pt-2,
.py-2 {
    padding-top: .5rem!important
}

.pr-2,
.px-2 {
    padding-right: .5rem!important
}

.pb-2,
.py-2 {
    padding-bottom: .5rem!important
}

.pl-2,
.px-2 {
    padding-left: .5rem!important
}

.p-3 {
    padding: 1rem!important
}

.pt-3,
.py-3 {
    padding-top: 1rem!important
}

.pr-3,
.px-3 {
    padding-right: 1rem!important
}

.pb-3,
.py-3 {
    padding-bottom: 1rem!important
}

.pl-3,
.px-3 {
    padding-left: 1rem!important
}

.p-4 {
    padding: 1.5rem!important
}

.pt-4,
.py-4 {
    padding-top: 1.5rem!important
}

.pr-4,
.px-4 {
    padding-right: 1.5rem!important
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem!important
}

.pl-4,
.px-4 {
    padding-left: 1.5rem!important
}

.p-5 {
    padding: 3rem!important
}

.pt-5,
.py-5 {
    padding-top: 3rem!important
}

.pr-5,
.px-5 {
    padding-right: 3rem!important
}

.pb-5,
.py-5 {
    padding-bottom: 3rem!important
}

.pl-5,
.px-5 {
    padding-left: 3rem!important
}

.m-auto {
    margin: auto!important
}

.mt-auto,
.my-auto {
    margin-top: auto!important
}

.mr-auto,
.mx-auto {
    margin-right: auto!important
}

.mb-auto,
.my-auto {
    margin-bottom: auto!important
}

.ml-auto,
.mx-auto {
    margin-left: auto!important
}

@media (min-width:576px) {
    .m-sm-0 {
        margin: 0!important
    }
    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0!important
    }
    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0!important
    }
    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0!important
    }
    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0!important
    }
    .m-sm-1 {
        margin: .25rem!important
    }
    .mt-sm-1,
    .my-sm-1 {
        margin-top: .25rem!important
    }
    .mr-sm-1,
    .mx-sm-1 {
        margin-right: .25rem!important
    }
    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: .25rem!important
    }
    .ml-sm-1,
    .mx-sm-1 {
        margin-left: .25rem!important
    }
    .m-sm-2 {
        margin: .5rem!important
    }
    .mt-sm-2,
    .my-sm-2 {
        margin-top: .5rem!important
    }
    .mr-sm-2,
    .mx-sm-2 {
        margin-right: .5rem!important
    }
    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: .5rem!important
    }
    .ml-sm-2,
    .mx-sm-2 {
        margin-left: .5rem!important
    }
    .m-sm-3 {
        margin: 1rem!important
    }
    .mt-sm-3,
    .my-sm-3 {
        margin-top: 1rem!important
    }
    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 1rem!important
    }
    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 1rem!important
    }
    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 1rem!important
    }
    .m-sm-4 {
        margin: 1.5rem!important
    }
    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1.5rem!important
    }
    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1.5rem!important
    }
    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1.5rem!important
    }
    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1.5rem!important
    }
    .m-sm-5 {
        margin: 3rem!important
    }
    .mt-sm-5,
    .my-sm-5 {
        margin-top: 3rem!important
    }
    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 3rem!important
    }
    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 3rem!important
    }
    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 3rem!important
    }
    .p-sm-0 {
        padding: 0!important
    }
    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0!important
    }
    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0!important
    }
    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0!important
    }
    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0!important
    }
    .p-sm-1 {
        padding: .25rem!important
    }
    .pt-sm-1,
    .py-sm-1 {
        padding-top: .25rem!important
    }
    .pr-sm-1,
    .px-sm-1 {
        padding-right: .25rem!important
    }
    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: .25rem!important
    }
    .pl-sm-1,
    .px-sm-1 {
        padding-left: .25rem!important
    }
    .p-sm-2 {
        padding: .5rem!important
    }
    .pt-sm-2,
    .py-sm-2 {
        padding-top: .5rem!important
    }
    .pr-sm-2,
    .px-sm-2 {
        padding-right: .5rem!important
    }
    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: .5rem!important
    }
    .pl-sm-2,
    .px-sm-2 {
        padding-left: .5rem!important
    }
    .p-sm-3 {
        padding: 1rem!important
    }
    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem!important
    }
    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem!important
    }
    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem!important
    }
    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem!important
    }
    .p-sm-4 {
        padding: 1.5rem!important
    }
    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem!important
    }
    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem!important
    }
    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem!important
    }
    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem!important
    }
    .p-sm-5 {
        padding: 3rem!important
    }
    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem!important
    }
    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem!important
    }
    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem!important
    }
    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem!important
    }
    .m-sm-auto {
        margin: auto!important
    }
    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto!important
    }
    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto!important
    }
    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto!important
    }
    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto!important
    }
}

@media (min-width:768px) {
    .m-md-0 {
        margin: 0!important
    }
    .mt-md-0,
    .my-md-0 {
        margin-top: 0!important
    }
    .mr-md-0,
    .mx-md-0 {
        margin-right: 0!important
    }
    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0!important
    }
    .ml-md-0,
    .mx-md-0 {
        margin-left: 0!important
    }
    .m-md-1 {
        margin: .25rem!important
    }
    .mt-md-1,
    .my-md-1 {
        margin-top: .25rem!important
    }
    .mr-md-1,
    .mx-md-1 {
        margin-right: .25rem!important
    }
    .mb-md-1,
    .my-md-1 {
        margin-bottom: .25rem!important
    }
    .ml-md-1,
    .mx-md-1 {
        margin-left: .25rem!important
    }
    .m-md-2 {
        margin: .5rem!important
    }
    .mt-md-2,
    .my-md-2 {
        margin-top: .5rem!important
    }
    .mr-md-2,
    .mx-md-2 {
        margin-right: .5rem!important
    }
    .mb-md-2,
    .my-md-2 {
        margin-bottom: .5rem!important
    }
    .ml-md-2,
    .mx-md-2 {
        margin-left: .5rem!important
    }
    .m-md-3 {
        margin: 1rem!important
    }
    .mt-md-3,
    .my-md-3 {
        margin-top: 1rem!important
    }
    .mr-md-3,
    .mx-md-3 {
        margin-right: 1rem!important
    }
    .mb-md-3,
    .my-md-3 {
        margin-bottom: 1rem!important
    }
    .ml-md-3,
    .mx-md-3 {
        margin-left: 1rem!important
    }
    .m-md-4 {
        margin: 1.5rem!important
    }
    .mt-md-4,
    .my-md-4 {
        margin-top: 1.5rem!important
    }
    .mr-md-4,
    .mx-md-4 {
        margin-right: 1.5rem!important
    }
    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1.5rem!important
    }
    .ml-md-4,
    .mx-md-4 {
        margin-left: 1.5rem!important
    }
    .m-md-5 {
        margin: 3rem!important
    }
    .mt-md-5,
    .my-md-5 {
        margin-top: 3rem!important
    }
    .mr-md-5,
    .mx-md-5 {
        margin-right: 3rem!important
    }
    .mb-md-5,
    .my-md-5 {
        margin-bottom: 3rem!important
    }
    .ml-md-5,
    .mx-md-5 {
        margin-left: 3rem!important
    }
    .p-md-0 {
        padding: 0!important
    }
    .pt-md-0,
    .py-md-0 {
        padding-top: 0!important
    }
    .pr-md-0,
    .px-md-0 {
        padding-right: 0!important
    }
    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0!important
    }
    .pl-md-0,
    .px-md-0 {
        padding-left: 0!important
    }
    .p-md-1 {
        padding: .25rem!important
    }
    .pt-md-1,
    .py-md-1 {
        padding-top: .25rem!important
    }
    .pr-md-1,
    .px-md-1 {
        padding-right: .25rem!important
    }
    .pb-md-1,
    .py-md-1 {
        padding-bottom: .25rem!important
    }
    .pl-md-1,
    .px-md-1 {
        padding-left: .25rem!important
    }
    .p-md-2 {
        padding: .5rem!important
    }
    .pt-md-2,
    .py-md-2 {
        padding-top: .5rem!important
    }
    .pr-md-2,
    .px-md-2 {
        padding-right: .5rem!important
    }
    .pb-md-2,
    .py-md-2 {
        padding-bottom: .5rem!important
    }
    .pl-md-2,
    .px-md-2 {
        padding-left: .5rem!important
    }
    .p-md-3 {
        padding: 1rem!important
    }
    .pt-md-3,
    .py-md-3 {
        padding-top: 1rem!important
    }
    .pr-md-3,
    .px-md-3 {
        padding-right: 1rem!important
    }
    .pb-md-3,
    .py-md-3 {
        padding-bottom: 1rem!important
    }
    .pl-md-3,
    .px-md-3 {
        padding-left: 1rem!important
    }
    .p-md-4 {
        padding: 1.5rem!important
    }
    .pt-md-4,
    .py-md-4 {
        padding-top: 1.5rem!important
    }
    .pr-md-4,
    .px-md-4 {
        padding-right: 1.5rem!important
    }
    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1.5rem!important
    }
    .pl-md-4,
    .px-md-4 {
        padding-left: 1.5rem!important
    }
    .p-md-5 {
        padding: 3rem!important
    }
    .pt-md-5,
    .py-md-5 {
        padding-top: 3rem!important
    }
    .pr-md-5,
    .px-md-5 {
        padding-right: 3rem!important
    }
    .pb-md-5,
    .py-md-5 {
        padding-bottom: 3rem!important
    }
    .pl-md-5,
    .px-md-5 {
        padding-left: 3rem!important
    }
    .m-md-auto {
        margin: auto!important
    }
    .mt-md-auto,
    .my-md-auto {
        margin-top: auto!important
    }
    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto!important
    }
    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto!important
    }
    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto!important
    }
}

@media (min-width:992px) {
    .m-lg-0 {
        margin: 0!important
    }
    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0!important
    }
    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0!important
    }
    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0!important
    }
    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0!important
    }
    .m-lg-1 {
        margin: .25rem!important
    }
    .mt-lg-1,
    .my-lg-1 {
        margin-top: .25rem!important
    }
    .mr-lg-1,
    .mx-lg-1 {
        margin-right: .25rem!important
    }
    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: .25rem!important
    }
    .ml-lg-1,
    .mx-lg-1 {
        margin-left: .25rem!important
    }
    .m-lg-2 {
        margin: .5rem!important
    }
    .mt-lg-2,
    .my-lg-2 {
        margin-top: .5rem!important
    }
    .mr-lg-2,
    .mx-lg-2 {
        margin-right: .5rem!important
    }
    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: .5rem!important
    }
    .ml-lg-2,
    .mx-lg-2 {
        margin-left: .5rem!important
    }
    .m-lg-3 {
        margin: 1rem!important
    }
    .mt-lg-3,
    .my-lg-3 {
        margin-top: 1rem!important
    }
    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 1rem!important
    }
    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 1rem!important
    }
    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 1rem!important
    }
    .m-lg-4 {
        margin: 1.5rem!important
    }
    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1.5rem!important
    }
    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1.5rem!important
    }
    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1.5rem!important
    }
    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1.5rem!important
    }
    .m-lg-5 {
        margin: 3rem!important
    }
    .mt-lg-5,
    .my-lg-5 {
        margin-top: 3rem!important
    }
    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 3rem!important
    }
    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 3rem!important
    }
    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 3rem!important
    }
    .p-lg-0 {
        padding: 0!important
    }
    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0!important
    }
    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0!important
    }
    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0!important
    }
    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0!important
    }
    .p-lg-1 {
        padding: .25rem!important
    }
    .pt-lg-1,
    .py-lg-1 {
        padding-top: .25rem!important
    }
    .pr-lg-1,
    .px-lg-1 {
        padding-right: .25rem!important
    }
    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: .25rem!important
    }
    .pl-lg-1,
    .px-lg-1 {
        padding-left: .25rem!important
    }
    .p-lg-2 {
        padding: .5rem!important
    }
    .pt-lg-2,
    .py-lg-2 {
        padding-top: .5rem!important
    }
    .pr-lg-2,
    .px-lg-2 {
        padding-right: .5rem!important
    }
    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: .5rem!important
    }
    .pl-lg-2,
    .px-lg-2 {
        padding-left: .5rem!important
    }
    .p-lg-3 {
        padding: 1rem!important
    }
    .pt-lg-3,
    .py-lg-3 {
        padding-top: 1rem!important
    }
    .pr-lg-3,
    .px-lg-3 {
        padding-right: 1rem!important
    }
    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 1rem!important
    }
    .pl-lg-3,
    .px-lg-3 {
        padding-left: 1rem!important
    }
    .p-lg-4 {
        padding: 1.5rem!important
    }
    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1.5rem!important
    }
    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1.5rem!important
    }
    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1.5rem!important
    }
    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1.5rem!important
    }
    .p-lg-5 {
        padding: 3rem!important
    }
    .pt-lg-5,
    .py-lg-5 {
        padding-top: 3rem!important
    }
    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem!important
    }
    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem!important
    }
    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem!important
    }
    .m-lg-auto {
        margin: auto!important
    }
    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto!important
    }
    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto!important
    }
    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto!important
    }
    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto!important
    }
}

@media (min-width:1200px) {
    .m-xl-0 {
        margin: 0!important
    }
    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0!important
    }
    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0!important
    }
    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0!important
    }
    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0!important
    }
    .m-xl-1 {
        margin: .25rem!important
    }
    .mt-xl-1,
    .my-xl-1 {
        margin-top: .25rem!important
    }
    .mr-xl-1,
    .mx-xl-1 {
        margin-right: .25rem!important
    }
    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: .25rem!important
    }
    .ml-xl-1,
    .mx-xl-1 {
        margin-left: .25rem!important
    }
    .m-xl-2 {
        margin: .5rem!important
    }
    .mt-xl-2,
    .my-xl-2 {
        margin-top: .5rem!important
    }
    .mr-xl-2,
    .mx-xl-2 {
        margin-right: .5rem!important
    }
    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: .5rem!important
    }
    .ml-xl-2,
    .mx-xl-2 {
        margin-left: .5rem!important
    }
    .m-xl-3 {
        margin: 1rem!important
    }
    .mt-xl-3,
    .my-xl-3 {
        margin-top: 1rem!important
    }
    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 1rem!important
    }
    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 1rem!important
    }
    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 1rem!important
    }
    .m-xl-4 {
        margin: 1.5rem!important
    }
    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1.5rem!important
    }
    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1.5rem!important
    }
    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1.5rem!important
    }
    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1.5rem!important
    }
    .m-xl-5 {
        margin: 3rem!important
    }
    .mt-xl-5,
    .my-xl-5 {
        margin-top: 3rem!important
    }
    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 3rem!important
    }
    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 3rem!important
    }
    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 3rem!important
    }
    .p-xl-0 {
        padding: 0!important
    }
    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0!important
    }
    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0!important
    }
    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0!important
    }
    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0!important
    }
    .p-xl-1 {
        padding: .25rem!important
    }
    .pt-xl-1,
    .py-xl-1 {
        padding-top: .25rem!important
    }
    .pr-xl-1,
    .px-xl-1 {
        padding-right: .25rem!important
    }
    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: .25rem!important
    }
    .pl-xl-1,
    .px-xl-1 {
        padding-left: .25rem!important
    }
    .p-xl-2 {
        padding: .5rem!important
    }
    .pt-xl-2,
    .py-xl-2 {
        padding-top: .5rem!important
    }
    .pr-xl-2,
    .px-xl-2 {
        padding-right: .5rem!important
    }
    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: .5rem!important
    }
    .pl-xl-2,
    .px-xl-2 {
        padding-left: .5rem!important
    }
    .p-xl-3 {
        padding: 1rem!important
    }
    .pt-xl-3,
    .py-xl-3 {
        padding-top: 1rem!important
    }
    .pr-xl-3,
    .px-xl-3 {
        padding-right: 1rem!important
    }
    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 1rem!important
    }
    .pl-xl-3,
    .px-xl-3 {
        padding-left: 1rem!important
    }
    .p-xl-4 {
        padding: 1.5rem!important
    }
    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1.5rem!important
    }
    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1.5rem!important
    }
    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1.5rem!important
    }
    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1.5rem!important
    }
    .p-xl-5 {
        padding: 3rem!important
    }
    .pt-xl-5,
    .py-xl-5 {
        padding-top: 3rem!important
    }
    .pr-xl-5,
    .px-xl-5 {
        padding-right: 3rem!important
    }
    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 3rem!important
    }
    .pl-xl-5,
    .px-xl-5 {
        padding-left: 3rem!important
    }
    .m-xl-auto {
        margin: auto!important
    }
    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto!important
    }
    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto!important
    }
    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto!important
    }
    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto!important
    }
}

.text-justify {
    text-align: justify!important
}

.text-nowrap {
    white-space: nowrap!important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left!important
}

.text-right {
    text-align: right!important
}

.text-center {
    text-align: center!important
}

@media (min-width:576px) {
    .text-sm-left {
        text-align: left!important
    }
    .text-sm-right {
        text-align: right!important
    }
    .text-sm-center {
        text-align: center!important
    }
}

@media (min-width:768px) {
    .text-md-left {
        text-align: left!important
    }
    .text-md-right {
        text-align: right!important
    }
    .text-md-center {
        text-align: center!important
    }
}

@media (min-width:992px) {
    .text-lg-left {
        text-align: left!important
    }
    .text-lg-right {
        text-align: right!important
    }
    .text-lg-center {
        text-align: center!important
    }
}

@media (min-width:1200px) {
    .text-xl-left {
        text-align: left!important
    }
    .text-xl-right {
        text-align: right!important
    }
    .text-xl-center {
        text-align: center!important
    }
}

.text-lowercase {
    text-transform: lowercase!important
}

.text-uppercase {
    text-transform: uppercase!important
}

.text-capitalize {
    text-transform: capitalize!important
}

.font-weight-light {
    font-weight: 300!important
}

.font-weight-normal {
    font-weight: 400!important
}

.font-weight-bold {
    font-weight: 700!important
}

.font-italic {
    font-style: italic!important
}

.text-white {
    color: #fff!important
}

.text-primary {
    color: #007bff!important
}

a.text-primary:focus,
a.text-primary:hover {
    color: #0062cc!important
}

.text-secondary {
    color: #868e96!important
}

a.text-secondary:focus,
a.text-secondary:hover {
    color: #6c757d!important
}

.text-success {
    color: #28a745!important
}

a.text-success:focus,
a.text-success:hover {
    color: #1e7e34!important
}

.text-info {
    color: #17a2b8!important
}

a.text-info:focus,
a.text-info:hover {
    color: #117a8b!important
}

.text-warning {
    color: #ffc107!important
}

a.text-warning:focus,
a.text-warning:hover {
    color: #d39e00!important
}

.text-danger {
    color: #dc3545!important
}

a.text-danger:focus,
a.text-danger:hover {
    color: #bd2130!important
}

.text-light {
    color: #f8f9fa!important
}

a.text-light:focus,
a.text-light:hover {
    color: #dae0e5!important
}

.text-dark {
    color: #343a40!important
}

a.text-dark:focus,
a.text-dark:hover {
    color: #1d2124!important
}

.text-muted {
    color: #868e96!important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.visible {
    visibility: visible!important
}

.invisible {
    visibility: hidden!important
}


/*# sourceMappingURL=bootstrap.min.css.map */

      /*!
 * Start Bootstrap - Agency v4.0.0-beta.2 (https://startbootstrap.com/template-overviews/agency)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-agency/blob/master/LICENSE)
 */

body {
    overflow-x: hidden;
    font-family: 'Roboto Slab', 'Helvetica Neue', Helvetica, Arial, sans-serif
}

p {
    line-height: 1.75
}

a {
    color: #fed136
}

a:hover {
    color: #fec503
}

.text-primary {
    color: #fed136!important
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 700;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

section {
    padding: 100px 0
}

section h2.section-heading {
    font-size: 40px;
    margin-top: 0;
    margin-bottom: 15px
}

section h3.section-subheading {
    font-size: 16px;
    font-weight: 400;
    font-style: italic;
    margin-bottom: 75px;
    text-transform: none;
    font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif
}

@media (min-width:768px) {
    section {
        padding: 150px 0
    }
}

.btn {
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-weight: 700
}

.btn-xl {
    font-size: 18px;
    padding: 20px 40px
}

.btn-primary {
    background-color: #fed136;
    border-color: #fed136
}

.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover {
    background-color: #fec810!important;
    border-color: #fec810!important;
    color: #fff
}

.btn-primary:active,
.btn-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(254, 209, 55, .5)!important
}

::-moz-selection {
    background: #fed136;
    text-shadow: none
}

::selection {
    background: #fed136;
    text-shadow: none
}

img::selection {
    background: 0 0
}

img::-moz-selection {
    background: 0 0
}

body {
    -webkit-tap-highlight-color: #fed136
}

#mainNav {
    background-color: #212529
}

#mainNav .navbar-toggler {
    font-size: 12px;
    right: 0;
    padding: 13px;
    text-transform: uppercase;
    color: #fff;
    border: 0;
    background-color: #fed136;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

#mainNav .navbar-brand {
    color: #fed136;
    font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive
}

#mainNav .navbar-brand.active,
#mainNav .navbar-brand:active,
#mainNav .navbar-brand:focus,
#mainNav .navbar-brand:hover {
    color: #fec503
}

#mainNav .navbar-nav .nav-item .nav-link {
    font-size: 90%;
    font-weight: 400;
    padding: .75em 0;
    letter-spacing: 1px;
    color: #fff;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

#mainNav .navbar-nav .nav-item .nav-link.active,
#mainNav .navbar-nav .nav-item .nav-link:hover {
    color: #fed136
}

@media (min-width:992px) {
    #mainNav {
        padding-top: 25px;
        padding-bottom: 25px;
        -webkit-transition: padding-top .3s, padding-bottom .3s;
        -moz-transition: padding-top .3s, padding-bottom .3s;
        transition: padding-top .3s, padding-bottom .3s;
        border: none;
        background-color: transparent
    }
    #mainNav .navbar-brand {
        font-size: 1.75em;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s
    }
    #mainNav .navbar-nav .nav-item .nav-link {
        padding: 1.1em 1em!important
    }
    #mainNav.navbar-shrink {
        padding-top: 0;
        padding-bottom: 0;
        background-color: #212529
    }
    #mainNav.navbar-shrink .navbar-brand {
        font-size: 1.25em;
        padding: 12px 0
    }
}

header.masthead {
    text-align: center;
    color: #fff;
    background-image: url(../img/header-bg.jpg);
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover
}

header.masthead .intro-text {
    padding-top: 150px;
    padding-bottom: 100px
}

header.masthead .intro-text .intro-lead-in {
    font-size: 22px;
    font-style: italic;
    line-height: 22px;
    margin-bottom: 25px;
    font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif
}

header.masthead .intro-text .intro-heading {
    font-size: 50px;
    font-weight: 700;
    line-height: 50px;
    margin-bottom: 25px;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

@media (min-width:768px) {
    header.masthead .intro-text {
        padding-top: 300px;
        padding-bottom: 200px
    }
    header.masthead .intro-text .intro-lead-in {
        font-size: 40px;
        font-style: italic;
        line-height: 40px;
        margin-bottom: 25px;
        font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
    header.masthead .intro-text .intro-heading {
        font-size: 75px;
        font-weight: 700;
        line-height: 75px;
        margin-bottom: 50px;
        font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
}

.service-heading {
    margin: 15px 0;
    text-transform: none
}

#portfolio .portfolio-item {
    right: 0;
    margin: 0 0 15px
}

#portfolio .portfolio-item .portfolio-link {
    position: relative;
    display: block;
    max-width: 400px;
    margin: 0 auto;
    cursor: pointer
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-transition: all ease .5s;
    -moz-transition: all ease .5s;
    transition: all ease .5s;
    opacity: 0;
    background: rgba(254, 209, 54, .9)
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover:hover {
    opacity: 1
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content {
    font-size: 20px;
    position: absolute;
    top: 50%;
    width: 100%;
    height: 20px;
    margin-top: -12px;
    text-align: center;
    color: #fff
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content i {
    margin-top: -12px
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content h3,
#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content h4 {
    margin: 0
}

#portfolio .portfolio-item .portfolio-caption {
    max-width: 400px;
    margin: 0 auto;
    padding: 25px;
    text-align: center;
    background-color: #fff
}

#portfolio .portfolio-item .portfolio-caption h4 {
    margin: 0;
    text-transform: none
}

#portfolio .portfolio-item .portfolio-caption p {
    font-size: 16px;
    font-style: italic;
    margin: 0;
    font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif
}

#portfolio * {
    z-index: 2
}

@media (min-width:767px) {
    #portfolio .portfolio-item {
        margin: 0 0 30px
    }
}

.portfolio-modal {
    padding-right: 0!important
}

.portfolio-modal .modal-dialog {
    margin: 1rem;
    max-width: 100vw
}

.portfolio-modal .modal-content {
    padding: 100px 0;
    text-align: center
}

.portfolio-modal .modal-content h2 {
    font-size: 3em;
    margin-bottom: 15px
}

.portfolio-modal .modal-content p {
    margin-bottom: 30px
}

.portfolio-modal .modal-content p.item-intro {
    font-size: 16px;
    font-style: italic;
    margin: 20px 0 30px;
    font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif
}

.portfolio-modal .modal-content ul.list-inline {
    margin-top: 0;
    margin-bottom: 30px
}

.portfolio-modal .modal-content img {
    margin-bottom: 30px
}

.portfolio-modal .modal-content button {
    cursor: pointer
}

.portfolio-modal .close-modal {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 75px;
    height: 75px;
    cursor: pointer;
    background-color: transparent
}

.portfolio-modal .close-modal:hover {
    opacity: .3
}

.portfolio-modal .close-modal .lr {
    z-index: 1051;
    width: 1px;
    height: 75px;
    margin-left: 35px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    background-color: #212529
}

.portfolio-modal .close-modal .lr .rl {
    z-index: 1052;
    width: 1px;
    height: 75px;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
    background-color: #212529
}

.timeline {
    position: relative;
    padding: 0;
    list-style: none
}

.timeline:before {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 40px;
    width: 2px;
    margin-left: -1.5px;
    content: '';
    background-color: #e9ecef
}

.timeline>li {
    position: relative;
    min-height: 50px;
    margin-bottom: 50px
}

.timeline>li:after,
.timeline>li:before {
    display: table;
    content: ' '
}

.timeline>li:after {
    clear: both
}

.timeline>li .timeline-panel {
    position: relative;
    float: right;
    width: 100%;
    padding: 0 20px 0 100px;
    text-align: left
}

.timeline>li .timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0
}

.timeline>li .timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0
}

.timeline>li .timeline-image {
    position: absolute;
    z-index: 100;
    left: 0;
    width: 80px;
    height: 80px;
    margin-left: 0;
    text-align: center;
    color: #fff;
    border: 7px solid #e9ecef;
    border-radius: 100%;
    background-color: #fed136
}

.timeline>li .timeline-image h4 {
    font-size: 10px;
    line-height: 14px;
    margin-top: 12px
}

.timeline>li.timeline-inverted>.timeline-panel {
    float: right;
    padding: 0 20px 0 100px;
    text-align: left
}

.timeline>li.timeline-inverted>.timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0
}

.timeline>li.timeline-inverted>.timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0
}

.timeline>li:last-child {
    margin-bottom: 0
}

.timeline .timeline-heading h4 {
    margin-top: 0;
    color: inherit
}

.timeline .timeline-heading h4.subheading {
    text-transform: none
}

.timeline .timeline-body>p,
.timeline .timeline-body>ul {
    margin-bottom: 0
}

@media (min-width:768px) {
    .timeline:before {
        left: 50%
    }
    .timeline>li {
        min-height: 100px;
        margin-bottom: 100px
    }
    .timeline>li .timeline-panel {
        float: left;
        width: 41%;
        padding: 0 20px 20px 30px;
        text-align: right
    }
    .timeline>li .timeline-image {
        left: 50%;
        width: 100px;
        height: 100px;
        margin-left: -50px
    }
    .timeline>li .timeline-image h4 {
        font-size: 13px;
        line-height: 18px;
        margin-top: 16px
    }
    .timeline>li.timeline-inverted>.timeline-panel {
        float: right;
        padding: 0 30px 20px 20px;
        text-align: left
    }
}

@media (min-width:992px) {
    .timeline>li {
        min-height: 150px
    }
    .timeline>li .timeline-panel {
        padding: 0 20px 20px
    }
    .timeline>li .timeline-image {
        width: 150px;
        height: 150px;
        margin-left: -75px
    }
    .timeline>li .timeline-image h4 {
        font-size: 18px;
        line-height: 26px;
        margin-top: 30px
    }
    .timeline>li.timeline-inverted>.timeline-panel {
        padding: 0 20px 20px
    }
}

@media (min-width:1200px) {
    .timeline>li {
        min-height: 170px
    }
    .timeline>li .timeline-panel {
        padding: 0 20px 20px 100px
    }
    .timeline>li .timeline-image {
        width: 170px;
        height: 170px;
        margin-left: -85px
    }
    .timeline>li .timeline-image h4 {
        margin-top: 40px
    }
    .timeline>li.timeline-inverted>.timeline-panel {
        padding: 0 100px 20px 20px
    }
}

.team-member {
    margin-bottom: 50px;
    text-align: center
}

.team-member img {
    width: 225px;
    height: 225px;
    border: 7px solid #fff
}

.team-member h4 {
    margin-top: 25px;
    margin-bottom: 0;
    text-transform: none
}

.team-member p {
    margin-top: 0
}

section#contact {
    background-color: #212529;
    background-image: url(../img/map-image.png);
    background-repeat: no-repeat;
    background-position: center
}

section#contact .section-heading {
    color: #fff
}

section#contact .form-group {
    margin-bottom: 25px
}

section#contact .form-group input,
section#contact .form-group textarea {
    padding: 20px
}

section#contact .form-group input.form-control {
    height: auto
}

section#contact .form-group textarea.form-control {
    height: 248px
}

section#contact .form-control:focus {
    border-color: #fed136;
    box-shadow: none
}

section#contact ::-webkit-input-placeholder {
    font-weight: 700;
    color: #ced4da;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

section#contact :-moz-placeholder {
    font-weight: 700;
    color: #ced4da;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

section#contact ::-moz-placeholder {
    font-weight: 700;
    color: #ced4da;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

section#contact :-ms-input-placeholder {
    font-weight: 700;
    color: #ced4da;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

footer {
    padding: 25px 0;
    text-align: center
}

footer span.copyright {
    font-size: 90%;
    line-height: 40px;
    text-transform: none;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

footer ul.quicklinks {
    font-size: 90%;
    line-height: 40px;
    margin-bottom: 0;
    text-transform: none;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif
}

ul.social-buttons {
    margin-bottom: 0
}

ul.social-buttons li a {
    font-size: 20px;
    line-height: 40px;
    display: block;
    width: 40px;
    height: 40px;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
    color: #fff;
    border-radius: 100%;
    outline: 0;
    background-color: #212529
}

ul.social-buttons li a:active,
ul.social-buttons li a:focus,
ul.social-buttons li a:hover {
    background-color: #fed136
}
    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bienvenido a Las Tejas</div>
          <div class="intro-heading text-uppercase">Gusto de conocerte</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('login') }}">Iniciar Sesión</a>

        </div>
      </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/agency.min.js') }}"></script>

  </body>

</html>
