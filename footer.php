<footer>
  <p>
    <?= self::trace([' / ']); ?>
  </p>
  <p>
    &#x00a9; <?= $date->year; ?> &#x00b7; <a href="<?= eat($link); ?>">
      <?= $site->title; ?>
    </a>
  </p>
</footer>