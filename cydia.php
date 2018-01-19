





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://assets-cdn.github.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-63d382b7c748b0ca1b0b8772c6ac07942f39a78775d4716abded6fb8d6d8e544845848ef5f69e923c6e897cace3a187cd55e75ef1f78a58dd410b2e609b6673a.css" media="all" rel="stylesheet" />
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-dfc641ae3814dd7e98f0ee03849c90dccb4f6da08c9591721b39cb78a06a863e1bab047076761abb4ff0c143bfcf02c54f43c4a087142f110ff002b9f04bd0f1.css" media="all" rel="stylesheet" />
  
  
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/site-7f35718b16060ae00fcabab9480872c8a8b09434e780d16432395e8b809142b82a36abe0a936f4cb1b56452e1e81cac5f197beaf0cbdbd149dc5d87d0514076a.css" media="all" rel="stylesheet" />
  

  <meta name="viewport" content="width=device-width">
  
  <title>PHP Cydia API wrapper · GitHub</title>
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://gist.github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    
    <meta content="https://avatars1.githubusercontent.com/u/2557290?s=400&amp;v=4" property="og:image" /><meta content="Gist" property="og:site_name" /><meta content="object" property="og:type" /><meta content="PHP Cydia API wrapper" property="og:title" /><meta content="https://gist.github.com/wolfposd/843da23ce869ac4a4bf9" property="og:url" /><meta content="PHP Cydia API wrapper" property="og:description" />

  <link rel="assets" href="https://assets-cdn.github.com/">
  
  <meta name="pjax-timeout" content="1000">
  
  <meta name="request-id" content="D091:2B107:1210ED2:201F8C3:5A609274" data-pjax-transient>
  

  <meta name="selected-link" value="gist_code" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
  <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
  <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">
    <meta name="google-analytics" content="UA-3769691-4">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="gist" name="octolytics-app-id" /><meta content="https://collector.githubapp.com/github-external/browser_event" name="octolytics-event-url" /><meta content="D091:2B107:1210ED2:201F8C3:5A609274" name="octolytics-dimension-request_id" /><meta content="iad" name="octolytics-dimension-region_edge" /><meta content="iad" name="octolytics-dimension-region_render" />
<meta content="/&lt;user-name&gt;/&lt;gist-id&gt;" data-pjax-transient="true" name="analytics-location" />




  <meta class="js-ga-set" name="dimension1" content="Logged Out">



    <meta content="true" name="octolytics-dimension-public" /><meta content="17086339" name="octolytics-dimension-gist_id" /><meta content="843da23ce869ac4a4bf9" name="octolytics-dimension-gist_name" /><meta content="false" name="octolytics-dimension-anonymous" /><meta content="2557290" name="octolytics-dimension-owner_id" /><meta content="wolfposd" name="octolytics-dimension-owner_login" /><meta content="false" name="octolytics-dimension-forked" />

  <meta class="js-ga-set" name="dimension5" content="public">
  <meta class="js-ga-set" name="dimension6" content="owned">
  <meta class="js-ga-set" name="dimension7" content="php">


      <meta name="hostname" content="gist.github.com">
  <meta name="user-login" content="">

      <meta name="expected-hostname" content="gist.github.com">
    <meta name="js-proxy-site-detection-payload" content="MWE0MDgyODU5NjBkZWE3Njk4NmViMjUxYmQ5NTY2YjBmODI3ZGZlZmJkOWIyOGZjZWM3NDc4ODYyMmVhMDU3Mnx7InJlbW90ZV9hZGRyZXNzIjoiOTguMjI1LjE1Ny4xODUiLCJyZXF1ZXN0X2lkIjoiRDA5MToyQjEwNzoxMjEwRUQyOjIwMUY4QzM6NUE2MDkyNzQiLCJ0aW1lc3RhbXAiOjE1MTYyNzg0MTUsImhvc3QiOiJnaXRodWIuY29tIn0=">

    <meta name="enabled-features" content="UNIVERSE_BANNER,FREE_TRIALS">

  <meta name="html-safe-nonce" content="802d43b08669feedbe104b710c8501dceb350230">

  <meta http-equiv="x-pjax-version" content="fc680cddf239ef6e53153e54af405782">
  

      <link href="/wolfposd.atom" rel="alternate" title="atom" type="application/atom+xml">
  
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/gist-3aeb3cfb7c904fdf716637eb1fc60e85c6d6de2a7c82ca7c3f095f5c7e6d15882fe530012e3f4f390a0c4af69ab936ec115c7f676b508094e0ec602207d74636.css" media="all" rel="stylesheet" />




  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://assets-cdn.github.com/favicon.ico">

