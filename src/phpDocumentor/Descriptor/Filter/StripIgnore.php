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

namespace phpDocumentor\Descriptor\Filter;

use phpDocumentor\Descriptor\DescriptorAbstract;
use phpDocumentor\Descriptor\ProjectDescriptorBuilder;
use Zend\Filter\AbstractFilter;

/**
 * Strips any Descriptor if the ignore tag is present with that element.
 */
class StripIgnore extends AbstractFilter
{
    /** @var ProjectDescriptorBuilder $builder */
    protected $builder;

    /**
     * Initializes this filter with an instance of the builder to retrieve the latest ProjectDescriptor from.
     */
    public function __construct(ProjectDescriptorBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Filter Descriptor with ignore tags.
     *
     * @param DescriptorAbstract $value
     *
     * @return DescriptorAbstract|null
     */
    public function filter($value)
    {
        if ($value !== null && $value->getTags()->get('ignore')) {
            return null;
        }

        return $value;
    }
}
