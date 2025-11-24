<?php
remove_action('wp_head', 'wp_generator');

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

/* THUMBNAILS CONFIGS */
add_theme_support('post-thumbnails');
add_image_size('4x3', 600, 400, true);

//Removendo barra administrativa quando logado, no front-end
function my_function_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'my_function_admin_bar');


//Menus
register_nav_menus(
    array(
        'menu_primario' => 'Menu Primario',
        'menu_mobile' => 'Menu Mobile',
        'menu_footer' => 'Menu Fotter',
        'menu_lgpd' => 'Menu LGPD'
    )
);


if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Opções do Tema',
        'menu_title' => 'Opções do Tema',
        'menu_slug' => 'tema',
        'capability' => 'edit_posts',
        'icon_url' => 'dashicons-layout',
        // 'icon_url' => 'dashicons-schedule',
        'position' => 2,
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Opções Gerais',
        'menu_title' => 'Opções Gerais',
        'menu_slug' => 'configuracoes-do-tema',
        'capability' => 'edit_posts',
        'parent_slug' => 'tema'
        // 'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Página Inicial',
        'menu_title' => 'Página Inicial',
        'menu_slug' => 'pagina-inicial',
        'capability' => 'edit_posts',
        'parent_slug' => 'tema'
        // 'redirect'      => false
    ));

}

function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';

    if (is_tax() || is_category() || is_tag()) {
        $current_term = get_queried_object();
        $ancestors = get_ancestors($current_term->term_id, $current_term->taxonomy);
        $ancestors = array_reverse($ancestors); // Inverta a ordem dos ancestrais
        foreach ($ancestors as $ancestor) {
            $ancestor_term = get_term($ancestor, $current_term->taxonomy);
            echo "  »  ";
            echo '<a href="' . get_term_link($ancestor_term->term_id, $current_term->taxonomy) . '">' . $ancestor_term->name . '</a>';
        }
        echo "  »  ";
        echo $current_term->name;

    } elseif (is_single()) {
        $post_type = get_post_type();
        $post_type_obj = get_post_type_object($post_type);

        if ($post_type != 'post') { // Se não for um post padrão, exiba o tipo de postagem
            echo "  »  ";

            // Verifique se o post type é 'planos' e ajuste o link para a página de planos
            if ($post_type == 'planos') {
                $planos_page_id = get_page_by_path('planos')->ID; // Supondo que o slug da página seja 'planos'
                echo '<a href="' . get_permalink($planos_page_id) . '">' . $post_type_obj->labels->singular_name . '</a>';
            } else {
                echo '<a href="' . get_post_type_archive_link($post_type) . '">' . $post_type_obj->labels->singular_name . '</a>';
            }
        }

        // Mostrar categorias do post
        $categories = get_the_category();
        if ($categories) {
            $category = $categories[0]; // Pega a primeira categoria
            $parent = $category->category_parent;

            if ($parent) {
                $parent_category = get_category($parent);
                echo "  »  ";
                echo '<a href="' . get_category_link($parent_category->term_id) . '">' . $parent_category->name . '</a>';
            }

            echo "  »  ";
            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
        }

        echo "  »  ";
        the_title();

    } elseif (is_page()) {
        echo "  »  ";
        echo the_title();

    } elseif (is_search()) {
        echo "  »  Resultados da Pesquisa para... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';

    } elseif (is_post_type_archive()) {
        $post_type = get_post_type();
        $post_type_obj = get_post_type_object($post_type);

        // Ajuste para o arquivo de post type 'planos'
        if ($post_type == 'planos') {
            $planos_page_id = get_page_by_path('planos')->ID; // Supondo que o slug da página seja 'planos'
            echo "  »  ";
            echo '<a href="' . get_permalink($planos_page_id) . '">Planos</a>';
        } else {
            echo "  »  ";
            echo '<p>' . $post_type_obj->labels->singular_name . '</p>';
        }
    }
}

//V.1 Paginação
function pagination_function($query = null)
{
    if (!$query) {
        global $wp_query;
        $query = $wp_query;
    }

    $total = $query->max_num_pages;

    // Exibe paginação apenas se houver mais de uma página
    if ($total > 1) {
        $current_page = max(1, get_query_var('paged', 1)); // Garantindo que 'paged' comece em 1
        $big = 999999999; // Número grande para substituição

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => 'page/%#%/',
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'type' => 'list',
            'prev_text' => __('&laquo; '),
            'next_text' => __('&raquo;')
        ));
    }
}

require_once('bs4navwalker.php');
class Description_Walker extends Walker_Nav_Menu
{

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array|object $args    Additional strings. Actually always an 
                                     instance of stdClass. But this is WordPress.
    * @return void
    */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $class_names = join(
            ' '
            ,
            apply_filters(
                'nav_menu_css_class'
                ,
                array_filter($classes),
                $item
            )
        );

