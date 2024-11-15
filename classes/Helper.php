<?php

namespace deichrakete\ColorSchemes;

/**
 * Helper methods for getting Color Schemes
 */
class Helper
{
  public function __construct() {}

  /**
   * Get the classes for a given scheme
   *
   * @param string $scheme
   * @return string
   */
  public static function classes(string $scheme): string
  {
    $options = option('deichrakete.color-schemes.schemes');
    $appendClasses = option('deichrakete.color-schemes.class');
    $classes = '';

    foreach ($options as $option) {
      if ($option['name'] === $scheme) {
        if (array_key_exists('classes', $option)) {
          $classes = $option['name'] . ' ' . $option['classes'];
        }
        break;
      }
    }

    return $appendClasses . ' ' . $classes;
  }

  /**
   * Get the outline color for a given color scheme
   *
   * @param string $scheme Name of the color scheme
   * @param string $color Name of the color option
   * @return string|null
   */
  private static function color($scheme, $color): string|null
  {
    $options = option('deichrakete.color-schemes.schemes');

    foreach ($options as $option) {
      if ($option['name'] === $scheme) {
        return $option['colors'][$color];
        break;
      }
    }

    return null;
  }

  /**
   * Get the primary color for a given scheme
   *
   * @param string $scheme
   * @return string|null
   */
  public static function primary(string $scheme): string|null
  {
    return self::color($scheme, 'primary');
  }

  /**
   * Get the background color for a given color scheme
   *
   * @param string $scheme
   * @return string|null
   */
  public static function background(string $scheme): string|null
  {
    return self::color($scheme, 'background');
  }

  /**
   * Get the text color for a given color scheme
   *
   * @param string $scheme
   * @return string|null
   */
  public static function text($scheme): string|null
  {
    return self::color($scheme, 'text');
  }

  /**
   * Get the outline color for a given color scheme
   *
   * @param string $scheme
   * @return string|null
   */
  public static function outline($scheme): string|null
  {
    return self::color($scheme, 'outline');
  }

  /**
   * Get the button background color for a given color scheme
   *
   * @param string $scheme
   * @return string|null
   */
  public static function buttonBackground($scheme): string|null
  {
    return self::color($scheme, 'buttonBackground');
  }

  /**
   * Get the button text color for a given color scheme
   *
   * @param string $scheme
   * @return string|null
   */
  public static function buttonText($scheme): string|null
  {
    return self::color($scheme, 'buttonText');
  }
}
