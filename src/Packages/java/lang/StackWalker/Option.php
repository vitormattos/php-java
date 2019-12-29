<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\StackWalker;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\stack frame;

/**
 * The `Option` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class Option extends Enum // implements Serializable, stack frame
{
    // Retains Class object in StackFrames walked by this StackWalker.
    const RETAIN_CLASS_REFERENCE = 'RETAIN_CLASS_REFERENCE';

    // Shows all hidden frames.
    const SHOW_HIDDEN_FRAMES = 'SHOW_HIDDEN_FRAMES';

    // Shows all reflection frames.
    const SHOW_REFLECT_FRAMES = 'SHOW_REFLECT_FRAMES';

    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#values
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