        !empty($class_names)
            and $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= "<li id='menu-item-$item->ID' $class_names>";

        $attributes = '';

        !empty($item->attr_title)
            and $attributes .= ' title="' . esc_attr($item->attr_title) . '"';
        !empty($item->target)
            and $attributes .= ' target="' . esc_attr($item->target) . '"';
        !empty($item->xfn)
            and $attributes .= ' rel="' . esc_attr($item->xfn) . '"';
        !empty($item->url)
            and $attributes .= ' href="' . esc_attr($item->url) . '"';

        // insert description for top level elements only
        // you may change this
        $description = (!empty($item->description) and 0 == $depth)
            ? '<small class="nav_desc">' . esc_attr($item->description) . '</small>' : '';

        $title = apply_filters('the_title', $item->title, $item->ID);



        $item_output = $args->before
            . "<a $attributes>"
            . $args->link_before
            . $title
            . '</a> '
            . $args->link_after
            . $description
            . $args->after;

        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,
            $item_output
            ,
            $item
            ,
            $depth
            ,
            $args
        );


        $count_pre++;
    }
}

class WPQuestions_Walker extends Walker_Category
{

    function start_lvl(&$output, $depth = 1, $args = array())
    {
        if ($depth == 0) {
            $output .= "\n<ul class=\"sub-menu\">\n";
        } else {
            $output .= "\n<ul>\n";
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= "</ul>\n";
    }

    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
    {
        /** This filter is documented in wp-includes/category-template.php */
        $cat_name = apply_filters(
            'list_cats',
            esc_attr($category->name),
            $category
        );

        // Don't generate an element if the category name is empty.
        if (!$cat_name) {
            return;
        }

        $link = '<a href="' . esc_url(get_term_link($category)) . '" ';
        if ($args['use_desc_for_title'] && !empty($category->description)) {
            /**
             * Filter the category description for display.
             *
             * @since 1.2.0
             *
             * @param string $description Category description.
             * @param object $category    Category object.
             */
            $link .= 'title="' . esc_attr(strip_tags(apply_filters('category_description', $category->description, $category))) . '"';
        }

        $link .= '>';
        $link .= $cat_name . '</a>';

        if (!empty($args['feed_image']) || !empty($args['feed'])) {
            $link .= ' ';

            if (empty($args['feed_image'])) {
                $link .= '(';
            }

            $link .= '<a href="' . esc_url(get_term_feed_link($category->term_id, $category->taxonomy, $args['feed_type'])) . '"';

            if (empty($args['feed'])) {
                $alt = ' alt="' . sprintf(__('Feed for all posts filed under %s'), $cat_name) . '"';
            } else {
                $alt = ' alt="' . $args['feed'] . '"';
                $name = $args['feed'];
                $link .= empty($args['title']) ? '' : $args['title'];
            }

            $link .= '>';

            if (empty($args['feed_image'])) {
                $link .= $name;
            } else {
                $link .= "<img src='" . $args['feed_image'] . "'$alt" . ' />';
            }
            $link .= '</a>';

            if (empty($args['feed_image'])) {
                $link .= ')';
            }
        }

        if (!empty($args['show_count'])) {
            $link .= ' (' . number_format_i18n($category->count) . ')';
        }
        if ('list' == $args['style']) {
            $output .= "\t<li";
            $css_classes = array(
                'cat-item',
                'cat-item-' . $category->term_id,
            );

            if (!empty($args['current_category'])) {
                $_current_category = get_term($args['current_category'], $category->taxonomy);
                if ($category->term_id == $args['current_category']) {
                    $css_classes[] = 'current-cat';
                } elseif ($category->term_id == $_current_category->parent) {
                    $css_classes[] = 'current-cat-parent';
                }
            }

            $css_classes = implode(' ', apply_filters('category_css_class', $css_classes, $category, $depth, $args));

            if ($depth == 0 && $args['has_children']) {
                $output .= ' class="' . $css_classes . ' drop-menu has-sub"';
            }
            if ($depth == 1 && $args['has_children']) {
                $output .= ' class="' . $css_classes . ' has-sub"';
            }
            $output .= ' class="' . $css_classes . '"';
            $output .= ">$link\n";
        } else {
            $output .= "\t$link<br />\n";
        }
    }

}


function enqueue_custom_scripts()
{
    // Registrar o script JavaScript
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/build/js/scripts.min.js', array('jquery'), null, true);

    // Passar a URL do AJAX do WordPress para o JavaScript
    wp_localize_script('custom-scripts', 'ajaxurl', admin_url('admin-ajax.php'));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// Adiciona o Owl Carousel
wp_enqueue_script(
  'main-js',
  get_template_directory_uri() . '/assets/js/main.js',
  array('jquery', 'owl-carousel'), // <- garante que o owl carregou antes
  '1.0',
  true
);


?>

