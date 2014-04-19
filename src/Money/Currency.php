<?php
/**
 * This file is part of the Money library
 *
 * Copyright (c) 2011-2014 Mathias Verraes
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Money;

class Currency
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $symbol;

    /**
     * var string
     */
    private $decimals;

    /**
     * var string
     */
    private $thousands;

    /**
     * var bool
     */
    private $symbolFirst;

    /**
     * @param string $name
     * @throws UnknownCurrencyException
     */
    public function __construct($name)
    {
        if ($map = CurrencyMap::get($name)) {
            $this->name = $name;
            $this->symbol = $map['symbol'];
            $this->decimals = $map['decimal_mark'];
            $this->thousands = $map['thousands_separator'];
            $this->symbolFirst = $map['symbol_first'];
        } else {
            throw new UnknownCurrencyException($name);
        }
    }

    /**
     * @param Currency $other
     * @return bool
     */
    public function equals(Currency $other)
    {
        return $this->name === $other->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * @return string
     */
    public function getThousands()
    {
        return $this->thousands;
    }

    /**
     * @return bool
     */
    public function hasSymbolFirst()
    {
        return $this->symbolFirst;
    }
}
