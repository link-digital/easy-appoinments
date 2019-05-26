  <div id="page">

    <?php require __DIR__ . '/../partial/header.tpl.php' ?>

    <div class="container">
      <?php print $messages; ?>
    </div>

    <main id="content">
      <a id="main-content"></a>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <div class="bg-page-title">
          <div class="container color-white clean-a flex flex-middle">
            <div>
              <h1 class="title font-roboto-cnd font-size-j uppercase" id="page-title"><?php print $title; ?></h1>
              <?php print $breadcrumb  ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </main> <!-- /.section, /#content -->

    <?php require __DIR__ . '/../partial/footer.tpl.php' ?>

  </div>
