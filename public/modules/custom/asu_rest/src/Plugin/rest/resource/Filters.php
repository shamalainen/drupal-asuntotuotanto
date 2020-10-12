<?php

namespace Drupal\asu_rest\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Provides a resource to get available filters.
 *
 * @RestResource(
 *   id = "filter_rest_resource",
 *   label = @Translation("Filter"),
 *   uri_paths = {
 *     "canonical" = "/filter",
 *     "https://www.drupal.org/link-relations/create" = "/filter"
 *   }
 * )
 */
final class Filter extends ResourceBase {

  public function __construct(array $configuration, $plugin_id, $plugin_definition, array $serializer_formats, LoggerInterface $logger)
  {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger);
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
  {
    return parent::create($container, $configuration, $plugin_id, $plugin_definition); // TODO: Change the autogenerated stub
  }

  /**
   * Responds to GET requests.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   *   The HTTP response object.
   */
  public function get(Request $request) {
    return new Response();
  }

}
