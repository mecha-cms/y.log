<?php namespace y\log;

// Create site link data to be used in navigation
function links(string $folder) {
    \extract(\lot(), \EXTR_SKIP);
    $r = [];
    $route_current = $url->path . '/';
    $route_r = '/' . \trim($state->route ?? 'index', '/');
    foreach (\g($folder, \x\page\x()) as $k => $v) {
        $v = new \Page($k);
        // Exclude home page
        if ($route_r === ($route = $v->route)) {
            continue;
        }
        // Add current state
        $v->current = 0 === \strpos($route_current, $route . '/');
        $r[$v->title . \P . $k] = $v;
    }
    \ksort($r);
    return \array_values($r);
}

// Create site trace data to be used in navigation
function traces(string $folder, string $of) {
    \extract(\lot(), \EXTR_SKIP);
    $chops = \explode('/', \trim($of, '/'));
    $r = [];
    while ($chop = \array_shift($chops)) {
        $folder .= \D . $chop;
        if ($file = \exist($folder . '.{' . \x\page\x() . '}', 1)) {
            $r[] = $file;
        }
    }
    return $r;
}

\lot('links', new \Anemone(links(\LOT . \D . 'page')));
\lot('traces', new \Pages(traces(\LOT . \D . 'page', $url->path ?? "")));

// Set page `type` to `Markdown` by default
if (null !== \State::get('x.markdown') && !\State::get('x.page.lot.type')) {
    \State::set('x.page.lot.type', 'Markdown');
}

// Add CSS file to the `<head>` section…
if (\defined("\\TEST") && \TEST) {
    \Asset::set('index.css', 20);
} else {
    // Serve the minified version if `TEST` mode is off
    \Asset::set('index.min.css', 20);
}