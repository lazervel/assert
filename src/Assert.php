<?php

declare(strict_types=1);

namespace Modassir\Assert;

use Modassir\Assert\Exception\AssertationException;

class Assert
{
  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is countable
   * @param string $message [optional]
   *                        
   * @throws
   * @return mixed
   */
  public static function countable($value, string $message = null)
  {
    return self::expect(!\is_countable($value), $value, 'countable', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is empty
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function empty($value, string $message = null)
  {
    return self::expect(!empty($value), $value, 'empty', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is true
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function true($value, string $message = null)
  {
    return self::expect(true !== $value, $value, 'true', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is resource
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function resource($value, string $message = null)
  {
    return self::expect(!\is_resource($value), $value, 'resource', $message);
  }
  
  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is false
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function false($value, $message = null)
  {
    return self::expect(false !== $value, $value, 'true', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is infinite
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function infinite($value, string $message = null)
  {
    $value = self::valueToString($value);
    return self::expect(!\is_infinite((float)$value), $value, 'true', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is infinite
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function finite($value, string $message = null)
  {
    $value = self::valueToString($value);
    return self::expect(!\is_finite((float)$value), $value, 'true', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is lower
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function lower($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is alphabet
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function alpha($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is upper
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function upper($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is protocol
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function protocol($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is extension
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function extension($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is class
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function class($value, string $message = null)
  {
    $value = self::valueToString($value);
    return self::expect(!\class_exists($value), $value, 'class', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is void
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function void($value = null, string $message = null)
  {
    return self::expect(!\is_null($value), $value, 'void', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is defined
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function defined($value, string $message = null)
  {
    return self::expect(!\defined($value), $value, 'defined', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is regex
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function regex($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is string
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function string($value, string $message = null)
  {
    return self::expect(!\is_string($value), $value, 'string', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is integer
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function int($value, string $message = null)
  {
    return self::expect(!\is_int($value), $value, 'int', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is ssl
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function ssl($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is query
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function query($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is hash
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function hash($value, string $message = null)
  {
    
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is realpath
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function realpath($value, string $message = null)
  {
    return self::expect(!\realpath($value), $value, 'realpath', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is origin
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function origin($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is port
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function port($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is URL
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function url($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is host
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function host($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is json
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function json($value, string $message = null)
  {
    $data = \json_decode(self::valueToString($value), true);
    return self::expect(!\is_array($data), $value, 'json', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is root
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function root($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is xml
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function xml($value, string $message = null)
  {

  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is file
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function file($value, string $message = null)
  {
    return self::expect(!\is_file($value), $value, 'file', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is directory
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function directory($value, string $message = null)
  {
    return self::expect(!\is_dir($value), $value, 'directory', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is numeric
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function numeric($value, string $message = null)
  {
    return self::expect(!\is_numeric($value), $value, 'numeric', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is float
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function float($value, string $message = null)
  {
    return self::expect(!\is_float($value), $value, 'float', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is boolean
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function bool($value, string $message = null)
  {
    return self::expect(!\is_bool($value), $value, 'bool', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is object
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function object($value, string $message = null)
  {
    return self::expect(!\is_object($value), $value, 'object', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is array
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function array($value, string $message = null)
  {
    return self::expect(!\is_array($value), $value, 'array', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is null
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function null($value, string $message = null)
  {
    return self::expect(!\is_null($value), $value, 'null', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is iterable
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function iterable($value, string $message = null)
  {
    return self::expect(!\is_iterable($value), $value, 'iterable', $message);
  }

  /**
   * @param mixed $value    [required]
   *                        Find whether the type of a variable is callable
   * @param string $message [optional]
   * 
   * @throws
   * @return mixed
   */
  public static function callable($value, string $message = null)
  {
    return self::expect(!\is_callable($value), $value, 'callable', $message);
  }

  /**
   * @param string $method    [required]
   * @param array  $arguments [required]
   * 
   * @throws \Modassir\Assert\Exception\AssertationException
   * 
   * @return void|mixed
   */
  public static function __callStatic($method, $arguments)
  {
    $output = self::callIfFunctionExists('is_'.$method, $arguments) ??
      self::callIfFunctionExists($method, $arguments);
  }

  /**
   * 
   * @param string $message [required]
   * @throws \Modassir\Assert\Exception\AssertationException
   * @return void
   */
  protected static function throwAssert(string $message) : void
  {
    throw new AssertationException($message);
  }

  /**
   * Retrieves the source code of the function stored in current value.
   * This method uses reflection to obtain the filename and line numbers of the
   * function, reads the file, and extracts the relevant lines to return
   * the function's code as a string.
   * 
   * @param object $value [required]
   * @return string The source code of the function.
   */
  private static function fnToString($value)
  {
    $reflection = new \ReflectionFunction($value);
    $filename   = $reflection->getFileName();
    $startLine  = $reflection->getStartLine() - 1; // 0-based index
    $endLine    = $reflection->getEndLine();
    
    // File ka content padhein
    $lines = file($filename);
    
    // Function ke lines ko extract karein
    $functionCode = \implode("", array_slice($lines, $startLine, $endLine - $startLine));

    return $functionCode;
  }

  /**
   * 
   * @param mixed $value [required]
   * @return string
   */
  protected static function valueToString($value) : string
  {
    if (\is_callable($value) && \is_object($value)) {
      return self::fnToString($value);
    }

    return \is_array($value) ? \implode(',', $value) : (string) $value;
  }

  protected static function valueToType($value)
  {
    if (null === $value) {
      return 'null';
    }

    if (\is_array($value)) {
      return 'array';
    }

    if (true === $value) {
      return 'true';
    }

    if (false === $value) {
      return 'false';
    }

    if (\is_resource($value)) {
      return 'resource';
    }

    return self::valueToString($value);
  }

  /**
   * 
   * @param string $method    [required]
   * @param array  $arguments [required]
   * 
   * @throws \Modassir\Assert\Exception\AssertationException
   * 
   * @return void|mixed
   */
  private static function callIfFunctionExists(string $method, $arguments)
  {
    if (\is_callable($method)) {
      self::expect(!\call_user_func_array($method, $arguments), $arguments[0], $method);
      return $arguments[0];
    }
  }

  /**
   * 
   * @param bool   $condition [required]
   * @param mixed  $value     [required]
   * @param mixed  $expected  [required]
   * @param string $message   [optional]
   * 
   * @throws \Modassir\Assert\Exception\AssertationException
   * 
   * @return void|mixed
   */
  protected static function expect(bool $condition, $value, $expected, string $message = null)
  {
    if ($condition) {
      self::throwAssert($message ??
        \sprintf('Assert expected a value must be %s %s, Given: [%s]', $message ?? 'of type',
        self::valueToString($expected),
        self::valueToType($value))
      );
    }
    return $value;
  }
}
?>