<meta name="theme-color" content="#1e2327">



  </head>

  <body class="logged-out env-production">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    



        <div class="Header gist-header header-logged-out" role="banner">
  <div class="container-lg px-3 clearfix">
    <div class="d-flex flex-justify-between">
      <div class="d-flex">
        <a href="/" aria-label="Gist Homepage" class="header-logo-wordmark" data-hotkey="g d">
          <svg aria-hidden="true" class="octicon octicon-logo-github" height="28" version="1.1" viewBox="0 0 45 16" width="78"><path fill-rule="evenodd" d="M18.53 12.03h-.02c.009 0 .015.01.024.011h.006l-.01-.01zm.004.011c-.093.001-.327.05-.574.05-.78 0-1.05-.36-1.05-.83V8.13h1.59c.09 0 .16-.08.16-.19v-1.7c0-.09-.08-.17-.16-.17h-1.59V3.96c0-.08-.05-.13-.14-.13h-2.16c-.09 0-.14.05-.14.13v2.17s-1.09.27-1.16.28c-.08.02-.13.09-.13.17v1.36c0 .11.08.19.17.19h1.11v3.28c0 2.44 1.7 2.69 2.86 2.69.53 0 1.17-.17 1.27-.22.06-.02.09-.09.09-.16v-1.5a.177.177 0 0 0-.146-.18zm23.696-2.2c0-1.81-.73-2.05-1.5-1.97-.6.04-1.08.34-1.08.34v3.52s.49.34 1.22.36c1.03.03 1.36-.34 1.36-2.25zm2.43-.16c0 3.43-1.11 4.41-3.05 4.41-1.64 0-2.52-.83-2.52-.83s-.04.46-.09.52c-.03.06-.08.08-.14.08h-1.48c-.1 0-.19-.08-.19-.17l.02-11.11c0-.09.08-.17.17-.17h2.13c.09 0 .17.08.17.17v3.77s.82-.53 2.02-.53l-.01-.02c1.2 0 2.97.45 2.97 3.88zm-8.72-3.61H33.84c-.11 0-.17.08-.17.19v5.44s-.55.39-1.3.39-.97-.34-.97-1.09V6.25c0-.09-.08-.17-.17-.17h-2.14c-.09 0-.17.08-.17.17v5.11c0 2.2 1.23 2.75 2.92 2.75 1.39 0 2.52-.77 2.52-.77s.05.39.08.45c.02.05.09.09.16.09h1.34c.11 0 .17-.08.17-.17l.02-7.47c0-.09-.08-.17-.19-.17zm-23.7-.01h-2.13c-.09 0-.17.09-.17.2v7.34c0 .2.13.27.3.27h1.92c.2 0 .25-.09.25-.27V6.23c0-.09-.08-.17-.17-.17zm-1.05-3.38c-.77 0-1.38.61-1.38 1.38 0 .77.61 1.38 1.38 1.38.75 0 1.36-.61 1.36-1.38 0-.77-.61-1.38-1.36-1.38zm16.49-.25h-2.11c-.09 0-.17.08-.17.17v4.09h-3.31V2.6c0-.09-.08-.17-.17-.17h-2.13c-.09 0-.17.08-.17.17v11.11c0 .09.09.17.17.17h2.13c.09 0 .17-.08.17-.17V8.96h3.31l-.02 4.75c0 .09.08.17.17.17h2.13c.09 0 .17-.08.17-.17V2.6c0-.09-.08-.17-.17-.17zM8.81 7.35v5.74c0 .04-.01.11-.06.13 0 0-1.25.89-3.31.89-2.49 0-5.44-.78-5.44-5.92S2.58 1.99 5.1 2c2.18 0 3.06.49 3.2.58.04.05.06.09.06.14L7.94 4.5c0 .09-.09.2-.2.17-.36-.11-.9-.33-2.17-.33-1.47 0-3.05.42-3.05 3.73s1.5 3.7 2.58 3.7c.92 0 1.25-.11 1.25-.11v-2.3H4.88c-.11 0-.19-.08-.19-.17V7.35c0-.09.08-.17.19-.17h3.74c.11 0 .19.08.19.17z"/></svg>
          <svg aria-hidden="true" class="octicon octicon-logo-gist" height="28" version="1.1" viewBox="0 0 25 16" width="40"><path fill-rule="evenodd" d="M4.7 8.73h2.45v4.02c-.55.27-1.64.34-2.53.34-2.56 0-3.47-2.2-3.47-5.05 0-2.85.91-5.06 3.48-5.06 1.28 0 2.06.23 3.28.73V2.66C7.27 2.33 6.25 2 4.63 2 1.13 2 0 4.69 0 8.03c0 3.34 1.11 6.03 4.63 6.03 1.64 0 2.81-.27 3.59-.64V7.73H4.7v1zm6.39 3.72V6.06h-1.05v6.28c0 1.25.58 1.72 1.72 1.72v-.89c-.48 0-.67-.16-.67-.7v-.02zm.25-8.72c0-.44-.33-.78-.78-.78s-.77.34-.77.78.33.78.77.78.78-.34.78-.78zm4.34 5.69c-1.5-.13-1.78-.48-1.78-1.17 0-.77.33-1.34 1.88-1.34 1.05 0 1.66.16 2.27.36v-.94c-.69-.3-1.52-.39-2.25-.39-2.2 0-2.92 1.2-2.92 2.31 0 1.08.47 1.88 2.73 2.08 1.55.13 1.77.63 1.77 1.34 0 .73-.44 1.42-2.06 1.42-1.11 0-1.86-.19-2.33-.36v.94c.5.2 1.58.39 2.33.39 2.38 0 3.14-1.2 3.14-2.41 0-1.28-.53-2.03-2.75-2.23h-.03zm8.58-2.47v-.86h-2.42v-2.5l-1.08.31v2.11l-1.56.44v.48h1.56v5c0 1.53 1.19 2.13 2.5 2.13.19 0 .52-.02.69-.05v-.89c-.19.03-.41.03-.61.03-.97 0-1.5-.39-1.5-1.34V6.94h2.42v.02-.01z"/></svg>
