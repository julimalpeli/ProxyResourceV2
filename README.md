# ProxyResourceV2

This repository contains a PHP replica of the Glance cobrowse resource test page (`TestProxyResources.aspx`).  
The static assets (styles, images, scripts, nested proxy test pages, etc.) have been pulled locally so the page can be served without the original ASP.NET application.

## Running Locally

```bash
cd public
php -S localhost:8080
```

Then open `http://localhost:8080/cobrowse/test/TestProxyResources.php`.

## Project Layout

- `public/cobrowse/test/TestProxyResources.php` – main test page translated to PHP (with a dynamic random indicator).
- `public/cobrowse/test/styles/` – all referenced stylesheets, including SecureStatic placeholders.
- `public/cobrowse/test/images/` – copied image/video resources.
- `public/cobrowse/test/proxytest1/` – supporting proxy test pages and generated CSS variants.
- `public/include/` and `public/site/` – copies of shared vendor assets (Bootstrap, Font Awesome, theme CSS/JS, jQuery).
- `public/agentjoin/AgentView.php` – simple placeholder to keep the “Join” button working.

Any cross-domain resources that were unavailable have lightweight stand-ins so visual regressions stay minimal while keeping the overall behaviour familiar.