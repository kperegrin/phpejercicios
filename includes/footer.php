    <div class="footer">
        <p>PHP Practice App &mdash; Repaso para Examen &mdash; &iexcl;T&uacute; puedes! &#x1F4AA;</p>
    </div>

    <script>
    function toggleHint(id) {
        const el = document.getElementById('hint-' + id);
        el.classList.toggle('show');
    }
    
    function toggleSolution(id) {
        const el = document.getElementById('solution-' + id);
        el.classList.toggle('show');
    }

    function switchTab(tabGroup, tabName) {
        document.querySelectorAll('[data-tab-group="' + tabGroup + '"] .tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('[data-tab-content-group="' + tabGroup + '"] .tab-content').forEach(c => c.classList.remove('active'));
        document.querySelector('[data-tab-group="' + tabGroup + '"] .tab[data-tab="' + tabName + '"]').classList.add('active');
        document.getElementById(tabGroup + '-' + tabName).classList.add('active');
    }
    </script>
</body>
</html>
