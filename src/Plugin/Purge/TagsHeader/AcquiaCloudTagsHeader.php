<?php

/**
 * @file
 * Contains \Drupal\purge_acquia_cloud\Plugin\Purge\TagsHeader\AcquiaCloudTagsHeader.
 */

namespace Drupal\purge_acquia_cloud\Plugin\Purge\TagsHeader;

use Drupal\purge\Plugin\Purge\TagsHeader\TagsHeaderInterface;
use Drupal\purge\Plugin\Purge\TagsHeader\TagsHeaderBase;

/**
 * Acquia Cloud Tags header.
 *
 * @PurgeTagsHeader(
 *   id = "acquia_cloud_tags",
 *   header_name = "Acquia-Cloud-Tags",
 * )
 */
class AcquiaCloudTagsHeader extends TagsHeaderBase implements TagsHeaderInterface {}