</a>
        <div class="site-search js-site-search" role="search">
            <div class="header-search" role="search">

<!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/search" class="position-relative js-quicksearch-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="header-search-wrapper form-control js-chromeless-input-container">
    <input type="text"
      class="form-control js-site-search-focus header-search-input"
      data-hotkey="s"
      name="q"
      placeholder="Search…"
      tabindex="1"
      autocorrect="off"
      autocomplete="off"
      autocapitalize="off">
  </label>

</form></div>

        </div>

        <ul class="list-style-none d-flex flex-items-center text-bold pl-2" role="navigation">
          <li><a href="/discover" class="HeaderNavlink px-2" data-ga-click="Header, go to all gists, text:all gists">All gists</a></li>
          <li><a href="https://github.com" class="HeaderNavlink px-2" data-ga-click="Header, go to GitHub, text:GitHub">GitHub</a></li>
        </ul>
      </div>

        <div class="header-actions" role="navigation">
            <a href="/join?source=header-gist" class="btn btn-primary" data-ga-click="Header, sign up">Sign up for a GitHub account</a>
          <a href="https://gist.github.com/auth/github?return_to=https%3A%2F%2Fgist.github.com%2Fwolfposd%2F843da23ce869ac4a4bf9" class="btn" data-ga-click="Header, sign in">Sign in</a>
        </div>
    </div>
  </div>
</div>



  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">
</div>



  <div role="main" >
        <div itemscope itemtype="http://schema.org/Code">
    <div id="gist-pjax-container" class="gist-content-wrapper" data-pjax-container>
      


  <div class="gist-detail-intro gist-banner">
    <div class="container">
      <a href="/" class="btn btn-outline float-right">Create a gist now</a>
      <p class="lead">
        Instantly share code, notes, and snippets.
      </p>
    </div>
  </div>


<div class="gisthead pagehead repohead instapaper_ignore readability-menu experiment-repo-nav mb-4">
  <div class="container">
    
  
