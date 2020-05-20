
        <div class="menu">              <!-- меню верхнее -->
            <div class="MainMenu">
                <div class="items">
                    <a href="motonews">НОВИНИ</a>
                    <a href="motoinfo">ПРО НАС</a>
                    <a href="">КОНТАКТИ</a>
                </div>
                <div class="social">
                    <img src="/images/telegram.svg">
                    <img src="/images/facebook.svg">
                    <img src="/images/instagram.svg">
                </div>
            </div>
        </div>
        <div class="itemsMob">
            <div class="nav-toggle">        <!-- моб меню -->
                <div class="nav-toggle-bar"></div>
            </div>
            <nav class="nav">
            <ul>
                <li><a href="motonews">НОВИНИ</a></li>
                <li><a href="motoinfo">ПРО НАС</a></li>
                <li><a href="">КОНТАКТИ</a></li>
            </ul>
            </nav>
        </div>
        <script>
            (function() {
    
                var hamburger = {
                navToggle: document.querySelector('.nav-toggle'),
                nav: document.querySelector('nav'),
            
                doToggle: function(e) {
                    e.preventDefault();
                    this.navToggle.classList.toggle('expanded');
                    this.nav.classList.toggle('expanded');
                }
                };
            
                hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });
                hamburger.nav.addEventListener('click', function(e) { hamburger.doToggle(e); });
            
            }());
        </script>

        <div class="back">
            <div class="main">
                <div class="headerInMain">          <!-- меню внутреннее -->
                    <img src="/images/Logo.svg" class="name">
                    <div class="innerMenu">
                        <a>НЕО-РЕТРО</a>
                        <a>ВІНТАЖ</a>
                        <a>МАЙСТЕРНЯ</a>
                    </div>
                </div>
                <div>