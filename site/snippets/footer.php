    <footer class="rb-footer">

        <div class="absolute bottom-4 left-4 md:left-32">
            <?php snippet('nav-languages') ?> 
        </div>

        <div class="absolute bottom-4 right-4">
            <?= $page->copyright()->kirbytext() ?>
        </div>

    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Barba Core -->
    <script src="https://unpkg.com/@barba/core"></script>

    <!-- GSAP for animation -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <!-- Some basic helper functions -->
    <?= js('/assets/js/helper.js') ?>

    <!-- Main JS file -->
    <?= js('/assets/js/main.js') ?>

    </body>
</html>