<div class="container repohead-details-container">

  <ul class="pagehead-actions">


    <li>
        <a href="/login?return_to=https%3A%2F%2Fgist.github.com%2Fwolfposd%2F843da23ce869ac4a4bf9" aria-label="You must be signed in to star a gist" class="btn btn-sm btn-with-count tooltipped tooltipped-n" rel="nofollow">
    <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
    Star
</a>
  <a href="/wolfposd/843da23ce869ac4a4bf9/stargazers" aria-label="0 users starred this gist" class="social-count">
    0
</a>
    </li>

      <li>
          <a href="/login?return_to=https%3A%2F%2Fgist.github.com%2Fwolfposd%2F843da23ce869ac4a4bf9" aria-label="You must be signed in to fork a gist" class="btn btn-sm btn-with-count tooltipped tooltipped-n" rel="nofollow">
    <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
    Fork
</a>
  <a href="/wolfposd/843da23ce869ac4a4bf9/forks" aria-label="0 users forked this gist" class="social-count">
    0
</a>
      </li>
  </ul>

  <h1 class="public css-truncate">
    <img alt="@wolfposd" class="avatar gist-avatar" height="26" src="https://avatars2.githubusercontent.com/u/2557290?s=52&amp;v=4" width="26" />
    <span class="author"><a href="/wolfposd" class="url fn" rel="author"><span itemprop="author">wolfposd</span></a></span><!--
        --><span class="path-divider">/</span><!--
        --><strong itemprop="name" class="gist-header-title css-truncate-target"><a href="/wolfposd/843da23ce869ac4a4bf9">cydia.php</a></strong>

    <div class="d-block text-small text-gray">
      Last active <time-ago datetime="2015-08-29T14:11:19Z">Aug 29, 2015</time-ago>
    </div>
  </h1>
</div>

<div class="container gist-file-navigation">
  <div class="float-right file-navigation-options" data-multiple>

    <div class="file-navigation-option">
  <input type="hidden" name="protocol_type" value="clone">

  <div class="select-menu js-menu-container js-select-menu">
    <div class="input-group js-select-button js-zeroclipboard-container">
      <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone Embed, location:repo overview" aria-expanded="false" aria-haspopup="true">
    Embed
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="&lt;script src=&quot;https://gist.github.com/wolfposd/843da23ce869ac4a4bf9.js&quot;&gt;&lt;/script&gt;" aria-label="Clone this repository at &lt;script src=&quot;https://gist.github.com/wolfposd/843da23ce869ac4a4bf9.js&quot;&gt;&lt;/script&gt;" readonly>
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"/></svg></button>
</div>

    </div>

    <div class="select-menu-modal-holder">
      <div class="select-menu-modal js-menu-content">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
          <span class="select-menu-title">What would you like to do?</span>
        </div>

        <div class="select-menu-list js-navigation-container" role="menu">
            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="embed" checked>
                <span class="select-menu-item-heading">
                  
                  Embed
                </span>
                  <span class="description">
                    Embed this gist in your website.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone Embed, location:repo overview" aria-expanded="false" aria-haspopup="true">
    Embed
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="&lt;script src=&quot;https://gist.github.com/wolfposd/843da23ce869ac4a4bf9.js&quot;&gt;&lt;/script&gt;" aria-label="Clone this repository at &lt;script src=&quot;https://gist.github.com/wolfposd/843da23ce869ac4a4bf9.js&quot;&gt;&lt;/script&gt;" readonly>
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"/></svg></button>
</div>

                </span>
              </div>
            </div>
            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="share" >
                <span class="select-menu-item-heading">
                  
                  Share
                </span>
                  <span class="description">
                    Copy sharable URL for this gist.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone Share, location:repo overview" aria-expanded="false" aria-haspopup="true">
    Share
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="https://gist.github.com/wolfposd/843da23ce869ac4a4bf9" aria-label="Clone this repository at https://gist.github.com/wolfposd/843da23ce869ac4a4bf9" readonly>
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"/></svg></button>
</div>

                </span>
              </div>
            </div>
            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="http" >
                <span class="select-menu-item-heading">
                  Clone via
                  HTTPS
                </span>
                  <span class="description">
                    Clone with Git or checkout with SVN using the repository's web address.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone HTTPS, location:repo overview" aria-expanded="false" aria-haspopup="true">
    HTTPS
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="https://gist.github.com/843da23ce869ac4a4bf9.git" aria-label="Clone this repository at https://gist.github.com/843da23ce869ac4a4bf9.git" readonly>
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"/></svg></button>
</div>

                </span>
              </div>
            </div>
        </div>
        <div class="select-menu-list" role="menu">
          <a class="select-menu-item select-menu-action" href="https://help.github.com/articles/which-remote-url-should-i-use" target="_blank">
            <svg aria-hidden="true" class="octicon octicon-question select-menu-item-icon" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6 10h2v2H6v-2zm4-3.5C10 8.64 8 9 8 9H6c0-.55.45-1 1-1h.5c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5V7H4c0-1.5 1.5-3 3-3s3 1 3 2.5zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"/></svg>
            <div class="select-menu-item-text">
              Learn more about clone URLs
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="file-navigation-option">
</div>


    <div class="file-navigation-option">
      <a href="/wolfposd/843da23ce869ac4a4bf9/archive/42903acb41020b8f66000144cabb0bd11ad0cffe.zip"
          class="btn btn-sm"
          rel="nofollow"
          data-ga-click="Gist, download zip, location:gist overview">
        Download ZIP
      </a>
    </div>
  </div>

  <div class="float-left">
    <nav class="reponav js-repo-nav js-sidenav-container-pjax"
     role="navigation"
     data-pjax="#gist-pjax-container">

  <a href="/wolfposd/843da23ce869ac4a4bf9" aria-label="Code" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-pjax="true" data-selected-links="gist_code /wolfposd/843da23ce869ac4a4bf9">
    <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
    Code
