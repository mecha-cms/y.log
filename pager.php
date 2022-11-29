<?php if ($prev = $pager->prev): ?>
  <a href="<?= $prev->link; ?>" rel="prev" title="<?= $prev->title; ?>">
    &#x25c0;
  </a>
<?php else: ?>
  <a aria-disabled="true" rel="prev">
    &#x25c0;
  </a>
<?php endif; ?>
<?php if ($parent = $page->parent): ?>
  <a href="<?= $parent->url; ?>" title="<?= i('Parent'); ?>">
    &#x25c6;
  </a>
<?php else: ?>
  <?php if ($site->is('home')): ?>
    <a aria-disabled="true" title="<?= i('Parent'); ?>">
      &#x25c6;
    </a>
  <?php else: ?>
    <a href="<?= $url; ?>" title="<?= i('Home'); ?>">
      &#x25c6;
    </a>
  <?php endif; ?>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
  <a href="<?= $next->link; ?>" rel="next" title="<?= $next->title; ?>">
    &#x25b6;
  </a>
<?php else: ?>
  <a aria-disabled="true" rel="next">
    &#x25b6;
  </a>
<?php endif; ?>