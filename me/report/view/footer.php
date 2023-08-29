<footer class="footer">
        <div class="row">
            <div class="col3 box">
                <h4>Validering:</h4>
                <ul>
                    <li><a href="http://validator.w3.org/check/referer">HTML</a></li>
                    <li><a href="https://jigsaw.w3.org/css-validator/check/referer">CSS</a></li>
                    <li><a href="https://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn HTML/CSS</a></li>
                    <li><a href="https://validator.w3.org/checklink">Link checker</a></li>
                </ul>
            </div>
            <div class="col3 box">
                <h4>Manualer:</h4>
                <ul>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Reference">MDN: HTML</a></li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">MDN: CSS</a></li>
                    <li><a href="https://html.spec.whatwg.org/multipage/">HTML Standard</a></li>
                    <li><a href="https://www.w3.org/2009/cheatsheet/">Cheat Sheet</a></li>
                    <li><a href="https://www.php.net/manual/en/">PHP</a></li>
                </ul>
            </div>
            <div class="col3 box">
                <h4>Verktyg och tjänster:</h4>
                <ul>
                    <li><a href="https://www.w3schools.com/html/">HTML tutorial W3</a></li>
                    <li><a href="https://www.w3schools.com/css/">CSS tutorial W3</a></li>
                    <li><a href="https://web.dev/measure/">Mät sidans prestanda</a></li>
                    <li><a href="https://caniuse.com/">CanIUse</a></li>
                    <li><a href="https://codepen.io/">CodePen</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col1">
                <p>Copyright &copy; Marie Grahn.</p>
            </div>
        </div>

        <?php
            // The load time of the page
            $timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
            $timestampLast = microtime(true);
            $diff = round(($timestampLast - $timestampFirst) * 1000, 2);

            // Number of loaded files
            $filesIncluded = get_included_files();
            $numFiles = count($filesIncluded);

            // Memory
            $memoryMax = round(memory_get_peak_usage() / 1000000, 2);
            $memoryCurrent = round(memory_get_usage() / 1000000, 2);
            $memoryLimit = ini_get("memory_limit");
        ?>
        <div class="row">
            <div class="col1 final">
                <p>Sidans laddningstid är <?= $diff ?> ms.<br>
                    Antalet filer som inkluderas är <?= $numFiles ?>.<br>
                    Varje request får max nyttja <?= $memoryLimit ?>, denna processen använder för tillfället 
                    <?= $memoryCurrent ?> MB och peak var <?= $memoryMax ?> MB.</p>
            </div>
        </div>
    </footer>
</body>
</html>