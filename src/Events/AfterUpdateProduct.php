<?php
/**
 * This file is part of bigperson/exchange1c package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Alexnsk83\Exchange1C\Events;

use Alexnsk83\Exchange1C\Interfaces\ProductInterface;

class AfterUpdateProduct extends AbstractEventInterface
{
    const NAME = 'after.update.product';

    /**
     * @var ProductInterface
     */
    public $product;

    /**
     * BeforeUpdateProduct constructor.
     *
     * @param ProductInterface $product
     */
    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }
}
