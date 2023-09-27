<?php

class Zend_Db_Select extends \Laminas\Db\Sql\Select {
    
    public const DISTINCT       = 'distinct';
    public const FROM           = 'from';
    public const UNION          = 'union';
    public const LIMIT_COUNT    = 'limitcount';
    public const LIMIT_OFFSET   = 'limitoffset';
    public const FOR_UPDATE     = 'forupdate';

    public const INNER_JOIN     = 'inner join';
    public const LEFT_JOIN      = 'left join';
    public const RIGHT_JOIN     = 'right join';
    public const FULL_JOIN      = 'full join';
    public const CROSS_JOIN     = 'cross join';
    public const NATURAL_JOIN   = 'natural join';
    
    public const SQL_WILDCARD   = '*';
    public const SQL_SELECT     = 'SELECT';
    public const SQL_UNION      = 'UNION';
    public const SQL_UNION_ALL  = 'UNION ALL';
    public const SQL_FROM       = 'FROM';
    public const SQL_WHERE      = 'WHERE';
    public const SQL_DISTINCT   = 'DISTINCT';
    public const SQL_GROUP_BY   = 'GROUP BY';
    public const SQL_ORDER_BY   = 'ORDER BY';
    public const SQL_HAVING     = 'HAVING';
    public const SQL_FOR_UPDATE = 'FOR UPDATE';
    public const SQL_AND        = 'AND';
    public const SQL_AS         = 'AS';
    public const SQL_OR         = 'OR';
    public const SQL_ON         = 'ON';
    public const SQL_ASC        = 'ASC';
    public const SQL_DESC       = 'DESC';

}