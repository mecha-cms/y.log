<?php if ($prev = $pager->prev): ?>
  <a href="<?= $prev->link ?? $prev->url ?? ""; ?>" rel="prev" title="<?= i('Previous'); ?>">
    &#x25C0;
  </a>
<?php else: ?>
  <a aria-disabled="true" rel="prev" title="<?= i('Previous'); ?>">
    &#x25C0;
  </a>
<?php endif; ?>
<?php if ($parent = $pager->parent): ?>
  <a href="<?= $parent->link ?? $parent->url ?? ""; ?>" title="<?= i('Parent'); ?>">
    &#x25C6;
  </a>
<?php else: ?>
  <a aria-disabled="true" title="<?= i('Parent'); ?>">
    &#x25C6;
  </a>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
  <a href="<?= $next->link ?? $next->url ?? ""; ?>" rel="next" title="<?= i('Next'); ?>">
    &#x25B6;
  </a>
<?php else: ?>
  <a aria-disabled="true" rel="prev" title="<?= i('Next'); ?>">
    &#x25B6;
  </a>
<?php endif; ?>