</a>
    <a href="/wolfposd/843da23ce869ac4a4bf9/revisions" aria-label="Revisions" class="js-selected-navigation-item reponav-item" data-hotkey="g r" data-pjax="true" data-selected-links="gist_revisions /wolfposd/843da23ce869ac4a4bf9/revisions">
      <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
      Revisions
      <span class="Counter">4</span>
</a>

</nav>

  </div>
</div>


  </div>
</div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content gist-content">
    
  <div>
    <div class="repository-meta js-details-container Details">
  <div class="repository-meta-content" itemprop="about">
    PHP Cydia API wrapper
  </div>
</div>


        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-cydia-php" class="file">
      <div class="file-header">
        <div class="file-actions">

          <a href="/wolfposd/843da23ce869ac4a4bf9/raw/42903acb41020b8f66000144cabb0bd11ad0cffe/cydia.php" class="btn btn-sm ">Raw</a>
        </div>
        <div class="file-info">
          <span class="icon">
            <svg aria-hidden="true" class="octicon octicon-gist" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.5 5L10 7.5 7.5 10l-.75-.75L8.5 7.5 6.75 5.75 7.5 5zm-3 0L2 7.5 4.5 10l.75-.75L3.5 7.5l1.75-1.75L4.5 5zM0 13V2c0-.55.45-1 1-1h10c.55 0 1 .45 1 1v11c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1zm1 0h10V2H1v11z"/></svg>
          </span>
          <a class="tooltipped tooltipped-s css-truncate" aria-label="Permalink" href="#file-cydia-php">
            <strong class="user-select-contain gist-blob-name css-truncate-target">
              cydia.php
            </strong>
          </a>
        </div>
      </div>
    

  <div itemprop="text" class="blob-wrapper data type-php">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="file-cydia-php-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-cydia-php-LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-cydia-php-LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/*</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-cydia-php-LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">The MIT License (MIT)</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-cydia-php-LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-cydia-php-LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">Copyright (c) &lt;2014&gt; &lt;@wolfposd&gt;</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-cydia-php-LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-cydia-php-LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">Permission is hereby granted, free of charge, to any person obtaining a copy</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-cydia-php-LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">of this software and associated documentation files (the &quot;Software&quot;), to deal</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-cydia-php-LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">in the Software without restriction, including without limitation the rights</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-cydia-php-LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">to use, copy, modify, merge, publish, distribute, sublicense, and/or sell</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-cydia-php-LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">copies of the Software, and to permit persons to whom the Software is</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-cydia-php-LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">furnished to do so, subject to the following conditions:</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="file-cydia-php-LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="file-cydia-php-LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">The above copyright notice and this permission notice shall be included in</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="file-cydia-php-LC15" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">all copies or substantial portions of the Software.</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="file-cydia-php-LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="file-cydia-php-LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="file-cydia-php-LC18" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="file-cydia-php-LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="file-cydia-php-LC20" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="file-cydia-php-LC21" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="file-cydia-php-LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="file-cydia-php-LC23" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">THE SOFTWARE.</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="file-cydia-php-LC24" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="file-cydia-php-LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="file-cydia-php-LC26" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="file-cydia-php-LC27" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/*</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="file-cydia-php-LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">How to use:</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="file-cydia-php-LC29" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="file-cydia-php-LC30" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">$c = new CydiaCheck(&quot;device-udid&quot;, &quot;com.github.package&quot;, &quot;vendor&quot;, &quot;aabbccddeeffgg&quot;);</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="file-cydia-php-LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">$c-&gt;requestPurchaseStatus();</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="file-cydia-php-LC32" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="file-cydia-php-LC33" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">if($c-&gt;isPaid()) {</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="file-cydia-php-LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">  echo &quot;Is paid&quot;;</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="file-cydia-php-LC35" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">}</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="file-cydia-php-LC36" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">else{</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="file-cydia-php-LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">  echo &quot;Is not paid&quot;;</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="file-cydia-php-LC38" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">}</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="file-cydia-php-LC39" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="file-cydia-php-LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="file-cydia-php-LC41" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="file-cydia-php-LC42" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">class</span> <span class="pl-en">CydiaCheck</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="file-cydia-php-LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">{</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="file-cydia-php-LC44" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">private</span> <span class="pl-smi">$vendor</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="file-cydia-php-LC45" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">private</span> <span class="pl-smi">$udid</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="file-cydia-php-LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">private</span> <span class="pl-smi">$package</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="file-cydia-php-LC47" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">private</span> <span class="pl-smi">$apikey</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="file-cydia-php-LC48" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">public</span> <span class="pl-smi">$paymentstatus</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="file-cydia-php-LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="file-cydia-php-LC50" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c"><span class="pl-c">/**</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="file-cydia-php-LC51" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * Create a new CydiaApiCheck</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="file-cydia-php-LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * <span class="pl-k">@param</span> string $udid the UDID of the device</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="file-cydia-php-LC53" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * <span class="pl-k">@param</span> string $package the package id to check, eg: com.website.package</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="file-cydia-php-LC54" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * <span class="pl-k">@param</span> string $vendor the vendor id of your package</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="file-cydia-php-LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * <span class="pl-k">@param</span> string $apikey the secret cydia-api-key</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="file-cydia-php-LC56" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="file-cydia-php-LC57" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">function</span> <span class="pl-c1">__construct</span>(<span class="pl-smi">$udid</span>, <span class="pl-smi">$package</span>, <span class="pl-smi">$vendor</span>, <span class="pl-smi">$apikey</span>)</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="file-cydia-php-LC58" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    {</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="file-cydia-php-LC59" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">vendor</span> <span class="pl-k">=</span> <span class="pl-smi">$vendor</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="file-cydia-php-LC60" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">udid</span> <span class="pl-k">=</span> <span class="pl-smi">$udid</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="file-cydia-php-LC61" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">apikey</span> <span class="pl-k">=</span> <span class="pl-smi">$apikey</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="file-cydia-php-LC62" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">package</span> <span class="pl-k">=</span> <span class="pl-smi">$package</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="file-cydia-php-LC63" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">paymentstatus</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>();</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="file-cydia-php-LC64" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    }</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="file-cydia-php-LC65" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="file-cydia-php-LC66" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c"><span class="pl-c">/**</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="file-cydia-php-LC67" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * prepares the query-string for a curl-request</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="file-cydia-php-LC68" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * <span class="pl-k">@return</span> string cydia-api-query</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="file-cydia-php-LC69" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="file-cydia-php-LC70" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">function</span> <span class="pl-en">constructAPIRequest</span>()</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="file-cydia-php-LC71" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    {</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="file-cydia-php-LC72" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$tempQuery</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>api=store-0.9&amp;device=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">udid</span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="file-cydia-php-LC73" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>&amp;mode=local&amp;nonce=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">time</span>()<span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="file-cydia-php-LC74" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>&amp;package=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">package</span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="file-cydia-php-LC75" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>&amp;timestamp=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">time</span>()<span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="file-cydia-php-LC76" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>&amp;vendor=<span class="pl-pds">&quot;</span></span><span class="pl-k">.</span><span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">vendor</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="file-cydia-php-LC77" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">         </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="file-cydia-php-LC78" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>http://cydia.saurik.com/api/check?<span class="pl-pds">&quot;</span></span><span class="pl-k">.</span><span class="pl-smi">$tempQuery</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&quot;</span>&amp;signature=<span class="pl-pds">&quot;</span></span><span class="pl-k">.</span>hash_SHA1(<span class="pl-smi">$tempQuery</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">apikey</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="file-cydia-php-LC79" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    }</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="file-cydia-php-LC80" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="file-cydia-php-LC81" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c"><span class="pl-c">/**</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="file-cydia-php-LC82" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * Request the purchase status from the cydia-server</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="file-cydia-php-LC83" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     * <span class="pl-k">@return</span> associative array with purchase details</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="file-cydia-php-LC84" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">     <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="file-cydia-php-LC85" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">function</span> <span class="pl-en">requestPurchaseStatus</span>()</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="file-cydia-php-LC86" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    {</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="file-cydia-php-LC87" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$ch</span> <span class="pl-k">=</span> <span class="pl-c1">curl_init</span>();</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="file-cydia-php-LC88" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-c1">curl_setopt</span>(<span class="pl-smi">$ch</span>, <span class="pl-c1">CURLOPT_RETURNTRANSFER</span>, <span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="file-cydia-php-LC89" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-c1">curl_setopt</span>(<span class="pl-smi">$ch</span>, <span class="pl-c1">CURLOPT_URL</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>constructAPIRequest());</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="file-cydia-php-LC90" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$result</span> <span class="pl-k">=</span> <span class="pl-c1">curl_exec</span>(<span class="pl-smi">$ch</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="file-cydia-php-LC91" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-c1">curl_close</span>(<span class="pl-smi">$ch</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="file-cydia-php-LC92" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="file-cydia-php-LC93" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">paymentstatus</span> <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>convertPurchaseStatus(<span class="pl-smi">$result</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="file-cydia-php-LC94" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-k">return</span> <span class="pl-smi">$result</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="file-cydia-php-LC95" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    }</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="file-cydia-php-LC96" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="file-cydia-php-LC97" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">function</span> <span class="pl-en">convertPurchaseStatus</span>(<span class="pl-smi">$stringstatus</span>)</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="file-cydia-php-LC98" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    {</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="file-cydia-php-LC99" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-smi">$output</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>();</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="file-cydia-php-LC100" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-c1">parse_str</span>(<span class="pl-smi">$stringstatus</span>, <span class="pl-smi">$output</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="file-cydia-php-LC101" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-k">return</span> <span class="pl-smi">$output</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="file-cydia-php-LC102" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    }</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="file-cydia-php-LC103" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="file-cydia-php-LC104" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="file-cydia-php-LC105" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">function</span> <span class="pl-en">isPaid</span>()</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="file-cydia-php-LC106" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    {</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="file-cydia-php-LC107" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-k">return</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">paymentstatus</span>[<span class="pl-s"><span class="pl-pds">&quot;</span>state<span class="pl-pds">&quot;</span></span>] <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>completed<span class="pl-pds">&quot;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="file-cydia-php-LC108" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    }</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="file-cydia-php-LC109" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    </span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="file-cydia-php-LC110" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="file-cydia-php-LC111" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="file-cydia-php-LC112" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/**</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="file-cydia-php-LC113" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"> * create an HMAC from message in BASE64</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="file-cydia-php-LC114" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"> * <span class="pl-k">@param</span> string $message the message to verify</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="file-cydia-php-LC115" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"> * <span class="pl-k">@param</span> string $key the key to use</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="file-cydia-php-LC116" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"> * <span class="pl-k">@param</span> boolean $rawdata , if false returns hex-chars</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="file-cydia-php-LC117" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"> * <span class="pl-k">@return</span> string BASE64(HMAC(message))</span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="file-cydia-php-LC118" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"> <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="file-cydia-php-LC119" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">hash_SHA1</span>(<span class="pl-smi">$message</span>, <span class="pl-smi">$key</span>, <span class="pl-smi">$rawdata</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>)</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="file-cydia-php-LC120" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">{</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="file-cydia-php-LC121" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-smi">$hashed</span> <span class="pl-k">=</span> <span class="pl-c1">base64_encode</span>(<span class="pl-c1">hash_hmac</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>SHA1<span class="pl-pds">&#39;</span></span>, <span class="pl-smi">$message</span>, <span class="pl-smi">$key</span>, <span class="pl-smi">$rawdata</span>));</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="file-cydia-php-LC122" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-smi">$hashed</span> <span class="pl-k">=</span> <span class="pl-c1">str_replace</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>_<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$hashed</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="file-cydia-php-LC123" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-smi">$hashed</span> <span class="pl-k">=</span> <span class="pl-c1">str_replace</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>=<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$hashed</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="file-cydia-php-LC124" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-smi">$hashed</span> <span class="pl-k">=</span> <span class="pl-c1">str_replace</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>+<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$hashed</span>);</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="file-cydia-php-LC125" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">return</span> <span class="pl-smi">$hashed</span>;</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="file-cydia-php-LC126" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="file-cydia-php-LC127" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="file-cydia-php-LC128" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="file-cydia-php-LC129" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="file-cydia-php-L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="file-cydia-php-LC130" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span><span class="pl-pse"><span class="pl-s1">?</span>&gt;</span></td>
      </tr>
</table>


  </div>

  </div>
  
</div>


    <a name="comments"></a>
    <div class="discussion-timeline gist-discussion-timeline js-quote-selection-container ">
      <div class="js-discussion js-socket-channel" data-channel="marked-as-read:gist:17086339">
        



<!-- Rendered timeline since 2015-08-29 07:11:19 -->
<div id="partial-timeline-marker"
      class="js-timeline-marker js-updatable-content"
      data-url="/wolfposd/843da23ce869ac4a4bf9/show_partial?partial=gist%2Ftimeline_marker&amp;since=1440857479"
      data-last-modified="Sat, 29 Aug 2015 14:11:19 GMT"
      >
</div>


        <div class="discussion-timeline-actions">
            <div class="flash flash-warn mt-3">
    <a href="/join?source=comment-gist" class="btn btn-primary" rel="nofollow">Sign up for free</a>
    <strong>to join this conversation on GitHub</strong>.
    Already have an account?
    <a href="/login?return_to=https%3A%2F%2Fgist.github.com%2Fwolfposd%2F843da23ce869ac4a4bf9" rel="nofollow">Sign in to comment</a>
</div>

        </div>
      </div>
    </div>
</div>
  </div>

  <div class="modal-backdrop js-touch-events"></div>
</div><!-- /.container -->

    </div>
  </div>

  </div>

      
<div class="footer container-lg px-3" role="contentinfo">
  <div class="position-relative d-flex flex-justify-between py-6 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap ">
      <li class="mr-3">&copy; 2018 <span title="0.33025s from unicorn-3521443653-5wvg1">GitHub</span>, Inc.</li>
        <li class="mr-3"><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li class="mr-3"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>

    <a href="https://github.com" aria-label="Homepage" class="footer-octicon" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
    <ul class="list-style-none d-flex flex-wrap ">
        <li class="mr-3"><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li class="mr-3"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li class="mr-3"><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li class="mr-3"><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
    You can't perform that action at this time.
  </div>


    <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/compat-1378513244796959154de41db23c9593f69d95bfbc36e726129c610a32bc4f0f8fbc10c7dd974ff06d5b3c251e32ed0c3a7cf9317c9bcf1dbfff0dbd642e31fc.js"></script>
    <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-5d4c32734d583a8f25d8920b06b336803badd387cbb25383677184a2936d16b10c383b80316ccda4deef2acf886de64ec58ff8a6a75031bfe3450b69d2ecbf24.js"></script>
    
    <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-93b29b30c9c177d0ef1ef01fb381c8031020886b52b41349b9e700f7d7b6dc2797e1068f8f76768f12e0f18bd4fc8c4821441c3c9dc279200e6ca7c79130b8ec.js"></script>
    
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
  </div>
</div>


  </body>
</html>

