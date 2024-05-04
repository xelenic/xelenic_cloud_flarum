<?php echo $forum['headerHtml']; ?>


<div id="app" class="App">

    <div id="app-navigation" class="App-navigation"></div>

    <div id="drawer" class="App-drawer">

        <header id="header" class="App-header">
            <div id="header-navigation" class="Header-navigation"></div>
            <div class="container" style=" margin-left: 60px;margin-right: 10px;width: -webkit-fill-available;">
                <div class="Header-title">
                    <a href="<?php echo e($forum['baseUrl']); ?>" id="home-link">
                        <?php if($forum['logoUrl']): ?>
                            <img src="<?php echo e($forum['logoUrl']); ?>" alt="<?php echo e($forum['title']); ?>" class="Header-logo">
                        <?php else: ?>
                            <b>Xelenic</b> Cloud
                        <?php endif; ?>
                    </a>
                </div>
                <div style="float: left;vertical-align: top;font-size: 15px;font-weight: normal;margin: 0 15px 0 0;line-height: 34px;margin-left: 120px;">
                    <a href="https://xelenic.com">Home</a>
                </div>
                <div style="float: left;vertical-align: top;font-size: 15px;font-weight: normal;margin: 0 15px 0 0;line-height: 34px;margin-left: 43px;">
                    <a href="https://xelenic.com">Products</a>
                </div>
                <div style="float: left;vertical-align: top;font-size: 15px;font-weight: normal;margin: 0 15px 0 0;line-height: 34px;margin-left: 43px;">
                    <a href="https://xelenic.com">Support Center</a>
                </div>
                <div id="header-primary" class="Header-primary"></div>
                <div id="header-secondary" class="Header-secondary"></div>
            </div>
        </header>

    </div>

    <main class="App-content">
        <div id="content"></div>

        <?php echo $content; ?>


        <div class="App-composer">
            <div class="container">
                <div id="composer"></div>
            </div>
        </div>
    </main>

</div>

<?php echo $forum['footerHtml']; ?>

<?php /**PATH /home/xelenicc/forum.xelenic.com/vendor/flarum/core/src/Frontend/../../views/frontend/forum.blade.php ENDPATH**/ ?>