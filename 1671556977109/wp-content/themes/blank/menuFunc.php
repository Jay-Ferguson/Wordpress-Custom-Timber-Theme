<?php

function navMenu($context){
     $context['menu'] = new Timber\Menu('primary');
     return $context;
}

add_filter('timber/context', 'navMenu');