<script src="https://code.jquery.com/jquery-3.7.1.js" integrity=
        "sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="  
        crossorigin="anonymous"> 
</script>
<?php get_footer()?>
<footer class="footer_section">

        <nav>
            <a href="<?php echo home_url(); ?>" class="home_link">Главная</a>
            <?php wp_nav_menu(array(
            'theme_location'=> 'header-menu',
            'menu_class' => 'footer_nav',
            )); ?>
        </nav>
        <div class="footer_copyright">
            © 2025 mezinets6@gmail.com. Все права защищены.
        </div>

        
</footer>
</body>
</html>
