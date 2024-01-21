-- Basic Statement
SELECT column1(, column2)
FROM table1(, table2)
WHERE condition

-- Conditions can be:
value = 1
value = "text"
value LIKE "t_xt%"
-- Wildcards in LIKE are "%" represents infinite amount of characters and "_" represents single character
value IN (newStatement)
value BETWEEN 10 and 20

-- Extra conditions
ORDER BY column1 (ASC (default)/DESC)
GROUP BY column1 -- When grouped COUNT() gives count per group
HAVING sum(column1) >= 100  -- Give a condition to a group

-- Use a join to connect two tables
SELECT table1
(INNER (default)/OUTER/RIGHT/LEFT) JOIN table2 ON table1.id = table2.id

-- Functies that return a single value:
COUNT() -- gives rowCount, add DISTINCT infront to remove duplicates
SUM() -- Adds all values 
MIN() -- Returns lowest value
MAX() -- Returns highest value
AVG() -- Gets the average of all values

-- Adding a row to the database
INSERT INTO table_name (column1, column1, ...)
VALUES ("col1Value", "col2Value", ...)

-- Changing some values in a database
UPDATE table_name
SET column1 = value
WHERE condition

-- Remove rows
DELETE FROM table_name WHERE condition

-- Some datatypes
VARCHAR(255)
INT()
TIMESTAMP()


-- Create a table:
CREATE TABLE table1 (
    column1 datatype,
    column2 datatype attribute(s),
    column3 datatype,
    CONSTRAINT PK_col1 PRIMARY KEY(column1) -- defines primary key adding behind datatype also works
    CONSTRAINT CHK_col2 CHECK (column2 >= 20) -- adds a restriction to values inserted into the database
    CONSTRAINT FK_col3_col2 FOREIGN KEY (column3) REFERENCES table2(column2) -- links a foreign key
)

-- Attributes can be
PRIMARY KEY
AUTO_INCREMENT
UNIQUE
NOT NULL
DEFAULT 'lorem'

-- Delete a table:
DROP TABLE table_name 

