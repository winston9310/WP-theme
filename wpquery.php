///hacer consultas con WPquery y ELementor

    add_action('elementor_pro/posts/query/ID QUE PONGAMOS EN QUERY ELEMENTOR', function($query)
    {
        $meta_query = [[
            'key' => 'destacado_portada',
            'value' => '1',
            'compare' => '=',
        ]];


        $query->set('meta_query', $meta_query);
        $query->set('post_type', 'TIPO DE POSTTYPE');
        $query->set('meta_key', 'orden_destacado');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');
    });

