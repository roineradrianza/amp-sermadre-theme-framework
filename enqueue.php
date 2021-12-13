<?php

 /** 
  * Load the essentials assets
  * @return Mixed
  */

function serma_enqueue_init()
{
    ?>
        @import(<?= site_url() . 'assets/icons/fontawesome-6.0.0-beta/css/solid.min.css' ?>)
    <?
}