<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Transformer\Event;

use phpDocumentor\Event\EventAbstract;
use phpDocumentor\Transformer\Writer\WriterAbstract;

class WriterInitializationEvent extends EventAbstract
{
    /** @var WriterAbstract */
    protected $writer;

    /**
     * Sets the currently parsed writer in this event.
     *
     * @param WriterAbstract $writer
     *
     * @return $this
     */
    public function setWriter($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    /**
     * Returns the event that is currently being parsed.
     *
     * @return WriterAbstract
     */
    public function getWriter()
    {
        return $this->writer;
    }
}
