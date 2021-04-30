<?php
/**
 * Plugin Name: WPGraphQL bb-field extension
 * Description: Exposes usesBuilder field in GraphQL schema which will be set to True, if the page uses Beaver Builder
 */

add_action( 'graphql_register_types', 'flbuilder_extend_wpgraphql_schema' );

function flbuilder_extend_wpgraphql_schema() {
  register_graphql_field( 'Page', 'usesBuilder', [
    'type' => 'Boolean',
    'description' => __( 'Shows whether page uses Beaver Builder', 'your-textdomain' ),
    'resolve' => function(  ) {
      if ( FLBuilderModel::is_builder_enabled() ) {
        return true;
      }
      return false;
    }
  ] );
}; 