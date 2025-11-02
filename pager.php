<?php if ($prev = $pager->prev): ?>
  <a href="<?= eat($prev->link); ?>" rel="prev" title="<?= eat($prev->title); ?>">
    &#x25c0;
  </a>
<?php else: ?>
  <a aria-disabled="true" rel="prev">
    &#x25c0;
  </a>
<?php endif; ?>
<?php if ($parent = $page->parent): ?>
  <a href="<?= eat($parent->url . (q($parent->children) ? '/1' : "")); ?>" title="<?= eat(i('Parent')); ?>">
    &#x25c6;
  </a>
<?php else: ?>
  <?php if ($site->is('home')): ?>
    <a aria-disabled="true" title="<?= eat(i('Parent')); ?>">
      &#x25c6;
    </a>
  <?php else: ?>
    <a href="<?= eat($url); ?>" title="<?= eat(i('Home')); ?>">
      &#x25c6;
    </a>
  <?php endif; ?>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
  <a href="<?= eat($next->link); ?>" rel="next" title="<?= eat($next->title); ?>">
    &#x25b6;
  </a>
<?php else: ?>
  <a aria-disabled="true" rel="next">
    &#x25b6;
  </a>
<?php endif; ?>