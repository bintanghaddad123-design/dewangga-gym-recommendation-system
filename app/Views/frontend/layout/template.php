<?= $this->include('frontend/layout/header') ?>

<body>
    <?= $this->include('frontend/layout/spinner') ?>

    <?= $this->include('frontend/layout/navbar') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('frontend/layout/footer') ?>
    
      <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary border-2 btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <?= $this->include('frontend/layout/script') ?>

</body>

</html>