<!DOCTYPE html>
<html class>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <?php if ($w = w($page->description ?? $site->description ?? "")): ?>
      <meta content="<?= $w; ?>" name="description">
    <?php endif; ?>
    <meta content="<?= eat($page->author); ?>" name="author">
    <title>
      <?= w($t->reverse); ?>
    </title>
    <link href="/favicon.ico" rel="icon">
    <link href="<?= eat($link->path); ?>" rel="canonical">
  </head>
  <body>
    <?= self::alert(); ?>
    <div>
      <?= self::header(); ?>