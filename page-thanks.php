<?php
get_header(''); ?>

<style>
    .container.thanks{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    h1{
        color: #000;
        text-align: center;
    }
    a.th{
        max-height:60px;
    }
</style>
<div class="container thanks">
    <h1 >Thank you, your application has been accepted<h1/>
    <div class="hero-btns-group">
            <a href="/" class="main-btn text--semibold yak_1 th"> Back to Homepage</a>
    </div>
</div>

<?php get_footer(''); ?>