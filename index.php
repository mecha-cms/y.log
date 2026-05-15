<?php namespace y\log;

// Create site link data to be used in navigation
$data[] = \Pages::from($folder = \LOT . \D . 'page')->sort([1, 'title'])->not(function ($page) use ($state) {
    // Skip home page
    return '/' . \trim($state->home ?? 'index', '/') === $page->route;
});

// Create site trace data to be used in navigation
$data[] = \Pages::from((function ($folder, $of) {
    \extract(\lot(), \EXTR_SKIP);
    $r = [];
    $traces = \explode('/', \trim($of, '/'));
    while ($trace = \array_shift($traces)) {
        $folder .= \D . $trace;
        if ($file = \exist($folder . '.{' . \x\page\x() . '}', 1)) {
            $r[] = $file;
        }
    }
    return $r;
})($folder, $link->path ?? ""));

\lot('data', $data);

// Set page `type` to `Markdown` by default
if (null !== \State::get('x.markdown') && !\State::get('x.page.lot.type')) {
    \State::set('x.page.lot.type', 'Markdown');
}

// Add CSS file to the `<head>` section…
\Asset::set('index' . (\defined("\\TEST") && \TEST ? '.' : '.min.') . 'css', 20);