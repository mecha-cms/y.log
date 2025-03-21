<?= self::enter(); ?>
<main>
  <?php if ($page->exist): ?>
    <article id="page:<?= eat($page->id); ?>">
      <h2>
        <?= $page->title; ?>
      </h2>
      <p>
        <?= $page->description; ?>
      </p>
      <?php if ($pages->count): ?>
        <?php foreach ($pages as $page): ?>
          <article id="page:<?= eat($page->id); ?>">
            <h3>
              <?php if ($link = $page->link): ?>
                <a href="<?= eat($link); ?>" rel="nofollow" target="_blank">
                  <?= $page->title; ?> &#x21e2;
                </a>
              <?php else: ?>
                <?php $children = $page->children; ?>
                <a href="<?= eat($page->url . ($children && $children->count ? '/1' : "")); ?>">
                  <?= $page->title; ?>
                </a>
              <?php endif; ?>
            </h3>
            <p>
              <?= $page->description; ?>
            </p>
          </article>
        <?php endforeach; ?>
      <?php else: ?>
        <?php if ($site->has('part')): ?>
          <p role="status">
            <?= i('No more %s to show.', 'pages'); ?>
          </p>
        <?php else: ?>
          <p role="status">
            <?= i('No %s yet.', 'pages'); ?>
          </p>
        <?php endif; ?>
      <?php endif; ?>
    </article>
  <?php else: ?>
    <article id="page:0">
      <h2>
        <?= i('Error'); ?>
      </h2>
      <p>
        <?= i('%s does not exist.', 'Page'); ?>
      </p>
    </article>
  <?php endif; ?>
</main>
<nav>
  <?= self::pager(); ?>
</nav>
<?= self::exit(); ?>