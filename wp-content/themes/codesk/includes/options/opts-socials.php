<?php
Redux::setSection( $opt_name, array(
   'title'     => esc_html__( 'Social Profiles', 'codesk' ),
   'icon'      => 'el-icon-share',
   'fields' => array(
      array(
         'id'     => 'social_facebook',
         'type'      => 'text',
         'title'  => esc_html__( 'Facebook', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Facebook profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_instagram',
         'type'      => 'text',
         'title'     => esc_html__( 'Instagram', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Instagram profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_twitter',
         'type'      => 'text',
         'title'     => esc_html__( 'Twitter', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Twitter profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_googleplus',
         'type'      => 'text',
         'title'     => esc_html__( 'Google+', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Google+ profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_linkedin',
         'type'      => 'text',
         'title'     => esc_html__( 'LinedIn', 'codesk' ),
         'desc'      => esc_html__( 'Enter your LinkedIn profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_pinterest',
         'type'      => 'text',
         'title'     => esc_html__( 'Pinterest', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Pinterest profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_rss',
         'type'      => 'text',
         'title'     => esc_html__( 'RSS', 'codesk' ),
         'desc'      => esc_html__( 'Enter your RSS feed URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_tumblr',
         'type'      => 'text',
         'title'     => esc_html__( 'Tumblr', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Tumblr profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_vimeo',
         'type'      => 'text',
         'title'     => esc_html__( 'Vimeo', 'codesk' ),
         'desc'      => esc_html__( 'Enter your Vimeo profile URL.', 'codesk' ),
         'default'   => ''
      ),
      array(
         'id'     => 'social_youtube',
         'type'      => 'text',
         'title'     => esc_html__( 'YouTube', 'codesk' ),
         'desc'      => esc_html__( 'Enter your YouTube profile URL.', 'codesk' ),
         'default'   => ''
      )
   )
));