 <!-- RODAPÉ  -->
        <footer>
            <div class="footer">
                <h1 class="text-center">Me envie um Olá :)</h1>
                <div class="links text-center">
                    <a href="https://www.facebook.com/vinicioslc" title="Abrir Facebook" target="_blank" class="margin-right-3vw">
                        <div class="icon animation-hover-fade">
                            <div class="facebook-icon"></div>
                        </div>
                    </a>
                    <a href="https://br.linkedin.com/in/vinicioslc" title="Abrir Linkedin" target="_blank" class="margin-right-3vw">
                        <div class="icon animation-hover-fade">
                            <div class="linkedin-icon"></div>
                        </div>
                    </a>
                    <a href="https://github.com/vinicioslc" title="Abrir Github" target="_blank" class="margin-right-3vw">
                        <div class="icon animation-hover-fade">
                            <div class="github-icon"></div>
                        </div>
                    </a>
                    <a class="text-center text-center-midle animation-hover-fade" title="Enviar e-mail" href="mailto:vinicioslc@outlook.com">vinicioslc@outlook.com</a>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script>
            $(document).ready(function () {
                // anima botão de menu se é a primeira vez no site              
                var oldVisitor = Cookies.get('old-visitor'); 
                var menuBtn = $('#sidemenu-btn');
                console.log(oldVisitor);
                if (oldVisitor !== 'true'){                   
                    $(menuBtn).addClass('btn-not-opened');
                    $(menuBtn).click(OpenedMenu);
                }
                function OpenedMenu (){
                    Cookies.set('old-visitor', true);
                    $(menuBtn).removeClass('btn-not-opened');
                }
            });
            </script>
            <?php wp_footer( ); ?>
        </footer>
    </main>
</body>


</html>