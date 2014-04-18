<?php

namespace Money;

class CurrencyMap
{

    private static $map = array(
            'aed' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'AED',
                    'name' => 'United Arab Emirates Dirham',
                    'symbol' => 'د.إ',
                    'alternate_symbols' =>
                        array(
                            0 => 'DH',
                            1 => 'Dhs',
                        ),
                    'subunit' => 'Fils',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '784',
                ),
            'afn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'AFN',
                    'name' => 'Afghan Afghani',
                    'symbol' => '؋',
                    'alternate_symbols' =>
                        array(
                            0 => 'Af',
                            1 => 'Afs',
                        ),
                    'subunit' => 'Pul',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '971',
                ),
            'all' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ALL',
                    'name' => 'Albanian Lek',
                    'symbol' => 'L',
                    'alternate_symbols' =>
                        array(
                            0 => 'Lek',
                        ),
                    'subunit' => 'Qintar',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '008',
                ),
            'amd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'AMD',
                    'name' => 'Armenian Dram',
                    'symbol' => 'դր.',
                    'alternate_symbols' =>
                        array(
                            0 => 'dram',
                        ),
                    'subunit' => 'Luma',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '051',
                ),
            'ang' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ANG',
                    'name' => 'Netherlands Antillean Gulden',
                    'symbol' => 'ƒ',
                    'alternate_symbols' =>
                        array(
                            0 => 'NAƒ',
                            1 => 'NAf',
                            2 => 'f',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x0192;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '532',
                ),
            'aoa' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'AOA',
                    'name' => 'Angolan Kwanza',
                    'symbol' => 'Kz',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cêntimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '973',
                ),
            'ars' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ARS',
                    'name' => 'Argentine Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => '$m/n',
                            1 => 'm$n',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '032',
                ),
            'aud' =>
                array(
                    'priority' => 4,
                    'iso_code' => 'AUD',
                    'name' => 'Australian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'A$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '036',
                ),
            'awg' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'AWG',
                    'name' => 'Aruban Florin',
                    'symbol' => 'ƒ',
                    'alternate_symbols' =>
                        array(
                            0 => 'Afl',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x0192;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '533',
                ),
            'azn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'AZN',
                    'name' => 'Azerbaijani Manat',
                    'symbol' => NULL,
                    'alternate_symbols' =>
                        array(
                            0 => 'm',
                            1 => 'man',
                        ),
                    'subunit' => 'Qəpik',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '944',
                ),
            'bam' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BAM',
                    'name' => 'Bosnia and Herzegovina Convertible Mark',
                    'symbol' => 'КМ',
                    'alternate_symbols' =>
                        array(
                            0 => 'KM',
                        ),
                    'subunit' => 'Fening',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '977',
                ),
            'bbd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BBD',
                    'name' => 'Barbadian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'Bds$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '052',
                ),
            'bdt' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BDT',
                    'name' => 'Bangladeshi Taka',
                    'symbol' => '৳',
                    'alternate_symbols' =>
                        array(
                            0 => 'Tk',
                        ),
                    'subunit' => 'Paisa',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '050',
                ),
            'bgn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BGN',
                    'name' => 'Bulgarian Lev',
                    'symbol' => 'лв',
                    'alternate_symbols' =>
                        array(
                            0 => 'lev',
                            1 => 'leva',
                            2 => 'лев',
                            3 => 'лева',
                        ),
                    'subunit' => 'Stotinka',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '975',
                ),
            'bhd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BHD',
                    'name' => 'Bahraini Dinar',
                    'symbol' => 'ب.د',
                    'alternate_symbols' =>
                        array(
                            0 => 'BD',
                        ),
                    'subunit' => 'Fils',
                    'subunit_to_unit' => 1000,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '048',
                ),
            'bif' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BIF',
                    'name' => 'Burundian Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'FBu',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '108',
                ),
            'bmd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BMD',
                    'name' => 'Bermudian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'BD$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '060',
                ),
            'bnd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BND',
                    'name' => 'Brunei Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'B$',
                        ),
                    'subunit' => 'Sen',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '096',
                ),
            'bob' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BOB',
                    'name' => 'Bolivian Boliviano',
                    'symbol' => 'Bs.',
                    'alternate_symbols' =>
                        array(
                            0 => 'Bs',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '068',
                ),
            'brl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BRL',
                    'name' => 'Brazilian Real',
                    'symbol' => 'R$ ',
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => 'R$',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '986',
                ),
            'bsd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BSD',
                    'name' => 'Bahamian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'B$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '044',
                ),
            'btn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BTN',
                    'name' => 'Bhutanese Ngultrum',
                    'symbol' => 'Nu.',
                    'alternate_symbols' =>
                        array(
                            0 => 'Nu',
                        ),
                    'subunit' => 'Chertrum',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '064',
                ),
            'bwp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BWP',
                    'name' => 'Botswana Pula',
                    'symbol' => 'P',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Thebe',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '072',
                ),
            'byr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BYR',
                    'name' => 'Belarusian Ruble',
                    'symbol' => 'Br',
                    'alternate_symbols' =>
                        array(
                            0 => '',
                        ),
                    'subunit' => 'Kapyeyka',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '974',
                ),
            'bzd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BZD',
                    'name' => 'Belize Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'BZ$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '084',
                ),
            'cad' =>
                array(
                    'priority' => 5,
                    'iso_code' => 'CAD',
                    'name' => 'Canadian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'C$',
                            1 => 'CAD$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '124',
                ),
            'cdf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CDF',
                    'name' => 'Congolese Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'FC',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '976',
                ),
            'chf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CHF',
                    'name' => 'Swiss Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'SFr',
                            1 => 'CHF',
                        ),
                    'subunit' => 'Rappen',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '756',
                ),
            'clf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CLF',
                    'name' => 'Unidad de Fomento',
                    'symbol' => 'UF',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Peso',
                    'subunit_to_unit' => 1,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '990',
                ),
            'clp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CLP',
                    'name' => 'Chilean Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Peso',
                    'subunit_to_unit' => 1,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '152',
                ),
            'cny' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CNY',
                    'name' => 'Chinese Renminbi Yuan',
                    'symbol' => '¥',
                    'alternate_symbols' =>
                        array(
                            0 => 'CN¥',
                            1 => '元',
                            2 => 'CN元',
                        ),
                    'subunit' => 'Fen',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#20803;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '156',
                ),
            'cop' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'COP',
                    'name' => 'Colombian Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'COL$',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '170',
                ),
            'crc' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CRC',
                    'name' => 'Costa Rican Colón',
                    'symbol' => '₡',
                    'alternate_symbols' =>
                        array(
                            0 => '¢',
                        ),
                    'subunit' => 'Céntimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20A1;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '188',
                ),
            'cuc' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CUC',
                    'name' => 'Cuban Convertible Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'CUC$',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '931',
                ),
            'cup' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CUP',
                    'name' => 'Cuban Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => '$MN',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '192',
                ),
            'cve' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CVE',
                    'name' => 'Cape Verdean Escudo',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'Esc',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '132',
                ),
            'czk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'CZK',
                    'name' => 'Czech Koruna',
                    'symbol' => 'Kč',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Haléř',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '203',
                ),
            'djf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'DJF',
                    'name' => 'Djiboutian Franc',
                    'symbol' => 'Fdj',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '262',
                ),
            'dkk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'DKK',
                    'name' => 'Danish Krone',
                    'symbol' => 'kr',
                    'alternate_symbols' =>
                        array(
                            0 => ',-',
                        ),
                    'subunit' => 'Øre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '208',
                ),
            'dop' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'DOP',
                    'name' => 'Dominican Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'RD$',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '214',
                ),
            'dzd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'DZD',
                    'name' => 'Algerian Dinar',
                    'symbol' => 'د.ج',
                    'alternate_symbols' =>
                        array(
                            0 => 'DA',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '012',
                ),
            'egp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'EGP',
                    'name' => 'Egyptian Pound',
                    'symbol' => 'ج.م',
                    'alternate_symbols' =>
                        array(
                            0 => 'LE',
                            1 => 'E£',
                            2 => 'L.E.',
                        ),
                    'subunit' => 'Piastre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '818',
                ),
            'ern' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ERN',
                    'name' => 'Eritrean Nakfa',
                    'symbol' => 'Nfk',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '232',
                ),
            'etb' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ETB',
                    'name' => 'Ethiopian Birr',
                    'symbol' => 'Br',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Santim',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '230',
                ),
            'eur' =>
                array(
                    'priority' => 2,
                    'iso_code' => 'EUR',
                    'name' => 'Euro',
                    'symbol' => '€',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20AC;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '978',
                ),
            'fjd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'FJD',
                    'name' => 'Fijian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'FJ$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '242',
                ),
            'fkp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'FKP',
                    'name' => 'Falkland Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(
                            0 => 'FK£',
                        ),
                    'subunit' => 'Penny',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '238',
                ),
            'gbp' =>
                array(
                    'priority' => 3,
                    'iso_code' => 'GBP',
                    'name' => 'British Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Penny',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '826',
                ),
            'gel' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GEL',
                    'name' => 'Georgian Lari',
                    'symbol' => 'ლ',
                    'alternate_symbols' =>
                        array(
                            0 => 'lari',
                        ),
                    'subunit' => 'Tetri',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '981',
                ),
            'ghs' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GHS',
                    'name' => 'Ghanaian Cedi',
                    'symbol' => '₵',
                    'alternate_symbols' =>
                        array(
                            0 => 'GH¢',
                            1 => 'GH₵',
                        ),
                    'subunit' => 'Pesewa',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B5;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '936',
                ),
            'gip' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GIP',
                    'name' => 'Gibraltar Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Penny',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '292',
                ),
            'gmd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GMD',
                    'name' => 'Gambian Dalasi',
                    'symbol' => 'D',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Butut',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '270',
                ),
            'gnf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GNF',
                    'name' => 'Guinean Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'FG',
                            1 => 'GFr',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '324',
                ),
            'gtq' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GTQ',
                    'name' => 'Guatemalan Quetzal',
                    'symbol' => 'Q',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '320',
                ),
            'gyd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'GYD',
                    'name' => 'Guyanese Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'G$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '328',
                ),
            'hkd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'HKD',
                    'name' => 'Hong Kong Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'HK$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '344',
                ),
            'hnl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'HNL',
                    'name' => 'Honduran Lempira',
                    'symbol' => 'L',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '340',
                ),
            'hrk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'HRK',
                    'name' => 'Croatian Kuna',
                    'symbol' => 'kn',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Lipa',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '191',
                ),
            'htg' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'HTG',
                    'name' => 'Haitian Gourde',
                    'symbol' => 'G',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '332',
                ),
            'huf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'HUF',
                    'name' => 'Hungarian Forint',
                    'symbol' => 'Ft',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Fillér',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '348',
                ),
            'idr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'IDR',
                    'name' => 'Indonesian Rupiah',
                    'symbol' => 'Rp',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Sen',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '360',
                ),
            'ils' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ILS',
                    'name' => 'Israeli New Sheqel',
                    'symbol' => '₪',
                    'alternate_symbols' =>
                        array(
                            0 => 'ש״ח',
                            1 => 'NIS',
                        ),
                    'subunit' => 'Agora',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20AA;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '376',
                ),
            'inr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'INR',
                    'name' => 'Indian Rupee',
                    'symbol' => '₹',
                    'alternate_symbols' =>
                        array(
                            0 => 'Rs',
                            1 => '৳',
                            2 => '૱',
                            3 => '௹',
                            4 => 'रु',
                            5 => '₨',
                        ),
                    'subunit' => 'Paisa',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20b9;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '356',
                ),
            'iqd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'IQD',
                    'name' => 'Iraqi Dinar',
                    'symbol' => 'ع.د',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Fils',
                    'subunit_to_unit' => 1000,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '368',
                ),
            'irr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'IRR',
                    'name' => 'Iranian Rial',
                    'symbol' => '﷼',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Dinar',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#xFDFC;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '364',
                ),
            'isk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ISK',
                    'name' => 'Icelandic Króna',
                    'symbol' => 'kr',
                    'alternate_symbols' =>
                        array(
                            0 => 'Íkr',
                        ),
                    'subunit' => 'Eyrir',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '352',
                ),
            'jmd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'JMD',
                    'name' => 'Jamaican Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'J$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '388',
                ),
            'jod' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'JOD',
                    'name' => 'Jordanian Dinar',
                    'symbol' => 'د.ا',
                    'alternate_symbols' =>
                        array(
                            0 => 'JD',
                        ),
                    'subunit' => 'Piastre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '400',
                ),
            'jpy' =>
                array(
                    'priority' => 6,
                    'iso_code' => 'JPY',
                    'name' => 'Japanese Yen',
                    'symbol' => '¥',
                    'alternate_symbols' =>
                        array(
                            0 => '円',
                            1 => '圓',
                        ),
                    'subunit' => NULL,
                    'subunit_to_unit' => 1,
                    'symbol_first' => true,
                    'html_entity' => '&#x00A5;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '392',
                ),
            'kes' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KES',
                    'name' => 'Kenyan Shilling',
                    'symbol' => 'KSh',
                    'alternate_symbols' =>
                        array(
                            0 => 'Sh',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '404',
                ),
            'kgs' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KGS',
                    'name' => 'Kyrgyzstani Som',
                    'symbol' => 'som',
                    'alternate_symbols' =>
                        array(
                            0 => 'сом',
                        ),
                    'subunit' => 'Tyiyn',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '417',
                ),
            'khr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KHR',
                    'name' => 'Cambodian Riel',
                    'symbol' => '៛',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Sen',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x17DB;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '116',
                ),
            'kmf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KMF',
                    'name' => 'Comorian Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'CF',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '174',
                ),
            'kpw' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KPW',
                    'name' => 'North Korean Won',
                    'symbol' => '₩',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Chŏn',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x20A9;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '408',
                ),
            'krw' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KRW',
                    'name' => 'South Korean Won',
                    'symbol' => '₩',
                    'subunit' => NULL,
                    'subunit_to_unit' => 1,
                    'alternate_symbols' =>
                        array(),
                    'symbol_first' => true,
                    'html_entity' => '&#x20A9;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '410',
                ),
            'kwd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KWD',
                    'name' => 'Kuwaiti Dinar',
                    'symbol' => 'د.ك',
                    'alternate_symbols' =>
                        array(
                            0 => 'K.D.',
                        ),
                    'subunit' => 'Fils',
                    'subunit_to_unit' => 1000,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '414',
                ),
            'kyd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KYD',
                    'name' => 'Cayman Islands Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'CI$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '136',
                ),
            'kzt' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'KZT',
                    'name' => 'Kazakhstani Tenge',
                    'symbol' => '〒',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Tiyn',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '398',
                ),
            'lak' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LAK',
                    'name' => 'Lao Kip',
                    'symbol' => '₭',
                    'alternate_symbols' =>
                        array(
                            0 => '₭N',
                        ),
                    'subunit' => 'Att',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x20AD;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '418',
                ),
            'lbp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LBP',
                    'name' => 'Lebanese Pound',
                    'symbol' => 'ل.ل',
                    'alternate_symbols' =>
                        array(
                            0 => '£',
                            1 => 'L£',
                        ),
                    'subunit' => 'Piastre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '422',
                ),
            'lkr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LKR',
                    'name' => 'Sri Lankan Rupee',
                    'symbol' => '₨',
                    'alternate_symbols' =>
                        array(
                            0 => 'රු',
                            1 => 'ரூ',
                            2 => 'SLRs',
                            3 => '/-',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x0BF9;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '144',
                ),
            'lrd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LRD',
                    'name' => 'Liberian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'L$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '430',
                ),
            'lsl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LSL',
                    'name' => 'Lesotho Loti',
                    'symbol' => 'L',
                    'alternate_symbols' =>
                        array(
                            0 => 'M',
                        ),
                    'subunit' => 'Sente',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '426',
                ),
            'ltl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LTL',
                    'name' => 'Lithuanian Litas',
                    'symbol' => 'Lt',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centas',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '440',
                ),
            'lvl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LVL',
                    'name' => 'Latvian Lats',
                    'symbol' => 'Ls',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Santīms',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '428',
                ),
            'lyd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'LYD',
                    'name' => 'Libyan Dinar',
                    'symbol' => 'ل.د',
                    'alternate_symbols' =>
                        array(
                            0 => 'LD',
                        ),
                    'subunit' => 'Dirham',
                    'subunit_to_unit' => 1000,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '434',
                ),
            'mad' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MAD',
                    'name' => 'Moroccan Dirham',
                    'symbol' => 'د.م.',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '504',
                ),
            'mdl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MDL',
                    'name' => 'Moldovan Leu',
                    'symbol' => 'L',
                    'alternate_symbols' =>
                        array(
                            0 => 'lei',
                        ),
                    'subunit' => 'Ban',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '498',
                ),
            'mga' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MGA',
                    'name' => 'Malagasy Ariary',
                    'symbol' => 'Ar',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Iraimbilanja',
                    'subunit_to_unit' => 5,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '969',
                ),
            'mkd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MKD',
                    'name' => 'Macedonian Denar',
                    'symbol' => 'ден',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Deni',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '807',
                ),
            'mmk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MMK',
                    'name' => 'Myanmar Kyat',
                    'symbol' => 'K',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Pya',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '104',
                ),
            'mnt' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MNT',
                    'name' => 'Mongolian Tögrög',
                    'symbol' => '₮',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Möngö',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x20AE;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '496',
                ),
            'mop' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MOP',
                    'name' => 'Macanese Pataca',
                    'symbol' => 'P',
                    'alternate_symbols' =>
                        array(
                            0 => 'MOP$',
                        ),
                    'subunit' => 'Avo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '446',
                ),
            'mro' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MRO',
                    'name' => 'Mauritanian Ouguiya',
                    'symbol' => 'UM',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Khoums',
                    'subunit_to_unit' => 5,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '478',
                ),
            'mur' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MUR',
                    'name' => 'Mauritian Rupee',
                    'symbol' => '₨',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20A8;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '480',
                ),
            'mvr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MVR',
                    'name' => 'Maldivian Rufiyaa',
                    'symbol' => 'MVR',
                    'alternate_symbols' =>
                        array(
                            0 => 'MRF',
                            1 => 'Rf',
                            2 => '/-',
                            3 => 'ރ',
                        ),
                    'subunit' => 'Laari',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '462',
                ),
            'mwk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MWK',
                    'name' => 'Malawian Kwacha',
                    'symbol' => 'MK',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Tambala',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '454',
                ),
            'mxn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MXN',
                    'name' => 'Mexican Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'MEX$',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '484',
                ),
            'myr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MYR',
                    'name' => 'Malaysian Ringgit',
                    'symbol' => 'RM',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Sen',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '458',
                ),
            'mzn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'MZN',
                    'name' => 'Mozambican Metical',
                    'symbol' => 'MTn',
                    'alternate_symbols' =>
                        array(
                            0 => 'MZN',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '943',
                ),
            'nad' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'NAD',
                    'name' => 'Namibian Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'N$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '516',
                ),
            'ngn' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'NGN',
                    'name' => 'Nigerian Naira',
                    'symbol' => '₦',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Kobo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x20A6;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '566',
                ),
            'nio' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'NIO',
                    'name' => 'Nicaraguan Córdoba',
                    'symbol' => 'C$',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '558',
                ),
            'nok' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'NOK',
                    'name' => 'Norwegian Krone',
                    'symbol' => 'kr',
                    'alternate_symbols' =>
                        array(
                            0 => ',-',
                        ),
                    'subunit' => 'Øre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => 'kr',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '578',
                ),
            'npr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'NPR',
                    'name' => 'Nepalese Rupee',
                    'symbol' => '₨',
                    'alternate_symbols' =>
                        array(
                            0 => 'Rs',
                            1 => 'रू',
                        ),
                    'subunit' => 'Paisa',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20A8;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '524',
                ),
            'nzd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'NZD',
                    'name' => 'New Zealand Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'NZ$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '554',
                ),
            'omr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'OMR',
                    'name' => 'Omani Rial',
                    'symbol' => 'ر.ع.',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Baisa',
                    'subunit_to_unit' => 1000,
                    'symbol_first' => true,
                    'html_entity' => '&#xFDFC;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '512',
                ),
            'pab' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PAB',
                    'name' => 'Panamanian Balboa',
                    'symbol' => 'B/.',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Centésimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '590',
                ),
            'pen' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PEN',
                    'name' => 'Peruvian Nuevo Sol',
                    'symbol' => 'S/.',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Céntimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => 'S/.',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '604',
                ),
            'pgk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PGK',
                    'name' => 'Papua New Guinean Kina',
                    'symbol' => 'K',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Toea',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '598',
                ),
            'php' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PHP',
                    'name' => 'Philippine Peso',
                    'symbol' => '₱',
                    'alternate_symbols' =>
                        array(
                            0 => 'PHP',
                            1 => 'PhP',
                            2 => 'P',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '608',
                ),
            'pkr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PKR',
                    'name' => 'Pakistani Rupee',
                    'symbol' => '₨',
                    'alternate_symbols' =>
                        array(
                            0 => 'Rs',
                        ),
                    'subunit' => 'Paisa',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20A8;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '586',
                ),
            'pln' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PLN',
                    'name' => 'Polish Złoty',
                    'symbol' => 'zł',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Grosz',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => 'z&#322;',
                    'decimal_mark' => ',',
                    'thousands_separator' => ' ',
                    'iso_numeric' => '985',
                ),
            'pyg' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'PYG',
                    'name' => 'Paraguayan Guaraní',
                    'symbol' => '₲',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Céntimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B2;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '600',
                ),
            'qar' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'QAR',
                    'name' => 'Qatari Riyal',
                    'symbol' => 'ر.ق',
                    'alternate_symbols' =>
                        array(
                            0 => 'QR',
                        ),
                    'subunit' => 'Dirham',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#xFDFC;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '634',
                ),
            'ron' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'RON',
                    'name' => 'Romanian Leu',
                    'symbol' => 'Lei',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Bani',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '946',
                ),
            'rsd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'RSD',
                    'name' => 'Serbian Dinar',
                    'symbol' => 'РСД',
                    'alternate_symbols' =>
                        array(
                            0 => 'RSD',
                            1 => 'din',
                            2 => 'дин',
                        ),
                    'subunit' => 'Para',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '941',
                ),
            'rub' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'RUB',
                    'name' => 'Russian Ruble',
                    'symbol' => 'р.',
                    'alternate_symbols' =>
                        array(
                            0 => 'руб',
                        ),
                    'subunit' => 'Kopek',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x0440;&#x0443;&#x0431;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '643',
                ),
            'rwf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'RWF',
                    'name' => 'Rwandan Franc',
                    'symbol' => 'FRw',
                    'alternate_symbols' =>
                        array(
                            0 => 'RF',
                            1 => 'R₣',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '646',
                ),
            'sar' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SAR',
                    'name' => 'Saudi Riyal',
                    'symbol' => 'ر.س',
                    'alternate_symbols' =>
                        array(
                            0 => 'SR',
                            1 => '﷼',
                        ),
                    'subunit' => 'Hallallah',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#xFDFC;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '682',
                ),
            'sbd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SBD',
                    'name' => 'Solomon Islands Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'SI$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '090',
                ),
            'scr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SCR',
                    'name' => 'Seychellois Rupee',
                    'symbol' => '₨',
                    'alternate_symbols' =>
                        array(
                            0 => 'SRe',
                            1 => 'SR',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x20A8;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '690',
                ),
            'sdg' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SDG',
                    'name' => 'Sudanese Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Piastre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '938',
                ),
            'sek' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SEK',
                    'name' => 'Swedish Krona',
                    'symbol' => 'kr',
                    'alternate_symbols' =>
                        array(
                            0 => ':-',
                        ),
                    'subunit' => 'Öre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => ' ',
                    'iso_numeric' => '752',
                ),
            'sgd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SGD',
                    'name' => 'Singapore Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'S$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '702',
                ),
            'shp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SHP',
                    'name' => 'Saint Helenian Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Penny',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '654',
                ),
            'skk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SKK',
                    'name' => 'Slovak Koruna',
                    'symbol' => 'Sk',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Halier',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '703',
                ),
            'sll' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SLL',
                    'name' => 'Sierra Leonean Leone',
                    'symbol' => 'Le',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '694',
                ),
            'sos' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SOS',
                    'name' => 'Somali Shilling',
                    'symbol' => 'Sh',
                    'alternate_symbols' =>
                        array(
                            0 => 'Sh.So',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '706',
                ),
            'srd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SRD',
                    'name' => 'Surinamese Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '968',
                ),
            'ssp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SHP',
                    'name' => 'South Sudanese Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'piaster',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '728',
                ),
            'std' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'STD',
                    'name' => 'São Tomé and Príncipe Dobra',
                    'symbol' => 'Db',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cêntimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '678',
                ),
            'svc' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SVC',
                    'name' => 'Salvadoran Colón',
                    'symbol' => '₡',
                    'alternate_symbols' =>
                        array(
                            0 => '¢',
                        ),
                    'subunit' => 'Centavo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20A1;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '222',
                ),
            'syp' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SYP',
                    'name' => 'Syrian Pound',
                    'symbol' => '£S',
                    'alternate_symbols' =>
                        array(
                            0 => '£',
                            1 => 'ل.س',
                            2 => 'LS',
                            3 => 'الليرة السورية',
                        ),
                    'subunit' => 'Piastre',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '760',
                ),
            'szl' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'SZL',
                    'name' => 'Swazi Lilangeni',
                    'symbol' => 'L',
                    'alternate_symbols' =>
                        array(
                            0 => 'E',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '748',
                ),
            'thb' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'THB',
                    'name' => 'Thai Baht',
                    'symbol' => '฿',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Satang',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x0E3F;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '764',
                ),
            'tjs' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TJS',
                    'name' => 'Tajikistani Somoni',
                    'symbol' => 'ЅМ',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Diram',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '972',
                ),
            'tmt' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TMM',
                    'name' => 'Turkmenistani Manat',
                    'symbol' => 'm',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Tennesi',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '934',
                ),
            'tnd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TND',
                    'name' => 'Tunisian Dinar',
                    'symbol' => 'د.ت',
                    'alternate_symbols' =>
                        array(
                            0 => 'TD',
                            1 => 'DT',
                        ),
                    'subunit' => 'Millime',
                    'subunit_to_unit' => 1000,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '788',
                ),
            'top' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TOP',
                    'name' => 'Tongan Paʻanga',
                    'symbol' => 'T$',
                    'alternate_symbols' =>
                        array(
                            0 => 'PT',
                        ),
                    'subunit' => 'Seniti',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '776',
                ),
            'try' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TRY',
                    'name' => 'Turkish Lira',
                    'symbol' => 'TL',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'kuruş',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '949',
                ),
            'ttd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TTD',
                    'name' => 'Trinidad and Tobago Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'TT$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '780',
                ),
            'twd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TWD',
                    'name' => 'New Taiwan Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'NT$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '901',
                ),
            'tzs' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'TZS',
                    'name' => 'Tanzanian Shilling',
                    'symbol' => 'Sh',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '834',
                ),
            'uah' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'UAH',
                    'name' => 'Ukrainian Hryvnia',
                    'symbol' => '₴',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Kopiyka',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#x20B4',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '980',
                ),
            'ugx' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'UGX',
                    'name' => 'Ugandan Shilling',
                    'symbol' => 'USh',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '800',
                ),
            'usd' =>
                array(
                    'priority' => 1,
                    'iso_code' => 'USD',
                    'name' => 'United States Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'US$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '840',
                ),
            'uyu' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'UYU',
                    'name' => 'Uruguayan Peso',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => '$U',
                        ),
                    'subunit' => 'Centésimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x20B1;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '858',
                ),
            'uzs' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'UZS',
                    'name' => 'Uzbekistani Som',
                    'symbol' => NULL,
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Tiyin',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '860',
                ),
            'vef' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'VEF',
                    'name' => 'Venezuelan Bolívar',
                    'symbol' => 'Bs F',
                    'alternate_symbols' =>
                        array(
                            0 => 'Bs.F',
                            1 => 'Bs',
                        ),
                    'subunit' => 'Céntimo',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '937',
                ),
            'vnd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'VND',
                    'name' => 'Vietnamese Đồng',
                    'symbol' => '₫',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Hào',
                    'subunit_to_unit' => 10,
                    'symbol_first' => true,
                    'html_entity' => '&#x20AB;',
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'iso_numeric' => '704',
                ),
            'vuv' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'VUV',
                    'name' => 'Vanuatu Vatu',
                    'symbol' => 'Vt',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => NULL,
                    'subunit_to_unit' => 1,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '548',
                ),
            'wst' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'WST',
                    'name' => 'Samoan Tala',
                    'symbol' => 'T',
                    'alternate_symbols' =>
                        array(
                            0 => 'WS$',
                            1 => 'SAT',
                            2 => 'ST',
                        ),
                    'subunit' => 'Sene',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '882',
                ),
            'xaf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XAF',
                    'name' => 'Central African Cfa Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'FCFA',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '950',
                ),
            'xag' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XAG',
                    'name' => 'Silver (Troy Ounce)',
                    'symbol' => 'oz t',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'oz',
                    'subunit_to_unit' => 1,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '961',
                ),
            'xau' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XAU',
                    'name' => 'Gold (Troy Ounce)',
                    'symbol' => 'oz t',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'oz',
                    'subunit_to_unit' => 1,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '959',
                ),
            'xcd' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XCD',
                    'name' => 'East Caribbean Dollar',
                    'symbol' => '$',
                    'alternate_symbols' =>
                        array(
                            0 => 'EC$',
                        ),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '951',
                ),
            'xdr' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XDR',
                    'name' => 'Special Drawing Rights',
                    'symbol' => 'SDR',
                    'alternate_symbols' =>
                        array(
                            0 => 'XDR',
                        ),
                    'subunit' => '',
                    'subunit_to_unit' => 1,
                    'symbol_first' => false,
                    'html_entity' => '$',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '960',
                ),
            'xof' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XOF',
                    'name' => 'West African Cfa Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'CFA',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '952',
                ),
            'xpf' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'XPF',
                    'name' => 'Cfp Franc',
                    'symbol' => 'Fr',
                    'alternate_symbols' =>
                        array(
                            0 => 'F',
                        ),
                    'subunit' => 'Centime',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '953',
                ),
            'yer' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'YER',
                    'name' => 'Yemeni Rial',
                    'symbol' => '﷼',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Fils',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '&#xFDFC;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '886',
                ),
            'zar' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ZAR',
                    'name' => 'South African Rand',
                    'symbol' => 'R',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Cent',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x0052;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '710',
                ),
            'zmk' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ZMK',
                    'name' => 'Zambian Kwacha',
                    'symbol' => 'ZK',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Ngwee',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '894',
                ),
            'zmw' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'ZMW',
                    'name' => 'Zambian Kwacha',
                    'symbol' => 'ZK',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Ngwee',
                    'subunit_to_unit' => 100,
                    'symbol_first' => false,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '967',
                ),
            'btc' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'BTC',
                    'name' => 'Bitcoin',
                    'symbol' => 'B⃦',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Satoshi',
                    'subunit_to_unit' => 100000000,
                    'symbol_first' => true,
                    'html_entity' => '',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '',
                ),
            'jep' =>
                array(
                    'priority' => 100,
                    'iso_code' => 'JEP',
                    'name' => 'Jersey Pound',
                    'symbol' => '£',
                    'alternate_symbols' =>
                        array(),
                    'subunit' => 'Penny',
                    'subunit_to_unit' => 100,
                    'symbol_first' => true,
                    'html_entity' => '&#x00A3;',
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'iso_numeric' => '',
                )
        );

    public static function get($name)
    {
        $key = strtolower($name);
        if(array_key_exists($key, self::$map)) {
            return self::$map[$key];
        }
        return null;
    }
} 