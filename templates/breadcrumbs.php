<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">
                    <?php

                        if ($this_page == 'about') echo 'About Afrigue Astoria';
                        if ($this_page == 'services') echo 'Services';
                        if ($this_page == 'contact') echo 'Contact';
                    
                    ?>
                </h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="index.php" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">
                            <?php

                                if ($this_page == 'about') echo 'About Afrigue Astoria';
                                if ($this_page == 'services') echo 'Services';
                                if ($this_page == 'contact') echo 'Contact';
                            
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
