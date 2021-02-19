<?php include "./mysql.php" ?>
<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html class="no-js" lang="zh">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>团队列表 | luogu &amp; oier club/title&gt;
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta name="csrf-token" content="1613729423:FrabhSXEFyR7XbjMqDrBLbOtrm/dBl4p84bSKj9LQMA=" /> 
  <style type="text/css">svg:not(:root).svg-inline--fa {
  overflow: visible;
}

.svg-inline--fa {
  display: inline-block;
  font-size: inherit;
  height: 1em;
  overflow: visible;
  vertical-align: -0.125em;
}
.svg-inline--fa.fa-lg {
  vertical-align: -0.225em;
}
.svg-inline--fa.fa-w-1 {
  width: 0.0625em;
}
.svg-inline--fa.fa-w-2 {
  width: 0.125em;
}
.svg-inline--fa.fa-w-3 {
  width: 0.1875em;
}
.svg-inline--fa.fa-w-4 {
  width: 0.25em;
}
.svg-inline--fa.fa-w-5 {
  width: 0.3125em;
}
.svg-inline--fa.fa-w-6 {
  width: 0.375em;
}
.svg-inline--fa.fa-w-7 {
  width: 0.4375em;
}
.svg-inline--fa.fa-w-8 {
  width: 0.5em;
}
.svg-inline--fa.fa-w-9 {
  width: 0.5625em;
}
.svg-inline--fa.fa-w-10 {
  width: 0.625em;
}
.svg-inline--fa.fa-w-11 {
  width: 0.6875em;
}
.svg-inline--fa.fa-w-12 {
  width: 0.75em;
}
.svg-inline--fa.fa-w-13 {
  width: 0.8125em;
}
.svg-inline--fa.fa-w-14 {
  width: 0.875em;
}
.svg-inline--fa.fa-w-15 {
  width: 0.9375em;
}
.svg-inline--fa.fa-w-16 {
  width: 1em;
}
.svg-inline--fa.fa-w-17 {
  width: 1.0625em;
}
.svg-inline--fa.fa-w-18 {
  width: 1.125em;
}
.svg-inline--fa.fa-w-19 {
  width: 1.1875em;
}
.svg-inline--fa.fa-w-20 {
  width: 1.25em;
}
.svg-inline--fa.fa-pull-left {
  margin-right: 0.3em;
  width: auto;
}
.svg-inline--fa.fa-pull-right {
  margin-left: 0.3em;
  width: auto;
}
.svg-inline--fa.fa-border {
  height: 1.5em;
}
.svg-inline--fa.fa-li {
  width: 2em;
}
.svg-inline--fa.fa-fw {
  width: 1.25em;
}

.fa-layers svg.svg-inline--fa {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.fa-layers {
  display: inline-block;
  height: 1em;
  position: relative;
  text-align: center;
  vertical-align: -0.125em;
  width: 1em;
}
.fa-layers svg.svg-inline--fa {
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter, .fa-layers-text {
  display: inline-block;
  position: absolute;
  text-align: center;
}

.fa-layers-text {
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter {
  background-color: #ff253a;
  border-radius: 1em;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  color: #fff;
  height: 1.5em;
  line-height: 1;
  max-width: 5em;
  min-width: 1.5em;
  overflow: hidden;
  padding: 0.25em;
  right: 0;
  text-overflow: ellipsis;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-bottom-right {
  bottom: 0;
  right: 0;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
}

.fa-layers-bottom-left {
  bottom: 0;
  left: 0;
  right: auto;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}

.fa-layers-top-right {
  right: 0;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-top-left {
  left: 0;
  right: auto;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.fa-lg {
  font-size: 1.3333333333em;
  line-height: 0.75em;
  vertical-align: -0.0667em;
}

.fa-xs {
  font-size: 0.75em;
}

.fa-sm {
  font-size: 0.875em;
}

.fa-1x {
  font-size: 1em;
}

.fa-2x {
  font-size: 2em;
}

.fa-3x {
  font-size: 3em;
}

.fa-4x {
  font-size: 4em;
}

.fa-5x {
  font-size: 5em;
}

.fa-6x {
  font-size: 6em;
}

.fa-7x {
  font-size: 7em;
}

.fa-8x {
  font-size: 8em;
}

.fa-9x {
  font-size: 9em;
}

.fa-10x {
  font-size: 10em;
}

.fa-fw {
  text-align: center;
  width: 1.25em;
}

.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0;
}
.fa-ul > li {
  position: relative;
}

.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit;
}

.fa-border {
  border: solid 0.08em #eee;
  border-radius: 0.1em;
  padding: 0.2em 0.25em 0.15em;
}

.fa-pull-left {
  float: left;
}

.fa-pull-right {
  float: right;
}

.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: 0.3em;
}

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1);
}

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
          transform: scale(1, -1);
}

.fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(-1, -1);
          transform: scale(-1, -1);
}

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical,
:root .fa-flip-both {
  -webkit-filter: none;
          filter: none;
}

.fa-stack {
  display: inline-block;
  height: 2em;
  position: relative;
  width: 2.5em;
}

.fa-stack-1x,
.fa-stack-2x {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.svg-inline--fa.fa-stack-1x {
  height: 1em;
  width: 1.25em;
}
.svg-inline--fa.fa-stack-2x {
  height: 2em;
  width: 2.5em;
}

.fa-inverse {
  color: #fff;
}

.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
}

.svg-inline--fa .fa-primary {
  fill: var(--fa-primary-color, currentColor);
  opacity: 1;
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa .fa-secondary {
  fill: var(--fa-secondary-color, currentColor);
  opacity: 0.4;
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-primary {
  opacity: 0.4;
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-secondary {
  opacity: 1;
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa mask .fa-primary,
.svg-inline--fa mask .fa-secondary {
  fill: black;
}

.fad.fa-inverse {
  color: #fff;
}</style>
  <link rel="shortcut icon" type="image/x-icon" href="https://www.luogu.com.cn/favicon.ico" media="screen" /> 
  <link rel="stylesheet" href="./files/loader.css" /> 
  <style type="text/css">.lfe-tooltip-theme{display:block !important;z-index:10000}.lfe-tooltip-theme .tooltip-inner{background:#000;color:#fff;border-radius:4px;padding:5px 10px 4px}.lfe-tooltip-theme .tooltip-arrow{width:0;height:0;border-style:solid;position:absolute;margin:5px;border-color:#000;z-index:1}.lfe-tooltip-theme[x-placement^=top]{margin-bottom:5px}.lfe-tooltip-theme[x-placement^=top] .tooltip-arrow{border-width:5px 5px 0 5px;border-left-color:transparent !important;border-right-color:transparent !important;border-bottom-color:transparent !important;bottom:-5px;left:calc(50% - 5px);margin-top:0;margin-bottom:0}.lfe-tooltip-theme[x-placement^=bottom]{margin-top:5px}.lfe-tooltip-theme[x-placement^=bottom] .tooltip-arrow{border-width:0 5px 5px 5px;border-left-color:transparent !important;border-right-color:transparent !important;border-top-color:transparent !important;top:-5px;left:calc(50% - 5px);margin-top:0;margin-bottom:0}.lfe-tooltip-theme[x-placement^=right]{margin-left:5px}.lfe-tooltip-theme[x-placement^=right] .tooltip-arrow{border-width:5px 5px 5px 0;border-left-color:transparent !important;border-top-color:transparent !important;border-bottom-color:transparent !important;left:-5px;top:calc(50% - 5px);margin-left:0;margin-right:0}.lfe-tooltip-theme[x-placement^=left]{margin-right:5px}.lfe-tooltip-theme[x-placement^=left] .tooltip-arrow{border-width:5px 0 5px 5px;border-top-color:transparent !important;border-right-color:transparent !important;border-bottom-color:transparent !important;right:-5px;top:calc(50% - 5px);margin-left:0;margin-right:0}.lfe-tooltip-theme.popover .popover-inner{background:#f9f9f9;color:#000;padding:24px;border-radius:5px;box-shadow:0 5px 30px rgba(0,0,0,.1)}.lfe-tooltip-theme.popover .popover-arrow{border-color:#f9f9f9}.lfe-tooltip-theme[aria-hidden=true]{visibility:hidden;opacity:0;transition:opacity .15s,visibility .15s}.lfe-tooltip-theme[aria-hidden=false]{visibility:visible;opacity:1;transition:opacity .15s}</style>
  <style type="text/css">.resize-observer[data-v-8859cc6c]{position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%;border:none;background-color:transparent;pointer-events:none;display:block;overflow:hidden;opacity:0}.resize-observer[data-v-8859cc6c] object{display:block;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden;pointer-events:none;z-index:-1}</style>
  <style></style>
  <link rel="stylesheet" type="text/css" href="./files/module.7.8913a3accddea7a21e8d.css" />
  <link rel="stylesheet" type="text/css" href="./files/module.191.4763a998347be3772897.css" />
  <style type="text/css">.top-progress[data-v-774e75a0]{position:fixed;right:0;left:0;height:4px;overflow:hidden;z-index:99}.bar[data-v-774e75a0]{height:100%;border-top-right-radius:2px;border-bottom-right-radius:2px;transition:width .2s ease;opacity:1;animation:loading-progress-data-v-774e75a0 10s cubic-bezier(.22,.86,0,.8);animation-fill-mode:forwards}.done[data-v-774e75a0]{animation:none;opacity:0;width:100%;transition:opacity .2s ease .2s}@keyframes loading-progress-data-v-774e75a0{from{width:5%}to{width:99%}}</style>
  <style type="text/css">nav[data-v-27b2cd59]{position:fixed;width:3.7em;height:100%;display:flex;flex-direction:column;text-align:center;line-height:1.2;z-index:5}.logo-wrap[data-v-27b2cd59]{display:block;box-sizing:border-box;padding:1em;width:3.7em;text-align:center;height:4em;overflow:hidden;outline:0}.logo-wrap>img[data-v-27b2cd59]{max-width:100%;max-height:100%}.user-nav[data-v-27b2cd59]{display:none;height:3.4em;align-items:center;background:rgba(255,255,255,.5);border-radius:1em;margin:.3em;padding:0 .8em}</style>
  <style type="text/css">a[data-v-cd9b963e]{display:block;padding:.5em .5em;text-decoration:none}.icon[data-v-cd9b963e]{text-align:center;margin:0 .3em;font-size:1.1em;display:inline-block;width:1.5em;vertical-align:middle}.text[data-v-cd9b963e]{font-size:.8em;vertical-align:middle}</style>
  <style type="text/css">a[data-v-303bbf52]{text-decoration:none}a.color-none[data-v-303bbf52]:hover{text-decoration:none}.color-header[data-v-303bbf52]{color:#bbb}.color-header[data-v-303bbf52]:hover{color:#fff}.color-default[data-v-303bbf52],.color-default-noline[data-v-303bbf52]{color:#3498db}.color-default-noline[data-v-303bbf52]:hover,.color-default[data-v-303bbf52]:hover{color:#0056b3}a.color-default-noline[data-v-303bbf52]:hover{text-decoration:none}.color-title[data-v-303bbf52]{color:#666}.color-title[data-v-303bbf52]:hover{color:#5bc0de}</style>
  <style type="text/css">.header[data-v-52820d90]{color:#fff}h1[data-v-52820d90]{margin-top:.5em;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.bread-crumb[data-v-52820d90]{padding-top:1.5em;font-size:.8em;color:#aaa}.user-nav[data-v-52820d90]{position:absolute;right:4em;top:0;padding:.5em 1em;color:#333;background-color:rgba(255,255,255,.5);border-bottom-left-radius:5px;border-bottom-right-radius:5px}.functional[data-v-52820d90]{padding-top:.8em}.operation[data-v-52820d90]{display:flex;align-items:baseline;color:#fff}.stat[data-v-52820d90]{float:right}@media (max-width:576px){.user-nav[data-v-52820d90]{display:none}.bread-crumb[data-v-52820d90]{font-size:.875em}.stat[data-v-52820d90]{float:left}.functional[data-v-52820d90]{display:flex;flex-direction:column;padding-top:0}.operation[data-v-52820d90]{margin-top:1em;margin-bottom:1em;display:flex;flex-direction:column}.operation>*[data-v-52820d90]{width:100%;margin-bottom:.5em}}</style>
  <style type="text/css">nav[data-v-019a82aa]::after{content:" ";white-space:pre}.link[data-v-019a82aa],.text[data-v-019a82aa]{color:rgba(255,255,255,.75)}.link[data-v-019a82aa]:hover{color:#fff}</style>
  <style type="text/css">.card[data-v-796309f8]{display:block;margin-bottom:1.3em;background-color:#fff;box-shadow:0 1px 3px rgba(26,26,26,.1);box-sizing:border-box}.padding-none[data-v-796309f8]{padding:0}.padding-default[data-v-796309f8]{padding:1.3em}</style>
  <style type="text/css">div[data-v-72107c51]{display:flex;align-items:center}div.inline[data-v-72107c51]{display:inline-flex}.input-group[data-v-72107c51]>:not(:last-child),.input-group[data-v-72107c51]>:not(:last-child) input{border-top-right-radius:0;border-bottom-right-radius:0;border-right:none}.input-group[data-v-72107c51]>:not(:first-child),.input-group[data-v-72107c51]>:not(:first-child) input{border-top-left-radius:0;border-bottom-left-radius:0}</style>
  <style type="text/css">input[data-v-a7f7c968]{min-width:0}textarea[data-v-a7f7c968]{display:block}input[data-v-a7f7c968],textarea[data-v-a7f7c968]{width:100%;line-height:1.5;outline:0}.refined-input[data-v-a7f7c968],textarea[data-v-a7f7c968]{flex:1}.frame[data-v-a7f7c968]{box-sizing:border-box;border-radius:3px;border:1px solid #bfbfbf;background:#fff}.frame[data-v-a7f7c968]:focus,.refined-input.focused[data-v-a7f7c968]{border-color:#409eff}.frame[data-v-a7f7c968]:disabled,.refined-input.disabled[data-v-a7f7c968]{color:rgba(0,0,0,.25);border-color:#e8e8e8;background-color:#fafafa}.refined-input[data-v-a7f7c968]{display:flex;align-items:baseline}.refined-input.inline[data-v-a7f7c968]{display:inline-flex}.refined-input>*[data-v-a7f7c968]{flex-shrink:0}.refined-input input[data-v-a7f7c968]{border:none;outline:0;flex:1}</style>
  <style type="text/css">button[data-v-370e72e2]{display:inline-block;flex:none;outline:0;cursor:pointer;color:#fff;font-weight:inherit;line-height:1.5;text-align:center;vertical-align:middle;background:0 0;border-radius:3px;border:1px solid}button[data-v-370e72e2]:disabled{opacity:.65;cursor:not-allowed}</style>
  <style type="text/css">div.inline[data-v-b9708d54]{display:inline-block}input[data-v-b9708d54]{display:none}.fa-input[data-v-b9708d54]{margin-right:.5em;color:#ccc}input:disabled+label>.fa-input[data-v-b9708d54]{opacity:.4}input:checked+label>.fa-input[data-v-b9708d54],input:enabled+label:hover>.fa-input[data-v-b9708d54]{color:var(--lfe-color--primary,#3498db)}</style>
  <style type="text/css">span[data-v-20b7d558]{display:inline-block;padding:0 8px;box-sizing:border-box;font-weight:400;line-height:1.5;border-radius:2px}</style>
  <style type="text/css">div[data-v-66021821]{display:flex}button[data-v-66021821]{margin-right:.5em;padding:0;cursor:pointer;width:1.7em;min-width:1.7em;height:1.7em;background:#fff;border:1px solid #bfbfbf;border-radius:6px}button.selected[data-v-66021821]{background:var(--lfe-color--primary,#3498db);border-color:var(--lfe-color--primary,#3498db);cursor:default;color:#fff}button[data-v-66021821]:last-child{margin-right:0}button[data-v-66021821]:hover{border-color:var(--lfe-color--primary,#3498db)}button[data-v-66021821]:focus{outline:0}img[data-v-66021821]{display:block;margin:auto}.number[data-v-66021821]{line-height:1.2}</style>
  <style type="text/css">ul[data-v-8feadc5c]{padding:0;margin:0;list-style:none;outline:0}.category[data-v-8feadc5c]{display:flex;align-items:baseline;margin-bottom:1em}.category[data-v-8feadc5c]:last-child{margin-bottom:0}.name[data-v-8feadc5c]{float:left;width:7em;font-weight:700}.items[data-v-8feadc5c]{overflow:hidden}.items>li[data-v-8feadc5c]{display:inline-block;margin-left:1em;padding:.063em .5em;transition:.3s ease all;border-radius:3px}.items>li[data-v-8feadc5c]:first-child{margin-left:0}.items>li>a[data-v-8feadc5c]{color:inherit;text-decoration:none}.items>li.selected>a[data-v-8feadc5c]{cursor:default;color:#fff}.badge-container[data-v-8feadc5c]{position:relative}.badge[data-v-8feadc5c]{position:absolute;top:0;right:0;background:#f93822;width:.4em;height:.4em;border-radius:50%}@media (max-width:412px){.category[data-v-8feadc5c]{flex-direction:column;flex-wrap:wrap}.items[data-v-8feadc5c]{margin-top:.625em}}</style>
 </head> 
 <body> 
  <div data-v-2b9d9b32="" id="app" class="lfe-vars">
   <div data-v-774e75a0="" data-v-2b9d9b32="" class="top-progress">
    <div data-v-774e75a0="" class="bar done" style="background: rgb(52, 152, 219);"></div>
   </div> 
   <nav data-v-27b2cd59="" data-v-1316252e="" data-v-2b9d9b32="" class="lfe-body" style="background-color: rgb(52, 73, 94); color: rgb(221, 221, 221);">
    <div data-v-27b2cd59="" style="background-color: rgb(52, 152, 219);">
     <a data-v-27b2cd59="" href="https://www.luogu.com.cn/" class="logo-wrap"><img data-v-27b2cd59="" src="./files/logo-single.png" alt="Luogu" /></a>
    </div> 
    <div data-v-1316252e="" data-v-27b2cd59="" class="popup-button">
      应用 
     <svg data-v-1316252e="" data-v-27b2cd59="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" class="svg-inline--fa fa-angle-double-right fa-w-14">
      <path data-v-1316252e="" data-v-27b2cd59="" fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" class=""></path>
     </svg> 
     <!---->
    </div> 
    <a data-v-303bbf52="" data-v-cd9b963e="" data-v-1316252e="" href="https://www.luogu.com.cn/problem/list" class="color-none" style="color: inherit;"><span data-v-cd9b963e="" class="icon">
      <svg data-v-cd9b963e="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" class="svg-inline--fa fa-book fa-w-14">
       <path data-v-cd9b963e="" fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z" class=""></path>
      </svg></span> <span data-v-cd9b963e="" class="text"> 题库 </span></a> 
    <a data-v-303bbf52="" data-v-cd9b963e="" data-v-1316252e="" href="https://www.luogu.com.cn/training/list" class="router-link-active color-none" style="color: inherit;"><span data-v-cd9b963e="" class="icon">
      <svg data-v-cd9b963e="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384 512" class="svg-inline--fa fa-clipboard-list-check fa-w-12">
       <path data-v-cd9b963e="" fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zM65.6 209.4l12.7-12.6c2.1-2.1 5.5-2.1 7.6 0l20.6 20.8 47.6-47.2c2.1-2.1 5.5-2.1 7.6 0l12.6 12.7c2.1 2.1 2.1 5.5 0 7.6l-64.2 63.6c-2.1 2.1-5.5 2.1-7.6 0L65.6 217c-2.1-2.1-2.1-5.5 0-7.6zM96 392c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm224-16c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-128c0 4.4-4.3 8-9.6 8H154.1l32.3-32h124c5.3 0 9.6 3.6 9.6 8v16z" class=""></path>
      </svg></span> <span data-v-cd9b963e="" class="text"> 题单 </span></a> 
    <a data-v-303bbf52="" data-v-cd9b963e="" data-v-1316252e="" href="https://www.luogu.com.cn/contest/list" class="color-none" style="color: inherit;"><span data-v-cd9b963e="" class="icon">
      <svg data-v-cd9b963e="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="signal" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512" class="svg-inline--fa fa-signal fa-w-20">
       <path data-v-cd9b963e="" fill="currentColor" d="M216 288h-48c-8.84 0-16 7.16-16 16v192c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V304c0-8.84-7.16-16-16-16zM88 384H40c-8.84 0-16 7.16-16 16v96c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16v-96c0-8.84-7.16-16-16-16zm256-192h-48c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zm128-96h-48c-8.84 0-16 7.16-16 16v384c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V112c0-8.84-7.16-16-16-16zM600 0h-48c-8.84 0-16 7.16-16 16v480c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V16c0-8.84-7.16-16-16-16z" class=""></path>
      </svg></span> <span data-v-cd9b963e="" class="text"> 比赛 </span></a> 
    <!----> 
    <a data-v-303bbf52="" data-v-cd9b963e="" data-v-1316252e="" href="https://www.luogu.com.cn/discuss/lists" colorscheme="none" class="color-none" data-v-27b2cd59="" style="color: inherit;"><span data-v-cd9b963e="" data-v-303bbf52="" class="icon">
      <svg data-v-cd9b963e="" data-v-303bbf52="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" class="svg-inline--fa fa-comments fa-w-18">
       <path data-v-cd9b963e="" data-v-303bbf52="" fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z" class=""></path>
      </svg></span> <span data-v-cd9b963e="" data-v-303bbf52="" class="text"> 讨论 </span></a>
   </nav> 
   <div data-v-2b9d9b32="" class="main-container">
    <div data-v-7958fe72="" data-v-2b9d9b32="" class="wrapper wrapped lfe-body header-layout narrow">
     <div data-v-7958fe72="" class="background" style="background: linear-gradient(90deg, rgb(35, 37, 38), rgb(65, 67, 69)); filter: blur(0px) brightness(100%);"></div> 
     <div data-v-52820d90="" data-v-2b9d9b32="" class="header" currentdata="[object Object]" data-v-7958fe72="">
      <div data-v-52820d90="" class="user-nav">
       <nav data-v-1bdb8ce2="" data-v-52820d90=""> 
        <?php if(!$_SESSION["name"]) { ?><a data-v-303bbf52="" data-v-1bdb8ce2="" href="login.php" aria-current="page" class="login router-link-exact-active router-link-active color-none"><span data-v-1bdb8ce2="">登录</span></a> <?php } ?>
        <img data-v-1bdb8ce2="" src="https://cdn.luogu.com.cn/upload/usericon/<?php echo $_SESSION["uid"]==''?1:$_SESSION["uid"]; ?>.png" class="avatar" referrerPolicy="no-referrer">
       </nav>
      </div> 
      <nav data-v-019a82aa="" data-v-52820d90="" class="lfe-caption bread-crumb">
       <span data-v-019a82aa=""><a data-v-303bbf52="" data-v-019a82aa="" href="https://www.luogu.com.cn/" colorscheme="default" class="link color-default">OIer club</a> <span data-v-019a82aa="" class="text"> / </span></span>
       <span data-v-019a82aa=""><a data-v-303bbf52="" data-v-019a82aa="" href="https://www.luogu.com.cn/training/list" colorscheme="default" class="link color-default">团队列表</a> 
        <!----></span>
      </nav> 
      <h1 data-v-52820d90="" class="lfe-h1">团队列表</h1> 
      <div data-v-52820d90="" class="functional">
       <div data-v-52820d90="" class="stat"></div> 
       <div data-v-52820d90="" class="operation"></div>
      </div>
     </div>
    </div> 
    <main data-v-2b9d9b32="" class="wrapped lfe-body" style="background-color: rgb(239, 239, 239);">
     <div data-v-6febb0e8="" data-v-d4b68f54="" data-v-2b9d9b32="" class="full-container" currenttemplate="TrainingList" style="margin-top: 2em;">
      <div data-v-796309f8="" data-v-d4b68f54="" class="card padding-default" data-v-6febb0e8="">
       <section data-v-d4b68f54="" data-v-796309f8="">
        <span data-v-d4b68f54="" data-v-796309f8="" class="find-problem no-wrap lfe-h2"> 查找团队 </span> 
        <div data-v-d4b68f54="" data-v-796309f8="" class="search-input">
         <div data-v-72107c51="" data-v-d4b68f54="" class="input-group search-filter" data-v-796309f8="">
          <div data-v-a7f7c968="" data-v-d4b68f54="" class="refined-input input-wrap frame" data-v-72107c51=""> 
           <input data-v-a7f7c968="" type="text" class="lfe-form-sz-middle" id="teamtxt" value="<?php echo $_GET["txt"]; ?>"/> 
          </div> 
          <button data-v-370e72e2="" data-v-d4b68f54="" onclick="soteam()" type="button" class="lfe-form-sz-middle" data-v-72107c51="" style="border-color: rgb(52, 152, 219); background-color: rgb(52, 152, 219);">搜索</button>
          <script>
            function soteam() {
              window.location.href="./?txt="+document.getElementById("teamtxt").value;
            }
           </script>
         </div>
        </div>
       </section> 
<?php 
  $txt=$_GET["txt"];
  $out = Array();
  $i=0;
  if($txt) {
    $conn = new mysqli($servername, $username, $password, $dbname);mysqli_query($conn , "set names utf8");
    $sql = "SELECT * FROM team WHERE `name` LIKE '%$txt%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
        $out[$i]=$row;
        $i++;
      }
    }
    mysqli_close($conn);
  }
?>
       <div data-v-d4b68f54="" data-v-796309f8="" class="result">
        <span data-v-d4b68f54="" data-v-796309f8="" class="result-count">共计 <span data-v-d4b68f54="" data-v-796309f8="" class="number"><?php echo $i; ?></span> 条结果</span>
       </div>
      </div> 
      <div data-v-796309f8="" data-v-d4b68f54="" class="card padding-default" data-v-6febb0e8="">
       <div data-v-42e973f3="" data-v-128051e7="" data-v-d4b68f54="" data-v-796309f8="" style="overflow: auto;">
        <div data-v-42e973f3="" class="border table">
         <div data-v-42e973f3="" class="header-wrap">
          <div data-v-128051e7="" data-v-42e973f3="" class="header">
           <div data-v-128051e7="" sortparams="[object Object]" class="id" data-v-42e973f3="">
            <span class="lfe-caption"> 编号 
             <!----></span>
           </div> 
           <div data-v-128051e7="" sortparams="[object Object]" class="name" data-v-42e973f3="">
            <span class="lfe-caption"> 名称 
             <!----></span>
           </div> 
           <!----> 
           <div data-v-128051e7="" sortparams="[object Object]" class="memberCount" data-v-42e973f3="">
            <span class="lfe-caption"> 成员人数 
             <!----></span>
           </div> 
           <div data-v-128051e7="" sortparams="[object Object]" class="master" data-v-42e973f3="">
            <span class="lfe-caption"> 建立者 
             <!----></span>
           </div> 
           <!---->
          </div>
         </div> 
         <div data-v-42e973f3="" class="row-wrap"> 
<?php
 for($j=0;$j<$i;$j++) {
   $data=$out[$j];
   $data['master']=json_decode($data['master']);
?>
          <div data-v-128051e7="" data-v-42e973f3="" class="row">
           <span data-v-128051e7="" data-v-42e973f3="" class="id"><?php echo $data['id']; ?></span> 
           <span data-v-128051e7="" data-v-42e973f3="" class="name"><a data-v-303bbf52="" data-v-128051e7="" href="https://www.luogu.com.cn/team/<?php echo $data['id']; ?>" target="_blank" colorscheme="default" class="color-default" data-v-42e973f3=""> <?php echo $data['name']; ?> </a></span> 
           <!----> 
           <span data-v-128051e7="" data-v-42e973f3="" class="memberCount"><?php echo $data['memberCount']; ?></span> 
           <span data-v-128051e7="" data-v-42e973f3="" class="master"><?php echo $data['master']->name; ?></span> 
           <!---->
          </div>
<?php } ?>
         </div>
        </div> 
        <div data-v-42e973f3="" class="bottom">
         <div data-v-42e973f3="" class="bottom-inner"> 
          <!---->
         </div>
        </div>
       </div>
      </div>
     </div>
    </main> 
    <div data-v-7958fe72="" data-v-2b9d9b32="" class="wrapper wrapped lfe-body">
     <div data-v-7958fe72="" class="background" style="background: rgb(51, 51, 51); filter: blur(0px) brightness(100%);"></div> 
     <div data-v-381c541a="" data-v-2b9d9b32="" class="footer" data-v-7958fe72="">
      <img data-v-381c541a="" src="./files/logo-single.png" class="logo-img" /> 
      <div data-v-381c541a="" class="slogan">
        在洛谷，
       <br data-v-381c541a="" /> 享受Coding的欢乐 
      </div> 
      <img data-v-381c541a="" src="./files/wechat_qr.png" class="qr-img" /> 
      <div data-v-381c541a="" class="info">
       <p data-v-381c541a=""><a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/blog/luogu/about-luogu" colorscheme="default" class="color-default"> 关于洛谷 </a> | <a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/blog/luogu/luogu-help" colorscheme="default" class="color-default"> 帮助中心 </a> | <a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/blog/luogu/luogu-EULA" colorscheme="default" class="color-default"> 用户协议 </a> | <a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/blog/luogu/contact-us" colorscheme="default" class="color-default"> 联系我们 </a> <br data-v-381c541a="" /> <a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/discuss/lists?forumname=miaomiaowu" colorscheme="default" class="color-default"> 小黑屋 </a> | <a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/judgement" colorscheme="default" class="color-default"> 陶片放逐 </a> | <a data-v-303bbf52="" data-v-381c541a="" href="https://www.luogu.com.cn/blog/luogu/social-rules" colorscheme="default" class="color-default"> 社区规则 </a> | <a data-v-303bbf52="" data-v-381c541a="" href="https://www.lagou.com/gongsi/369082.html" target="_blank" colorscheme="default" class="color-default"> 招贤纳才 </a> <br data-v-381c541a="" /> Developed by the <a data-v-303bbf52="" data-v-381c541a="" href="https://github.com/luogu-dev" target="_blank" colorscheme="default" class="color-default"> Luogu Dev Team </a> <br data-v-381c541a="" /> 2013-2021 , &copy; 洛谷 <br data-v-381c541a="" /> All rights reserved. </p>
      </div>
     </div>
    </div>
   </div>
  </div> 
 </body>
</html>