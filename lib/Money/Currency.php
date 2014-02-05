<?php
/**
 * This file is part of the Money library
 *
 * Copyright (c) 2011-2013 Mathias Verraes
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Money;

class Currency
{
    /** @var string */
    private $name;
    
    /** @var array */
    private $map;
    
    /** @var string */
    private $symbol;
    
    /** @var int */
    private $decimals;
    
    /** @var float */
    private $rounding;

    /**
     * @param string $name
     * @throws UnknownCurrencyException
     */
    public function __construct($name)
    {   

        $json_data = file_get_contents(__DIR__.'/currencymap.json');
        $this->map = json_decode($json_data, true);                

        if (array_key_exists($name, $this->map)) 
        {
            $this->name = $name;
            $this->symbol = $this->map[$name]['symbol_native'];
            $this->decimals = $this->map[$name]['decimal_digits'];
            $this->rounding = $this->map[$name]['rounding'];            
        }
        else
        {
            throw new UnknownCurrencyException($name);
        }        
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Money\Currency $other
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
    public function getSymbol()
    {        
        return $this->symbol;
    }
    
    /**
     * @return int
     */
    public function getDecimals()
    {        
        return $this->decimals;
    }
    
    /**
     * @return float
     */
    public function getRounding()
    {        
        return $this->rounding;
    }
}
