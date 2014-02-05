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
    
    /** @var float */
    private $multiplier;
    
     /** @var string */
    private $decimals;
    
     /** @var string */
    private $thousands;
    
     /** @var bool */
    private $symbolFirst;

    /**
     * @param string $name
     * @throws UnknownCurrencyException
     */
    public function __construct($name)
    {   

        $json_data = file_get_contents(__DIR__.'/currencymap.json');
        $this->map = json_decode($json_data, true);    
        
        
        $key = strtolower($name);

        if (array_key_exists($key, $this->map)) 
        {
            $this->name = $name;
            $this->symbol = $this->map[$key]['symbol'];
            $this->multiplier = $this->map[$key]['subunit_to_unit'];
            $this->decimals = $this->map[$key]['decimal_mark'];
            $this->thousands = $this->map[$key]['thousands_separator']; 
            $this->symbolFirst = $this->map[$key]['symbol_first'];
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
     * @return float
     */
    public function getMultiplier()
    {        
        return $this->multiplier;
    }
    
    /**
     * @return bool
     */
    public function hasSymbolFirst()
    {        
        return $this->symbolFirst;
    }
}
