        <footer class="site-footer">
        <!--<p>First footer</p> -->
        <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
        <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
        </footer>

    </div><!--container-->
    
    <?php wp_footer(); ?>
    </body>
</html>